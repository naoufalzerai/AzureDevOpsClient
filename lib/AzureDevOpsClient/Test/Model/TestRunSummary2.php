<?php
/**
 * TestRunSummary2
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Test
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

namespace FrankHouweling\AzureDevOpsClient\Test\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Test\ObjectSerializer;

/**
 * TestRunSummary2 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestRunSummary2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestRunSummary2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isRerun' => 'bool',
        'projectId' => 'string',
        'resultCount' => 'int',
        'resultDuration' => 'int',
        'runDuration' => 'int',
        'testOutcome' => 'string',
        'testRunCompletedDate' => '\DateTime',
        'testRunContextId' => 'int',
        'testRunId' => 'int',
        'testRunStatsId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isRerun' => null,
        'projectId' => 'uuid',
        'resultCount' => 'int32',
        'resultDuration' => 'int64',
        'runDuration' => 'int64',
        'testOutcome' => 'byte',
        'testRunCompletedDate' => 'date-time',
        'testRunContextId' => 'int32',
        'testRunId' => 'int32',
        'testRunStatsId' => 'int32'
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
        'isRerun' => 'isRerun',
        'projectId' => 'projectId',
        'resultCount' => 'resultCount',
        'resultDuration' => 'resultDuration',
        'runDuration' => 'runDuration',
        'testOutcome' => 'testOutcome',
        'testRunCompletedDate' => 'testRunCompletedDate',
        'testRunContextId' => 'testRunContextId',
        'testRunId' => 'testRunId',
        'testRunStatsId' => 'testRunStatsId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isRerun' => 'setIsRerun',
        'projectId' => 'setProjectId',
        'resultCount' => 'setResultCount',
        'resultDuration' => 'setResultDuration',
        'runDuration' => 'setRunDuration',
        'testOutcome' => 'setTestOutcome',
        'testRunCompletedDate' => 'setTestRunCompletedDate',
        'testRunContextId' => 'setTestRunContextId',
        'testRunId' => 'setTestRunId',
        'testRunStatsId' => 'setTestRunStatsId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isRerun' => 'getIsRerun',
        'projectId' => 'getProjectId',
        'resultCount' => 'getResultCount',
        'resultDuration' => 'getResultDuration',
        'runDuration' => 'getRunDuration',
        'testOutcome' => 'getTestOutcome',
        'testRunCompletedDate' => 'getTestRunCompletedDate',
        'testRunContextId' => 'getTestRunContextId',
        'testRunId' => 'getTestRunId',
        'testRunStatsId' => 'getTestRunStatsId'
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
        $this->container['isRerun'] = isset($data['isRerun']) ? $data['isRerun'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['resultCount'] = isset($data['resultCount']) ? $data['resultCount'] : null;
        $this->container['resultDuration'] = isset($data['resultDuration']) ? $data['resultDuration'] : null;
        $this->container['runDuration'] = isset($data['runDuration']) ? $data['runDuration'] : null;
        $this->container['testOutcome'] = isset($data['testOutcome']) ? $data['testOutcome'] : null;
        $this->container['testRunCompletedDate'] = isset($data['testRunCompletedDate']) ? $data['testRunCompletedDate'] : null;
        $this->container['testRunContextId'] = isset($data['testRunContextId']) ? $data['testRunContextId'] : null;
        $this->container['testRunId'] = isset($data['testRunId']) ? $data['testRunId'] : null;
        $this->container['testRunStatsId'] = isset($data['testRunStatsId']) ? $data['testRunStatsId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['testOutcome']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['testOutcome'])) {
            $invalidProperties[] = "invalid value for 'testOutcome', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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
     * Gets isRerun
     *
     * @return bool
     */
    public function getIsRerun()
    {
        return $this->container['isRerun'];
    }

    /**
     * Sets isRerun
     *
     * @param bool $isRerun isRerun
     *
     * @return $this
     */
    public function setIsRerun($isRerun)
    {
        $this->container['isRerun'] = $isRerun;

        return $this;
    }

    /**
     * Gets projectId
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     *
     * @param string $projectId projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

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
     * @param int $resultCount resultCount
     *
     * @return $this
     */
    public function setResultCount($resultCount)
    {
        $this->container['resultCount'] = $resultCount;

        return $this;
    }

    /**
     * Gets resultDuration
     *
     * @return int
     */
    public function getResultDuration()
    {
        return $this->container['resultDuration'];
    }

    /**
     * Sets resultDuration
     *
     * @param int $resultDuration resultDuration
     *
     * @return $this
     */
    public function setResultDuration($resultDuration)
    {
        $this->container['resultDuration'] = $resultDuration;

        return $this;
    }

    /**
     * Gets runDuration
     *
     * @return int
     */
    public function getRunDuration()
    {
        return $this->container['runDuration'];
    }

    /**
     * Sets runDuration
     *
     * @param int $runDuration runDuration
     *
     * @return $this
     */
    public function setRunDuration($runDuration)
    {
        $this->container['runDuration'] = $runDuration;

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
     * @param string $testOutcome testOutcome
     *
     * @return $this
     */
    public function setTestOutcome($testOutcome)
    {

        if (!is_null($testOutcome) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $testOutcome))) {
            throw new \InvalidArgumentException("invalid value for $testOutcome when calling TestRunSummary2., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['testOutcome'] = $testOutcome;

        return $this;
    }

    /**
     * Gets testRunCompletedDate
     *
     * @return \DateTime
     */
    public function getTestRunCompletedDate()
    {
        return $this->container['testRunCompletedDate'];
    }

    /**
     * Sets testRunCompletedDate
     *
     * @param \DateTime $testRunCompletedDate testRunCompletedDate
     *
     * @return $this
     */
    public function setTestRunCompletedDate($testRunCompletedDate)
    {
        $this->container['testRunCompletedDate'] = $testRunCompletedDate;

        return $this;
    }

    /**
     * Gets testRunContextId
     *
     * @return int
     */
    public function getTestRunContextId()
    {
        return $this->container['testRunContextId'];
    }

    /**
     * Sets testRunContextId
     *
     * @param int $testRunContextId testRunContextId
     *
     * @return $this
     */
    public function setTestRunContextId($testRunContextId)
    {
        $this->container['testRunContextId'] = $testRunContextId;

        return $this;
    }

    /**
     * Gets testRunId
     *
     * @return int
     */
    public function getTestRunId()
    {
        return $this->container['testRunId'];
    }

    /**
     * Sets testRunId
     *
     * @param int $testRunId testRunId
     *
     * @return $this
     */
    public function setTestRunId($testRunId)
    {
        $this->container['testRunId'] = $testRunId;

        return $this;
    }

    /**
     * Gets testRunStatsId
     *
     * @return int
     */
    public function getTestRunStatsId()
    {
        return $this->container['testRunStatsId'];
    }

    /**
     * Sets testRunStatsId
     *
     * @param int $testRunStatsId testRunStatsId
     *
     * @return $this
     */
    public function setTestRunStatsId($testRunStatsId)
    {
        $this->container['testRunStatsId'] = $testRunStatsId;

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


