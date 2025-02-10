# Idealogic\RegistrationAPI\OrganisationResourceApi

All URIs are relative to https://admin-service-dev.idealogic.co.za, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrganisation()**](OrganisationResourceApi.md#createOrganisation) | **POST** /api/organisations |  |
| [**deleteOrganisation()**](OrganisationResourceApi.md#deleteOrganisation) | **DELETE** /api/organisations/{id} |  |
| [**getAllOrganisations()**](OrganisationResourceApi.md#getAllOrganisations) | **GET** /api/organisations |  |
| [**getOrganisation()**](OrganisationResourceApi.md#getOrganisation) | **GET** /api/organisations/{id} |  |
| [**partialUpdateOrganisation()**](OrganisationResourceApi.md#partialUpdateOrganisation) | **PATCH** /api/organisations/{id} |  |
| [**updateOrganisation()**](OrganisationResourceApi.md#updateOrganisation) | **PUT** /api/organisations/{id} |  |


## `createOrganisation()`

```php
createOrganisation($organisation_dto): \Idealogic\RegistrationAPI\Model\OrganisationDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure Bearer (JWT) authorization: jwt
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Idealogic\RegistrationAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_dto = new \Idealogic\RegistrationAPI\Model\OrganisationDTO(); // \Idealogic\RegistrationAPI\Model\OrganisationDTO

try {
    $result = $apiInstance->createOrganisation($organisation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->createOrganisation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_dto** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrganisation()`

```php
deleteOrganisation($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure Bearer (JWT) authorization: jwt
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Idealogic\RegistrationAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->deleteOrganisation($id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->deleteOrganisation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllOrganisations()`

```php
getAllOrganisations($page, $size, $sort, $eagerload): \Idealogic\RegistrationAPI\Model\OrganisationDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure Bearer (JWT) authorization: jwt
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Idealogic\RegistrationAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Zero-based page index (0..N)
$size = 20; // int | The size of the page to be returned
$sort = array('sort_example'); // string[] | Sorting criteria in the format: property,(asc|desc). Default sort order is ascending. Multiple sort criteria are supported.
$eagerload = true; // bool

try {
    $result = $apiInstance->getAllOrganisations($page, $size, $sort, $eagerload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->getAllOrganisations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Zero-based page index (0..N) | [optional] [default to 0] |
| **size** | **int**| The size of the page to be returned | [optional] [default to 20] |
| **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property,(asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional] |
| **eagerload** | **bool**|  | [optional] [default to true] |

### Return type

[**\Idealogic\RegistrationAPI\Model\OrganisationDTO[]**](../Model/OrganisationDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganisation()`

```php
getOrganisation($id): \Idealogic\RegistrationAPI\Model\OrganisationDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure Bearer (JWT) authorization: jwt
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Idealogic\RegistrationAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getOrganisation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->getOrganisation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partialUpdateOrganisation()`

```php
partialUpdateOrganisation($id, $organisation_dto): \Idealogic\RegistrationAPI\Model\OrganisationDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure Bearer (JWT) authorization: jwt
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Idealogic\RegistrationAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$organisation_dto = new \Idealogic\RegistrationAPI\Model\OrganisationDTO(); // \Idealogic\RegistrationAPI\Model\OrganisationDTO

try {
    $result = $apiInstance->partialUpdateOrganisation($id, $organisation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->partialUpdateOrganisation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **organisation_dto** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/merge-patch+json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganisation()`

```php
updateOrganisation($id, $organisation_dto): \Idealogic\RegistrationAPI\Model\OrganisationDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure Bearer (JWT) authorization: jwt
$config = Idealogic\RegistrationAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Idealogic\RegistrationAPI\Api\OrganisationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$organisation_dto = new \Idealogic\RegistrationAPI\Model\OrganisationDTO(); // \Idealogic\RegistrationAPI\Model\OrganisationDTO

try {
    $result = $apiInstance->updateOrganisation($id, $organisation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationResourceApi->updateOrganisation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **organisation_dto** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](../Model/OrganisationDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
