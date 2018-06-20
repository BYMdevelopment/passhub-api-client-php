<?php
/**
 * ValidationResultEntry
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
 * ValidationResultEntry Class Doc Comment
 *
 * @category Class
 * @package  passhub\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ValidationResultEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ValidationResultEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_name' => 'string',
        'customer_type' => 'string',
        'customer_uid' => 'string',
        'product_name' => 'string',
        'product_sku' => 'string',
        'quantity' => 'int',
        'status' => '\passhub\client\model\ValidationItemStatusDTO'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer_name' => null,
        'customer_type' => null,
        'customer_uid' => null,
        'product_name' => null,
        'product_sku' => null,
        'quantity' => 'int32',
        'status' => null
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
        'customer_name' => 'customerName',
        'customer_type' => 'customerType',
        'customer_uid' => 'customerUid',
        'product_name' => 'productName',
        'product_sku' => 'productSku',
        'quantity' => 'quantity',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_name' => 'setCustomerName',
        'customer_type' => 'setCustomerType',
        'customer_uid' => 'setCustomerUid',
        'product_name' => 'setProductName',
        'product_sku' => 'setProductSku',
        'quantity' => 'setQuantity',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_name' => 'getCustomerName',
        'customer_type' => 'getCustomerType',
        'customer_uid' => 'getCustomerUid',
        'product_name' => 'getProductName',
        'product_sku' => 'getProductSku',
        'quantity' => 'getQuantity',
        'status' => 'getStatus'
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

    const CUSTOMER_TYPE_ADULT = 'ADULT';
    const CUSTOMER_TYPE_CHILD = 'CHILD';
    const CUSTOMER_TYPE_SENIOR = 'SENIOR';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomerTypeAllowableValues()
    {
        return [
            self::CUSTOMER_TYPE_ADULT,
            self::CUSTOMER_TYPE_CHILD,
            self::CUSTOMER_TYPE_SENIOR,
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
        $this->container['customer_name'] = isset($data['customer_name']) ? $data['customer_name'] : null;
        $this->container['customer_type'] = isset($data['customer_type']) ? $data['customer_type'] : null;
        $this->container['customer_uid'] = isset($data['customer_uid']) ? $data['customer_uid'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        $this->container['product_sku'] = isset($data['product_sku']) ? $data['product_sku'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCustomerTypeAllowableValues();
        if (!in_array($this->container['customer_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'customer_type', must be one of '%s'",
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

        $allowedValues = $this->getCustomerTypeAllowableValues();
        if (!in_array($this->container['customer_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets customer_name
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string $customer_name customer_name
     *
     * @return $this
     */
    public function setCustomerName($customer_name)
    {
        $this->container['customer_name'] = $customer_name;

        return $this;
    }

    /**
     * Gets customer_type
     *
     * @return string
     */
    public function getCustomerType()
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type
     *
     * @param string $customer_type customer_type
     *
     * @return $this
     */
    public function setCustomerType($customer_type)
    {
        $allowedValues = $this->getCustomerTypeAllowableValues();
        if (!is_null($customer_type) && !in_array($customer_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'customer_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['customer_type'] = $customer_type;

        return $this;
    }

    /**
     * Gets customer_uid
     *
     * @return string
     */
    public function getCustomerUid()
    {
        return $this->container['customer_uid'];
    }

    /**
     * Sets customer_uid
     *
     * @param string $customer_uid customer_uid
     *
     * @return $this
     */
    public function setCustomerUid($customer_uid)
    {
        $this->container['customer_uid'] = $customer_uid;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string $product_name product_name
     *
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets product_sku
     *
     * @return string
     */
    public function getProductSku()
    {
        return $this->container['product_sku'];
    }

    /**
     * Sets product_sku
     *
     * @param string $product_sku product_sku
     *
     * @return $this
     */
    public function setProductSku($product_sku)
    {
        $this->container['product_sku'] = $product_sku;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \passhub\client\model\ValidationItemStatusDTO
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \passhub\client\model\ValidationItemStatusDTO $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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

