<?php
/**
 * SubscriptionEvaluationResult
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
 * SubscriptionEvaluationResult Class Doc Comment
 *
 * @category Class
 * @description Encapsulates the subscription evaluation results. It defines the Date Interval that was used, number of events evaluated and events and notifications results
 * @package  FrankHouweling\AzureDevOpsClient\Notification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionEvaluationResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionEvaluationResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'evaluationJobStatus' => 'string',
        'events' => '\FrankHouweling\AzureDevOpsClient\Notification\Model\EventsEvaluationResult',
        'id' => 'string',
        'notifications' => '\FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationsEvaluationResult'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'evaluationJobStatus' => null,
        'events' => null,
        'id' => 'uuid',
        'notifications' => null
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
        'evaluationJobStatus' => 'evaluationJobStatus',
        'events' => 'events',
        'id' => 'id',
        'notifications' => 'notifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'evaluationJobStatus' => 'setEvaluationJobStatus',
        'events' => 'setEvents',
        'id' => 'setId',
        'notifications' => 'setNotifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'evaluationJobStatus' => 'getEvaluationJobStatus',
        'events' => 'getEvents',
        'id' => 'getId',
        'notifications' => 'getNotifications'
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

    const EVALUATION_JOB_STATUS_NOT_SET = 'notSet';
    const EVALUATION_JOB_STATUS_QUEUED = 'queued';
    const EVALUATION_JOB_STATUS_IN_PROGRESS = 'inProgress';
    const EVALUATION_JOB_STATUS_CANCELLED = 'cancelled';
    const EVALUATION_JOB_STATUS_SUCCEEDED = 'succeeded';
    const EVALUATION_JOB_STATUS_FAILED = 'failed';
    const EVALUATION_JOB_STATUS_TIMED_OUT = 'timedOut';
    const EVALUATION_JOB_STATUS_NOT_FOUND = 'notFound';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEvaluationJobStatusAllowableValues()
    {
        return [
            self::EVALUATION_JOB_STATUS_NOT_SET,
            self::EVALUATION_JOB_STATUS_QUEUED,
            self::EVALUATION_JOB_STATUS_IN_PROGRESS,
            self::EVALUATION_JOB_STATUS_CANCELLED,
            self::EVALUATION_JOB_STATUS_SUCCEEDED,
            self::EVALUATION_JOB_STATUS_FAILED,
            self::EVALUATION_JOB_STATUS_TIMED_OUT,
            self::EVALUATION_JOB_STATUS_NOT_FOUND,
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
        $this->container['evaluationJobStatus'] = isset($data['evaluationJobStatus']) ? $data['evaluationJobStatus'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['notifications'] = isset($data['notifications']) ? $data['notifications'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEvaluationJobStatusAllowableValues();
        if (!is_null($this->container['evaluationJobStatus']) && !in_array($this->container['evaluationJobStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'evaluationJobStatus', must be one of '%s'",
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
     * Gets evaluationJobStatus
     *
     * @return string
     */
    public function getEvaluationJobStatus()
    {
        return $this->container['evaluationJobStatus'];
    }

    /**
     * Sets evaluationJobStatus
     *
     * @param string $evaluationJobStatus Subscription evaluation job status
     *
     * @return $this
     */
    public function setEvaluationJobStatus($evaluationJobStatus)
    {
        $allowedValues = $this->getEvaluationJobStatusAllowableValues();
        if (!is_null($evaluationJobStatus) && !in_array($evaluationJobStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'evaluationJobStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['evaluationJobStatus'] = $evaluationJobStatus;

        return $this;
    }

    /**
     * Gets events
     *
     * @return \FrankHouweling\AzureDevOpsClient\Notification\Model\EventsEvaluationResult
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \FrankHouweling\AzureDevOpsClient\Notification\Model\EventsEvaluationResult $events Subscription evaluation events results.
     *
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

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
     * @param string $id The requestId which is the subscription evaluation jobId
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets notifications
     *
     * @return \FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationsEvaluationResult
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param \FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationsEvaluationResult $notifications Subscription evaluation  notification results.
     *
     * @return $this
     */
    public function setNotifications($notifications)
    {
        $this->container['notifications'] = $notifications;

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


