<?php
/**
 * WorkItemTypeFieldModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\ProcessDefinitions
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WorkItemTracking
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 4.1-preview
 * Contact: nugetvss@microsoft.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\ObjectSerializer;

/**
 * WorkItemTypeFieldModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\ProcessDefinitions
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkItemTypeFieldModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkItemTypeFieldModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowGroups' => 'bool',
        'defaultValue' => 'string',
        'name' => 'string',
        'pickList' => '\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListMetadataModel',
        'readOnly' => 'bool',
        'referenceName' => 'string',
        'required' => 'bool',
        'type' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allowGroups' => null,
        'defaultValue' => null,
        'name' => null,
        'pickList' => null,
        'readOnly' => null,
        'referenceName' => null,
        'required' => null,
        'type' => null,
        'url' => null
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
        'allowGroups' => 'allowGroups',
        'defaultValue' => 'defaultValue',
        'name' => 'name',
        'pickList' => 'pickList',
        'readOnly' => 'readOnly',
        'referenceName' => 'referenceName',
        'required' => 'required',
        'type' => 'type',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowGroups' => 'setAllowGroups',
        'defaultValue' => 'setDefaultValue',
        'name' => 'setName',
        'pickList' => 'setPickList',
        'readOnly' => 'setReadOnly',
        'referenceName' => 'setReferenceName',
        'required' => 'setRequired',
        'type' => 'setType',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowGroups' => 'getAllowGroups',
        'defaultValue' => 'getDefaultValue',
        'name' => 'getName',
        'pickList' => 'getPickList',
        'readOnly' => 'getReadOnly',
        'referenceName' => 'getReferenceName',
        'required' => 'getRequired',
        'type' => 'getType',
        'url' => 'getUrl'
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

    const TYPE_STRING = 'string';
    const TYPE_INTEGER = 'integer';
    const TYPE_DATE_TIME = 'dateTime';
    const TYPE_PLAIN_TEXT = 'plainText';
    const TYPE_HTML = 'html';
    const TYPE_TREE_PATH = 'treePath';
    const TYPE_HISTORY = 'history';
    const TYPE_DOUBLE = 'double';
    const TYPE_GUID = 'guid';
    const TYPE_BOOLEAN = 'boolean';
    const TYPE_IDENTITY = 'identity';
    const TYPE_PICKLIST_INTEGER = 'picklistInteger';
    const TYPE_PICKLIST_STRING = 'picklistString';
    const TYPE_PICKLIST_DOUBLE = 'picklistDouble';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STRING,
            self::TYPE_INTEGER,
            self::TYPE_DATE_TIME,
            self::TYPE_PLAIN_TEXT,
            self::TYPE_HTML,
            self::TYPE_TREE_PATH,
            self::TYPE_HISTORY,
            self::TYPE_DOUBLE,
            self::TYPE_GUID,
            self::TYPE_BOOLEAN,
            self::TYPE_IDENTITY,
            self::TYPE_PICKLIST_INTEGER,
            self::TYPE_PICKLIST_STRING,
            self::TYPE_PICKLIST_DOUBLE,
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
        $this->container['allowGroups'] = isset($data['allowGroups']) ? $data['allowGroups'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pickList'] = isset($data['pickList']) ? $data['pickList'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['referenceName'] = isset($data['referenceName']) ? $data['referenceName'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets allowGroups
     *
     * @return bool
     */
    public function getAllowGroups()
    {
        return $this->container['allowGroups'];
    }

    /**
     * Sets allowGroups
     *
     * @param bool $allowGroups allowGroups
     *
     * @return $this
     */
    public function setAllowGroups($allowGroups)
    {
        $this->container['allowGroups'] = $allowGroups;

        return $this;
    }

    /**
     * Gets defaultValue
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
     * Sets defaultValue
     *
     * @param string $defaultValue defaultValue
     *
     * @return $this
     */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pickList
     *
     * @return \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListMetadataModel
     */
    public function getPickList()
    {
        return $this->container['pickList'];
    }

    /**
     * Sets pickList
     *
     * @param \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListMetadataModel $pickList pickList
     *
     * @return $this
     */
    public function setPickList($pickList)
    {
        $this->container['pickList'] = $pickList;

        return $this;
    }

    /**
     * Gets readOnly
     *
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->container['readOnly'];
    }

    /**
     * Sets readOnly
     *
     * @param bool $readOnly readOnly
     *
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;

        return $this;
    }

    /**
     * Gets referenceName
     *
     * @return string
     */
    public function getReferenceName()
    {
        return $this->container['referenceName'];
    }

    /**
     * Sets referenceName
     *
     * @param string $referenceName referenceName
     *
     * @return $this
     */
    public function setReferenceName($referenceName)
    {
        $this->container['referenceName'] = $referenceName;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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

