<?php
/**
 * TestResultsDetailsForGroup
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\TestResults
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TestResults
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

namespace FrankHouweling\AzureDevOpsClient\TestResults\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\TestResults\ObjectSerializer;

/**
 * TestResultsDetailsForGroup Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\TestResults
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestResultsDetailsForGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestResultsDetailsForGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'groupByValue' => 'object',
        'results' => '\FrankHouweling\AzureDevOpsClient\TestResults\Model\TestCaseResult[]',
        'resultsCountByOutcome' => 'map[string,\FrankHouweling\AzureDevOpsClient\TestResults\Model\AggregatedResultsByOutcome]',
        'tags' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'groupByValue' => null,
        'results' => null,
        'resultsCountByOutcome' => null,
        'tags' => null
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
        'groupByValue' => 'groupByValue',
        'results' => 'results',
        'resultsCountByOutcome' => 'resultsCountByOutcome',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'groupByValue' => 'setGroupByValue',
        'results' => 'setResults',
        'resultsCountByOutcome' => 'setResultsCountByOutcome',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'groupByValue' => 'getGroupByValue',
        'results' => 'getResults',
        'resultsCountByOutcome' => 'getResultsCountByOutcome',
        'tags' => 'getTags'
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
        $this->container['groupByValue'] = isset($data['groupByValue']) ? $data['groupByValue'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['resultsCountByOutcome'] = isset($data['resultsCountByOutcome']) ? $data['resultsCountByOutcome'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
     * Gets groupByValue
     *
     * @return object
     */
    public function getGroupByValue()
    {
        return $this->container['groupByValue'];
    }

    /**
     * Sets groupByValue
     *
     * @param object $groupByValue groupByValue
     *
     * @return $this
     */
    public function setGroupByValue($groupByValue)
    {
        $this->container['groupByValue'] = $groupByValue;

        return $this;
    }

    /**
     * Gets results
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestResults\Model\TestCaseResult[]
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestResults\Model\TestCaseResult[] $results results
     *
     * @return $this
     */
    public function setResults($results)
    {
        $this->container['results'] = $results;

        return $this;
    }

    /**
     * Gets resultsCountByOutcome
     *
     * @return map[string,\FrankHouweling\AzureDevOpsClient\TestResults\Model\AggregatedResultsByOutcome]
     */
    public function getResultsCountByOutcome()
    {
        return $this->container['resultsCountByOutcome'];
    }

    /**
     * Sets resultsCountByOutcome
     *
     * @param map[string,\FrankHouweling\AzureDevOpsClient\TestResults\Model\AggregatedResultsByOutcome] $resultsCountByOutcome resultsCountByOutcome
     *
     * @return $this
     */
    public function setResultsCountByOutcome($resultsCountByOutcome)
    {
        $this->container['resultsCountByOutcome'] = $resultsCountByOutcome;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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


