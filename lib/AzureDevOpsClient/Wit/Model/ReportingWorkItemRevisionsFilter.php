<?php
/**
 * ReportingWorkItemRevisionsFilter
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
 * ReportingWorkItemRevisionsFilter Class Doc Comment
 *
 * @category Class
 * @description The class represents the reporting work item revision filer.
 * @package  FrankHouweling\AzureDevOpsClient\Wit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportingWorkItemRevisionsFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReportingWorkItemRevisionsFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fields' => 'string[]',
        'includeDeleted' => 'bool',
        'includeIdentityRef' => 'bool',
        'includeLatestOnly' => 'bool',
        'includeTagRef' => 'bool',
        'types' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fields' => null,
        'includeDeleted' => null,
        'includeIdentityRef' => null,
        'includeLatestOnly' => null,
        'includeTagRef' => null,
        'types' => null
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
        'fields' => 'fields',
        'includeDeleted' => 'includeDeleted',
        'includeIdentityRef' => 'includeIdentityRef',
        'includeLatestOnly' => 'includeLatestOnly',
        'includeTagRef' => 'includeTagRef',
        'types' => 'types'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fields' => 'setFields',
        'includeDeleted' => 'setIncludeDeleted',
        'includeIdentityRef' => 'setIncludeIdentityRef',
        'includeLatestOnly' => 'setIncludeLatestOnly',
        'includeTagRef' => 'setIncludeTagRef',
        'types' => 'setTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fields' => 'getFields',
        'includeDeleted' => 'getIncludeDeleted',
        'includeIdentityRef' => 'getIncludeIdentityRef',
        'includeLatestOnly' => 'getIncludeLatestOnly',
        'includeTagRef' => 'getIncludeTagRef',
        'types' => 'getTypes'
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
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['includeDeleted'] = isset($data['includeDeleted']) ? $data['includeDeleted'] : null;
        $this->container['includeIdentityRef'] = isset($data['includeIdentityRef']) ? $data['includeIdentityRef'] : null;
        $this->container['includeLatestOnly'] = isset($data['includeLatestOnly']) ? $data['includeLatestOnly'] : null;
        $this->container['includeTagRef'] = isset($data['includeTagRef']) ? $data['includeTagRef'] : null;
        $this->container['types'] = isset($data['types']) ? $data['types'] : null;
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
     * Gets fields
     *
     * @return string[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string[] $fields A list of fields to return in work item revisions. Omit this parameter to get all reportable fields.
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets includeDeleted
     *
     * @return bool
     */
    public function getIncludeDeleted()
    {
        return $this->container['includeDeleted'];
    }

    /**
     * Sets includeDeleted
     *
     * @param bool $includeDeleted Include deleted work item in the result.
     *
     * @return $this
     */
    public function setIncludeDeleted($includeDeleted)
    {
        $this->container['includeDeleted'] = $includeDeleted;

        return $this;
    }

    /**
     * Gets includeIdentityRef
     *
     * @return bool
     */
    public function getIncludeIdentityRef()
    {
        return $this->container['includeIdentityRef'];
    }

    /**
     * Sets includeIdentityRef
     *
     * @param bool $includeIdentityRef Return an identity reference instead of a string value for identity fields.
     *
     * @return $this
     */
    public function setIncludeIdentityRef($includeIdentityRef)
    {
        $this->container['includeIdentityRef'] = $includeIdentityRef;

        return $this;
    }

    /**
     * Gets includeLatestOnly
     *
     * @return bool
     */
    public function getIncludeLatestOnly()
    {
        return $this->container['includeLatestOnly'];
    }

    /**
     * Sets includeLatestOnly
     *
     * @param bool $includeLatestOnly Include only the latest version of a work item, skipping over all previous revisions of the work item.
     *
     * @return $this
     */
    public function setIncludeLatestOnly($includeLatestOnly)
    {
        $this->container['includeLatestOnly'] = $includeLatestOnly;

        return $this;
    }

    /**
     * Gets includeTagRef
     *
     * @return bool
     */
    public function getIncludeTagRef()
    {
        return $this->container['includeTagRef'];
    }

    /**
     * Sets includeTagRef
     *
     * @param bool $includeTagRef Include tag reference instead of string value for System.Tags field
     *
     * @return $this
     */
    public function setIncludeTagRef($includeTagRef)
    {
        $this->container['includeTagRef'] = $includeTagRef;

        return $this;
    }

    /**
     * Gets types
     *
     * @return string[]
     */
    public function getTypes()
    {
        return $this->container['types'];
    }

    /**
     * Sets types
     *
     * @param string[] $types A list of types to filter the results to specific work item types. Omit this parameter to get work item revisions of all work item types.
     *
     * @return $this
     */
    public function setTypes($types)
    {
        $this->container['types'] = $types;

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

