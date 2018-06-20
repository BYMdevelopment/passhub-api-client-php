<?php
/**
 * OrderRecordExtendDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  passhub\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PassHub API
 *
 * PassHub API documentation
 *
 * OpenAPI spec version: 1.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace passhub\client\model;

use \ArrayAccess;
use \passhub\client\ObjectSerializer;

/**
 * OrderRecordExtendDTO Class Doc Comment
 *
 * @category Class
 * @package  passhub\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderRecordExtendDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderRecordExtendDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'double',
        'cell_phone_number' => 'string',
        'created' => 'string',
        'created_by' => '\passhub\client\model\UserDTO',
        'customer_email' => 'string',
        'customer_id' => 'string',
        'delivery' => '\passhub\client\model\DeliveryDTO',
        'delivery_method' => 'string',
        'groups' => '\passhub\client\model\GroupEntryDTO[]',
        'id' => 'int',
        'is_test' => 'bool',
        'is_validated' => 'bool',
        'order_id' => 'string',
        'originator_order_id' => 'string',
        'originiator' => 'string',
        'vendor_order_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => 'double',
        'cell_phone_number' => null,
        'created' => null,
        'created_by' => null,
        'customer_email' => null,
        'customer_id' => null,
        'delivery' => null,
        'delivery_method' => null,
        'groups' => null,
        'id' => 'int64',
        'is_test' => null,
        'is_validated' => null,
        'order_id' => null,
        'originator_order_id' => null,
        'originiator' => null,
        'vendor_order_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'cell_phone_number' => 'cellPhoneNumber',
        'created' => 'created',
        'created_by' => 'createdBy',
        'customer_email' => 'customerEmail',
        'customer_id' => 'customerId',
        'delivery' => 'delivery',
        'delivery_method' => 'deliveryMethod',
        'groups' => 'groups',
        'id' => 'id',
        'is_test' => 'isTest',
        'is_validated' => 'isValidated',
        'order_id' => 'orderId',
        'originator_order_id' => 'originatorOrderId',
        'originiator' => 'originiator',
        'vendor_order_id' => 'vendorOrderId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'cell_phone_number' => 'setCellPhoneNumber',
        'created' => 'setCreated',
        'created_by' => 'setCreatedBy',
        'customer_email' => 'setCustomerEmail',
        'customer_id' => 'setCustomerId',
        'delivery' => 'setDelivery',
        'delivery_method' => 'setDeliveryMethod',
        'groups' => 'setGroups',
        'id' => 'setId',
        'is_test' => 'setIsTest',
        'is_validated' => 'setIsValidated',
        'order_id' => 'setOrderId',
        'originator_order_id' => 'setOriginatorOrderId',
        'originiator' => 'setOriginiator',
        'vendor_order_id' => 'setVendorOrderId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'cell_phone_number' => 'getCellPhoneNumber',
        'created' => 'getCreated',
        'created_by' => 'getCreatedBy',
        'customer_email' => 'getCustomerEmail',
        'customer_id' => 'getCustomerId',
        'delivery' => 'getDelivery',
        'delivery_method' => 'getDeliveryMethod',
        'groups' => 'getGroups',
        'id' => 'getId',
        'is_test' => 'getIsTest',
        'is_validated' => 'getIsValidated',
        'order_id' => 'getOrderId',
        'originator_order_id' => 'getOriginatorOrderId',
        'originiator' => 'getOriginiator',
        'vendor_order_id' => 'getVendorOrderId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const DELIVERY_METHOD_DIGITAL = 'DIGITAL';
    const DELIVERY_METHOD_SHIPPING = 'SHIPPING';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryMethodAllowableValues()
    {
        return [
            self::DELIVERY_METHOD_DIGITAL,
            self::DELIVERY_METHOD_SHIPPING,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['cell_phone_number'] = isset($data['cell_phone_number']) ? $data['cell_phone_number'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['customer_email'] = isset($data['customer_email']) ? $data['customer_email'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['delivery'] = isset($data['delivery']) ? $data['delivery'] : null;
        $this->container['delivery_method'] = isset($data['delivery_method']) ? $data['delivery_method'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_test'] = isset($data['is_test']) ? $data['is_test'] : null;
        $this->container['is_validated'] = isset($data['is_validated']) ? $data['is_validated'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['originator_order_id'] = isset($data['originator_order_id']) ? $data['originator_order_id'] : null;
        $this->container['originiator'] = isset($data['originiator']) ? $data['originiator'] : null;
        $this->container['vendor_order_id'] = isset($data['vendor_order_id']) ? $data['vendor_order_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDeliveryMethodAllowableValues();
        if (!in_array($this->container['delivery_method'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'delivery_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowedValues = $this->getDeliveryMethodAllowableValues();
        if (!in_array($this->container['delivery_method'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets cell_phone_number
     *
     * @return string
     */
    public function getCellPhoneNumber()
    {
        return $this->container['cell_phone_number'];
    }

    /**
     * Sets cell_phone_number
     *
     * @param string $cell_phone_number cell_phone_number
     *
     * @return $this
     */
    public function setCellPhoneNumber($cell_phone_number)
    {
        $this->container['cell_phone_number'] = $cell_phone_number;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return \passhub\client\model\UserDTO
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \passhub\client\model\UserDTO $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets customer_email
     *
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->container['customer_email'];
    }

    /**
     * Sets customer_email
     *
     * @param string $customer_email customer_email
     *
     * @return $this
     */
    public function setCustomerEmail($customer_email)
    {
        $this->container['customer_email'] = $customer_email;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id customer_id
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \passhub\client\model\DeliveryDTO
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \passhub\client\model\DeliveryDTO $delivery delivery
     *
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets delivery_method
     *
     * @return string
     */
    public function getDeliveryMethod()
    {
        return $this->container['delivery_method'];
    }

    /**
     * Sets delivery_method
     *
     * @param string $delivery_method delivery_method
     *
     * @return $this
     */
    public function setDeliveryMethod($delivery_method)
    {
        $allowedValues = $this->getDeliveryMethodAllowableValues();
        if (!is_null($delivery_method) && !in_array($delivery_method, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'delivery_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery_method'] = $delivery_method;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \passhub\client\model\GroupEntryDTO[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \passhub\client\model\GroupEntryDTO[] $groups groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_test
     *
     * @return bool
     */
    public function getIsTest()
    {
        return $this->container['is_test'];
    }

    /**
     * Sets is_test
     *
     * @param bool $is_test is_test
     *
     * @return $this
     */
    public function setIsTest($is_test)
    {
        $this->container['is_test'] = $is_test;

        return $this;
    }

    /**
     * Gets is_validated
     *
     * @return bool
     */
    public function getIsValidated()
    {
        return $this->container['is_validated'];
    }

    /**
     * Sets is_validated
     *
     * @param bool $is_validated is_validated
     *
     * @return $this
     */
    public function setIsValidated($is_validated)
    {
        $this->container['is_validated'] = $is_validated;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets originator_order_id
     *
     * @return string
     */
    public function getOriginatorOrderId()
    {
        return $this->container['originator_order_id'];
    }

    /**
     * Sets originator_order_id
     *
     * @param string $originator_order_id originator_order_id
     *
     * @return $this
     */
    public function setOriginatorOrderId($originator_order_id)
    {
        $this->container['originator_order_id'] = $originator_order_id;

        return $this;
    }

    /**
     * Gets originiator
     *
     * @return string
     */
    public function getOriginiator()
    {
        return $this->container['originiator'];
    }

    /**
     * Sets originiator
     *
     * @param string $originiator originiator
     *
     * @return $this
     */
    public function setOriginiator($originiator)
    {
        $this->container['originiator'] = $originiator;

        return $this;
    }

    /**
     * Gets vendor_order_id
     *
     * @return string
     */
    public function getVendorOrderId()
    {
        return $this->container['vendor_order_id'];
    }

    /**
     * Sets vendor_order_id
     *
     * @param string $vendor_order_id vendor_order_id
     *
     * @return $this
     */
    public function setVendorOrderId($vendor_order_id)
    {
        $this->container['vendor_order_id'] = $vendor_order_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


