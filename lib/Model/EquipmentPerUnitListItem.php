<?php
/**
 * EquipmentPerUnitListItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bouw7 API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * EquipmentPerUnitListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EquipmentPerUnitListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EquipmentPerUnitListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'cost_price' => 'string',
        'selling_price' => 'string',
        'unit' => '\Swagger\Client\Model\NestedEquipmentUnitListItem',
        'equipment' => '\Swagger\Client\Model\NestedEquipmentListItem',
        'associated_employee_names' => 'string',
        'created_by' => '\Swagger\Client\Model\BlameableUser',
        'created_at' => 'string',
        'updated_by' => '\Swagger\Client\Model\BlameableUser',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'cost_price' => null,
        'selling_price' => null,
        'unit' => null,
        'equipment' => null,
        'associated_employee_names' => null,
        'created_by' => null,
        'created_at' => null,
        'updated_by' => null,
        'updated_at' => null
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
        'id' => 'id',
        'cost_price' => 'costPrice',
        'selling_price' => 'sellingPrice',
        'unit' => 'unit',
        'equipment' => 'equipment',
        'associated_employee_names' => 'associatedEmployeeNames',
        'created_by' => 'createdBy',
        'created_at' => 'createdAt',
        'updated_by' => 'updatedBy',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'cost_price' => 'setCostPrice',
        'selling_price' => 'setSellingPrice',
        'unit' => 'setUnit',
        'equipment' => 'setEquipment',
        'associated_employee_names' => 'setAssociatedEmployeeNames',
        'created_by' => 'setCreatedBy',
        'created_at' => 'setCreatedAt',
        'updated_by' => 'setUpdatedBy',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'cost_price' => 'getCostPrice',
        'selling_price' => 'getSellingPrice',
        'unit' => 'getUnit',
        'equipment' => 'getEquipment',
        'associated_employee_names' => 'getAssociatedEmployeeNames',
        'created_by' => 'getCreatedBy',
        'created_at' => 'getCreatedAt',
        'updated_by' => 'getUpdatedBy',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['cost_price'] = isset($data['cost_price']) ? $data['cost_price'] : null;
        $this->container['selling_price'] = isset($data['selling_price']) ? $data['selling_price'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['equipment'] = isset($data['equipment']) ? $data['equipment'] : null;
        $this->container['associated_employee_names'] = isset($data['associated_employee_names']) ? $data['associated_employee_names'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_by'] = isset($data['updated_by']) ? $data['updated_by'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
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
     * @param int $id The ID of this bookable unit.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets cost_price
     *
     * @return string
     */
    public function getCostPrice()
    {
        return $this->container['cost_price'];
    }

    /**
     * Sets cost_price
     *
     * @param string $cost_price Cost price of this bookable unit.
     *
     * @return $this
     */
    public function setCostPrice($cost_price)
    {
        $this->container['cost_price'] = $cost_price;

        return $this;
    }

    /**
     * Gets selling_price
     *
     * @return string
     */
    public function getSellingPrice()
    {
        return $this->container['selling_price'];
    }

    /**
     * Sets selling_price
     *
     * @param string $selling_price Selling price of this bookable unit.
     *
     * @return $this
     */
    public function setSellingPrice($selling_price)
    {
        $this->container['selling_price'] = $selling_price;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return \Swagger\Client\Model\NestedEquipmentUnitListItem
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param \Swagger\Client\Model\NestedEquipmentUnitListItem $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets equipment
     *
     * @return \Swagger\Client\Model\NestedEquipmentListItem
     */
    public function getEquipment()
    {
        return $this->container['equipment'];
    }

    /**
     * Sets equipment
     *
     * @param \Swagger\Client\Model\NestedEquipmentListItem $equipment equipment
     *
     * @return $this
     */
    public function setEquipment($equipment)
    {
        $this->container['equipment'] = $equipment;

        return $this;
    }

    /**
     * Gets associated_employee_names
     *
     * @return string
     */
    public function getAssociatedEmployeeNames()
    {
        return $this->container['associated_employee_names'];
    }

    /**
     * Sets associated_employee_names
     *
     * @param string $associated_employee_names All employee full names related to this equipment item.
     *
     * @return $this
     */
    public function setAssociatedEmployeeNames($associated_employee_names)
    {
        $this->container['associated_employee_names'] = $associated_employee_names;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return \Swagger\Client\Model\BlameableUser
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \Swagger\Client\Model\BlameableUser $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at The creation date of the object in ATOM/ISO-8601 format
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_by
     *
     * @return \Swagger\Client\Model\BlameableUser
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param \Swagger\Client\Model\BlameableUser $updated_by updated_by
     *
     * @return $this
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at The creation date of the object in ATOM/ISO-8601 format
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


