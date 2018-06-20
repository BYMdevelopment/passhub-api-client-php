<?php
/**
 * DeliveryDTO
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
 * DeliveryDTO Class Doc Comment
 *
 * @category Class
 * @package  passhub\client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeliveryDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeliveryDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => '\passhub\client\model\Address',
        'carrier' => 'string',
        'cost' => 'double',
        'error_code' => 'string',
        'error_message' => 'string',
        'id' => 'int',
        'mode' => 'string',
        'status' => 'string',
        'tracking_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => null,
        'carrier' => null,
        'cost' => 'double',
        'error_code' => null,
        'error_message' => null,
        'id' => 'int64',
        'mode' => null,
        'status' => null,
        'tracking_number' => null
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
        'address' => 'address',
        'carrier' => 'carrier',
        'cost' => 'cost',
        'error_code' => 'errorCode',
        'error_message' => 'errorMessage',
        'id' => 'id',
        'mode' => 'mode',
        'status' => 'status',
        'tracking_number' => 'trackingNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'carrier' => 'setCarrier',
        'cost' => 'setCost',
        'error_code' => 'setErrorCode',
        'error_message' => 'setErrorMessage',
        'id' => 'setId',
        'mode' => 'setMode',
        'status' => 'setStatus',
        'tracking_number' => 'setTrackingNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'carrier' => 'getCarrier',
        'cost' => 'getCost',
        'error_code' => 'getErrorCode',
        'error_message' => 'getErrorMessage',
        'id' => 'getId',
        'mode' => 'getMode',
        'status' => 'getStatus',
        'tracking_number' => 'getTrackingNumber'
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

    const CARRIER_FEDEX = 'FEDEX';
    const MODE_FEDEX_GROUND = 'FEDEX_GROUND';
    const MODE_FEDEX_2_DAY = 'FEDEX_2_DAY';
    const MODE_FEDEX_2_DAY_AM = 'FEDEX_2_DAY_AM';
    const MODE_FEDEX_EXPRESS_SAVER = 'FEDEX_EXPRESS_SAVER';
    const MODE_STANDARD_OVERNIGHT = 'STANDARD_OVERNIGHT';
    const MODE_FIRST_OVERNIGHT = 'FIRST_OVERNIGHT';
    const MODE_PRIORITY_OVERNIGHT = 'PRIORITY_OVERNIGHT';
    const MODE_INTERNATIONAL_ECONOMY = 'INTERNATIONAL_ECONOMY';
    const MODE_INTERNATIONAL_FIRST = 'INTERNATIONAL_FIRST';
    const MODE_INTERNATIONAL_PRIORITY = 'INTERNATIONAL_PRIORITY';
    const MODE_GROUND_HOME_DELIVERY = 'GROUND_HOME_DELIVERY';
    const MODE_SMART_POST = 'SMART_POST';
    const STATUS_ASSIGN_REQUIRED = 'ASSIGN_REQUIRED';
    const STATUS_SHIPMENT_CREATION = 'SHIPMENT_CREATION';
    const STATUS_LABEL_PRINTING = 'LABEL_PRINTING';
    const STATUS_PICKUP_REQUIRED = 'PICKUP_REQUIRED';
    const STATUS_PROCESSED = 'PROCESSED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCarrierAllowableValues()
    {
        return [
            self::CARRIER_FEDEX,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_FEDEX_GROUND,
            self::MODE_FEDEX_2_DAY,
            self::MODE_FEDEX_2_DAY_AM,
            self::MODE_FEDEX_EXPRESS_SAVER,
            self::MODE_STANDARD_OVERNIGHT,
            self::MODE_FIRST_OVERNIGHT,
            self::MODE_PRIORITY_OVERNIGHT,
            self::MODE_INTERNATIONAL_ECONOMY,
            self::MODE_INTERNATIONAL_FIRST,
            self::MODE_INTERNATIONAL_PRIORITY,
            self::MODE_GROUND_HOME_DELIVERY,
            self::MODE_SMART_POST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ASSIGN_REQUIRED,
            self::STATUS_SHIPMENT_CREATION,
            self::STATUS_LABEL_PRINTING,
            self::STATUS_PICKUP_REQUIRED,
            self::STATUS_PROCESSED,
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCarrierAllowableValues();
        if (!in_array($this->container['carrier'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'carrier', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getModeAllowableValues();
        if (!in_array($this->container['mode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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

        $allowedValues = $this->getCarrierAllowableValues();
        if (!in_array($this->container['carrier'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getModeAllowableValues();
        if (!in_array($this->container['mode'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets address
     *
     * @return \passhub\client\model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \passhub\client\model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $allowedValues = $this->getCarrierAllowableValues();
        if (!is_null($carrier) && !in_array($carrier, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'carrier', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return double
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param double $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param string $error_code error_code
     *
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message error_message
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

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
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($mode) && !in_array($mode, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number tracking_number
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

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

