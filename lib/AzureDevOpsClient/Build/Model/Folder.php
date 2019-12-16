<?php
/**
 * Folder
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Build
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

namespace FrankHouweling\AzureDevOpsClient\Build\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Build\ObjectSerializer;

/**
 * Folder Class Doc Comment
 *
 * @category Class
 * @description Represents a folder that contains build definitions.
 * @package  FrankHouweling\AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Folder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Folder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'createdBy' => '\FrankHouweling\AzureDevOpsClient\Build\Model\IdentityRef',
        'createdOn' => '\DateTime',
        'description' => 'string',
        'lastChangedBy' => '\FrankHouweling\AzureDevOpsClient\Build\Model\IdentityRef',
        'lastChangedDate' => '\DateTime',
        'path' => 'string',
        'project' => '\FrankHouweling\AzureDevOpsClient\Build\Model\TeamProjectReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'createdBy' => null,
        'createdOn' => 'date-time',
        'description' => null,
        'lastChangedBy' => null,
        'lastChangedDate' => 'date-time',
        'path' => null,
        'project' => null
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
        'createdBy' => 'createdBy',
        'createdOn' => 'createdOn',
        'description' => 'description',
        'lastChangedBy' => 'lastChangedBy',
        'lastChangedDate' => 'lastChangedDate',
        'path' => 'path',
        'project' => 'project'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createdBy' => 'setCreatedBy',
        'createdOn' => 'setCreatedOn',
        'description' => 'setDescription',
        'lastChangedBy' => 'setLastChangedBy',
        'lastChangedDate' => 'setLastChangedDate',
        'path' => 'setPath',
        'project' => 'setProject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createdBy' => 'getCreatedBy',
        'createdOn' => 'getCreatedOn',
        'description' => 'getDescription',
        'lastChangedBy' => 'getLastChangedBy',
        'lastChangedDate' => 'getLastChangedDate',
        'path' => 'getPath',
        'project' => 'getProject'
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
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['lastChangedBy'] = isset($data['lastChangedBy']) ? $data['lastChangedBy'] : null;
        $this->container['lastChangedDate'] = isset($data['lastChangedDate']) ? $data['lastChangedDate'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
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
     * Gets createdBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\Build\Model\IdentityRef
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\Build\Model\IdentityRef $createdBy The process or person who created the folder.
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets createdOn
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['createdOn'];
    }

    /**
     * Sets createdOn
     *
     * @param \DateTime $createdOn The date the folder was created.
     *
     * @return $this
     */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;

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
     * @param string $description The description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets lastChangedBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\Build\Model\IdentityRef
     */
    public function getLastChangedBy()
    {
        return $this->container['lastChangedBy'];
    }

    /**
     * Sets lastChangedBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\Build\Model\IdentityRef $lastChangedBy The process or person that last changed the folder.
     *
     * @return $this
     */
    public function setLastChangedBy($lastChangedBy)
    {
        $this->container['lastChangedBy'] = $lastChangedBy;

        return $this;
    }

    /**
     * Gets lastChangedDate
     *
     * @return \DateTime
     */
    public function getLastChangedDate()
    {
        return $this->container['lastChangedDate'];
    }

    /**
     * Sets lastChangedDate
     *
     * @param \DateTime $lastChangedDate The date the folder was last changed.
     *
     * @return $this
     */
    public function setLastChangedDate($lastChangedDate)
    {
        $this->container['lastChangedDate'] = $lastChangedDate;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path The full path.
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \FrankHouweling\AzureDevOpsClient\Build\Model\TeamProjectReference
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \FrankHouweling\AzureDevOpsClient\Build\Model\TeamProjectReference $project The project.
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

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


