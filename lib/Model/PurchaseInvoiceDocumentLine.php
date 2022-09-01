<?php
/**
 * PurchaseInvoiceDocumentLine
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
 * PurchaseInvoiceDocumentLine Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseInvoiceDocumentLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseInvoiceDocumentLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'description' => 'string',
        'quantity' => 'string',
        'unit_name' => 'string',
        'unit_price' => 'string',
        'gross_price' => 'string',
        'sub_total' => 'string',
        'vat_tariff_percentage' => 'string',
        'vat_tariff_id' => 'int',
        'ledger' => 'string',
        'cost_center' => 'string',
        'delivery_ticket' => '\Swagger\Client\Model\DeliveryTicketWithProjectDetails',
        'model_id' => 'int',
        'model_type' => 'int',
        'create_delivery_ticket_for_remaining_costs' => 'bool',
        'can_be_edited' => 'bool',
        'created_at' => 'string',
        'created_by' => 'string',
        'updated_at' => 'string',
        'updated_by' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'description' => null,
        'quantity' => null,
        'unit_name' => null,
        'unit_price' => null,
        'gross_price' => null,
        'sub_total' => null,
        'vat_tariff_percentage' => null,
        'vat_tariff_id' => null,
        'ledger' => null,
        'cost_center' => null,
        'delivery_ticket' => null,
        'model_id' => null,
        'model_type' => null,
        'create_delivery_ticket_for_remaining_costs' => null,
        'can_be_edited' => null,
        'created_at' => null,
        'created_by' => null,
        'updated_at' => null,
        'updated_by' => null
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
        'description' => 'description',
        'quantity' => 'quantity',
        'unit_name' => 'unitName',
        'unit_price' => 'unitPrice',
        'gross_price' => 'grossPrice',
        'sub_total' => 'subTotal',
        'vat_tariff_percentage' => 'vatTariffPercentage',
        'vat_tariff_id' => 'vatTariffId',
        'ledger' => 'ledger',
        'cost_center' => 'costCenter',
        'delivery_ticket' => 'deliveryTicket',
        'model_id' => 'modelId',
        'model_type' => 'modelType',
        'create_delivery_ticket_for_remaining_costs' => 'createDeliveryTicketForRemainingCosts',
        'can_be_edited' => 'canBeEdited',
        'created_at' => 'createdAt',
        'created_by' => 'createdBy',
        'updated_at' => 'updatedAt',
        'updated_by' => 'updatedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'description' => 'setDescription',
        'quantity' => 'setQuantity',
        'unit_name' => 'setUnitName',
        'unit_price' => 'setUnitPrice',
        'gross_price' => 'setGrossPrice',
        'sub_total' => 'setSubTotal',
        'vat_tariff_percentage' => 'setVatTariffPercentage',
        'vat_tariff_id' => 'setVatTariffId',
        'ledger' => 'setLedger',
        'cost_center' => 'setCostCenter',
        'delivery_ticket' => 'setDeliveryTicket',
        'model_id' => 'setModelId',
        'model_type' => 'setModelType',
        'create_delivery_ticket_for_remaining_costs' => 'setCreateDeliveryTicketForRemainingCosts',
        'can_be_edited' => 'setCanBeEdited',
        'created_at' => 'setCreatedAt',
        'created_by' => 'setCreatedBy',
        'updated_at' => 'setUpdatedAt',
        'updated_by' => 'setUpdatedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'description' => 'getDescription',
        'quantity' => 'getQuantity',
        'unit_name' => 'getUnitName',
        'unit_price' => 'getUnitPrice',
        'gross_price' => 'getGrossPrice',
        'sub_total' => 'getSubTotal',
        'vat_tariff_percentage' => 'getVatTariffPercentage',
        'vat_tariff_id' => 'getVatTariffId',
        'ledger' => 'getLedger',
        'cost_center' => 'getCostCenter',
        'delivery_ticket' => 'getDeliveryTicket',
        'model_id' => 'getModelId',
        'model_type' => 'getModelType',
        'create_delivery_ticket_for_remaining_costs' => 'getCreateDeliveryTicketForRemainingCosts',
        'can_be_edited' => 'getCanBeEdited',
        'created_at' => 'getCreatedAt',
        'created_by' => 'getCreatedBy',
        'updated_at' => 'getUpdatedAt',
        'updated_by' => 'getUpdatedBy'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit_name'] = isset($data['unit_name']) ? $data['unit_name'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['gross_price'] = isset($data['gross_price']) ? $data['gross_price'] : null;
        $this->container['sub_total'] = isset($data['sub_total']) ? $data['sub_total'] : null;
        $this->container['vat_tariff_percentage'] = isset($data['vat_tariff_percentage']) ? $data['vat_tariff_percentage'] : null;
        $this->container['vat_tariff_id'] = isset($data['vat_tariff_id']) ? $data['vat_tariff_id'] : null;
        $this->container['ledger'] = isset($data['ledger']) ? $data['ledger'] : null;
        $this->container['cost_center'] = isset($data['cost_center']) ? $data['cost_center'] : null;
        $this->container['delivery_ticket'] = isset($data['delivery_ticket']) ? $data['delivery_ticket'] : null;
        $this->container['model_id'] = isset($data['model_id']) ? $data['model_id'] : null;
        $this->container['model_type'] = isset($data['model_type']) ? $data['model_type'] : null;
        $this->container['create_delivery_ticket_for_remaining_costs'] = isset($data['create_delivery_ticket_for_remaining_costs']) ? $data['create_delivery_ticket_for_remaining_costs'] : null;
        $this->container['can_be_edited'] = isset($data['can_be_edited']) ? $data['can_be_edited'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['updated_by'] = isset($data['updated_by']) ? $data['updated_by'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if ($this->container['sub_total'] === null) {
            $invalidProperties[] = "'sub_total' can't be null";
        }
        if ($this->container['vat_tariff_id'] === null) {
            $invalidProperties[] = "'vat_tariff_id' can't be null";
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
     * @param int $id The ID of the purchase invoice line. Must be omitted to create a new purchase invoice line.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of the purchase invoice line.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if ((mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling PurchaseInvoiceDocumentLine., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

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
     * @param string $quantity The unit quantity of the purchase invoice line.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_name
     *
     * @return string
     */
    public function getUnitName()
    {
        return $this->container['unit_name'];
    }

    /**
     * Sets unit_name
     *
     * @param string $unit_name The name of the unit in the purchase invoice line.
     *
     * @return $this
     */
    public function setUnitName($unit_name)
    {
        $this->container['unit_name'] = $unit_name;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param string $unit_price The unit price of the purchase invoice line.
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets gross_price
     *
     * @return string
     */
    public function getGrossPrice()
    {
        return $this->container['gross_price'];
    }

    /**
     * Sets gross_price
     *
     * @param string $gross_price The gross price of the purchase invoice line.
     *
     * @return $this
     */
    public function setGrossPrice($gross_price)
    {
        $this->container['gross_price'] = $gross_price;

        return $this;
    }

    /**
     * Gets sub_total
     *
     * @return string
     */
    public function getSubTotal()
    {
        return $this->container['sub_total'];
    }

    /**
     * Sets sub_total
     *
     * @param string $sub_total The sub-total price of the purchase invoice line.
     *
     * @return $this
     */
    public function setSubTotal($sub_total)
    {
        $this->container['sub_total'] = $sub_total;

        return $this;
    }

    /**
     * Gets vat_tariff_percentage
     *
     * @return string
     */
    public function getVatTariffPercentage()
    {
        return $this->container['vat_tariff_percentage'];
    }

    /**
     * Sets vat_tariff_percentage
     *
     * @param string $vat_tariff_percentage The VAT-tariff percentage used on the purchase invoice line. Must be set to 0 if VAT is shifted.
     *
     * @return $this
     */
    public function setVatTariffPercentage($vat_tariff_percentage)
    {
        $this->container['vat_tariff_percentage'] = $vat_tariff_percentage;

        return $this;
    }

    /**
     * Gets vat_tariff_id
     *
     * @return int
     */
    public function getVatTariffId()
    {
        return $this->container['vat_tariff_id'];
    }

    /**
     * Sets vat_tariff_id
     *
     * @param int $vat_tariff_id The VAT-tariff ID used on the purchase invoice line.
     *
     * @return $this
     */
    public function setVatTariffId($vat_tariff_id)
    {
        $this->container['vat_tariff_id'] = $vat_tariff_id;

        return $this;
    }

    /**
     * Gets ledger
     *
     * @return string
     */
    public function getLedger()
    {
        return $this->container['ledger'];
    }

    /**
     * Sets ledger
     *
     * @param string $ledger A reference to the ledger of the purchase invoice line.
     *
     * @return $this
     */
    public function setLedger($ledger)
    {
        $this->container['ledger'] = $ledger;

        return $this;
    }

    /**
     * Gets cost_center
     *
     * @return string
     */
    public function getCostCenter()
    {
        return $this->container['cost_center'];
    }

    /**
     * Sets cost_center
     *
     * @param string $cost_center A reference to the cost center associated with the invoice line.
     *
     * @return $this
     */
    public function setCostCenter($cost_center)
    {
        $this->container['cost_center'] = $cost_center;

        return $this;
    }

    /**
     * Gets delivery_ticket
     *
     * @return \Swagger\Client\Model\DeliveryTicketWithProjectDetails
     */
    public function getDeliveryTicket()
    {
        return $this->container['delivery_ticket'];
    }

    /**
     * Sets delivery_ticket
     *
     * @param \Swagger\Client\Model\DeliveryTicketWithProjectDetails $delivery_ticket delivery_ticket
     *
     * @return $this
     */
    public function setDeliveryTicket($delivery_ticket)
    {
        $this->container['delivery_ticket'] = $delivery_ticket;

        return $this;
    }

    /**
     * Gets model_id
     *
     * @return int
     */
    public function getModelId()
    {
        return $this->container['model_id'];
    }

    /**
     * Sets model_id
     *
     * @param int $model_id The model ID. Will be the ID of the selected modelType.
     *
     * @return $this
     */
    public function setModelId($model_id)
    {
        $this->container['model_id'] = $model_id;

        return $this;
    }

    /**
     * Gets model_type
     *
     * @return int
     */
    public function getModelType()
    {
        return $this->container['model_type'];
    }

    /**
     * Sets model_type
     *
     * @param int $model_type The model type, possible options: 1 = SubcontractorContract / 2 = PurchaseOrderContract / 3 = Project.
     *
     * @return $this
     */
    public function setModelType($model_type)
    {
        $this->container['model_type'] = $model_type;

        return $this;
    }

    /**
     * Gets create_delivery_ticket_for_remaining_costs
     *
     * @return bool
     */
    public function getCreateDeliveryTicketForRemainingCosts()
    {
        return $this->container['create_delivery_ticket_for_remaining_costs'];
    }

    /**
     * Sets create_delivery_ticket_for_remaining_costs
     *
     * @param bool $create_delivery_ticket_for_remaining_costs Whether or not to create a delivery ticket for remaining costs between this line and the delivery ticket
     *
     * @return $this
     */
    public function setCreateDeliveryTicketForRemainingCosts($create_delivery_ticket_for_remaining_costs)
    {
        $this->container['create_delivery_ticket_for_remaining_costs'] = $create_delivery_ticket_for_remaining_costs;

        return $this;
    }

    /**
     * Gets can_be_edited
     *
     * @return bool
     */
    public function getCanBeEdited()
    {
        return $this->container['can_be_edited'];
    }

    /**
     * Sets can_be_edited
     *
     * @param bool $can_be_edited Whether the line can be edited or removed.
     *
     * @return $this
     */
    public function setCanBeEdited($can_be_edited)
    {
        $this->container['can_be_edited'] = $can_be_edited;

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
     * @param string $created_at The creation time of the entity.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string $created_by The user that created the entity.
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

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
     * @param string $updated_at The last updated time of the entity.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets updated_by
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param string $updated_by The user that last updated the entity.
     *
     * @return $this
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

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


