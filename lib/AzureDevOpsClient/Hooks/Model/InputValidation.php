<?php
/**
 * InputValidation
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Hooks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ServiceHooks
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

namespace FrankHouweling\AzureDevOpsClient\Hooks\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Hooks\ObjectSerializer;

/**
 * InputValidation Class Doc Comment
 *
 * @category Class
 * @description Describes what values are valid for a subscription input
 * @package  FrankHouweling\AzureDevOpsClient\Hooks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InputValidation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InputValidation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dataType' => 'string',
        'isRequired' => 'bool',
        'maxLength' => 'int',
        'maxValue' => 'string',
        'minLength' => 'int',
        'minValue' => 'string',
        'pattern' => 'string',
        'patternMismatchErrorMessage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dataType' => null,
        'isRequired' => null,
        'maxLength' => 'int32',
        'maxValue' => 'decimal',
        'minLength' => 'int32',
        'minValue' => 'decimal',
        'pattern' => null,
        'patternMismatchErrorMessage' => null
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
        'dataType' => 'dataType',
        'isRequired' => 'isRequired',
        'maxLength' => 'maxLength',
        'maxValue' => 'maxValue',
        'minLength' => 'minLength',
        'minValue' => 'minValue',
        'pattern' => 'pattern',
        'patternMismatchErrorMessage' => 'patternMismatchErrorMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dataType' => 'setDataType',
        'isRequired' => 'setIsRequired',
        'maxLength' => 'setMaxLength',
        'maxValue' => 'setMaxValue',
        'minLength' => 'setMinLength',
        'minValue' => 'setMinValue',
        'pattern' => 'setPattern',
        'patternMismatchErrorMessage' => 'setPatternMismatchErrorMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dataType' => 'getDataType',
        'isRequired' => 'getIsRequired',
        'maxLength' => 'getMaxLength',
        'maxValue' => 'getMaxValue',
        'minLength' => 'getMinLength',
        'minValue' => 'getMinValue',
        'pattern' => 'getPattern',
        'patternMismatchErrorMessage' => 'getPatternMismatchErrorMessage'
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

    const DATA_TYPE_NONE = 'none';
    const DATA_TYPE_STRING = 'string';
    const DATA_TYPE_NUMBER = 'number';
    const DATA_TYPE_BOOLEAN = 'boolean';
    const DATA_TYPE_GUID = 'guid';
    const DATA_TYPE_URI = 'uri';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataTypeAllowableValues()
    {
        return [
            self::DATA_TYPE_NONE,
            self::DATA_TYPE_STRING,
            self::DATA_TYPE_NUMBER,
            self::DATA_TYPE_BOOLEAN,
            self::DATA_TYPE_GUID,
            self::DATA_TYPE_URI,
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
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['isRequired'] = isset($data['isRequired']) ? $data['isRequired'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
        $this->container['maxValue'] = isset($data['maxValue']) ? $data['maxValue'] : null;
        $this->container['minLength'] = isset($data['minLength']) ? $data['minLength'] : null;
        $this->container['minValue'] = isset($data['minValue']) ? $data['minValue'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['patternMismatchErrorMessage'] = isset($data['patternMismatchErrorMessage']) ? $data['patternMismatchErrorMessage'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDataTypeAllowableValues();
        if (!is_null($this->container['dataType']) && !in_array($this->container['dataType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dataType', must be one of '%s'",
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
     * Gets dataType
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
     * Sets dataType
     *
     * @param string $dataType Gets or sets the data data type to validate.
     *
     * @return $this
     */
    public function setDataType($dataType)
    {
        $allowedValues = $this->getDataTypeAllowableValues();
        if (!is_null($dataType) && !in_array($dataType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'dataType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dataType'] = $dataType;

        return $this;
    }

    /**
     * Gets isRequired
     *
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->container['isRequired'];
    }

    /**
     * Sets isRequired
     *
     * @param bool $isRequired Gets or sets if this is a required field.
     *
     * @return $this
     */
    public function setIsRequired($isRequired)
    {
        $this->container['isRequired'] = $isRequired;

        return $this;
    }

    /**
     * Gets maxLength
     *
     * @return int
     */
    public function getMaxLength()
    {
        return $this->container['maxLength'];
    }

    /**
     * Sets maxLength
     *
     * @param int $maxLength Gets or sets the maximum length of this descriptor.
     *
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        $this->container['maxLength'] = $maxLength;

        return $this;
    }

    /**
     * Gets maxValue
     *
     * @return string
     */
    public function getMaxValue()
    {
        return $this->container['maxValue'];
    }

    /**
     * Sets maxValue
     *
     * @param string $maxValue Gets or sets the minimum value for this descriptor.
     *
     * @return $this
     */
    public function setMaxValue($maxValue)
    {
        $this->container['maxValue'] = $maxValue;

        return $this;
    }

    /**
     * Gets minLength
     *
     * @return int
     */
    public function getMinLength()
    {
        return $this->container['minLength'];
    }

    /**
     * Sets minLength
     *
     * @param int $minLength Gets or sets the minimum length of this descriptor.
     *
     * @return $this
     */
    public function setMinLength($minLength)
    {
        $this->container['minLength'] = $minLength;

        return $this;
    }

    /**
     * Gets minValue
     *
     * @return string
     */
    public function getMinValue()
    {
        return $this->container['minValue'];
    }

    /**
     * Sets minValue
     *
     * @param string $minValue Gets or sets the minimum value for this descriptor.
     *
     * @return $this
     */
    public function setMinValue($minValue)
    {
        $this->container['minValue'] = $minValue;

        return $this;
    }

    /**
     * Gets pattern
     *
     * @return string
     */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
     * Sets pattern
     *
     * @param string $pattern Gets or sets the pattern to validate.
     *
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;

        return $this;
    }

    /**
     * Gets patternMismatchErrorMessage
     *
     * @return string
     */
    public function getPatternMismatchErrorMessage()
    {
        return $this->container['patternMismatchErrorMessage'];
    }

    /**
     * Sets patternMismatchErrorMessage
     *
     * @param string $patternMismatchErrorMessage Gets or sets the error on pattern mismatch.
     *
     * @return $this
     */
    public function setPatternMismatchErrorMessage($patternMismatchErrorMessage)
    {
        $this->container['patternMismatchErrorMessage'] = $patternMismatchErrorMessage;

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


