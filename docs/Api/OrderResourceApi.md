# Idealogic\RegistrationAPI\OrderResourceApi

All URIs are relative to https://admin-service-stage.idealogic.co.za, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countOrders()**](OrderResourceApi.md#countOrders) | **GET** /api/orders/count |  |
| [**createOrder()**](OrderResourceApi.md#createOrder) | **POST** /api/orders |  |
| [**deleteOrder()**](OrderResourceApi.md#deleteOrder) | **DELETE** /api/orders/{id} |  |
| [**getAllOrders()**](OrderResourceApi.md#getAllOrders) | **GET** /api/orders |  |
| [**getOrder()**](OrderResourceApi.md#getOrder) | **GET** /api/orders/{id} |  |
| [**getParticipantOrder()**](OrderResourceApi.md#getParticipantOrder) | **GET** /api/orders/create-cart/participants/{id} |  |
| [**partialUpdateOrder()**](OrderResourceApi.md#partialUpdateOrder) | **PATCH** /api/orders/{id} |  |
| [**patchParticipantOrder()**](OrderResourceApi.md#patchParticipantOrder) | **PATCH** /api/orders/participant/{id} |  |
| [**updateOrder()**](OrderResourceApi.md#updateOrder) | **PUT** /api/orders |  |
| [**updateOrder1()**](OrderResourceApi.md#updateOrder1) | **PUT** /api/orders/{id} |  |
| [**updateParticipantOrder()**](OrderResourceApi.md#updateParticipantOrder) | **PUT** /api/orders/participant/{id} |  |


## `countOrders()`

```php
countOrders($id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $number_contains, $number_does_not_contain, $number_equals, $number_not_equals, $number_specified, $number_in, $number_not_in, $external_id_contains, $external_id_does_not_contain, $external_id_equals, $external_id_not_equals, $external_id_specified, $external_id_in, $external_id_not_in, $status_equals, $status_not_equals, $status_specified, $status_in, $status_not_in, $email_contains, $email_does_not_contain, $email_equals, $email_not_equals, $email_specified, $email_in, $email_not_in, $url_contains, $url_does_not_contain, $url_equals, $url_not_equals, $url_specified, $url_in, $url_not_in, $organisation_id_greater_than, $organisation_id_less_than, $organisation_id_greater_than_or_equal, $organisation_id_less_than_or_equal, $organisation_id_equals, $organisation_id_not_equals, $organisation_id_specified, $organisation_id_in, $organisation_id_not_in, $buyer_id_greater_than, $buyer_id_less_than, $buyer_id_greater_than_or_equal, $buyer_id_less_than_or_equal, $buyer_id_equals, $buyer_id_not_equals, $buyer_id_specified, $buyer_id_in, $buyer_id_not_in, $distinct): int
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
$email_contains = 'email_contains_example'; // string
$email_does_not_contain = 'email_does_not_contain_example'; // string
$email_equals = 'email_equals_example'; // string
$email_not_equals = 'email_not_equals_example'; // string
$email_specified = True; // bool
$email_in = array('email_in_example'); // string[]
$email_not_in = array('email_not_in_example'); // string[]
$url_contains = 'url_contains_example'; // string
$url_does_not_contain = 'url_does_not_contain_example'; // string
$url_equals = 'url_equals_example'; // string
$url_not_equals = 'url_not_equals_example'; // string
$url_specified = True; // bool
$url_in = array('url_in_example'); // string[]
$url_not_in = array('url_not_in_example'); // string[]
$organisation_id_greater_than = 56; // int
$organisation_id_less_than = 56; // int
$organisation_id_greater_than_or_equal = 56; // int
$organisation_id_less_than_or_equal = 56; // int
$organisation_id_equals = 56; // int
$organisation_id_not_equals = 56; // int
$organisation_id_specified = True; // bool
$organisation_id_in = array(56); // int[]
$organisation_id_not_in = array(56); // int[]
$buyer_id_greater_than = 56; // int
$buyer_id_less_than = 56; // int
$buyer_id_greater_than_or_equal = 56; // int
$buyer_id_less_than_or_equal = 56; // int
$buyer_id_equals = 56; // int
$buyer_id_not_equals = 56; // int
$buyer_id_specified = True; // bool
$buyer_id_in = array(56); // int[]
$buyer_id_not_in = array(56); // int[]
$distinct = True; // bool

try {
    $result = $apiInstance->countOrders($id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $number_contains, $number_does_not_contain, $number_equals, $number_not_equals, $number_specified, $number_in, $number_not_in, $external_id_contains, $external_id_does_not_contain, $external_id_equals, $external_id_not_equals, $external_id_specified, $external_id_in, $external_id_not_in, $status_equals, $status_not_equals, $status_specified, $status_in, $status_not_in, $email_contains, $email_does_not_contain, $email_equals, $email_not_equals, $email_specified, $email_in, $email_not_in, $url_contains, $url_does_not_contain, $url_equals, $url_not_equals, $url_specified, $url_in, $url_not_in, $organisation_id_greater_than, $organisation_id_less_than, $organisation_id_greater_than_or_equal, $organisation_id_less_than_or_equal, $organisation_id_equals, $organisation_id_not_equals, $organisation_id_specified, $organisation_id_in, $organisation_id_not_in, $buyer_id_greater_than, $buyer_id_less_than, $buyer_id_greater_than_or_equal, $buyer_id_less_than_or_equal, $buyer_id_equals, $buyer_id_not_equals, $buyer_id_specified, $buyer_id_in, $buyer_id_not_in, $distinct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->countOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id_greater_than** | **int**|  | [optional] |
| **id_less_than** | **int**|  | [optional] |
| **id_greater_than_or_equal** | **int**|  | [optional] |
| **id_less_than_or_equal** | **int**|  | [optional] |
| **id_equals** | **int**|  | [optional] |
| **id_not_equals** | **int**|  | [optional] |
| **id_specified** | **bool**|  | [optional] |
| **id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **number_contains** | **string**|  | [optional] |
| **number_does_not_contain** | **string**|  | [optional] |
| **number_equals** | **string**|  | [optional] |
| **number_not_equals** | **string**|  | [optional] |
| **number_specified** | **bool**|  | [optional] |
| **number_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **number_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **external_id_contains** | **string**|  | [optional] |
| **external_id_does_not_contain** | **string**|  | [optional] |
| **external_id_equals** | **string**|  | [optional] |
| **external_id_not_equals** | **string**|  | [optional] |
| **external_id_specified** | **bool**|  | [optional] |
| **external_id_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **external_id_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **status_equals** | **string**|  | [optional] |
| **status_not_equals** | **string**|  | [optional] |
| **status_specified** | **bool**|  | [optional] |
| **status_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **status_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **email_contains** | **string**|  | [optional] |
| **email_does_not_contain** | **string**|  | [optional] |
| **email_equals** | **string**|  | [optional] |
| **email_not_equals** | **string**|  | [optional] |
| **email_specified** | **bool**|  | [optional] |
| **email_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **email_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **url_contains** | **string**|  | [optional] |
| **url_does_not_contain** | **string**|  | [optional] |
| **url_equals** | **string**|  | [optional] |
| **url_not_equals** | **string**|  | [optional] |
| **url_specified** | **bool**|  | [optional] |
| **url_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **url_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **organisation_id_greater_than** | **int**|  | [optional] |
| **organisation_id_less_than** | **int**|  | [optional] |
| **organisation_id_greater_than_or_equal** | **int**|  | [optional] |
| **organisation_id_less_than_or_equal** | **int**|  | [optional] |
| **organisation_id_equals** | **int**|  | [optional] |
| **organisation_id_not_equals** | **int**|  | [optional] |
| **organisation_id_specified** | **bool**|  | [optional] |
| **organisation_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **organisation_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **buyer_id_greater_than** | **int**|  | [optional] |
| **buyer_id_less_than** | **int**|  | [optional] |
| **buyer_id_greater_than_or_equal** | **int**|  | [optional] |
| **buyer_id_less_than_or_equal** | **int**|  | [optional] |
| **buyer_id_equals** | **int**|  | [optional] |
| **buyer_id_not_equals** | **int**|  | [optional] |
| **buyer_id_specified** | **bool**|  | [optional] |
| **buyer_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **buyer_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **distinct** | **bool**|  | [optional] |

### Return type

**int**

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($order_dto): \Idealogic\RegistrationAPI\Model\OrderDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_dto = new \Idealogic\RegistrationAPI\Model\OrderDTO(); // \Idealogic\RegistrationAPI\Model\OrderDTO

try {
    $result = $apiInstance->createOrder($order_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_dto** | [**\Idealogic\RegistrationAPI\Model\OrderDTO**](../Model/OrderDTO.md)|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\OrderDTO**](../Model/OrderDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrder()`

```php
deleteOrder($id)
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


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->deleteOrder($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
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

## `getAllOrders()`

```php
getAllOrders($pageable, $id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $number_contains, $number_does_not_contain, $number_equals, $number_not_equals, $number_specified, $number_in, $number_not_in, $external_id_contains, $external_id_does_not_contain, $external_id_equals, $external_id_not_equals, $external_id_specified, $external_id_in, $external_id_not_in, $status_equals, $status_not_equals, $status_specified, $status_in, $status_not_in, $email_contains, $email_does_not_contain, $email_equals, $email_not_equals, $email_specified, $email_in, $email_not_in, $url_contains, $url_does_not_contain, $url_equals, $url_not_equals, $url_specified, $url_in, $url_not_in, $organisation_id_greater_than, $organisation_id_less_than, $organisation_id_greater_than_or_equal, $organisation_id_less_than_or_equal, $organisation_id_equals, $organisation_id_not_equals, $organisation_id_specified, $organisation_id_in, $organisation_id_not_in, $buyer_id_greater_than, $buyer_id_less_than, $buyer_id_greater_than_or_equal, $buyer_id_less_than_or_equal, $buyer_id_equals, $buyer_id_not_equals, $buyer_id_specified, $buyer_id_in, $buyer_id_not_in, $distinct): \Idealogic\RegistrationAPI\Model\OrderDTO[]
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


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageable = new \Idealogic\RegistrationAPI\Model\Pageable(); // Pageable
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
$email_contains = 'email_contains_example'; // string
$email_does_not_contain = 'email_does_not_contain_example'; // string
$email_equals = 'email_equals_example'; // string
$email_not_equals = 'email_not_equals_example'; // string
$email_specified = True; // bool
$email_in = array('email_in_example'); // string[]
$email_not_in = array('email_not_in_example'); // string[]
$url_contains = 'url_contains_example'; // string
$url_does_not_contain = 'url_does_not_contain_example'; // string
$url_equals = 'url_equals_example'; // string
$url_not_equals = 'url_not_equals_example'; // string
$url_specified = True; // bool
$url_in = array('url_in_example'); // string[]
$url_not_in = array('url_not_in_example'); // string[]
$organisation_id_greater_than = 56; // int
$organisation_id_less_than = 56; // int
$organisation_id_greater_than_or_equal = 56; // int
$organisation_id_less_than_or_equal = 56; // int
$organisation_id_equals = 56; // int
$organisation_id_not_equals = 56; // int
$organisation_id_specified = True; // bool
$organisation_id_in = array(56); // int[]
$organisation_id_not_in = array(56); // int[]
$buyer_id_greater_than = 56; // int
$buyer_id_less_than = 56; // int
$buyer_id_greater_than_or_equal = 56; // int
$buyer_id_less_than_or_equal = 56; // int
$buyer_id_equals = 56; // int
$buyer_id_not_equals = 56; // int
$buyer_id_specified = True; // bool
$buyer_id_in = array(56); // int[]
$buyer_id_not_in = array(56); // int[]
$distinct = True; // bool

try {
    $result = $apiInstance->getAllOrders($pageable, $id_greater_than, $id_less_than, $id_greater_than_or_equal, $id_less_than_or_equal, $id_equals, $id_not_equals, $id_specified, $id_in, $id_not_in, $number_contains, $number_does_not_contain, $number_equals, $number_not_equals, $number_specified, $number_in, $number_not_in, $external_id_contains, $external_id_does_not_contain, $external_id_equals, $external_id_not_equals, $external_id_specified, $external_id_in, $external_id_not_in, $status_equals, $status_not_equals, $status_specified, $status_in, $status_not_in, $email_contains, $email_does_not_contain, $email_equals, $email_not_equals, $email_specified, $email_in, $email_not_in, $url_contains, $url_does_not_contain, $url_equals, $url_not_equals, $url_specified, $url_in, $url_not_in, $organisation_id_greater_than, $organisation_id_less_than, $organisation_id_greater_than_or_equal, $organisation_id_less_than_or_equal, $organisation_id_equals, $organisation_id_not_equals, $organisation_id_specified, $organisation_id_in, $organisation_id_not_in, $buyer_id_greater_than, $buyer_id_less_than, $buyer_id_greater_than_or_equal, $buyer_id_less_than_or_equal, $buyer_id_equals, $buyer_id_not_equals, $buyer_id_specified, $buyer_id_in, $buyer_id_not_in, $distinct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->getAllOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageable** | [**Pageable**](../Model/.md)|  | |
| **id_greater_than** | **int**|  | [optional] |
| **id_less_than** | **int**|  | [optional] |
| **id_greater_than_or_equal** | **int**|  | [optional] |
| **id_less_than_or_equal** | **int**|  | [optional] |
| **id_equals** | **int**|  | [optional] |
| **id_not_equals** | **int**|  | [optional] |
| **id_specified** | **bool**|  | [optional] |
| **id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **number_contains** | **string**|  | [optional] |
| **number_does_not_contain** | **string**|  | [optional] |
| **number_equals** | **string**|  | [optional] |
| **number_not_equals** | **string**|  | [optional] |
| **number_specified** | **bool**|  | [optional] |
| **number_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **number_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **external_id_contains** | **string**|  | [optional] |
| **external_id_does_not_contain** | **string**|  | [optional] |
| **external_id_equals** | **string**|  | [optional] |
| **external_id_not_equals** | **string**|  | [optional] |
| **external_id_specified** | **bool**|  | [optional] |
| **external_id_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **external_id_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **status_equals** | **string**|  | [optional] |
| **status_not_equals** | **string**|  | [optional] |
| **status_specified** | **bool**|  | [optional] |
| **status_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **status_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **email_contains** | **string**|  | [optional] |
| **email_does_not_contain** | **string**|  | [optional] |
| **email_equals** | **string**|  | [optional] |
| **email_not_equals** | **string**|  | [optional] |
| **email_specified** | **bool**|  | [optional] |
| **email_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **email_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **url_contains** | **string**|  | [optional] |
| **url_does_not_contain** | **string**|  | [optional] |
| **url_equals** | **string**|  | [optional] |
| **url_not_equals** | **string**|  | [optional] |
| **url_specified** | **bool**|  | [optional] |
| **url_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **url_not_in** | [**string[]**](../Model/string.md)|  | [optional] |
| **organisation_id_greater_than** | **int**|  | [optional] |
| **organisation_id_less_than** | **int**|  | [optional] |
| **organisation_id_greater_than_or_equal** | **int**|  | [optional] |
| **organisation_id_less_than_or_equal** | **int**|  | [optional] |
| **organisation_id_equals** | **int**|  | [optional] |
| **organisation_id_not_equals** | **int**|  | [optional] |
| **organisation_id_specified** | **bool**|  | [optional] |
| **organisation_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **organisation_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **buyer_id_greater_than** | **int**|  | [optional] |
| **buyer_id_less_than** | **int**|  | [optional] |
| **buyer_id_greater_than_or_equal** | **int**|  | [optional] |
| **buyer_id_less_than_or_equal** | **int**|  | [optional] |
| **buyer_id_equals** | **int**|  | [optional] |
| **buyer_id_not_equals** | **int**|  | [optional] |
| **buyer_id_specified** | **bool**|  | [optional] |
| **buyer_id_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **buyer_id_not_in** | [**int[]**](../Model/int.md)|  | [optional] |
| **distinct** | **bool**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\OrderDTO[]**](../Model/OrderDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($id): \Idealogic\RegistrationAPI\Model\OrderDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\OrderDTO**](../Model/OrderDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceApi(
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
    echo 'Exception when calling OrderResourceApi->getParticipantOrder: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateOrder()`

```php
partialUpdateOrder($id, $order_dto): \Idealogic\RegistrationAPI\Model\OrderDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$order_dto = new \Idealogic\RegistrationAPI\Model\OrderDTO(); // \Idealogic\RegistrationAPI\Model\OrderDTO

try {
    $result = $apiInstance->partialUpdateOrder($id, $order_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->partialUpdateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **order_dto** | [**\Idealogic\RegistrationAPI\Model\OrderDTO**](../Model/OrderDTO.md)|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\OrderDTO**](../Model/OrderDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/merge-patch+json`
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


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceApi(
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
    echo 'Exception when calling OrderResourceApi->patchParticipantOrder: ', $e->getMessage(), PHP_EOL;
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

## `updateOrder()`

```php
updateOrder($order_dto): \Idealogic\RegistrationAPI\Model\OrderDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_dto = new \Idealogic\RegistrationAPI\Model\OrderDTO(); // \Idealogic\RegistrationAPI\Model\OrderDTO

try {
    $result = $apiInstance->updateOrder($order_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_dto** | [**\Idealogic\RegistrationAPI\Model\OrderDTO**](../Model/OrderDTO.md)|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\OrderDTO**](../Model/OrderDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder1()`

```php
updateOrder1($id, $order_dto): \Idealogic\RegistrationAPI\Model\OrderDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$order_dto = new \Idealogic\RegistrationAPI\Model\OrderDTO(); // \Idealogic\RegistrationAPI\Model\OrderDTO

try {
    $result = $apiInstance->updateOrder1($id, $order_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderResourceApi->updateOrder1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **order_dto** | [**\Idealogic\RegistrationAPI\Model\OrderDTO**](../Model/OrderDTO.md)|  | |

### Return type

[**\Idealogic\RegistrationAPI\Model\OrderDTO**](../Model/OrderDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new Idealogic\RegistrationAPI\Api\OrderResourceApi(
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
    echo 'Exception when calling OrderResourceApi->updateParticipantOrder: ', $e->getMessage(), PHP_EOL;
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
