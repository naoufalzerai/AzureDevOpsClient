<?php
/**
 * ProcessInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Processes
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

namespace FrankHouweling\AzureDevOpsClient\Processes\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Processes\ObjectSerializer;

/**
 * ProcessInfo Class Doc Comment
 *
 * @category Class
 * @description Process.
 * @package  FrankHouweling\AzureDevOpsClient\Processes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProcessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProcessInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customizationType' => 'string',
        'description' => 'string',
        'isDefault' => 'bool',
        'isEnabled' => 'bool',
        'name' => 'string',
        'parentProcessTypeId' => 'string',
        'projects' => '\FrankHouweling\AzureDevOpsClient\Processes\Model\ProjectReference[]',
        'referenceName' => 'string',
        'typeId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customizationType' => null,
        'description' => null,
        'isDefault' => null,
        'isEnabled' => null,
        'name' => null,
        'parentProcessTypeId' => 'uuid',
        'projects' => null,
        'referenceName' => null,
        'typeId' => 'uuid'
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
        'customizationType' => 'customizationType',
        'description' => 'description',
        'isDefault' => 'isDefault',
        'isEnabled' => 'isEnabled',
        'name' => 'name',
        'parentProcessTypeId' => 'parentProcessTypeId',
        'projects' => 'projects',
        'referenceName' => 'referenceName',
        'typeId' => 'typeId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customizationType' => 'setCustomizationType',
        'description' => 'setDescription',
        'isDefault' => 'setIsDefault',
        'isEnabled' => 'setIsEnabled',
        'name' => 'setName',
        'parentProcessTypeId' => 'setParentProcessTypeId',
        'projects' => 'setProjects',
        'referenceName' => 'setReferenceName',
        'typeId' => 'setTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customizationType' => 'getCustomizationType',
        'description' => 'getDescription',
        'isDefault' => 'getIsDefault',
        'isEnabled' => 'getIsEnabled',
        'name' => 'getName',
        'parentProcessTypeId' => 'getParentProcessTypeId',
        'projects' => 'getProjects',
        'referenceName' => 'getReferenceName',
        'typeId' => 'getTypeId'
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

    const CUSTOMIZATION_TYPE_SYSTEM = 'system';
    const CUSTOMIZATION_TYPE_INHERITED = 'inherited';
    const CUSTOMIZATION_TYPE_CUSTOM = 'custom';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomizationTypeAllowableValues()
    {
        return [
            self::CUSTOMIZATION_TYPE_SYSTEM,
            self::CUSTOMIZATION_TYPE_INHERITED,
            self::CUSTOMIZATION_TYPE_CUSTOM,
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
        $this->container['customizationType'] = isset($data['customizationType']) ? $data['customizationType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['isEnabled'] = isset($data['isEnabled']) ? $data['isEnabled'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentProcessTypeId'] = isset($data['parentProcessTypeId']) ? $data['parentProcessTypeId'] : null;
        $this->container['projects'] = isset($data['projects']) ? $data['projects'] : null;
        $this->container['referenceName'] = isset($data['referenceName']) ? $data['referenceName'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCustomizationTypeAllowableValues();
        if (!is_null($this->container['customizationType']) && !in_array($this->container['customizationType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'customizationType', must be one of '%s'",
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
     * Gets customizationType
     *
     * @return string
     */
    public function getCustomizationType()
    {
        return $this->container['customizationType'];
    }

    /**
     * Sets customizationType
     *
     * @param string $customizationType Indicates the type of customization on this process. System Process is default process. Inherited Process is modified process that was System process before.
     *
     * @return $this
     */
    public function setCustomizationType($customizationType)
    {
        $allowedValues = $this->getCustomizationTypeAllowableValues();
        if (!is_null($customizationType) && !in_array($customizationType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'customizationType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['customizationType'] = $customizationType;

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
     * @param string $description Description of the process.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets isDefault
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
     * Sets isDefault
     *
     * @param bool $isDefault Is the process default.
     *
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;

        return $this;
    }

    /**
     * Gets isEnabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['isEnabled'];
    }

    /**
     * Sets isEnabled
     *
     * @param bool $isEnabled Is the process enabled.
     *
     * @return $this
     */
    public function setIsEnabled($isEnabled)
    {
        $this->container['isEnabled'] = $isEnabled;

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
     * @param string $name Name of the process.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parentProcessTypeId
     *
     * @return string
     */
    public function getParentProcessTypeId()
    {
        return $this->container['parentProcessTypeId'];
    }

    /**
     * Sets parentProcessTypeId
     *
     * @param string $parentProcessTypeId ID of the parent process.
     *
     * @return $this
     */
    public function setParentProcessTypeId($parentProcessTypeId)
    {
        $this->container['parentProcessTypeId'] = $parentProcessTypeId;

        return $this;
    }

    /**
     * Gets projects
     *
     * @return \FrankHouweling\AzureDevOpsClient\Processes\Model\ProjectReference[]
     */
    public function getProjects()
    {
        return $this->container['projects'];
    }

    /**
     * Sets projects
     *
     * @param \FrankHouweling\AzureDevOpsClient\Processes\Model\ProjectReference[] $projects Projects in this process to which the user is subscribed to.
     *
     * @return $this
     */
    public function setProjects($projects)
    {
        $this->container['projects'] = $projects;

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
     * @param string $referenceName Reference name of the process.
     *
     * @return $this
     */
    public function setReferenceName($referenceName)
    {
        $this->container['referenceName'] = $referenceName;

        return $this;
    }

    /**
     * Gets typeId
     *
     * @return string
     */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
     * Sets typeId
     *
     * @param string $typeId The ID of the process.
     *
     * @return $this
     */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;

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

