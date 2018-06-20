# PassHub Api  

PassHub API documentation

Access PassHub with Php. This module offers high level and low level calls to the API.

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
      "sightseeingtech/passhub-api": "1.0"
   }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to///vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

try {
    $config = passhub\client\Configuration::getDefaultConfiguration();

    $config->setApiKey('X-Api-Key', 'YOUR_API_KEY');
    $config->setHost('YOUR_HOST');

    $orderRecordResource = new passhub\client\api\OrderRecordResourceApi(
        new GuzzleHttp\Client(['verify' => false]),
        $config
    );

    $item = new passhub\client\model\OrderItem([
        'customer_name' => 'My Name',
        'customer_type' => 'ADULT',
        'sku' => '1GL5_Child',
        'quantity' => 1,
        'price_paid' => 55.2,
        'tour_date' => new DateTime('2018-06-10')
    ]);

    $group = new passhub\client\model\GroupEntryDTO([
        'group_name' => 'TESTSDK_GROUP_NAME',
        'voucher_per_person' => true,
        'items' => [$item],
    ]);

    $order = new passhub\client\model\OrderRecordDTO([
        'amount' => 110.4,
        'customer_email' => 'test@test.com',
        'vendor_order_id' => 'TESTSDK_ORDER_1',
        'originiator' => 'TESTSDK_ORIGINATOR',
        'groups' => [$group],
    ]);

    $createdOrder = $orderRecordResource->createOrderRecord($order);

    echo $createdOrder->getId();
} catch (Exception $e) {
    print_r($e->getMessage());
}

?>
```

## Documentation for API Endpoints

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrderRecordResourceApi* | [**createOrderRecord**](docs/Api/OrderRecordResourceApi.md#createorderrecord) | **POST** /api/v1/orderRecords | createOrderRecord
*OrderRecordResourceApi* | [**getAllOrderRecords**](docs/Api/OrderRecordResourceApi.md#getallorderrecords) | **GET** /api/v2/orderRecords | getAllOrderRecords
*OrderRecordResourceApi* | [**getOrderRecord**](docs/Api/OrderRecordResourceApi.md#getorderrecord) | **GET** /api/v1/orderRecords/{id} | getOrderRecord
*OrderRecordResourceApi* | [**mergeVouchers**](docs/Api/OrderRecordResourceApi.md#mergevouchers) | **POST** /api/v1/orderRecords/mergeVouchers | mergeVouchers
*OrderRecordResourceApi* | [**updateOrderRecord**](docs/Api/OrderRecordResourceApi.md#updateorderrecord) | **PUT** /api/v1/orderRecords | updateOrderRecord
*ProductResourceApi* | [**findProductsByVendor**](docs/Api/ProductResourceApi.md#findproductsbyvendor) | **GET** /api/v1/products/vendor/{vendorId} | findProductsByVendor
*ProductResourceApi* | [**getAllProducts**](docs/Api/ProductResourceApi.md#getallproducts) | **GET** /api/v2/products | getAllProducts
*VendorResourceApi* | [**getAllVendors**](docs/Api/VendorResourceApi.md#getallvendors) | **GET** /api/v2/vendors | getAllVendors
*VoucherResourceApi* | [**cancelValidation**](docs/Api/VoucherResourceApi.md#cancelvalidation) | **POST** /api/v2/voucher/validate/cancel | [V2] Cancel validation for the voucher
*VoucherResourceApi* | [**cancelVoucher**](docs/Api/VoucherResourceApi.md#cancelvoucher) | **POST** /api/v1/voucher/cancel | cancelVoucher
*VoucherResourceApi* | [**convertVoucher**](docs/Api/VoucherResourceApi.md#convertvoucher) | **POST** /api/v1/voucher/convert | convertVoucher
*VoucherResourceApi* | [**validateVoucher**](docs/Api/VoucherResourceApi.md#validatevoucher) | **POST** /api/v2/voucher/validate | [V2] Validates voucher which represents single order item or group of them.


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Condition](docs/Model/Condition.md)
 - [DeliveryDTO](docs/Model/DeliveryDTO.md)
 - [ExtraValidationParamDTO](docs/Model/ExtraValidationParamDTO.md)
 - [GenericStatusDTO](docs/Model/GenericStatusDTO.md)
 - [GroupEntryDTO](docs/Model/GroupEntryDTO.md)
 - [OrderItem](docs/Model/OrderItem.md)
 - [OrderNoteParamDTO](docs/Model/OrderNoteParamDTO.md)
 - [OrderRecordDTO](docs/Model/OrderRecordDTO.md)
 - [OrderRecordExtendDTO](docs/Model/OrderRecordExtendDTO.md)
 - [ProductDTO](docs/Model/ProductDTO.md)
 - [ProductSuggestion](docs/Model/ProductSuggestion.md)
 - [RechargeProductGroup](docs/Model/RechargeProductGroup.md)
 - [RechargePrompt](docs/Model/RechargePrompt.md)
 - [RechargePromptEntry](docs/Model/RechargePromptEntry.md)
 - [Rule](docs/Model/Rule.md)
 - [SimpleConnectedProductDTO](docs/Model/SimpleConnectedProductDTO.md)
 - [SimpleMetadata](docs/Model/SimpleMetadata.md)
 - [SimpleProductConnectionDTO](docs/Model/SimpleProductConnectionDTO.md)
 - [SimpleProductDTO](docs/Model/SimpleProductDTO.md)
 - [SuggestedOrder](docs/Model/SuggestedOrder.md)
 - [SuggestedOrderItem](docs/Model/SuggestedOrderItem.md)
 - [UniversalAttribute](docs/Model/UniversalAttribute.md)
 - [UserCompactDTO](docs/Model/UserCompactDTO.md)
 - [UserDTO](docs/Model/UserDTO.md)
 - [ValidationItemStatusDTO](docs/Model/ValidationItemStatusDTO.md)
 - [ValidationResult](docs/Model/ValidationResult.md)
 - [ValidationResultEntry](docs/Model/ValidationResultEntry.md)
 - [VendorDTO](docs/Model/VendorDTO.md)
 - [VendorDetailDTO](docs/Model/VendorDetailDTO.md)
 - [VoucherPattern](docs/Model/VoucherPattern.md)


## Documentation For Authorization


## X-Api-Key

- **Type**: API key
- **API key parameter name**: X-Api-Key
- **Location**: HTTP header
