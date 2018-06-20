# passhub\client\OrderRecordResourceApi

All URIs are relative to *https://localhost:8090*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderRecord**](OrderRecordResourceApi.md#createOrderRecord) | **POST** /api/v1/orderRecords | createOrderRecord
[**getAllOrderRecords**](OrderRecordResourceApi.md#getAllOrderRecords) | **GET** /api/v2/orderRecords | getAllOrderRecords
[**getOrderRecord**](OrderRecordResourceApi.md#getOrderRecord) | **GET** /api/v1/orderRecords/{id} | getOrderRecord
[**mergeVouchers**](OrderRecordResourceApi.md#mergeVouchers) | **POST** /api/v1/orderRecords/mergeVouchers | mergeVouchers
[**updateOrderRecord**](OrderRecordResourceApi.md#updateOrderRecord) | **PUT** /api/v1/orderRecords | updateOrderRecord


# **createOrderRecord**
> \passhub\client\model\OrderRecordDTO createOrderRecord($order_record_dto)

createOrderRecord

1) Cellphone number must be in E.164 format;<br/>2) «PricePaid» is a price for 1 product;<br/>3) Required permissions: CAN_CREATE_ORDER.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Api-Key
$config = passhub\client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = passhub\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new passhub\client\Api\OrderRecordResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_record_dto = new \passhub\client\model\OrderRecordDTO(); // \passhub\client\model\OrderRecordDTO | the OrderRecord Dto

try {
    $result = $apiInstance->createOrderRecord($order_record_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRecordResourceApi->createOrderRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_record_dto** | [**\passhub\client\model\OrderRecordDTO**](../Model/OrderRecordDTO.md)| the OrderRecord Dto |

### Return type

[**\passhub\client\model\OrderRecordDTO**](../Model/OrderRecordDTO.md)

### Authorization

[X-Api-Key](../../README.md#X-Api-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllOrderRecords**
> \passhub\client\model\OrderRecordExtendDTO[] getAllOrderRecords($query, $from, $till, $time_zone, $delivery_method, $delivery_status, $size, $page, $sort_by, $sort_order)

getAllOrderRecords

Required permissions: CAN_GET_ORDERS

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Api-Key
$config = passhub\client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = passhub\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new passhub\client\Api\OrderRecordResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | query text
$from = "from_example"; // string | Begin the of date range, format: YYYY-MM-DD (e.g. 2016-01-25)
$till = "till_example"; // string | End the of date range, format: YYYY-MM-DD (e.g. 2016-01-25)
$time_zone = "time_zone_example"; // string | A timezone for date/time representation. Example: America/Chicago or EST. If zone is not set, then UTC timezone will be used.
$delivery_method = "delivery_method_example"; // string | delivery method
$delivery_status = "delivery_status_example"; // string | status of delivery
$size = 56; // int | quantity of listed records on page
$page = 56; // int | listing starts from page value
$sort_by = "sort_by_example"; // string | sort by
$sort_order = "sort_order_example"; // string | sort order

try {
    $result = $apiInstance->getAllOrderRecords($query, $from, $till, $time_zone, $delivery_method, $delivery_status, $size, $page, $sort_by, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRecordResourceApi->getAllOrderRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| query text | [optional]
 **from** | **string**| Begin the of date range, format: YYYY-MM-DD (e.g. 2016-01-25) | [optional]
 **till** | **string**| End the of date range, format: YYYY-MM-DD (e.g. 2016-01-25) | [optional]
 **time_zone** | **string**| A timezone for date/time representation. Example: America/Chicago or EST. If zone is not set, then UTC timezone will be used. | [optional]
 **delivery_method** | **string**| delivery method | [optional]
 **delivery_status** | **string**| status of delivery | [optional]
 **size** | **int**| quantity of listed records on page | [optional]
 **page** | **int**| listing starts from page value | [optional]
 **sort_by** | **string**| sort by | [optional]
 **sort_order** | **string**| sort order | [optional]

### Return type

[**\passhub\client\model\OrderRecordExtendDTO[]**](../Model/OrderRecordExtendDTO.md)

### Authorization

[X-Api-Key](../../README.md#X-Api-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderRecord**
> \passhub\client\model\OrderRecordExtendDTO getOrderRecord($id)

getOrderRecord

Required permissions: CAN_GET_ORDERS

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Api-Key
$config = passhub\client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = passhub\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new passhub\client\Api\OrderRecordResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | the internal id of order

try {
    $result = $apiInstance->getOrderRecord($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRecordResourceApi->getOrderRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the internal id of order |

### Return type

[**\passhub\client\model\OrderRecordExtendDTO**](../Model/OrderRecordExtendDTO.md)

### Authorization

[X-Api-Key](../../README.md#X-Api-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeVouchers**
> \passhub\client\model\GenericStatusDTO mergeVouchers($order_id, $new_voucher_id)

mergeVouchers

Replaces voucher IDs of order items with new voucher ID in the specified order. All groups are merged to one 'MergedGroup'.<br/>Required permissions: CAN_EDIT_ORDER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Api-Key
$config = passhub\client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = passhub\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new passhub\client\Api\OrderRecordResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 789; // int | the internal id of order
$new_voucher_id = "new_voucher_id_example"; // string | newVoucherId

try {
    $result = $apiInstance->mergeVouchers($order_id, $new_voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRecordResourceApi->mergeVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| the internal id of order |
 **new_voucher_id** | **string**| newVoucherId |

### Return type

[**\passhub\client\model\GenericStatusDTO**](../Model/GenericStatusDTO.md)

### Authorization

[X-Api-Key](../../README.md#X-Api-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderRecord**
> \passhub\client\model\OrderRecordDTO updateOrderRecord($order_record_dto)

updateOrderRecord

1) Cellphone number must be in E.164 format;<br/>2) «PricePaid» is a price for 1 product;<br/>3) Required permissions: CAN_EDIT_ORDER.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Api-Key
$config = passhub\client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = passhub\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new passhub\client\Api\OrderRecordResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_record_dto = new \passhub\client\model\OrderRecordDTO(); // \passhub\client\model\OrderRecordDTO | the OrderRecord Dto

try {
    $result = $apiInstance->updateOrderRecord($order_record_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRecordResourceApi->updateOrderRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_record_dto** | [**\passhub\client\model\OrderRecordDTO**](../Model/OrderRecordDTO.md)| the OrderRecord Dto |

### Return type

[**\passhub\client\model\OrderRecordDTO**](../Model/OrderRecordDTO.md)

### Authorization

[X-Api-Key](../../README.md#X-Api-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

