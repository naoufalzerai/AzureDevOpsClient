<?php
/**
 * WorkItemTypeModel
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
 * WorkItemTypeModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\ProcessDefinitions
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkItemTypeModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkItemTypeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'behaviors' => '\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior[]',
        'class' => 'string',
        'color' => 'string',
        'description' => 'string',
        'icon' => 'string',
        'id' => 'string',
        'inherits' => 'string',
        'isDisabled' => 'bool',
        'layout' => '\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FormLayout',
        'name' => 'string',
        'states' => '\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateResultModel[]',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'behaviors' => null,
        'class' => null,
        'color' => null,
        'description' => null,
        'icon' => null,
        'id' => null,
        'inherits' => null,
        'isDisabled' => null,
        'layout' => null,
        'name' => null,
        'states' => null,
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
        'behaviors' => 'behaviors',
        'class' => 'class',
        'color' => 'color',
        'description' => 'description',
        'icon' => 'icon',
        'id' => 'id',
        'inherits' => 'inherits',
        'isDisabled' => 'isDisabled',
        'layout' => 'layout',
        'name' => 'name',
        'states' => 'states',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'behaviors' => 'setBehaviors',
        'class' => 'setClass',
        'color' => 'setColor',
        'description' => 'setDescription',
        'icon' => 'setIcon',
        'id' => 'setId',
        'inherits' => 'setInherits',
        'isDisabled' => 'setIsDisabled',
        'layout' => 'setLayout',
        'name' => 'setName',
        'states' => 'setStates',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'behaviors' => 'getBehaviors',
        'class' => 'getClass',
        'color' => 'getColor',
        'description' => 'getDescription',
        'icon' => 'getIcon',
        'id' => 'getId',
        'inherits' => 'getInherits',
        'isDisabled' => 'getIsDisabled',
        'layout' => 'getLayout',
        'name' => 'getName',
        'states' => 'getStates',
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

    const MODEL_CLASS_SYSTEM = 'system';
    const MODEL_CLASS_DERIVED = 'derived';
    const MODEL_CLASS_CUSTOM = 'custom';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClassAllowableValues()
    {
        return [
            self::MODEL_CLASS_SYSTEM,
            self::MODEL_CLASS_DERIVED,
            self::MODEL_CLASS_CUSTOM,
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
        $this->container['behaviors'] = isset($data['behaviors']) ? $data['behaviors'] : null;
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inherits'] = isset($data['inherits']) ? $data['inherits'] : null;
        $this->container['isDisabled'] = isset($data['isDisabled']) ? $data['isDisabled'] : null;
        $this->container['layout'] = isset($data['layout']) ? $data['layout'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['states'] = isset($data['states']) ? $data['states'] : null;
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

        $allowedValues = $this->getClassAllowableValues();
        if (!is_null($this->container['class']) && !in_array($this->container['class'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'class', must be one of '%s'",
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
     * Gets behaviors
     *
     * @return \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior[]
     */
    public function getBehaviors()
    {
        return $this->container['behaviors'];
    }

    /**
     * Sets behaviors
     *
     * @param \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior[] $behaviors Behaviors of the work item type
     *
     * @return $this
     */
    public function setBehaviors($behaviors)
    {
        $this->container['behaviors'] = $behaviors;

        return $this;
    }

    /**
     * Gets class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string $class Class of the work item type
     *
     * @return $this
     */
    public function setClass($class)
    {
        $allowedValues = $this->getClassAllowableValues();
        if (!is_null($class) && !in_array($class, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'class', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['class'] = $class;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color Color of the work item type
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

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
     * @param string $description Description of the work item type
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon Icon of the work item type
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The ID of the work item type
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets inherits
     *
     * @return string
     */
    public function getInherits()
    {
        return $this->container['inherits'];
    }

    /**
     * Sets inherits
     *
     * @param string $inherits Parent WIT Id/Internal ReferenceName that it inherits from
     *
     * @return $this
     */
    public function setInherits($inherits)
    {
        $this->container['inherits'] = $inherits;

        return $this;
    }

    /**
     * Gets isDisabled
     *
     * @return bool
     */
    public function getIsDisabled()
    {
        return $this->container['isDisabled'];
    }

    /**
     * Sets isDisabled
     *
     * @param bool $isDisabled Is work item type disabled
     *
     * @return $this
     */
    public function setIsDisabled($isDisabled)
    {
        $this->container['isDisabled'] = $isDisabled;

        return $this;
    }

    /**
     * Gets layout
     *
     * @return \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FormLayout
     */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
     * Sets layout
     *
     * @param \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FormLayout $layout Layout of the work item type
     *
     * @return $this
     */
    public function setLayout($layout)
    {
        $this->container['layout'] = $layout;

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
     * @param string $name Name of the work item type
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets states
     *
     * @return \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateResultModel[]
     */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
     * Sets states
     *
     * @param \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateResultModel[] $states States of the work item type
     *
     * @return $this
     */
    public function setStates($states)
    {
        $this->container['states'] = $states;

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
     * @param string $url Url of the work item type
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


