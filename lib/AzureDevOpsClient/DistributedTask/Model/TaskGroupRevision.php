<?php
/**
 * TaskGroupRevision
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TaskAgent
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

namespace FrankHouweling\AzureDevOpsClient\DistributedTask\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\DistributedTask\ObjectSerializer;

/**
 * TaskGroupRevision Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskGroupRevision implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskGroupRevision';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'changedBy' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef',
        'changedDate' => '\DateTime',
        'changeType' => 'string',
        'comment' => 'string',
        'fileId' => 'int',
        'majorVersion' => 'int',
        'revision' => 'int',
        'taskGroupId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'changedBy' => null,
        'changedDate' => 'date-time',
        'changeType' => null,
        'comment' => null,
        'fileId' => 'int32',
        'majorVersion' => 'int32',
        'revision' => 'int32',
        'taskGroupId' => 'uuid'
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
        'changedBy' => 'changedBy',
        'changedDate' => 'changedDate',
        'changeType' => 'changeType',
        'comment' => 'comment',
        'fileId' => 'fileId',
        'majorVersion' => 'majorVersion',
        'revision' => 'revision',
        'taskGroupId' => 'taskGroupId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'changedBy' => 'setChangedBy',
        'changedDate' => 'setChangedDate',
        'changeType' => 'setChangeType',
        'comment' => 'setComment',
        'fileId' => 'setFileId',
        'majorVersion' => 'setMajorVersion',
        'revision' => 'setRevision',
        'taskGroupId' => 'setTaskGroupId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'changedBy' => 'getChangedBy',
        'changedDate' => 'getChangedDate',
        'changeType' => 'getChangeType',
        'comment' => 'getComment',
        'fileId' => 'getFileId',
        'majorVersion' => 'getMajorVersion',
        'revision' => 'getRevision',
        'taskGroupId' => 'getTaskGroupId'
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

    const CHANGE_TYPE_ADD = 'add';
    const CHANGE_TYPE_UPDATE = 'update';
    const CHANGE_TYPE_DELETE = 'delete';
    const CHANGE_TYPE_UNDELETE = 'undelete';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChangeTypeAllowableValues()
    {
        return [
            self::CHANGE_TYPE_ADD,
            self::CHANGE_TYPE_UPDATE,
            self::CHANGE_TYPE_DELETE,
            self::CHANGE_TYPE_UNDELETE,
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
        $this->container['changedBy'] = isset($data['changedBy']) ? $data['changedBy'] : null;
        $this->container['changedDate'] = isset($data['changedDate']) ? $data['changedDate'] : null;
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['fileId'] = isset($data['fileId']) ? $data['fileId'] : null;
        $this->container['majorVersion'] = isset($data['majorVersion']) ? $data['majorVersion'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['taskGroupId'] = isset($data['taskGroupId']) ? $data['taskGroupId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getChangeTypeAllowableValues();
        if (!is_null($this->container['changeType']) && !in_array($this->container['changeType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'changeType', must be one of '%s'",
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets changedBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef
     */
    public function getChangedBy()
    {
        return $this->container['changedBy'];
    }

    /**
     * Sets changedBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef $changedBy changedBy
     *
     * @return $this
     */
    public function setChangedBy($changedBy)
    {
        $this->container['changedBy'] = $changedBy;

        return $this;
    }

    /**
     * Gets changedDate
     *
     * @return \DateTime
     */
    public function getChangedDate()
    {
        return $this->container['changedDate'];
    }

    /**
     * Sets changedDate
     *
     * @param \DateTime $changedDate changedDate
     *
     * @return $this
     */
    public function setChangedDate($changedDate)
    {
        $this->container['changedDate'] = $changedDate;

        return $this;
    }

    /**
     * Gets changeType
     *
     * @return string
     */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
     * Sets changeType
     *
     * @param string $changeType changeType
     *
     * @return $this
     */
    public function setChangeType($changeType)
    {
        $allowedValues = $this->getChangeTypeAllowableValues();
        if (!is_null($changeType) && !in_array($changeType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'changeType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['changeType'] = $changeType;

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
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets fileId
     *
     * @return int
     */
    public function getFileId()
    {
        return $this->container['fileId'];
    }

    /**
     * Sets fileId
     *
     * @param int $fileId fileId
     *
     * @return $this
     */
    public function setFileId($fileId)
    {
        $this->container['fileId'] = $fileId;

        return $this;
    }

    /**
     * Gets majorVersion
     *
     * @return int
     */
    public function getMajorVersion()
    {
        return $this->container['majorVersion'];
    }

    /**
     * Sets majorVersion
     *
     * @param int $majorVersion majorVersion
     *
     * @return $this
     */
    public function setMajorVersion($majorVersion)
    {
        $this->container['majorVersion'] = $majorVersion;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int $revision revision
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets taskGroupId
     *
     * @return string
     */
    public function getTaskGroupId()
    {
        return $this->container['taskGroupId'];
    }

    /**
     * Sets taskGroupId
     *
     * @param string $taskGroupId taskGroupId
     *
     * @return $this
     */
    public function setTaskGroupId($taskGroupId)
    {
        $this->container['taskGroupId'] = $taskGroupId;

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

