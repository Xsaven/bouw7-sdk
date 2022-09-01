<?php
/**
 * Approval
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
 * Approval Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Approval implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Approval';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'current_index' => 'int',
        'workflow_id' => 'int',
        'current_approver' => '\Swagger\Client\Model\CondensedApprover',
        'last_action_date' => 'string',
        'is_approved' => 'bool',
        'can_approve' => 'bool',
        'approvers' => '\Swagger\Client\Model\CondensedApprover[]',
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
        'current_index' => null,
        'workflow_id' => null,
        'current_approver' => null,
        'last_action_date' => null,
        'is_approved' => null,
        'can_approve' => null,
        'approvers' => null,
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
        'current_index' => 'currentIndex',
        'workflow_id' => 'workflowId',
        'current_approver' => 'currentApprover',
        'last_action_date' => 'lastActionDate',
        'is_approved' => 'isApproved',
        'can_approve' => 'canApprove',
        'approvers' => 'approvers',
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
        'current_index' => 'setCurrentIndex',
        'workflow_id' => 'setWorkflowId',
        'current_approver' => 'setCurrentApprover',
        'last_action_date' => 'setLastActionDate',
        'is_approved' => 'setIsApproved',
        'can_approve' => 'setCanApprove',
        'approvers' => 'setApprovers',
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
        'current_index' => 'getCurrentIndex',
        'workflow_id' => 'getWorkflowId',
        'current_approver' => 'getCurrentApprover',
        'last_action_date' => 'getLastActionDate',
        'is_approved' => 'getIsApproved',
        'can_approve' => 'getCanApprove',
        'approvers' => 'getApprovers',
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
        $this->container['current_index'] = isset($data['current_index']) ? $data['current_index'] : null;
        $this->container['workflow_id'] = isset($data['workflow_id']) ? $data['workflow_id'] : null;
        $this->container['current_approver'] = isset($data['current_approver']) ? $data['current_approver'] : null;
        $this->container['last_action_date'] = isset($data['last_action_date']) ? $data['last_action_date'] : null;
        $this->container['is_approved'] = isset($data['is_approved']) ? $data['is_approved'] : null;
        $this->container['can_approve'] = isset($data['can_approve']) ? $data['can_approve'] : null;
        $this->container['approvers'] = isset($data['approvers']) ? $data['approvers'] : null;
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

        if (!is_null($this->container['current_index']) && ($this->container['current_index'] < 1)) {
            $invalidProperties[] = "invalid value for 'current_index', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['workflow_id']) && ($this->container['workflow_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'workflow_id', must be bigger than or equal to 1.";
        }

        if ($this->container['approvers'] === null) {
            $invalidProperties[] = "'approvers' can't be null";
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
     * @param int $id ID of the approval.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets current_index
     *
     * @return int
     */
    public function getCurrentIndex()
    {
        return $this->container['current_index'];
    }

    /**
     * Sets current_index
     *
     * @param int $current_index The current index of the approver which turn it is to vote on the approval.
     *
     * @return $this
     */
    public function setCurrentIndex($current_index)
    {

        if (!is_null($current_index) && ($current_index < 1)) {
            throw new \InvalidArgumentException('invalid value for $current_index when calling Approval., must be bigger than or equal to 1.');
        }

        $this->container['current_index'] = $current_index;

        return $this;
    }

    /**
     * Gets workflow_id
     *
     * @return int
     */
    public function getWorkflowId()
    {
        return $this->container['workflow_id'];
    }

    /**
     * Sets workflow_id
     *
     * @param int $workflow_id The workflow that this approval is based of.
     *
     * @return $this
     */
    public function setWorkflowId($workflow_id)
    {

        if (!is_null($workflow_id) && ($workflow_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $workflow_id when calling Approval., must be bigger than or equal to 1.');
        }

        $this->container['workflow_id'] = $workflow_id;

        return $this;
    }

    /**
     * Gets current_approver
     *
     * @return \Swagger\Client\Model\CondensedApprover
     */
    public function getCurrentApprover()
    {
        return $this->container['current_approver'];
    }

    /**
     * Sets current_approver
     *
     * @param \Swagger\Client\Model\CondensedApprover $current_approver current_approver
     *
     * @return $this
     */
    public function setCurrentApprover($current_approver)
    {
        $this->container['current_approver'] = $current_approver;

        return $this;
    }

    /**
     * Gets last_action_date
     *
     * @return string
     */
    public function getLastActionDate()
    {
        return $this->container['last_action_date'];
    }

    /**
     * Sets last_action_date
     *
     * @param string $last_action_date Date of the last action done to this approval. Will be null when no action has been made.
     *
     * @return $this
     */
    public function setLastActionDate($last_action_date)
    {
        $this->container['last_action_date'] = $last_action_date;

        return $this;
    }

    /**
     * Gets is_approved
     *
     * @return bool
     */
    public function getIsApproved()
    {
        return $this->container['is_approved'];
    }

    /**
     * Sets is_approved
     *
     * @param bool $is_approved Whether or not the approval has been approved.
     *
     * @return $this
     */
    public function setIsApproved($is_approved)
    {
        $this->container['is_approved'] = $is_approved;

        return $this;
    }

    /**
     * Gets can_approve
     *
     * @return bool
     */
    public function getCanApprove()
    {
        return $this->container['can_approve'];
    }

    /**
     * Sets can_approve
     *
     * @param bool $can_approve Whether or not the current authenticated user can approve the approval.
     *
     * @return $this
     */
    public function setCanApprove($can_approve)
    {
        $this->container['can_approve'] = $can_approve;

        return $this;
    }

    /**
     * Gets approvers
     *
     * @return \Swagger\Client\Model\CondensedApprover[]
     */
    public function getApprovers()
    {
        return $this->container['approvers'];
    }

    /**
     * Sets approvers
     *
     * @param \Swagger\Client\Model\CondensedApprover[] $approvers The approvers that must vote or already done so on this approval.
     *
     * @return $this
     */
    public function setApprovers($approvers)
    {
        $this->container['approvers'] = $approvers;

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


