<?php
/**
 * CodeSearchRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Search
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Search
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

namespace FrankHouweling\AzureDevOpsClient\Search\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Search\ObjectSerializer;

/**
 * CodeSearchRequest Class Doc Comment
 *
 * @category Class
 * @description Defines a code search request.
 * @package  FrankHouweling\AzureDevOpsClient\Search
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CodeSearchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CodeSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'orderBy' => '\FrankHouweling\AzureDevOpsClient\Search\Model\SortOption[]',
        'skip' => 'int',
        'top' => 'int',
        'includeFacets' => 'bool',
        'filters' => 'map[string,string[]]',
        'searchText' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'orderBy' => null,
        'skip' => 'int32',
        'top' => 'int32',
        'includeFacets' => null,
        'filters' => null,
        'searchText' => null
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
        'orderBy' => '$orderBy',
        'skip' => '$skip',
        'top' => '$top',
        'includeFacets' => 'includeFacets',
        'filters' => 'filters',
        'searchText' => 'searchText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orderBy' => 'setOrderBy',
        'skip' => 'setSkip',
        'top' => 'setTop',
        'includeFacets' => 'setIncludeFacets',
        'filters' => 'setFilters',
        'searchText' => 'setSearchText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orderBy' => 'getOrderBy',
        'skip' => 'getSkip',
        'top' => 'getTop',
        'includeFacets' => 'getIncludeFacets',
        'filters' => 'getFilters',
        'searchText' => 'getSearchText'
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
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['skip'] = isset($data['skip']) ? $data['skip'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['includeFacets'] = isset($data['includeFacets']) ? $data['includeFacets'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['searchText'] = isset($data['searchText']) ? $data['searchText'] : null;
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
     * Gets orderBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\Search\Model\SortOption[]
     */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
     * Sets orderBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\Search\Model\SortOption[] $orderBy Options for sorting search results. If set to null, the results will be returned sorted by relevance. If more than one sort option is provided, the results are sorted in the order specified in the OrderBy.
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return int
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param int $skip Number of results to be skipped.
     *
     * @return $this
     */
    public function setSkip($skip)
    {
        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets top
     *
     * @return int
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param int $top Number of results to be returned.
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets includeFacets
     *
     * @return bool
     */
    public function getIncludeFacets()
    {
        return $this->container['includeFacets'];
    }

    /**
     * Sets includeFacets
     *
     * @param bool $includeFacets Flag to opt for faceting in the result. Default behavior is false.
     *
     * @return $this
     */
    public function setIncludeFacets($includeFacets)
    {
        $this->container['includeFacets'] = $includeFacets;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return map[string,string[]]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param map[string,string[]] $filters Filters to be applied. Set it to null if there are no filters to be applied.
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets searchText
     *
     * @return string
     */
    public function getSearchText()
    {
        return $this->container['searchText'];
    }

    /**
     * Sets searchText
     *
     * @param string $searchText The search text.
     *
     * @return $this
     */
    public function setSearchText($searchText)
    {
        $this->container['searchText'] = $searchText;

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


