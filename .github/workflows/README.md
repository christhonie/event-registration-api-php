# GitFlow Operation

## Trigger

This workflow is triggered manually (`workflow_dispatch`) or via a repository dispatch event (`repository_dispatch`) sent by an upstream project. 
The `inputs.upstream_spec_url` parameter allows dynamic input for the URL of the OpenAPI spec.

## Download OpenAPI Specification

The curl command retrieves the OpenAPI spec from the upstream URL and saves it locally as `openapi.yaml`.

## Clear Old Files

The find command removes all files except critical ones like pom.xml and the .github directory.

## Run OpenAPI Generator

The Maven command generates a PHP client into the root project directory.

## Commit and Push

Changes are committed and pushed back to the repository's main branch using the GitHub-provided token (`secrets.GITHUB_TOKEN`).