<?php
/**
 * NotificationBacklogStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Notification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Notification
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

namespace FrankHouweling\AzureDevOpsClient\Notification\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Notification\ObjectSerializer;

/**
 * NotificationBacklogStatus Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Notification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationBacklogStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotificationBacklogStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'captureTime' => '\DateTime',
        'channel' => 'string',
        'jobId' => 'string',
        'lastJobBatchStartTime' => '\DateTime',
        'lastJobProcessedTime' => '\DateTime',
        'lastNotificationBatchStartTime' => '\DateTime',
        'lastNotificationProcessedTime' => '\DateTime',
        'oldestPendingNotificationTime' => '\DateTime',
        'publisher' => 'string',
        'status' => 'string',
        'unprocessedNotifications' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'captureTime' => 'date-time',
        'channel' => null,
        'jobId' => 'uuid',
        'lastJobBatchStartTime' => 'date-time',
        'lastJobProcessedTime' => 'date-time',
        'lastNotificationBatchStartTime' => 'date-time',
        'lastNotificationProcessedTime' => 'date-time',
        'oldestPendingNotificationTime' => 'date-time',
        'publisher' => null,
        'status' => null,
        'unprocessedNotifications' => 'int32'
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
        'captureTime' => 'captureTime',
        'channel' => 'channel',
        'jobId' => 'jobId',
        'lastJobBatchStartTime' => 'lastJobBatchStartTime',
        'lastJobProcessedTime' => 'lastJobProcessedTime',
        'lastNotificationBatchStartTime' => 'lastNotificationBatchStartTime',
        'lastNotificationProcessedTime' => 'lastNotificationProcessedTime',
        'oldestPendingNotificationTime' => 'oldestPendingNotificationTime',
        'publisher' => 'publisher',
        'status' => 'status',
        'unprocessedNotifications' => 'unprocessedNotifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'captureTime' => 'setCaptureTime',
        'channel' => 'setChannel',
        'jobId' => 'setJobId',
        'lastJobBatchStartTime' => 'setLastJobBatchStartTime',
        'lastJobProcessedTime' => 'setLastJobProcessedTime',
        'lastNotificationBatchStartTime' => 'setLastNotificationBatchStartTime',
        'lastNotificationProcessedTime' => 'setLastNotificationProcessedTime',
        'oldestPendingNotificationTime' => 'setOldestPendingNotificationTime',
        'publisher' => 'setPublisher',
        'status' => 'setStatus',
        'unprocessedNotifications' => 'setUnprocessedNotifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'captureTime' => 'getCaptureTime',
        'channel' => 'getChannel',
        'jobId' => 'getJobId',
        'lastJobBatchStartTime' => 'getLastJobBatchStartTime',
        'lastJobProcessedTime' => 'getLastJobProcessedTime',
        'lastNotificationBatchStartTime' => 'getLastNotificationBatchStartTime',
        'lastNotificationProcessedTime' => 'getLastNotificationProcessedTime',
        'oldestPendingNotificationTime' => 'getOldestPendingNotificationTime',
        'publisher' => 'getPublisher',
        'status' => 'getStatus',
        'unprocessedNotifications' => 'getUnprocessedNotifications'
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
        $this->container['captureTime'] = isset($data['captureTime']) ? $data['captureTime'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['lastJobBatchStartTime'] = isset($data['lastJobBatchStartTime']) ? $data['lastJobBatchStartTime'] : null;
        $this->container['lastJobProcessedTime'] = isset($data['lastJobProcessedTime']) ? $data['lastJobProcessedTime'] : null;
        $this->container['lastNotificationBatchStartTime'] = isset($data['lastNotificationBatchStartTime']) ? $data['lastNotificationBatchStartTime'] : null;
        $this->container['lastNotificationProcessedTime'] = isset($data['lastNotificationProcessedTime']) ? $data['lastNotificationProcessedTime'] : null;
        $this->container['oldestPendingNotificationTime'] = isset($data['oldestPendingNotificationTime']) ? $data['oldestPendingNotificationTime'] : null;
        $this->container['publisher'] = isset($data['publisher']) ? $data['publisher'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['unprocessedNotifications'] = isset($data['unprocessedNotifications']) ? $data['unprocessedNotifications'] : null;
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
     * Gets captureTime
     *
     * @return \DateTime
     */
    public function getCaptureTime()
    {
        return $this->container['captureTime'];
    }

    /**
     * Sets captureTime
     *
     * @param \DateTime $captureTime captureTime
     *
     * @return $this
     */
    public function setCaptureTime($captureTime)
    {
        $this->container['captureTime'] = $captureTime;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string $channel channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param string $jobId jobId
     *
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets lastJobBatchStartTime
     *
     * @return \DateTime
     */
    public function getLastJobBatchStartTime()
    {
        return $this->container['lastJobBatchStartTime'];
    }

    /**
     * Sets lastJobBatchStartTime
     *
     * @param \DateTime $lastJobBatchStartTime lastJobBatchStartTime
     *
     * @return $this
     */
    public function setLastJobBatchStartTime($lastJobBatchStartTime)
    {
        $this->container['lastJobBatchStartTime'] = $lastJobBatchStartTime;

        return $this;
    }

    /**
     * Gets lastJobProcessedTime
     *
     * @return \DateTime
     */
    public function getLastJobProcessedTime()
    {
        return $this->container['lastJobProcessedTime'];
    }

    /**
     * Sets lastJobProcessedTime
     *
     * @param \DateTime $lastJobProcessedTime lastJobProcessedTime
     *
     * @return $this
     */
    public function setLastJobProcessedTime($lastJobProcessedTime)
    {
        $this->container['lastJobProcessedTime'] = $lastJobProcessedTime;

        return $this;
    }

    /**
     * Gets lastNotificationBatchStartTime
     *
     * @return \DateTime
     */
    public function getLastNotificationBatchStartTime()
    {
        return $this->container['lastNotificationBatchStartTime'];
    }

    /**
     * Sets lastNotificationBatchStartTime
     *
     * @param \DateTime $lastNotificationBatchStartTime lastNotificationBatchStartTime
     *
     * @return $this
     */
    public function setLastNotificationBatchStartTime($lastNotificationBatchStartTime)
    {
        $this->container['lastNotificationBatchStartTime'] = $lastNotificationBatchStartTime;

        return $this;
    }

    /**
     * Gets lastNotificationProcessedTime
     *
     * @return \DateTime
     */
    public function getLastNotificationProcessedTime()
    {
        return $this->container['lastNotificationProcessedTime'];
    }

    /**
     * Sets lastNotificationProcessedTime
     *
     * @param \DateTime $lastNotificationProcessedTime lastNotificationProcessedTime
     *
     * @return $this
     */
    public function setLastNotificationProcessedTime($lastNotificationProcessedTime)
    {
        $this->container['lastNotificationProcessedTime'] = $lastNotificationProcessedTime;

        return $this;
    }

    /**
     * Gets oldestPendingNotificationTime
     *
     * @return \DateTime
     */
    public function getOldestPendingNotificationTime()
    {
        return $this->container['oldestPendingNotificationTime'];
    }

    /**
     * Sets oldestPendingNotificationTime
     *
     * @param \DateTime $oldestPendingNotificationTime oldestPendingNotificationTime
     *
     * @return $this
     */
    public function setOldestPendingNotificationTime($oldestPendingNotificationTime)
    {
        $this->container['oldestPendingNotificationTime'] = $oldestPendingNotificationTime;

        return $this;
    }

    /**
     * Gets publisher
     *
     * @return string
     */
    public function getPublisher()
    {
        return $this->container['publisher'];
    }

    /**
     * Sets publisher
     *
     * @param string $publisher publisher
     *
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->container['publisher'] = $publisher;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Null status is unprocessed
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets unprocessedNotifications
     *
     * @return int
     */
    public function getUnprocessedNotifications()
    {
        return $this->container['unprocessedNotifications'];
    }

    /**
     * Sets unprocessedNotifications
     *
     * @param int $unprocessedNotifications unprocessedNotifications
     *
     * @return $this
     */
    public function setUnprocessedNotifications($unprocessedNotifications)
    {
        $this->container['unprocessedNotifications'] = $unprocessedNotifications;

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

