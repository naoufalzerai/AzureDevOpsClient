<?php
/**
 * QueryBatchGetRequest
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
 * QueryBatchGetRequest Class Doc Comment
 *
 * @category Class
 * @description Describes a request to get a list of queries
 * @package  FrankHouweling\AzureDevOpsClient\Wit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QueryBatchGetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QueryBatchGetRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'expand' => 'string',
        'errorPolicy' => 'string',
        'ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'expand' => null,
        'errorPolicy' => null,
        'ids' => 'uuid'
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
        'expand' => '$expand',
        'errorPolicy' => 'errorPolicy',
        'ids' => 'ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expand' => 'setExpand',
        'errorPolicy' => 'setErrorPolicy',
        'ids' => 'setIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expand' => 'getExpand',
        'errorPolicy' => 'getErrorPolicy',
        'ids' => 'getIds'
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

    const EXPAND_NONE = 'none';
    const EXPAND_WIQL = 'wiql';
    const EXPAND_CLAUSES = 'clauses';
    const EXPAND_ALL = 'all';
    const EXPAND_MINIMAL = 'minimal';
    const ERROR_POLICY_FAIL = 'fail';
    const ERROR_POLICY_OMIT = 'omit';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExpandAllowableValues()
    {
        return [
            self::EXPAND_NONE,
            self::EXPAND_WIQL,
            self::EXPAND_CLAUSES,
            self::EXPAND_ALL,
            self::EXPAND_MINIMAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getErrorPolicyAllowableValues()
    {
        return [
            self::ERROR_POLICY_FAIL,
            self::ERROR_POLICY_OMIT,
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
        $this->container['expand'] = isset($data['expand']) ? $data['expand'] : null;
        $this->container['errorPolicy'] = isset($data['errorPolicy']) ? $data['errorPolicy'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getExpandAllowableValues();
        if (!is_null($this->container['expand']) && !in_array($this->container['expand'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'expand', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getErrorPolicyAllowableValues();
        if (!is_null($this->container['errorPolicy']) && !in_array($this->container['errorPolicy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'errorPolicy', must be one of '%s'",
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
     * Gets expand
     *
     * @return string
     */
    public function getExpand()
    {
        return $this->container['expand'];
    }

    /**
     * Sets expand
     *
     * @param string $expand The expand parameters for queries. Possible options are { None, Wiql, Clauses, All, Minimal }
     *
     * @return $this
     */
    public function setExpand($expand)
    {
        $allowedValues = $this->getExpandAllowableValues();
        if (!is_null($expand) && !in_array($expand, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'expand', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['expand'] = $expand;

        return $this;
    }

    /**
     * Gets errorPolicy
     *
     * @return string
     */
    public function getErrorPolicy()
    {
        return $this->container['errorPolicy'];
    }

    /**
     * Sets errorPolicy
     *
     * @param string $errorPolicy The flag to control error policy in a query batch request. Possible options are { Fail, Omit }.
     *
     * @return $this
     */
    public function setErrorPolicy($errorPolicy)
    {
        $allowedValues = $this->getErrorPolicyAllowableValues();
        if (!is_null($errorPolicy) && !in_array($errorPolicy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'errorPolicy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['errorPolicy'] = $errorPolicy;

        return $this;
    }

    /**
     * Gets ids
     *
     * @return string[]
     */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
     * Sets ids
     *
     * @param string[] $ids The requested query ids
     *
     * @return $this
     */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;

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


