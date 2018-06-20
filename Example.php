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


