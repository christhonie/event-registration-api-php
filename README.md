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



// Configure Bearer (JWT) authorization: jwt
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_greater_than = 56; // int
$id_less_than = 56; // int
$id_greater_than_or_equal = 56; // int
$id_less_than_or_equal = 56; // int
$id_equals = 56; // int
$id_not_equals = 56; // int
$id_specified = True; // bool
$id_in = array(56); // int[]
$id_not_in = array(56); // int[]
$number_contains = 'number_contains_example'; // string
$number_does_not_contain = 'number_does_not_contain_example'; // string
$number_equals = 'number_equals_example'; // string
$number_not_equals = 'number_not_equals_example'; // string
$number_specified = True; // bool
$number_in = array('number_in_example'); // string[]
$number_not_in = array('number_not_in_example'); // string[]
$external_id_contains = 'external_id_contains_example'; // string
$external_id_does_not_contain = 'external_id_does_not_contain_example'; // string
$external_id_equals = 'external_id_equals_example'; // string
$external_id_not_equals = 'external_id_not_equals_example'; // string
$external_id_specified = True; // bool
$external_id_in = array('external_id_in_example'); // string[]
$external_id_not_in = array('external_id_not_in_example'); // string[]
$status_equals = 'status_equals_example'; // string
$status_not_equals = 'status_not_equals_example'; // string
$status_specified = True; // bool
$status_in = array('status_in_example'); // string[]
$status_not_in = array('status_not_in_example'); // string[]
$distinct = True; // bool

try {
    $result = $apiInstance->countOrders($id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $number_contains, $number_does_not_contain, $number_equals, $number_not_equals, $number_specified, $number_in, $number_not_in, $external_id_contains, $external_id_does_not_contain, $external_id_equals, $external_id_not_equals, $external_id_specified, $external_id_in, $external_id_not_in, $status_equals, $status_not_equals, $status_specified, $status_in, $status_not_in, $distinct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->countOrders: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost:12504*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrderResourceApi* | [**countOrders**](docs/Api/OrderResourceApi.md#countorders) | **GET** /api/orders/count | 
*OrderResourceApi* | [**createOrder**](docs/Api/OrderResourceApi.md#createorder) | **POST** /api/orders | 
*OrderResourceApi* | [**deleteOrder**](docs/Api/OrderResourceApi.md#deleteorder) | **DELETE** /api/orders/{id} | 
*OrderResourceApi* | [**getAllOrders**](docs/Api/OrderResourceApi.md#getallorders) | **GET** /api/orders | 
*OrderResourceApi* | [**getOrder**](docs/Api/OrderResourceApi.md#getorder) | **GET** /api/orders/{id} | 
*OrderResourceApi* | [**getParticipantOrder**](docs/Api/OrderResourceApi.md#getparticipantorder) | **GET** /api/orders/create-cart/participants/{id} | 
*OrderResourceApi* | [**partialUpdateOrder**](docs/Api/OrderResourceApi.md#partialupdateorder) | **PATCH** /api/orders/{id} | 
*OrderResourceApi* | [**patchParticipantOrder**](docs/Api/OrderResourceApi.md#patchparticipantorder) | **PATCH** /api/orders/participant/{id} | 
*OrderResourceApi* | [**updateOrder**](docs/Api/OrderResourceApi.md#updateorder) | **PUT** /api/orders | 
*OrderResourceApi* | [**updateOrder1**](docs/Api/OrderResourceApi.md#updateorder1) | **PUT** /api/orders/{id} | 
*OrderResourceApi* | [**updateParticipantOrder**](docs/Api/OrderResourceApi.md#updateparticipantorder) | **PUT** /api/orders/participant/{id} | 

## Models

- [OrderDTO](docs/Model/OrderDTO.md)

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

- API version: `1.3.0-SNAPSHOT`
    - Package version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
