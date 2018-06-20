# passhub\client\VoucherResourceApi

All URIs are relative to *https://localhost:8090*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelValidation**](VoucherResourceApi.md#cancelValidation) | **POST** /api/v2/voucher/validate/cancel | [V2] Cancel validation for the voucher
[**cancelVoucher**](VoucherResourceApi.md#cancelVoucher) | **POST** /api/v1/voucher/cancel | cancelVoucher
[**convertVoucher**](VoucherResourceApi.md#convertVoucher) | **POST** /api/v1/voucher/convert | convertVoucher
[**validateVoucher**](VoucherResourceApi.md#validateVoucher) | **POST** /api/v2/voucher/validate | [V2] Validates voucher which represents single order item or group of them.


# **cancelValidation**
> \passhub\client\model\GenericStatusDTO cancelValidation($transaction_tag, $reason, $note)

[V2] Cancel validation for the voucher

Required permissions: CAN_CANCEL_VALIDATION

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Api-Key
$config = passhub\client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = passhub\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new passhub\client\Api\VoucherResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_tag = "transaction_tag_example"; // string | the transaction tag of validation
$reason = "reason_example"; // string | the reason of validation
$note = new \passhub\client\model\OrderNoteParamDTO(); // \passhub\client\model\OrderNoteParamDTO | the validation note dto

try {
    $result = $apiInstance->cancelValidation($transaction_tag, $reason, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherResourceApi->cancelValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_tag** | **string**| the transaction tag of validation |
 **reason** | **string**| the reason of validation | [optional]
 **note** | [**\passhub\client\model\OrderNoteParamDTO**](../Model/OrderNoteParamDTO.md)| the validation note dto | [optional]

### Return type

[**\passhub\client\model\GenericStatusDTO**](../Model/GenericStatusDTO.md)

### Authorization

[X-Api-Key](../../README.md#X-Api-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelVoucher**
> \passhub\client\model\GenericStatusDTO cancelVoucher($order_id, $voucher_id, $note)

cancelVoucher

Required permissions: CAN_CANCEL_ORDER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Api-Key
$config = passhub\client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = passhub\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new passhub\client\Api\VoucherResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 789; // int | the internal id of order
$voucher_id = "voucher_id_example"; // string | the voucher id
$note = new \passhub\client\model\OrderNoteParamDTO(); // \passhub\client\model\OrderNoteParamDTO | the voucher note dto

try {
    $result = $apiInstance->cancelVoucher($order_id, $voucher_id, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherResourceApi->cancelVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| the internal id of order |
 **voucher_id** | **string**| the voucher id | [optional]
 **note** | [**\passhub\client\model\OrderNoteParamDTO**](../Model/OrderNoteParamDTO.md)| the voucher note dto | [optional]

### Return type

[**\passhub\client\model\GenericStatusDTO**](../Model/GenericStatusDTO.md)

### Authorization

[X-Api-Key](../../README.md#X-Api-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertVoucher**
> \passhub\client\model\JSONObject convertVoucher($old_voucher_id, $new_voucher_id)

convertVoucher

Required permissions: CAN_CONVERT_VOUCHER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Api-Key
$config = passhub\client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = passhub\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new passhub\client\Api\VoucherResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$old_voucher_id = "old_voucher_id_example"; // string | the old voucher id
$new_voucher_id = "new_voucher_id_example"; // string | the new voucher id

try {
    $result = $apiInstance->convertVoucher($old_voucher_id, $new_voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherResourceApi->convertVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **old_voucher_id** | **string**| the old voucher id |
 **new_voucher_id** | **string**| the new voucher id |

### Return type

[**\passhub\client\model\JSONObject**](../Model/JSONObject.md)

### Authorization

[X-Api-Key](../../README.md#X-Api-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateVoucher**
> \passhub\client\model\ValidationResult validateVoucher($validation_id, $vendor_id, $product_tag, $order_item_ids, $skip_expiry_check, $extra_param_dto)

[V2] Validates voucher which represents single order item or group of them.

Required permissions: CAN_VALIDATE;

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Api-Key
$config = passhub\client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = passhub\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new passhub\client\Api\VoucherResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validation_id = "validation_id_example"; // string | the voucher validation id
$vendor_id = 789; // int | the internal id of vendor
$product_tag = "product_tag_example"; // string | the product tag
$order_item_ids = array(56); // int[] | the array of order item ids
$skip_expiry_check = true; // bool | flag to skip expiry check within strategy
$extra_param_dto = new \passhub\client\model\ExtraValidationParamDTO(); // \passhub\client\model\ExtraValidationParamDTO | the validation extra params dto

try {
    $result = $apiInstance->validateVoucher($validation_id, $vendor_id, $product_tag, $order_item_ids, $skip_expiry_check, $extra_param_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherResourceApi->validateVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **validation_id** | **string**| the voucher validation id |
 **vendor_id** | **int**| the internal id of vendor |
 **product_tag** | **string**| the product tag | [optional]
 **order_item_ids** | [**int[]**](../Model/int.md)| the array of order item ids | [optional]
 **skip_expiry_check** | **bool**| flag to skip expiry check within strategy | [optional]
 **extra_param_dto** | [**\passhub\client\model\ExtraValidationParamDTO**](../Model/ExtraValidationParamDTO.md)| the validation extra params dto | [optional]

### Return type

[**\passhub\client\model\ValidationResult**](../Model/ValidationResult.md)

### Authorization

[X-Api-Key](../../README.md#X-Api-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

