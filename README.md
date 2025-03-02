# EventRegistrationClient

Adminstrative services for managing events and members

For more information, please visit [http://www.idealogic.co.za](http://www.idealogic.co.za).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/EventRegistrationClient/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: apiKey
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure Bearer (JWT) authorization: jwt
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Idealogic\RegistrationAPI\Api\MembershipResourceExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membership_add_request_dto = new \Idealogic\RegistrationAPI\Model\MembershipAddRequestDTO(); // \Idealogic\RegistrationAPI\Model\MembershipAddRequestDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->addMembership($membership_add_request_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceExApi->addMembership: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://admin-service-dev.idealogic.co.za*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*MembershipResourceExApi* | [**addMembership**](docs/Api/MembershipResourceExApi.md#addmembership) | **POST** /api/memberships/add | 
*MembershipResourceExApi* | [**enrolMemberships**](docs/Api/MembershipResourceExApi.md#enrolmemberships) | **POST** /api/memberships/enrol | 
*MembershipResourceExApi* | [**getLinkedMembers**](docs/Api/MembershipResourceExApi.md#getlinkedmembers) | **GET** /api/memberships/linkedStatus/{externalUserId} | 
*MembershipResourceExApi* | [**getMemberStatusByLatestPeriodForMembershipType**](docs/Api/MembershipResourceExApi.md#getmemberstatusbylatestperiodformembershiptype) | **GET** /api/memberships/status/latestPeriod | 
*MembershipResourceExApi* | [**getMembershipAttachment**](docs/Api/MembershipResourceExApi.md#getmembershipattachment) | **GET** /api/memberships/attachment/{uuid} | 
*MembershipResourceExApi* | [**importMembership**](docs/Api/MembershipResourceExApi.md#importmembership) | **PUT** /api/memberships/import | 
*MembershipResourceExApi* | [**updateMembershipOrder**](docs/Api/MembershipResourceExApi.md#updatemembershiporder) | **POST** /api/memberships/order | 
*OrderResourceExApi* | [**getParticipantOrder**](docs/Api/OrderResourceExApi.md#getparticipantorder) | **GET** /api/orders/create-cart/participants/{id} | 
*OrderResourceExApi* | [**patchParticipantOrder**](docs/Api/OrderResourceExApi.md#patchparticipantorder) | **PATCH** /api/orders/participant/{id} | 
*OrderResourceExApi* | [**updateParticipantOrder**](docs/Api/OrderResourceExApi.md#updateparticipantorder) | **PUT** /api/orders/participant/{id} | 
*OrganisationResourceApi* | [**createOrganisation**](docs/Api/OrganisationResourceApi.md#createorganisation) | **POST** /api/organisations | 
*OrganisationResourceApi* | [**deleteOrganisation**](docs/Api/OrganisationResourceApi.md#deleteorganisation) | **DELETE** /api/organisations/{id} | 
*OrganisationResourceApi* | [**getAllOrganisations**](docs/Api/OrganisationResourceApi.md#getallorganisations) | **GET** /api/organisations | 
*OrganisationResourceApi* | [**getOrganisation**](docs/Api/OrganisationResourceApi.md#getorganisation) | **GET** /api/organisations/{id} | 
*OrganisationResourceApi* | [**partialUpdateOrganisation**](docs/Api/OrganisationResourceApi.md#partialupdateorganisation) | **PATCH** /api/organisations/{id} | 
*OrganisationResourceApi* | [**updateOrganisation**](docs/Api/OrganisationResourceApi.md#updateorganisation) | **PUT** /api/organisations/{id} | 
*PersonResourceApi* | [**createPerson**](docs/Api/PersonResourceApi.md#createperson) | **POST** /api/people | 
*PersonResourceApi* | [**deletePerson**](docs/Api/PersonResourceApi.md#deleteperson) | **DELETE** /api/people/{id} | 
*PersonResourceApi* | [**findByID**](docs/Api/PersonResourceApi.md#findbyid) | **GET** /api/people/findById | 
*PersonResourceApi* | [**findByIdDetails**](docs/Api/PersonResourceApi.md#findbyiddetails) | **POST** /api/people/idsearch | 
*PersonResourceApi* | [**findByUserKeyOrCreate**](docs/Api/PersonResourceApi.md#findbyuserkeyorcreate) | **GET** /api/people/findByUserKeyOrCreate | 
*PersonResourceApi* | [**getAllLinkedOrgUsersByPrincipal**](docs/Api/PersonResourceApi.md#getalllinkedorgusersbyprincipal) | **GET** /api/people/linked-to-principal | 
*PersonResourceApi* | [**getAllPeople**](docs/Api/PersonResourceApi.md#getallpeople) | **GET** /api/people | 
*PersonResourceApi* | [**getPerson**](docs/Api/PersonResourceApi.md#getperson) | **GET** /api/people/{id} | 
*PersonResourceApi* | [**match**](docs/Api/PersonResourceApi.md#match) | **GET** /api/people/match | 
*PersonResourceApi* | [**partialUpdatePerson**](docs/Api/PersonResourceApi.md#partialupdateperson) | **PATCH** /api/people/{id} | 
*PersonResourceApi* | [**queryPerson**](docs/Api/PersonResourceApi.md#queryperson) | **GET** /api/people/query | 
*PersonResourceApi* | [**updatePerson**](docs/Api/PersonResourceApi.md#updateperson) | **PUT** /api/people/{id} | 

## Models

- [CategoryDTO](docs/Model/CategoryDTO.md)
- [CourseDTO](docs/Model/CourseDTO.md)
- [CourseTypeDTO](docs/Model/CourseTypeDTO.md)
- [CustomListDTO](docs/Model/CustomListDTO.md)
- [CustomListValueDTO](docs/Model/CustomListValueDTO.md)
- [DisciplineDTO](docs/Model/DisciplineDTO.md)
- [EventCategoryDTO](docs/Model/EventCategoryDTO.md)
- [EventDTO](docs/Model/EventDTO.md)
- [EventParticipantDTO](docs/Model/EventParticipantDTO.md)
- [EventRaceTypeDTO](docs/Model/EventRaceTypeDTO.md)
- [LatestPeriodMembershipStatusResponseDTO](docs/Model/LatestPeriodMembershipStatusResponseDTO.md)
- [MembershipAddResponseDTO](docs/Model/MembershipAddResponseDTO.md)
- [MembershipOrderLineItemDTO](docs/Model/MembershipOrderLineItemDTO.md)
- [MembershipOrderUpdateRequestDTO](docs/Model/MembershipOrderUpdateRequestDTO.md)
- [MembershipOrderUpdateResponseDTO](docs/Model/MembershipOrderUpdateResponseDTO.md)
- [MembershipStatusDTO](docs/Model/MembershipStatusDTO.md)
- [NumberTypeDTO](docs/Model/NumberTypeDTO.md)
- [OrderDTO](docs/Model/OrderDTO.md)
- [OrganisationDTO](docs/Model/OrganisationDTO.md)
- [ParticipantOrderDTO](docs/Model/ParticipantOrderDTO.md)
- [PersonDTO](docs/Model/PersonDTO.md)
- [ProductDTO](docs/Model/ProductDTO.md)
- [RaceDTO](docs/Model/RaceDTO.md)
- [RaceResultDTO](docs/Model/RaceResultDTO.md)
- [ResultSetDTO](docs/Model/ResultSetDTO.md)
- [RoundDTO](docs/Model/RoundDTO.md)
- [SeriesDTO](docs/Model/SeriesDTO.md)
- [StartGroupDTO](docs/Model/StartGroupDTO.md)
- [StartGroupParticipantDTO](docs/Model/StartGroupParticipantDTO.md)
- [TagTypeDTO](docs/Model/TagTypeDTO.md)

## Authorization

Authentication schemes defined for the API:
### jwt

- **Type**: Bearer authentication (JWT)

### apiKey

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

development@idealogic.co.za

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.2.0-SNAPSHOT`
    - Package version: `2.2.2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
