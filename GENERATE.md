# How to generate this project

The PHP source code in this project is auto-generated from an OpenAPI specification using [Swagger CodeGen](https://swagger.io/tools/swagger-codegen/). 

## Benefits of using OpenAPI

Using the OpenAPI (Swagger) Specification provide several benefits when designing APIs that need to be consumed by multiple client programming languages. 

- Consistency and Interoperability: By adhering to the OpenAPI Specification, developers can ensure consistency and interoperability across different API implementations. The structured format defined by OpenAPI allows endpoints, data models, security requirements, and other aspects of the API to be described comprehensively and in a way which can be consumed by software tools automatically.
- Improved Testing and Validation: With an OpenAPI specification, API endpoints and payloads can be validated more effectively. Tools like Swagger Editor allow writing and validating specification in YAML or JSON format. Automated testing tools can also use the specification to verify that the API behaves as expected, reducing the risk of bugs and inconsistencies.
- Developer Productivity:  OpenAPI simplifies the process of designing, documenting, and maintaining APIs. Developers can focus on writing business logic rather than dealing with low-level details. The availability of tools like Swagger UI allows developers to explore and test the API interactively, making it easier to understand how to use the endpoints and their parameters1.

## Configuration

This project is configured to generate only a subset of the APIs and DTOs based on what would be needed by client PHP applications. If required, make the necesary changes in the `pom.xml` file. In particular, locate the `openapi-generator-maven-plugin` item in the `<build> <plugins>` section. Edit `<apisToGenerate>` and `<modelsToGenerate>` to configure the desired output.

Most DTOs consist out of other DTOs as a dependency. Ensure that all depended DTOs are genertated too!

## Preconditions

To run the generator, a Java JDK has to be installed. This can be downloaded online from many sources, such as the OpenJDK website.

## Generate

To run the generator, simply run the Maven command:

```
mvnw
```

The commmand will, by default, run the `generate-sources` goal, which will provide an updated version of the API source code.

## Check-in

Once a new version is generated, check the code into Git.