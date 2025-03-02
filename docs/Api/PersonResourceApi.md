# Idealogic\RegistrationAPI\PersonResourceApi

All URIs are relative to https://admin-service-dev.idealogic.co.za, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPerson()**](PersonResourceApi.md#createPerson) | **POST** /api/people |  |
| [**deletePerson()**](PersonResourceApi.md#deletePerson) | **DELETE** /api/people/{id} |  |
| [**findByID()**](PersonResourceApi.md#findByID) | **GET** /api/people/findById |  |
| [**findByIdDetails()**](PersonResourceApi.md#findByIdDetails) | **POST** /api/people/idsearch |  |
| [**findByUserKeyOrCreate()**](PersonResourceApi.md#findByUserKeyOrCreate) | **GET** /api/people/findByUserKeyOrCreate |  |
| [**getAllLinkedOrgUsersByPrincipal()**](PersonResourceApi.md#getAllLinkedOrgUsersByPrincipal) | **GET** /api/people/linked-to-principal |  |
| [**getAllPeople()**](PersonResourceApi.md#getAllPeople) | **GET** /api/people |  |
| [**getPerson()**](PersonResourceApi.md#getPerson) | **GET** /api/people/{id} |  |
| [**match()**](PersonResourceApi.md#match) | **GET** /api/people/match |  |
| [**partialUpdatePerson()**](PersonResourceApi.md#partialUpdatePerson) | **PATCH** /api/people/{id} |  |
| [**queryPerson()**](PersonResourceApi.md#queryPerson) | **GET** /api/people/query |  |
| [**updatePerson()**](PersonResourceApi.md#updatePerson) | **PUT** /api/people/{id} |  |


## `createPerson()`

```php
createPerson($person_dto, $organisation_id, $user_key): \Idealogic\RegistrationAPI\Model\PersonDTO
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
$user_key = 'user_key_example'; // string

try {
    $result = $apiInstance->createPerson($person_dto, $organisation_id, $user_key);
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
| **user_key** | **string**|  | [optional] |

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
deletePerson($id, $user_key, $organisation_id)
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
$user_key = 'user_key_example'; // string
$organisation_id = 56; // int

try {
    $apiInstance->deletePerson($id, $user_key, $organisation_id);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->deletePerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **user_key** | **string**|  | |
| **organisation_id** | **int**|  | [optional] |

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

## `findByUserKeyOrCreate()`

```php
findByUserKeyOrCreate($user_key, $organisation_id): \Idealogic\RegistrationAPI\Model\PersonDTO
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
$user_key = 'user_key_example'; // string
$organisation_id = 56; // int

try {
    $result = $apiInstance->findByUserKeyOrCreate($user_key, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->findByUserKeyOrCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_key** | **string**|  | |
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

## `getAllLinkedOrgUsersByPrincipal()`

```php
getAllLinkedOrgUsersByPrincipal($pageable, $user_key, $organisation_id): \Idealogic\RegistrationAPI\Model\EmbeddedLinkedPersonDTO[]
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
$user_key = 'user_key_example'; // string
$organisation_id = 56; // int

try {
    $result = $apiInstance->getAllLinkedOrgUsersByPrincipal($pageable, $user_key, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->getAllLinkedOrgUsersByPrincipal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageable** | [**Pageable**](../Model/.md)|  | |
| **user_key** | **string**|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\EmbeddedLinkedPersonDTO[]**](../Model/EmbeddedLinkedPersonDTO.md)

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
getAllPeople($organisation_id, $page, $size, $sort, $eagerload): \Idealogic\RegistrationAPI\Model\PersonDTO[]
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
$organisation_id = 56; // int
$page = 0; // int | Zero-based page index (0..N)
$size = 20; // int | The size of the page to be returned
$sort = array('sort_example'); // string[] | Sorting criteria in the format: property,(asc|desc). Default sort order is ascending. Multiple sort criteria are supported.
$eagerload = true; // bool

try {
    $result = $apiInstance->getAllPeople($organisation_id, $page, $size, $sort, $eagerload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->getAllPeople: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_id** | **int**|  | [optional] |
| **page** | **int**| Zero-based page index (0..N) | [optional] [default to 0] |
| **size** | **int**| The size of the page to be returned | [optional] [default to 20] |
| **sort** | [**string[]**](../Model/string.md)| Sorting criteria in the format: property,(asc|desc). Default sort order is ascending. Multiple sort criteria are supported. | [optional] |
| **eagerload** | **bool**|  | [optional] [default to true] |

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

## `partialUpdatePerson()`

```php
partialUpdatePerson($id, $person_dto): \Idealogic\RegistrationAPI\Model\PersonDTO
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
$person_dto = new \Idealogic\RegistrationAPI\Model\PersonDTO(); // \Idealogic\RegistrationAPI\Model\PersonDTO

try {
    $result = $apiInstance->partialUpdatePerson($id, $person_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->partialUpdatePerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **person_dto** | [**\Idealogic\RegistrationAPI\Model\PersonDTO**](../Model/PersonDTO.md)|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\PersonDTO**](../Model/PersonDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/merge-patch+json`
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
updatePerson($id, $person_dto, $organisation_id, $user_key): \Idealogic\RegistrationAPI\Model\PersonDTO
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
$person_dto = new \Idealogic\RegistrationAPI\Model\PersonDTO(); // \Idealogic\RegistrationAPI\Model\PersonDTO
$organisation_id = 56; // int
$user_key = 'user_key_example'; // string

try {
    $result = $apiInstance->updatePerson($id, $person_dto, $organisation_id, $user_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonResourceApi->updatePerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **person_dto** | [**\Idealogic\RegistrationAPI\Model\PersonDTO**](../Model/PersonDTO.md)|  | |
| **organisation_id** | **int**|  | [optional] |
| **user_key** | **string**|  | [optional] |

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
