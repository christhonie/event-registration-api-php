#!/usr/bin/env python3
r"""Fail if <modelsToGenerate> is not closed under $ref, or if a listed model was not emitted.

Why this exists
---------------
openapi-generator honours <modelsToGenerate> literally. If a generated model $refs a
model that is not on the list, the generator still writes the reference — as a type in
openAPITypes(), a @param docblock, and a setter type hint — but never writes the class.
Nothing fails: not the generator, not `composer install`, not `php -l`, not autoloading.

The omission only surfaces at runtime, and only once a payload actually carries that
field, because ObjectSerializer::deserialize() resolves the class lazily:

    $instance->$propertySetter(self::deserialize($propertyValue, $type, null));

That is ADO Bug #918. `ParticipantOrderDTO.buyer` referenced `PersonNameDTO`, which was
never generated. Every participant order sync PATCHed successfully, admin-service returned
200, and then the client threw `Class "Idealogic\RegistrationAPI\Model\PersonNameDTO" not
found` while reading the reply — so a succeeding call was reported to the operator as
"Admin order ID ... may not exist". It went unnoticed in production for months.

Two independent checks, because they catch different mistakes:

  closure  — every model transitively reachable via $ref from a listed model is listed.
             Catches "someone added a field to the spec and the client silently lost a class".
  emitted  — every listed model has a corresponding lib/Model/<name>.php on disk.
             Catches typos in the list and models the generator declined to emit.

Usage:
    python3 scripts/check-model-closure.py [--spec openapi.json] [--pom pom.xml]
                                           [--model-dir lib/Model] [--fix]

--fix rewrites <modelsToGenerate> in the pom with the full closure and exits non-zero,
so it can never be mistaken for a passing run.

Exit status: 0 = both checks pass, 1 = a check failed, 2 = could not run the checks.
"""

from __future__ import annotations

import argparse
import json
import re
import sys
from pathlib import Path

SCHEMA_PREFIX = "#/components/schemas/"


def collect_refs(node, out: set[str]) -> None:
    """Add every #/components/schemas/<name> referenced anywhere under `node`."""
    if isinstance(node, dict):
        ref = node.get("$ref")
        if isinstance(ref, str) and ref.startswith(SCHEMA_PREFIX):
            out.add(ref[len(SCHEMA_PREFIX):])
        for value in node.values():
            collect_refs(value, out)
    elif isinstance(node, list):
        for value in node:
            collect_refs(value, out)


def read_listed_models(pom_text: str) -> list[str]:
    match = re.search(r"<modelsToGenerate>(.*?)</modelsToGenerate>", pom_text, re.S)
    if not match:
        raise SystemExit("could not find <modelsToGenerate> in the pom")
    return [m.strip() for m in match.group(1).split(",") if m.strip()]


def closure_of(seeds: list[str], schemas: dict) -> set[str]:
    seen: set[str] = set()
    queue = list(seeds)
    while queue:
        model = queue.pop()
        if model in seen:
            continue
        seen.add(model)
        schema = schemas.get(model)
        if schema is None:
            continue
        refs: set[str] = set()
        collect_refs(schema, refs)
        queue.extend(refs - seen)
    return seen


def main() -> int:
    parser = argparse.ArgumentParser()
    parser.add_argument("--spec", default="openapi.json")
    parser.add_argument("--pom", default="pom.xml")
    parser.add_argument("--model-dir", default="lib/Model")
    parser.add_argument("--fix", action="store_true")
    args = parser.parse_args()

    spec_path, pom_path = Path(args.spec), Path(args.pom)
    for path in (spec_path, pom_path):
        if not path.is_file():
            print(f"ERROR: {path} not found", file=sys.stderr)
            return 2

    schemas = json.loads(spec_path.read_text()).get("components", {}).get("schemas", {})
    if not schemas:
        print("ERROR: spec has no components.schemas", file=sys.stderr)
        return 2

    pom_text = pom_path.read_text()
    listed = read_listed_models(pom_text)
    failed = False

    # 1. Unknown models: listed but absent from the spec (typo, or removed upstream).
    unknown = [m for m in listed if m not in schemas]
    if unknown:
        failed = True
        print(f"FAIL: {len(unknown)} listed model(s) do not exist in {spec_path}:")
        for model in unknown:
            print(f"  - {model}")

    # 2. Closure: everything reachable by $ref must itself be listed.
    required = closure_of(listed, schemas)
    missing = sorted(required - set(listed))
    if missing:
        failed = True
        print(f"FAIL: <modelsToGenerate> is not closed under $ref — {len(missing)} missing:")
        for model in missing:
            users = sorted(
                u for u in listed
                if u in schemas and model in (lambda s: (collect_refs(schemas[u], s), s)[1])(set())
            )
            via = ", ".join(users) if users else "(only via another missing model)"
            print(f"  - {model:<34} referenced by: {via}")
        print("\nEach one would throw `Class \"...\\Model\\<name>\" not found` at runtime, and only")
        print("once a payload actually carries that field. Add them (or run with --fix).")

    # 3. Emission: every listed model must have produced a PHP class.
    model_dir = Path(args.model_dir)
    if model_dir.is_dir():
        not_emitted = sorted(m for m in listed if not (model_dir / f"{m}.php").is_file())
        if not_emitted:
            failed = True
            print(f"\nFAIL: {len(not_emitted)} listed model(s) have no file in {model_dir}:")
            for model in not_emitted:
                print(f"  - {model}.php")
    else:
        print(f"NOTE: {model_dir} not present — skipping the emitted-class check "
              f"(run this after generation to include it).")

    if args.fix and missing:
        full = listed + missing
        indent = "\t" * 6
        pom_path.write_text(
            re.sub(
                r"(<modelsToGenerate>)(.*?)(</modelsToGenerate>)",
                lambda _: f"<modelsToGenerate>\n{indent}{','.join(full)}\n{indent[:-1]}</modelsToGenerate>",
                pom_text,
                flags=re.S,
            )
        )
        print(f"\n--fix: rewrote <modelsToGenerate> with the full closure ({len(full)} models).")
        print("Re-run the generator, then re-run this check.")
        return 1

    if failed:
        return 1

    print(f"OK: {len(listed)} models listed, closed under $ref"
          + (f", all present in {model_dir}" if model_dir.is_dir() else "") + ".")
    return 0


if __name__ == "__main__":
    sys.exit(main())
