<?php
/**
 * SubscriptionQueryCondition
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
 * SubscriptionQueryCondition Class Doc Comment
 *
 * @category Class
 * @description Conditions a subscription must match to qualify for the query result set. Not all fields are required. A subscription must match all conditions specified in order to qualify for the result set.
 * @package  FrankHouweling\AzureDevOpsClient\Notification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionQueryCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionQueryCondition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filter' => '\FrankHouweling\AzureDevOpsClient\Notification\Model\ISubscriptionFilter',
        'flags' => 'string',
        'scope' => 'string',
        'subscriberId' => 'string',
        'subscriptionId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filter' => null,
        'flags' => null,
        'scope' => null,
        'subscriberId' => 'uuid',
        'subscriptionId' => null
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
        'filter' => 'filter',
        'flags' => 'flags',
        'scope' => 'scope',
        'subscriberId' => 'subscriberId',
        'subscriptionId' => 'subscriptionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filter' => 'setFilter',
        'flags' => 'setFlags',
        'scope' => 'setScope',
        'subscriberId' => 'setSubscriberId',
        'subscriptionId' => 'setSubscriptionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filter' => 'getFilter',
        'flags' => 'getFlags',
        'scope' => 'getScope',
        'subscriberId' => 'getSubscriberId',
        'subscriptionId' => 'getSubscriptionId'
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

    const FLAGS_NONE = 'none';
    const FLAGS_GROUP_SUBSCRIPTION = 'groupSubscription';
    const FLAGS_CONTRIBUTED_SUBSCRIPTION = 'contributedSubscription';
    const FLAGS_CAN_OPT_OUT = 'canOptOut';
    const FLAGS_TEAM_SUBSCRIPTION = 'teamSubscription';
    const FLAGS_ONE_ACTOR_MATCHES = 'oneActorMatches';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlagsAllowableValues()
    {
        return [
            self::FLAGS_NONE,
            self::FLAGS_GROUP_SUBSCRIPTION,
            self::FLAGS_CONTRIBUTED_SUBSCRIPTION,
            self::FLAGS_CAN_OPT_OUT,
            self::FLAGS_TEAM_SUBSCRIPTION,
            self::FLAGS_ONE_ACTOR_MATCHES,
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
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['flags'] = isset($data['flags']) ? $data['flags'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['subscriberId'] = isset($data['subscriberId']) ? $data['subscriberId'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFlagsAllowableValues();
        if (!is_null($this->container['flags']) && !in_array($this->container['flags'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'flags', must be one of '%s'",
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
     * Gets filter
     *
     * @return \FrankHouweling\AzureDevOpsClient\Notification\Model\ISubscriptionFilter
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \FrankHouweling\AzureDevOpsClient\Notification\Model\ISubscriptionFilter $filter Filter conditions that matching subscriptions must have. Typically only the filter's type and event type are used for matching.
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return string
     */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param string $flags Flags to specify the the type subscriptions to query for.
     *
     * @return $this
     */
    public function setFlags($flags)
    {
        $allowedValues = $this->getFlagsAllowableValues();
        if (!is_null($flags) && !in_array($flags, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'flags', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flags'] = $flags;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string $scope Scope that matching subscriptions must have.
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets subscriberId
     *
     * @return string
     */
    public function getSubscriberId()
    {
        return $this->container['subscriberId'];
    }

    /**
     * Sets subscriberId
     *
     * @param string $subscriberId ID of the subscriber (user or group) that matching subscriptions must be subscribed to.
     *
     * @return $this
     */
    public function setSubscriberId($subscriberId)
    {
        $this->container['subscriberId'] = $subscriberId;

        return $this;
    }

    /**
     * Gets subscriptionId
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
     * Sets subscriptionId
     *
     * @param string $subscriptionId ID of the subscription to query for.
     *
     * @return $this
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;

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

