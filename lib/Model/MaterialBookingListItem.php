<?php
/**
 * MaterialBookingListItem
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
 * MaterialBookingListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MaterialBookingListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MaterialBookingListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'material' => '\Swagger\Client\Model\NestedMaterialPerUnitListItem',
        'quantity' => 'string',
        'cost_price' => 'string',
        'selling_price' => 'string',
        'total_cost_price' => 'string',
        'total_selling_price' => 'string',
        'invoiced_amount' => 'string',
        'date' => 'string',
        'comment' => 'string',
        'booking_status' => 'int',
        'project' => '\Swagger\Client\Model\NestedProjectListItem',
        'project_security_link' => '\Swagger\Client\Model\NestedProjectSecurityCodeLinkListItem',
        'invoice_line' => '\Swagger\Client\Model\NestedInvoiceLineListItem',
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
        'material' => null,
        'quantity' => null,
        'cost_price' => null,
        'selling_price' => null,
        'total_cost_price' => null,
        'total_selling_price' => null,
        'invoiced_amount' => null,
        'date' => null,
        'comment' => null,
        'booking_status' => null,
        'project' => null,
        'project_security_link' => null,
        'invoice_line' => null,
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
        'material' => 'material',
        'quantity' => 'quantity',
        'cost_price' => 'costPrice',
        'selling_price' => 'sellingPrice',
        'total_cost_price' => 'totalCostPrice',
        'total_selling_price' => 'totalSellingPrice',
        'invoiced_amount' => 'invoicedAmount',
        'date' => 'date',
        'comment' => 'comment',
        'booking_status' => 'bookingStatus',
        'project' => 'project',
        'project_security_link' => 'projectSecurityLink',
        'invoice_line' => 'invoiceLine',
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
        'material' => 'setMaterial',
        'quantity' => 'setQuantity',
        'cost_price' => 'setCostPrice',
        'selling_price' => 'setSellingPrice',
        'total_cost_price' => 'setTotalCostPrice',
        'total_selling_price' => 'setTotalSellingPrice',
        'invoiced_amount' => 'setInvoicedAmount',
        'date' => 'setDate',
        'comment' => 'setComment',
        'booking_status' => 'setBookingStatus',
        'project' => 'setProject',
        'project_security_link' => 'setProjectSecurityLink',
        'invoice_line' => 'setInvoiceLine',
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
        'material' => 'getMaterial',
        'quantity' => 'getQuantity',
        'cost_price' => 'getCostPrice',
        'selling_price' => 'getSellingPrice',
        'total_cost_price' => 'getTotalCostPrice',
        'total_selling_price' => 'getTotalSellingPrice',
        'invoiced_amount' => 'getInvoicedAmount',
        'date' => 'getDate',
        'comment' => 'getComment',
        'booking_status' => 'getBookingStatus',
        'project' => 'getProject',
        'project_security_link' => 'getProjectSecurityLink',
        'invoice_line' => 'getInvoiceLine',
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
        $this->container['material'] = isset($data['material']) ? $data['material'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['cost_price'] = isset($data['cost_price']) ? $data['cost_price'] : null;
        $this->container['selling_price'] = isset($data['selling_price']) ? $data['selling_price'] : null;
        $this->container['total_cost_price'] = isset($data['total_cost_price']) ? $data['total_cost_price'] : null;
        $this->container['total_selling_price'] = isset($data['total_selling_price']) ? $data['total_selling_price'] : null;
        $this->container['invoiced_amount'] = isset($data['invoiced_amount']) ? $data['invoiced_amount'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['booking_status'] = isset($data['booking_status']) ? $data['booking_status'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['project_security_link'] = isset($data['project_security_link']) ? $data['project_security_link'] : null;
        $this->container['invoice_line'] = isset($data['invoice_line']) ? $data['invoice_line'] : null;
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
     * @param int $id The ID of this material booking.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets material
     *
     * @return \Swagger\Client\Model\NestedMaterialPerUnitListItem
     */
    public function getMaterial()
    {
        return $this->container['material'];
    }

    /**
     * Sets material
     *
     * @param \Swagger\Client\Model\NestedMaterialPerUnitListItem $material material
     *
     * @return $this
     */
    public function setMaterial($material)
    {
        $this->container['material'] = $material;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string $quantity The quantity of the booked item.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * @param string $cost_price The cost price of the booked item.
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
     * @param string $selling_price The selling price of the booked item.
     *
     * @return $this
     */
    public function setSellingPrice($selling_price)
    {
        $this->container['selling_price'] = $selling_price;

        return $this;
    }

    /**
     * Gets total_cost_price
     *
     * @return string
     */
    public function getTotalCostPrice()
    {
        return $this->container['total_cost_price'];
    }

    /**
     * Sets total_cost_price
     *
     * @param string $total_cost_price The total cost price of the booked item.
     *
     * @return $this
     */
    public function setTotalCostPrice($total_cost_price)
    {
        $this->container['total_cost_price'] = $total_cost_price;

        return $this;
    }

    /**
     * Gets total_selling_price
     *
     * @return string
     */
    public function getTotalSellingPrice()
    {
        return $this->container['total_selling_price'];
    }

    /**
     * Sets total_selling_price
     *
     * @param string $total_selling_price The total selling price of the booked item.
     *
     * @return $this
     */
    public function setTotalSellingPrice($total_selling_price)
    {
        $this->container['total_selling_price'] = $total_selling_price;

        return $this;
    }

    /**
     * Gets invoiced_amount
     *
     * @return string
     */
    public function getInvoicedAmount()
    {
        return $this->container['invoiced_amount'];
    }

    /**
     * Sets invoiced_amount
     *
     * @param string $invoiced_amount The invoiced amount of the booked item.
     *
     * @return $this
     */
    public function setInvoicedAmount($invoiced_amount)
    {
        $this->container['invoiced_amount'] = $invoiced_amount;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date The log date of the booked item.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment The comment associated with this booked item.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets booking_status
     *
     * @return int
     */
    public function getBookingStatus()
    {
        return $this->container['booking_status'];
    }

    /**
     * Sets booking_status
     *
     * @param int $booking_status The status of this booking. 0 = Registered, 1 = Invoiced, 2 = Not billable, 3 = Credited.
     *
     * @return $this
     */
    public function setBookingStatus($booking_status)
    {
        $this->container['booking_status'] = $booking_status;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Swagger\Client\Model\NestedProjectListItem
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Swagger\Client\Model\NestedProjectListItem $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets project_security_link
     *
     * @return \Swagger\Client\Model\NestedProjectSecurityCodeLinkListItem
     */
    public function getProjectSecurityLink()
    {
        return $this->container['project_security_link'];
    }

    /**
     * Sets project_security_link
     *
     * @param \Swagger\Client\Model\NestedProjectSecurityCodeLinkListItem $project_security_link project_security_link
     *
     * @return $this
     */
    public function setProjectSecurityLink($project_security_link)
    {
        $this->container['project_security_link'] = $project_security_link;

        return $this;
    }

    /**
     * Gets invoice_line
     *
     * @return \Swagger\Client\Model\NestedInvoiceLineListItem
     */
    public function getInvoiceLine()
    {
        return $this->container['invoice_line'];
    }

    /**
     * Sets invoice_line
     *
     * @param \Swagger\Client\Model\NestedInvoiceLineListItem $invoice_line invoice_line
     *
     * @return $this
     */
    public function setInvoiceLine($invoice_line)
    {
        $this->container['invoice_line'] = $invoice_line;

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


