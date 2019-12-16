<?php
/**
 * GitChange
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Git
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

namespace FrankHouweling\AzureDevOpsClient\Git\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Git\ObjectSerializer;

/**
 * GitChange Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitChange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitChange';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'changeType' => 'string',
        'item' => 'string',
        'newContent' => '\FrankHouweling\AzureDevOpsClient\Git\Model\ItemContent',
        'sourceServerItem' => 'string',
        'url' => 'string',
        'changeId' => 'int',
        'newContentTemplate' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GitTemplate',
        'originalPath' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'changeType' => null,
        'item' => 'T',
        'newContent' => null,
        'sourceServerItem' => null,
        'url' => null,
        'changeId' => 'int32',
        'newContentTemplate' => null,
        'originalPath' => null
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
        'changeType' => 'changeType',
        'item' => 'item',
        'newContent' => 'newContent',
        'sourceServerItem' => 'sourceServerItem',
        'url' => 'url',
        'changeId' => 'changeId',
        'newContentTemplate' => 'newContentTemplate',
        'originalPath' => 'originalPath'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'changeType' => 'setChangeType',
        'item' => 'setItem',
        'newContent' => 'setNewContent',
        'sourceServerItem' => 'setSourceServerItem',
        'url' => 'setUrl',
        'changeId' => 'setChangeId',
        'newContentTemplate' => 'setNewContentTemplate',
        'originalPath' => 'setOriginalPath'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'changeType' => 'getChangeType',
        'item' => 'getItem',
        'newContent' => 'getNewContent',
        'sourceServerItem' => 'getSourceServerItem',
        'url' => 'getUrl',
        'changeId' => 'getChangeId',
        'newContentTemplate' => 'getNewContentTemplate',
        'originalPath' => 'getOriginalPath'
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

    const CHANGE_TYPE_NONE = 'none';
    const CHANGE_TYPE_ADD = 'add';
    const CHANGE_TYPE_EDIT = 'edit';
    const CHANGE_TYPE_ENCODING = 'encoding';
    const CHANGE_TYPE_RENAME = 'rename';
    const CHANGE_TYPE_DELETE = 'delete';
    const CHANGE_TYPE_UNDELETE = 'undelete';
    const CHANGE_TYPE_BRANCH = 'branch';
    const CHANGE_TYPE_MERGE = 'merge';
    const CHANGE_TYPE_LOCK = 'lock';
    const CHANGE_TYPE_ROLLBACK = 'rollback';
    const CHANGE_TYPE_SOURCE_RENAME = 'sourceRename';
    const CHANGE_TYPE_TARGET_RENAME = 'targetRename';
    const CHANGE_TYPE_PROPERTY = 'property';
    const CHANGE_TYPE_ALL = 'all';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChangeTypeAllowableValues()
    {
        return [
            self::CHANGE_TYPE_NONE,
            self::CHANGE_TYPE_ADD,
            self::CHANGE_TYPE_EDIT,
            self::CHANGE_TYPE_ENCODING,
            self::CHANGE_TYPE_RENAME,
            self::CHANGE_TYPE_DELETE,
            self::CHANGE_TYPE_UNDELETE,
            self::CHANGE_TYPE_BRANCH,
            self::CHANGE_TYPE_MERGE,
            self::CHANGE_TYPE_LOCK,
            self::CHANGE_TYPE_ROLLBACK,
            self::CHANGE_TYPE_SOURCE_RENAME,
            self::CHANGE_TYPE_TARGET_RENAME,
            self::CHANGE_TYPE_PROPERTY,
            self::CHANGE_TYPE_ALL,
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
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['newContent'] = isset($data['newContent']) ? $data['newContent'] : null;
        $this->container['sourceServerItem'] = isset($data['sourceServerItem']) ? $data['sourceServerItem'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['changeId'] = isset($data['changeId']) ? $data['changeId'] : null;
        $this->container['newContentTemplate'] = isset($data['newContentTemplate']) ? $data['newContentTemplate'] : null;
        $this->container['originalPath'] = isset($data['originalPath']) ? $data['originalPath'] : null;
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
     * @param string $changeType The type of change that was made to the item.
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
     * Gets item
     *
     * @return string
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param string $item Current version.
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets newContent
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\ItemContent
     */
    public function getNewContent()
    {
        return $this->container['newContent'];
    }

    /**
     * Sets newContent
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\ItemContent $newContent Content of the item after the change.
     *
     * @return $this
     */
    public function setNewContent($newContent)
    {
        $this->container['newContent'] = $newContent;

        return $this;
    }

    /**
     * Gets sourceServerItem
     *
     * @return string
     */
    public function getSourceServerItem()
    {
        return $this->container['sourceServerItem'];
    }

    /**
     * Sets sourceServerItem
     *
     * @param string $sourceServerItem Path of the item on the server.
     *
     * @return $this
     */
    public function setSourceServerItem($sourceServerItem)
    {
        $this->container['sourceServerItem'] = $sourceServerItem;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL to retrieve the item.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets changeId
     *
     * @return int
     */
    public function getChangeId()
    {
        return $this->container['changeId'];
    }

    /**
     * Sets changeId
     *
     * @param int $changeId ID of the change within the group of changes.
     *
     * @return $this
     */
    public function setChangeId($changeId)
    {
        $this->container['changeId'] = $changeId;

        return $this;
    }

    /**
     * Gets newContentTemplate
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitTemplate
     */
    public function getNewContentTemplate()
    {
        return $this->container['newContentTemplate'];
    }

    /**
     * Sets newContentTemplate
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GitTemplate $newContentTemplate New Content template to be used when pushing new changes.
     *
     * @return $this
     */
    public function setNewContentTemplate($newContentTemplate)
    {
        $this->container['newContentTemplate'] = $newContentTemplate;

        return $this;
    }

    /**
     * Gets originalPath
     *
     * @return string
     */
    public function getOriginalPath()
    {
        return $this->container['originalPath'];
    }

    /**
     * Sets originalPath
     *
     * @param string $originalPath Original path of item if different from current path.
     *
     * @return $this
     */
    public function setOriginalPath($originalPath)
    {
        $this->container['originalPath'] = $originalPath;

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


