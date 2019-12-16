<?php
/**
 * TestActionResult2
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
 * TestActionResult2 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestActionResult2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestActionResult2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'actionPath' => 'string',
        'comment' => 'string',
        'creationDate' => '\DateTime',
        'dateCompleted' => '\DateTime',
        'dateStarted' => '\DateTime',
        'duration' => 'int',
        'errorMessage' => 'string',
        'iterationId' => 'int',
        'lastUpdated' => '\DateTime',
        'outcome' => 'string',
        'sharedStepId' => 'int',
        'sharedStepRevision' => 'int',
        'testResultId' => 'int',
        'testRunId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'actionPath' => null,
        'comment' => null,
        'creationDate' => 'date-time',
        'dateCompleted' => 'date-time',
        'dateStarted' => 'date-time',
        'duration' => 'int64',
        'errorMessage' => null,
        'iterationId' => 'int32',
        'lastUpdated' => 'date-time',
        'outcome' => 'byte',
        'sharedStepId' => 'int32',
        'sharedStepRevision' => 'int32',
        'testResultId' => 'int32',
        'testRunId' => 'int32'
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
        'actionPath' => 'actionPath',
        'comment' => 'comment',
        'creationDate' => 'creationDate',
        'dateCompleted' => 'dateCompleted',
        'dateStarted' => 'dateStarted',
        'duration' => 'duration',
        'errorMessage' => 'errorMessage',
        'iterationId' => 'iterationId',
        'lastUpdated' => 'lastUpdated',
        'outcome' => 'outcome',
        'sharedStepId' => 'sharedStepId',
        'sharedStepRevision' => 'sharedStepRevision',
        'testResultId' => 'testResultId',
        'testRunId' => 'testRunId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionPath' => 'setActionPath',
        'comment' => 'setComment',
        'creationDate' => 'setCreationDate',
        'dateCompleted' => 'setDateCompleted',
        'dateStarted' => 'setDateStarted',
        'duration' => 'setDuration',
        'errorMessage' => 'setErrorMessage',
        'iterationId' => 'setIterationId',
        'lastUpdated' => 'setLastUpdated',
        'outcome' => 'setOutcome',
        'sharedStepId' => 'setSharedStepId',
        'sharedStepRevision' => 'setSharedStepRevision',
        'testResultId' => 'setTestResultId',
        'testRunId' => 'setTestRunId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionPath' => 'getActionPath',
        'comment' => 'getComment',
        'creationDate' => 'getCreationDate',
        'dateCompleted' => 'getDateCompleted',
        'dateStarted' => 'getDateStarted',
        'duration' => 'getDuration',
        'errorMessage' => 'getErrorMessage',
        'iterationId' => 'getIterationId',
        'lastUpdated' => 'getLastUpdated',
        'outcome' => 'getOutcome',
        'sharedStepId' => 'getSharedStepId',
        'sharedStepRevision' => 'getSharedStepRevision',
        'testResultId' => 'getTestResultId',
        'testRunId' => 'getTestRunId'
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
        $this->container['actionPath'] = isset($data['actionPath']) ? $data['actionPath'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['dateCompleted'] = isset($data['dateCompleted']) ? $data['dateCompleted'] : null;
        $this->container['dateStarted'] = isset($data['dateStarted']) ? $data['dateStarted'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['iterationId'] = isset($data['iterationId']) ? $data['iterationId'] : null;
        $this->container['lastUpdated'] = isset($data['lastUpdated']) ? $data['lastUpdated'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['sharedStepId'] = isset($data['sharedStepId']) ? $data['sharedStepId'] : null;
        $this->container['sharedStepRevision'] = isset($data['sharedStepRevision']) ? $data['sharedStepRevision'] : null;
        $this->container['testResultId'] = isset($data['testResultId']) ? $data['testResultId'] : null;
        $this->container['testRunId'] = isset($data['testRunId']) ? $data['testRunId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['outcome']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['outcome'])) {
            $invalidProperties[] = "invalid value for 'outcome', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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
     * Gets actionPath
     *
     * @return string
     */
    public function getActionPath()
    {
        return $this->container['actionPath'];
    }

    /**
     * Sets actionPath
     *
     * @param string $actionPath actionPath
     *
     * @return $this
     */
    public function setActionPath($actionPath)
    {
        $this->container['actionPath'] = $actionPath;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime $creationDate creationDate
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets dateCompleted
     *
     * @return \DateTime
     */
    public function getDateCompleted()
    {
        return $this->container['dateCompleted'];
    }

    /**
     * Sets dateCompleted
     *
     * @param \DateTime $dateCompleted dateCompleted
     *
     * @return $this
     */
    public function setDateCompleted($dateCompleted)
    {
        $this->container['dateCompleted'] = $dateCompleted;

        return $this;
    }

    /**
     * Gets dateStarted
     *
     * @return \DateTime
     */
    public function getDateStarted()
    {
        return $this->container['dateStarted'];
    }

    /**
     * Sets dateStarted
     *
     * @param \DateTime $dateStarted dateStarted
     *
     * @return $this
     */
    public function setDateStarted($dateStarted)
    {
        $this->container['dateStarted'] = $dateStarted;

        return $this;
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
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets errorMessage
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
     * Sets errorMessage
     *
     * @param string $errorMessage errorMessage
     *
     * @return $this
     */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;

        return $this;
    }

    /**
     * Gets iterationId
     *
     * @return int
     */
    public function getIterationId()
    {
        return $this->container['iterationId'];
    }

    /**
     * Sets iterationId
     *
     * @param int $iterationId iterationId
     *
     * @return $this
     */
    public function setIterationId($iterationId)
    {
        $this->container['iterationId'] = $iterationId;

        return $this;
    }

    /**
     * Gets lastUpdated
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->container['lastUpdated'];
    }

    /**
     * Sets lastUpdated
     *
     * @param \DateTime $lastUpdated lastUpdated
     *
     * @return $this
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->container['lastUpdated'] = $lastUpdated;

        return $this;
    }

    /**
     * Gets outcome
     *
     * @return string
     */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     *
     * @param string $outcome outcome
     *
     * @return $this
     */
    public function setOutcome($outcome)
    {

        if (!is_null($outcome) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $outcome))) {
            throw new \InvalidArgumentException("invalid value for $outcome when calling TestActionResult2., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['outcome'] = $outcome;

        return $this;
    }

    /**
     * Gets sharedStepId
     *
     * @return int
     */
    public function getSharedStepId()
    {
        return $this->container['sharedStepId'];
    }

    /**
     * Sets sharedStepId
     *
     * @param int $sharedStepId sharedStepId
     *
     * @return $this
     */
    public function setSharedStepId($sharedStepId)
    {
        $this->container['sharedStepId'] = $sharedStepId;

        return $this;
    }

    /**
     * Gets sharedStepRevision
     *
     * @return int
     */
    public function getSharedStepRevision()
    {
        return $this->container['sharedStepRevision'];
    }

    /**
     * Sets sharedStepRevision
     *
     * @param int $sharedStepRevision sharedStepRevision
     *
     * @return $this
     */
    public function setSharedStepRevision($sharedStepRevision)
    {
        $this->container['sharedStepRevision'] = $sharedStepRevision;

        return $this;
    }

    /**
     * Gets testResultId
     *
     * @return int
     */
    public function getTestResultId()
    {
        return $this->container['testResultId'];
    }

    /**
     * Sets testResultId
     *
     * @param int $testResultId testResultId
     *
     * @return $this
     */
    public function setTestResultId($testResultId)
    {
        $this->container['testResultId'] = $testResultId;

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


