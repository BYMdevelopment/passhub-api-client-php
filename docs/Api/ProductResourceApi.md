# passhub\client\ProductResourceApi

All URIs are relative to *https://localhost:8090*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findProductsByVendor**](ProductResourceApi.md#findProductsByVendor) | **GET** /api/v1/products/vendor/{vendorId} | findProductsByVendor
[**getAllProducts**](ProductResourceApi.md#getAllProducts) | **GET** /api/v2/products | getAllProducts


# **findProductsByVendor**
> \passhub\client\model\ProductDTO[] findProductsByVendor($vendor_id)

findProductsByVendor

Required permissions: CAN_GET_PRODUCTS_BY_VENDOR

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Api-Key
$config = passhub\client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = passhub\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new passhub\client\Api\ProductResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_id = 789; // int | the internal vendor id

try {
    $result = $apiInstance->findProductsByVendor($vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductResourceApi->findProductsByVendor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_id** | **int**| the internal vendor id |

### Return type

[**\passhub\client\model\ProductDTO[]**](../Model/ProductDTO.md)

### Authorization

[X-Api-Key](../../README.md#X-Api-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllProducts**
> \passhub\client\model\ProductDTO[] getAllProducts($query, $size, $page, $sort_by, $sort_order, $type, $tag_filter, $tag_filter_mode)

getAllProducts

Required permissions: CAN_GET_PRODUCTS

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Api-Key
$config = passhub\client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = passhub\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new passhub\client\Api\ProductResourceApi(
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
$type = "type_example"; // string | product type
$tag_filter = array("tag_filter_example"); // string[] | tagFilter
$tag_filter_mode = "tag_filter_mode_example"; // string | tagFilterMode

try {
    $result = $apiInstance->getAllProducts($query, $size, $page, $sort_by, $sort_order, $type, $tag_filter, $tag_filter_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductResourceApi->getAllProducts: ', $e->getMessage(), PHP_EOL;
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
 **type** | **string**| product type | [optional]
 **tag_filter** | [**string[]**](../Model/string.md)| tagFilter | [optional]
 **tag_filter_mode** | **string**| tagFilterMode | [optional]

### Return type

[**\passhub\client\model\ProductDTO[]**](../Model/ProductDTO.md)

### Authorization

[X-Api-Key](../../README.md#X-Api-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

