# Idealogic\RegistrationAPI\PersonResourceApi

All URIs are relative to https://admin-service-stage.idealogic.co.za, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPerson()**](PersonResourceApi.md#createPerson) | **POST** /api/people |  |
| [**deletePerson()**](PersonResourceApi.md#deletePerson) | **DELETE** /api/people/{id} |  |
| [**findByExternalUserIdOrCreate()**](PersonResourceApi.md#findByExternalUserIdOrCreate) | **GET** /api/people/findByExternalUserIdOrCreate |  |
| [**findByID()**](PersonResourceApi.md#findByID) | **GET** /api/people/findById |  |
| [**findByIdDetails()**](PersonResourceApi.md#findByIdDetails) | **POST** /api/people/idsearch |  |
| [**getAllLinkedOrgUsersByPrincipal()**](PersonResourceApi.md#getAllLinkedOrgUsersByPrincipal) | **GET** /api/people/linked-to-principal |  |
| [**getAllPeople()**](PersonResourceApi.md#getAllPeople) | **GET** /api/people |  |
| [**getPerson()**](PersonResourceApi.md#getPerson) | **GET** /api/people/{id} |  |
| [**match()**](PersonResourceApi.md#match) | **GET** /api/people/match |  |
| [**queryPerson()**](PersonResourceApi.md#queryPerson) | **GET** /api/people/query |  |
| [**updatePerson()**](PersonResourceApi.md#updatePerson) | **PUT** /api/people |  |


## `createPerson()`

```php
createPerson($person_dto, $organisation_id): \Idealogic\RegistrationAPI\Model\PersonDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_dto = new \Idealogic\RegistrationAPI\Model\PersonDTO(); // \Idealogic\RegistrationAPI\Model\PersonDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->createPerson($person_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->createPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_dto** | [**\Idealogic\RegistrationAPI\Model\PersonDTO**](../Model/PersonDTO.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\PersonDTO**](../Model/PersonDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePerson()`

```php
deletePerson($id)
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


$apiInstance = new Idealogic\RegistrationAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->deletePerson($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->deletePerson: ', $e->getMessage(), PHP_EOL;
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

## `findByExternalUserIdOrCreate()`

```php
findByExternalUserIdOrCreate($external_user_id, $organisation_id): \Idealogic\RegistrationAPI\Model\PersonDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_user_id = 'external_user_id_example'; // string
$organisation_id = 56; // int

try {
    $result = $apiInstance->findByExternalUserIdOrCreate($external_user_id, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->findByExternalUserIdOrCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_user_id** | **string**|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\PersonDTO**](../Model/PersonDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findByID()`

```php
findByID($id_number): \Idealogic\RegistrationAPI\Model\PersonDTO[]
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


$apiInstance = new Idealogic\RegistrationAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_number = 'id_number_example'; // string

try {
    $result = $apiInstance->findByID($id_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->findByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id_number** | **string**|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findByIdDetails()`

```php
findByIdDetails($person_match_dto, $organisation_id): \Idealogic\RegistrationAPI\Model\PersonDTO[]
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


$apiInstance = new Idealogic\RegistrationAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_match_dto = new \Idealogic\RegistrationAPI\Model\PersonMatchDTO(); // \Idealogic\RegistrationAPI\Model\PersonMatchDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->findByIdDetails($person_match_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->findByIdDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_match_dto** | [**\Idealogic\RegistrationAPI\Model\PersonMatchDTO**](../Model/PersonMatchDTO.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllLinkedOrgUsersByPrincipal()`

```php
getAllLinkedOrgUsersByPrincipal($pageable, $external_user_id, $organisation_id): \Idealogic\RegistrationAPI\Model\PersonDTO[]
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


$apiInstance = new Idealogic\RegistrationAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageable = new \Idealogic\RegistrationAPI\Model\Pageable(); // Pageable
$external_user_id = 'external_user_id_example'; // string
$organisation_id = 56; // int

try {
    $result = $apiInstance->getAllLinkedOrgUsersByPrincipal($pageable, $external_user_id, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->getAllLinkedOrgUsersByPrincipal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageable** | [**Pageable**](../Model/.md)|  | |
| **external_user_id** | **string**|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPeople()`

```php
getAllPeople($pageable, $organisation_id): \Idealogic\RegistrationAPI\Model\PersonDTO[]
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


$apiInstance = new Idealogic\RegistrationAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageable = new \Idealogic\RegistrationAPI\Model\Pageable(); // Pageable
$organisation_id = 56; // int

try {
    $result = $apiInstance->getAllPeople($pageable, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->getAllPeople: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageable** | [**Pageable**](../Model/.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPerson()`

```php
getPerson($id): \Idealogic\RegistrationAPI\Model\PersonDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getPerson($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->getPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\PersonDTO**](../Model/PersonDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `match()`

```php
match($person_dto, $organisation_id): \Idealogic\RegistrationAPI\Model\PersonDTO[]
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


$apiInstance = new Idealogic\RegistrationAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_dto = new \Idealogic\RegistrationAPI\Model\PersonDTO(); // PersonDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->match($person_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->match: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_dto** | [**PersonDTO**](../Model/.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPerson()`

```php
queryPerson($q, $pageable): \Idealogic\RegistrationAPI\Model\PersonDTO[]
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


$apiInstance = new Idealogic\RegistrationAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string
$pageable = new \Idealogic\RegistrationAPI\Model\Pageable(); // Pageable

try {
    $result = $apiInstance->queryPerson($q, $pageable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->queryPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | |
| **pageable** | [**Pageable**](../Model/.md)|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\PersonDTO[]**](../Model/PersonDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePerson()`

```php
updatePerson($person_dto, $organisation_id): \Idealogic\RegistrationAPI\Model\PersonDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\PersonResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_dto = new \Idealogic\RegistrationAPI\Model\PersonDTO(); // \Idealogic\RegistrationAPI\Model\PersonDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->updatePerson($person_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->updatePerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_dto** | [**\Idealogic\RegistrationAPI\Model\PersonDTO**](../Model/PersonDTO.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\PersonDTO**](../Model/PersonDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
