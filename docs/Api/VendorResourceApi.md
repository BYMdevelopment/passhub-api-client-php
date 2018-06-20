# passhub\client\VendorResourceApi

All URIs are relative to *https://localhost:8090*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllVendors**](VendorResourceApi.md#getAllVendors) | **GET** /api/v2/vendors | getAllVendors


# **getAllVendors**
> \passhub\client\model\VendorDetailDTO[] getAllVendors($query, $size, $page, $sort_by, $sort_order)

getAllVendors

Required permissions: CAN_GET_VENDORS

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Api-Key
$config = passhub\client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = passhub\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new passhub\client\Api\VendorResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | query text
$size = 56; // int | quantity of listed records on page
$page = 56; // int | listing starts from page value
$sort_by = "sort_by_example"; // string | sort by
$sort_order = "sort_order_example"; // string | sort order

try {
    $result = $apiInstance->getAllVendors($query, $size, $page, $sort_by, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorResourceApi->getAllVendors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| query text | [optional]
 **size** | **int**| quantity of listed records on page | [optional]
 **page** | **int**| listing starts from page value | [optional]
 **sort_by** | **string**| sort by | [optional]
 **sort_order** | **string**| sort order | [optional]

### Return type

[**\passhub\client\model\VendorDetailDTO[]**](../Model/VendorDetailDTO.md)

### Authorization

[X-Api-Key](../../README.md#X-Api-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

