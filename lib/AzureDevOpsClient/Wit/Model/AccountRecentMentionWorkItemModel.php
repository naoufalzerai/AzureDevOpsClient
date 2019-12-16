<?php
/**
 * AccountRecentMentionWorkItemModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Wit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WorkItemTracking
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 6.0-preview
 * Contact: nugetvss@microsoft.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FrankHouweling\AzureDevOpsClient\Wit\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Wit\ObjectSerializer;

/**
 * AccountRecentMentionWorkItemModel Class Doc Comment
 *
 * @category Class
 * @description Represents Recent Mention Work Item
 * @package  FrankHouweling\AzureDevOpsClient\Wit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountRecentMentionWorkItemModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountRecentMentionWorkItemModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assignedTo' => 'string',
        'id' => 'int',
        'mentionedDateField' => '\DateTime',
        'state' => 'string',
        'teamProject' => 'string',
        'title' => 'string',
        'workItemType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'assignedTo' => null,
        'id' => 'int32',
        'mentionedDateField' => 'date-time',
        'state' => null,
        'teamProject' => null,
        'title' => null,
        'workItemType' => null
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
        'assignedTo' => 'assignedTo',
        'id' => 'id',
        'mentionedDateField' => 'mentionedDateField',
        'state' => 'state',
        'teamProject' => 'teamProject',
        'title' => 'title',
        'workItemType' => 'workItemType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignedTo' => 'setAssignedTo',
        'id' => 'setId',
        'mentionedDateField' => 'setMentionedDateField',
        'state' => 'setState',
        'teamProject' => 'setTeamProject',
        'title' => 'setTitle',
        'workItemType' => 'setWorkItemType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignedTo' => 'getAssignedTo',
        'id' => 'getId',
        'mentionedDateField' => 'getMentionedDateField',
        'state' => 'getState',
        'teamProject' => 'getTeamProject',
        'title' => 'getTitle',
        'workItemType' => 'getWorkItemType'
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
        $this->container['assignedTo'] = isset($data['assignedTo']) ? $data['assignedTo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mentionedDateField'] = isset($data['mentionedDateField']) ? $data['mentionedDateField'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['teamProject'] = isset($data['teamProject']) ? $data['teamProject'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['workItemType'] = isset($data['workItemType']) ? $data['workItemType'] : null;
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
     * Gets assignedTo
     *
     * @return string
     */
    public function getAssignedTo()
    {
        return $this->container['assignedTo'];
    }

    /**
     * Sets assignedTo
     *
     * @param string $assignedTo Assigned To
     *
     * @return $this
     */
    public function setAssignedTo($assignedTo)
    {
        $this->container['assignedTo'] = $assignedTo;

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
     * @param int $id Work Item Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets mentionedDateField
     *
     * @return \DateTime
     */
    public function getMentionedDateField()
    {
        return $this->container['mentionedDateField'];
    }

    /**
     * Sets mentionedDateField
     *
     * @param \DateTime $mentionedDateField Latest date that the user were mentioned
     *
     * @return $this
     */
    public function setMentionedDateField($mentionedDateField)
    {
        $this->container['mentionedDateField'] = $mentionedDateField;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State of the work item
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets teamProject
     *
     * @return string
     */
    public function getTeamProject()
    {
        return $this->container['teamProject'];
    }

    /**
     * Sets teamProject
     *
     * @param string $teamProject Team project the work item belongs to
     *
     * @return $this
     */
    public function setTeamProject($teamProject)
    {
        $this->container['teamProject'] = $teamProject;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title of the work item
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets workItemType
     *
     * @return string
     */
    public function getWorkItemType()
    {
        return $this->container['workItemType'];
    }

    /**
     * Sets workItemType
     *
     * @param string $workItemType Type of Work Item
     *
     * @return $this
     */
    public function setWorkItemType($workItemType)
    {
        $this->container['workItemType'] = $workItemType;

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


