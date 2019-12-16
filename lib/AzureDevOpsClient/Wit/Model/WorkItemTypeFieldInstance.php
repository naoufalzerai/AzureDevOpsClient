<?php
/**
 * WorkItemTypeFieldInstance
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
 * WorkItemTypeFieldInstance Class Doc Comment
 *
 * @category Class
 * @description Field instance of a work item type.
 * @package  FrankHouweling\AzureDevOpsClient\Wit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkItemTypeFieldInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkItemTypeFieldInstance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alwaysRequired' => 'bool',
        'dependentFields' => '\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemFieldReference[]',
        'helpText' => 'string',
        'name' => 'string',
        'referenceName' => 'string',
        'url' => 'string',
        'allowedValues' => 'string[]',
        'defaultValue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alwaysRequired' => null,
        'dependentFields' => null,
        'helpText' => null,
        'name' => null,
        'referenceName' => null,
        'url' => null,
        'allowedValues' => null,
        'defaultValue' => null
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
        'alwaysRequired' => 'alwaysRequired',
        'dependentFields' => 'dependentFields',
        'helpText' => 'helpText',
        'name' => 'name',
        'referenceName' => 'referenceName',
        'url' => 'url',
        'allowedValues' => 'allowedValues',
        'defaultValue' => 'defaultValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alwaysRequired' => 'setAlwaysRequired',
        'dependentFields' => 'setDependentFields',
        'helpText' => 'setHelpText',
        'name' => 'setName',
        'referenceName' => 'setReferenceName',
        'url' => 'setUrl',
        'allowedValues' => 'setAllowedValues',
        'defaultValue' => 'setDefaultValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alwaysRequired' => 'getAlwaysRequired',
        'dependentFields' => 'getDependentFields',
        'helpText' => 'getHelpText',
        'name' => 'getName',
        'referenceName' => 'getReferenceName',
        'url' => 'getUrl',
        'allowedValues' => 'getAllowedValues',
        'defaultValue' => 'getDefaultValue'
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
        $this->container['alwaysRequired'] = isset($data['alwaysRequired']) ? $data['alwaysRequired'] : null;
        $this->container['dependentFields'] = isset($data['dependentFields']) ? $data['dependentFields'] : null;
        $this->container['helpText'] = isset($data['helpText']) ? $data['helpText'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['referenceName'] = isset($data['referenceName']) ? $data['referenceName'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['allowedValues'] = isset($data['allowedValues']) ? $data['allowedValues'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
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
     * Gets alwaysRequired
     *
     * @return bool
     */
    public function getAlwaysRequired()
    {
        return $this->container['alwaysRequired'];
    }

    /**
     * Sets alwaysRequired
     *
     * @param bool $alwaysRequired Indicates whether field value is always required.
     *
     * @return $this
     */
    public function setAlwaysRequired($alwaysRequired)
    {
        $this->container['alwaysRequired'] = $alwaysRequired;

        return $this;
    }

    /**
     * Gets dependentFields
     *
     * @return \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemFieldReference[]
     */
    public function getDependentFields()
    {
        return $this->container['dependentFields'];
    }

    /**
     * Sets dependentFields
     *
     * @param \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemFieldReference[] $dependentFields The list of dependent fields.
     *
     * @return $this
     */
    public function setDependentFields($dependentFields)
    {
        $this->container['dependentFields'] = $dependentFields;

        return $this;
    }

    /**
     * Gets helpText
     *
     * @return string
     */
    public function getHelpText()
    {
        return $this->container['helpText'];
    }

    /**
     * Sets helpText
     *
     * @param string $helpText Gets the help text for the field.
     *
     * @return $this
     */
    public function setHelpText($helpText)
    {
        $this->container['helpText'] = $helpText;

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
     * @param string $name The friendly name of the field.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $referenceName The reference name of the field.
     *
     * @return $this
     */
    public function setReferenceName($referenceName)
    {
        $this->container['referenceName'] = $referenceName;

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
     * @param string $url The REST URL of the resource.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets allowedValues
     *
     * @return string[]
     */
    public function getAllowedValues()
    {
        return $this->container['allowedValues'];
    }

    /**
     * Sets allowedValues
     *
     * @param string[] $allowedValues The list of field allowed values.
     *
     * @return $this
     */
    public function setAllowedValues($allowedValues)
    {
        $this->container['allowedValues'] = $allowedValues;

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
     * @param string $defaultValue Represents the default value of the field.
     *
     * @return $this
     */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;

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


