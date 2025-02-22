# Idealogic\RegistrationAPI\MembershipResourceExApi

All URIs are relative to https://admin-service-dev.idealogic.co.za, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMembership()**](MembershipResourceExApi.md#addMembership) | **POST** /api/memberships/add |  |
| [**enrolMemberships()**](MembershipResourceExApi.md#enrolMemberships) | **POST** /api/memberships/enrol |  |
| [**getLinkedMembers()**](MembershipResourceExApi.md#getLinkedMembers) | **GET** /api/memberships/linkedStatus/{externalUserId} |  |
| [**getMemberStatusByLatestPeriodForMembershipType()**](MembershipResourceExApi.md#getMemberStatusByLatestPeriodForMembershipType) | **GET** /api/memberships/status/latestPeriod |  |
| [**getMembershipAttachment()**](MembershipResourceExApi.md#getMembershipAttachment) | **GET** /api/memberships/attachment/{uuid} |  |
| [**importMembership()**](MembershipResourceExApi.md#importMembership) | **PUT** /api/memberships/import |  |
| [**updateMembershipOrder()**](MembershipResourceExApi.md#updateMembershipOrder) | **POST** /api/memberships/order |  |


## `addMembership()`

```php
addMembership($membership_add_request_dto, $organisation_id): \Idealogic\RegistrationAPI\Model\MembershipAddResponseDTO
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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_add_request_dto** | [**\Idealogic\RegistrationAPI\Model\MembershipAddRequestDTO**](../Model/MembershipAddRequestDTO.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\MembershipAddResponseDTO**](../Model/MembershipAddResponseDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enrolMemberships()`

```php
enrolMemberships($membership_enrol_request_dto, $organisation_id): \Idealogic\RegistrationAPI\Model\MembershipStatusDTO[]
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


$apiInstance = new Idealogic\RegistrationAPI\Api\MembershipResourceExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membership_enrol_request_dto = new \Idealogic\RegistrationAPI\Model\MembershipEnrolRequestDTO(); // \Idealogic\RegistrationAPI\Model\MembershipEnrolRequestDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->enrolMemberships($membership_enrol_request_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceExApi->enrolMemberships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_enrol_request_dto** | [**\Idealogic\RegistrationAPI\Model\MembershipEnrolRequestDTO**](../Model/MembershipEnrolRequestDTO.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\MembershipStatusDTO[]**](../Model/MembershipStatusDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLinkedMembers()`

```php
getLinkedMembers($external_user_id, $organisation_id, $membership_type_id): \Idealogic\RegistrationAPI\Model\MembershipStatusDTO[]
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


$apiInstance = new Idealogic\RegistrationAPI\Api\MembershipResourceExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_user_id = 'external_user_id_example'; // string
$organisation_id = 56; // int
$membership_type_id = 56; // int

try {
    $result = $apiInstance->getLinkedMembers($external_user_id, $organisation_id, $membership_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceExApi->getLinkedMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_user_id** | **string**|  | |
| **organisation_id** | **int**|  | [optional] |
| **membership_type_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\MembershipStatusDTO[]**](../Model/MembershipStatusDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMemberStatusByLatestPeriodForMembershipType()`

```php
getMemberStatusByLatestPeriodForMembershipType($external_user_id, $membership_type_id, $organisation_id): \Idealogic\RegistrationAPI\Model\LatestPeriodMembershipStatusResponseDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\MembershipResourceExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_user_id = 'external_user_id_example'; // string
$membership_type_id = 56; // int
$organisation_id = 56; // int

try {
    $result = $apiInstance->getMemberStatusByLatestPeriodForMembershipType($external_user_id, $membership_type_id, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceExApi->getMemberStatusByLatestPeriodForMembershipType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_user_id** | **string**|  | |
| **membership_type_id** | **int**|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\LatestPeriodMembershipStatusResponseDTO**](../Model/LatestPeriodMembershipStatusResponseDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMembershipAttachment()`

```php
getMembershipAttachment($uuid, $organisation_id): string[]
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


$apiInstance = new Idealogic\RegistrationAPI\Api\MembershipResourceExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string
$organisation_id = 56; // int

try {
    $result = $apiInstance->getMembershipAttachment($uuid, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceExApi->getMembershipAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

**string[]**

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importMembership()`

```php
importMembership($file, $sheet_index, $period_id, $org_id): \Idealogic\RegistrationAPI\Model\MembershipAddResponseDTO[]
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


$apiInstance = new Idealogic\RegistrationAPI\Api\MembershipResourceExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = 'file_example'; // string
$sheet_index = 56; // int
$period_id = 56; // int
$org_id = 56; // int

try {
    $result = $apiInstance->importMembership($file, $sheet_index, $period_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceExApi->importMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **string**|  | |
| **sheet_index** | **int**|  | |
| **period_id** | **int**|  | |
| **org_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\MembershipAddResponseDTO[]**](../Model/MembershipAddResponseDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMembershipOrder()`

```php
updateMembershipOrder($membership_order_update_request_dto, $organisation_id): \Idealogic\RegistrationAPI\Model\MembershipOrderUpdateResponseDTO
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


$apiInstance = new Idealogic\RegistrationAPI\Api\MembershipResourceExApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membership_order_update_request_dto = new \Idealogic\RegistrationAPI\Model\MembershipOrderUpdateRequestDTO(); // \Idealogic\RegistrationAPI\Model\MembershipOrderUpdateRequestDTO
$organisation_id = 56; // int

try {
    $result = $apiInstance->updateMembershipOrder($membership_order_update_request_dto, $organisation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipResourceExApi->updateMembershipOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **membership_order_update_request_dto** | [**\Idealogic\RegistrationAPI\Model\MembershipOrderUpdateRequestDTO**](../Model/MembershipOrderUpdateRequestDTO.md)|  | |
| **organisation_id** | **int**|  | [optional] |

### Return type

[**\Idealogic\RegistrationAPI\Model\MembershipOrderUpdateResponseDTO**](../Model/MembershipOrderUpdateResponseDTO.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
