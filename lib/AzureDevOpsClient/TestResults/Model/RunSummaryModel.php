<?php
/**
 * RunSummaryModel
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
 * RunSummaryModel Class Doc Comment
 *
 * @category Class
 * @description Run summary for each output type of test.
 * @package  FrankHouweling\AzureDevOpsClient\TestResults
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RunSummaryModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RunSummaryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'duration' => 'int',
        'resultCount' => 'int',
        'testOutcome' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'duration' => 'int64',
        'resultCount' => 'int32',
        'testOutcome' => null
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
        'duration' => 'duration',
        'resultCount' => 'resultCount',
        'testOutcome' => 'testOutcome'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'duration' => 'setDuration',
        'resultCount' => 'setResultCount',
        'testOutcome' => 'setTestOutcome'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'duration' => 'getDuration',
        'resultCount' => 'getResultCount',
        'testOutcome' => 'getTestOutcome'
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

    const TEST_OUTCOME_UNSPECIFIED = 'unspecified';
    const TEST_OUTCOME_NONE = 'none';
    const TEST_OUTCOME_PASSED = 'passed';
    const TEST_OUTCOME_FAILED = 'failed';
    const TEST_OUTCOME_INCONCLUSIVE = 'inconclusive';
    const TEST_OUTCOME_TIMEOUT = 'timeout';
    const TEST_OUTCOME_ABORTED = 'aborted';
    const TEST_OUTCOME_BLOCKED = 'blocked';
    const TEST_OUTCOME_NOT_EXECUTED = 'notExecuted';
    const TEST_OUTCOME_WARNING = 'warning';
    const TEST_OUTCOME_ERROR = 'error';
    const TEST_OUTCOME_NOT_APPLICABLE = 'notApplicable';
    const TEST_OUTCOME_PAUSED = 'paused';
    const TEST_OUTCOME_IN_PROGRESS = 'inProgress';
    const TEST_OUTCOME_NOT_IMPACTED = 'notImpacted';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTestOutcomeAllowableValues()
    {
        return [
            self::TEST_OUTCOME_UNSPECIFIED,
            self::TEST_OUTCOME_NONE,
            self::TEST_OUTCOME_PASSED,
            self::TEST_OUTCOME_FAILED,
            self::TEST_OUTCOME_INCONCLUSIVE,
            self::TEST_OUTCOME_TIMEOUT,
            self::TEST_OUTCOME_ABORTED,
            self::TEST_OUTCOME_BLOCKED,
            self::TEST_OUTCOME_NOT_EXECUTED,
            self::TEST_OUTCOME_WARNING,
            self::TEST_OUTCOME_ERROR,
            self::TEST_OUTCOME_NOT_APPLICABLE,
            self::TEST_OUTCOME_PAUSED,
            self::TEST_OUTCOME_IN_PROGRESS,
            self::TEST_OUTCOME_NOT_IMPACTED,
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['resultCount'] = isset($data['resultCount']) ? $data['resultCount'] : null;
        $this->container['testOutcome'] = isset($data['testOutcome']) ? $data['testOutcome'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTestOutcomeAllowableValues();
        if (!is_null($this->container['testOutcome']) && !in_array($this->container['testOutcome'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'testOutcome', must be one of '%s'",
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
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Total time taken in milliseconds.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets resultCount
     *
     * @return int
     */
    public function getResultCount()
    {
        return $this->container['resultCount'];
    }

    /**
     * Sets resultCount
     *
     * @param int $resultCount Number of results for Outcome TestOutcome
     *
     * @return $this
     */
    public function setResultCount($resultCount)
    {
        $this->container['resultCount'] = $resultCount;

        return $this;
    }

    /**
     * Gets testOutcome
     *
     * @return string
     */
    public function getTestOutcome()
    {
        return $this->container['testOutcome'];
    }

    /**
     * Sets testOutcome
     *
     * @param string $testOutcome Summary is based on outcome
     *
     * @return $this
     */
    public function setTestOutcome($testOutcome)
    {
        $allowedValues = $this->getTestOutcomeAllowableValues();
        if (!is_null($testOutcome) && !in_array($testOutcome, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'testOutcome', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['testOutcome'] = $testOutcome;

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


