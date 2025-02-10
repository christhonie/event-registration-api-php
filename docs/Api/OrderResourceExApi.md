# Idealogic\RegistrationAPI\OrderResourceExApi

All URIs are relative to https://admin-service-dev.idealogic.co.za, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getParticipantOrder()**](OrderResourceExApi.md#getParticipantOrder) | **GET** /api/orders/create-cart/participants/{id} |  |
| [**patchParticipantOrder()**](OrderResourceExApi.md#patchParticipantOrder) | **PATCH** /api/orders/participant/{id} |  |
| [**updateParticipantOrder()**](OrderResourceExApi.md#updateParticipantOrder) | **PUT** /api/orders/participant/{id} |  |


## `getParticipantOrder()`

```php
getParticipantOrder($id): \Idealogic\RegistrationAPI\Model\ParticipantOrderDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getParticipantOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceExApi->getParticipantOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\ParticipantOrderDTO**](../Model/ParticipantOrderDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchParticipantOrder()`

```php
patchParticipantOrder($id, $participant_order_dto): \Idealogic\RegistrationAPI\Model\ParticipantOrderDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$participant_order_dto = new \Idealogic\RegistrationAPI\Model\ParticipantOrderDTO(); // \Idealogic\RegistrationAPI\Model\ParticipantOrderDTO

try {
    $result = $apiInstance->patchParticipantOrder($id, $participant_order_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceExApi->patchParticipantOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **participant_order_dto** | [**\Idealogic\RegistrationAPI\Model\ParticipantOrderDTO**](../Model/ParticipantOrderDTO.md)|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\ParticipantOrderDTO**](../Model/ParticipantOrderDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateParticipantOrder()`

```php
updateParticipantOrder($id, $participant_order_dto): \Idealogic\RegistrationAPI\Model\ParticipantOrderDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$participant_order_dto = new \Idealogic\RegistrationAPI\Model\ParticipantOrderDTO(); // \Idealogic\RegistrationAPI\Model\ParticipantOrderDTO

try {
    $result = $apiInstance->updateParticipantOrder($id, $participant_order_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceExApi->updateParticipantOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **participant_order_dto** | [**\Idealogic\RegistrationAPI\Model\ParticipantOrderDTO**](../Model/ParticipantOrderDTO.md)|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\ParticipantOrderDTO**](../Model/ParticipantOrderDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
