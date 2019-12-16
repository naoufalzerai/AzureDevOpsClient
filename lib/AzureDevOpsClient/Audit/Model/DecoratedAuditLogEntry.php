<?php
/**
 * DecoratedAuditLogEntry
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Audit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Audit
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

namespace FrankHouweling\AzureDevOpsClient\Audit\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Audit\ObjectSerializer;

/**
 * DecoratedAuditLogEntry Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Audit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DecoratedAuditLogEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DecoratedAuditLogEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'actionId' => 'string',
        'activityId' => 'string',
        'actorCUID' => 'string',
        'actorDisplayName' => 'string',
        'actorImageUrl' => 'string',
        'actorUserId' => 'string',
        'area' => 'string',
        'authenticationMechanism' => 'string',
        'category' => 'string',
        'categoryDisplayName' => 'string',
        'correlationId' => 'string',
        'data' => 'map[string,object]',
        'details' => 'string',
        'id' => 'string',
        'ipAddress' => 'string',
        'projectId' => 'string',
        'projectName' => 'string',
        'scopeDisplayName' => 'string',
        'scopeId' => 'string',
        'scopeType' => 'string',
        'timestamp' => '\DateTime',
        'userAgent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'actionId' => null,
        'activityId' => 'uuid',
        'actorCUID' => 'uuid',
        'actorDisplayName' => null,
        'actorImageUrl' => null,
        'actorUserId' => 'uuid',
        'area' => null,
        'authenticationMechanism' => null,
        'category' => null,
        'categoryDisplayName' => null,
        'correlationId' => 'uuid',
        'data' => null,
        'details' => null,
        'id' => null,
        'ipAddress' => null,
        'projectId' => 'uuid',
        'projectName' => null,
        'scopeDisplayName' => null,
        'scopeId' => 'uuid',
        'scopeType' => null,
        'timestamp' => 'date-time',
        'userAgent' => null
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
        'actionId' => 'actionId',
        'activityId' => 'activityId',
        'actorCUID' => 'actorCUID',
        'actorDisplayName' => 'actorDisplayName',
        'actorImageUrl' => 'actorImageUrl',
        'actorUserId' => 'actorUserId',
        'area' => 'area',
        'authenticationMechanism' => 'authenticationMechanism',
        'category' => 'category',
        'categoryDisplayName' => 'categoryDisplayName',
        'correlationId' => 'correlationId',
        'data' => 'data',
        'details' => 'details',
        'id' => 'id',
        'ipAddress' => 'ipAddress',
        'projectId' => 'projectId',
        'projectName' => 'projectName',
        'scopeDisplayName' => 'scopeDisplayName',
        'scopeId' => 'scopeId',
        'scopeType' => 'scopeType',
        'timestamp' => 'timestamp',
        'userAgent' => 'userAgent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionId' => 'setActionId',
        'activityId' => 'setActivityId',
        'actorCUID' => 'setActorCUID',
        'actorDisplayName' => 'setActorDisplayName',
        'actorImageUrl' => 'setActorImageUrl',
        'actorUserId' => 'setActorUserId',
        'area' => 'setArea',
        'authenticationMechanism' => 'setAuthenticationMechanism',
        'category' => 'setCategory',
        'categoryDisplayName' => 'setCategoryDisplayName',
        'correlationId' => 'setCorrelationId',
        'data' => 'setData',
        'details' => 'setDetails',
        'id' => 'setId',
        'ipAddress' => 'setIpAddress',
        'projectId' => 'setProjectId',
        'projectName' => 'setProjectName',
        'scopeDisplayName' => 'setScopeDisplayName',
        'scopeId' => 'setScopeId',
        'scopeType' => 'setScopeType',
        'timestamp' => 'setTimestamp',
        'userAgent' => 'setUserAgent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionId' => 'getActionId',
        'activityId' => 'getActivityId',
        'actorCUID' => 'getActorCUID',
        'actorDisplayName' => 'getActorDisplayName',
        'actorImageUrl' => 'getActorImageUrl',
        'actorUserId' => 'getActorUserId',
        'area' => 'getArea',
        'authenticationMechanism' => 'getAuthenticationMechanism',
        'category' => 'getCategory',
        'categoryDisplayName' => 'getCategoryDisplayName',
        'correlationId' => 'getCorrelationId',
        'data' => 'getData',
        'details' => 'getDetails',
        'id' => 'getId',
        'ipAddress' => 'getIpAddress',
        'projectId' => 'getProjectId',
        'projectName' => 'getProjectName',
        'scopeDisplayName' => 'getScopeDisplayName',
        'scopeId' => 'getScopeId',
        'scopeType' => 'getScopeType',
        'timestamp' => 'getTimestamp',
        'userAgent' => 'getUserAgent'
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

    const CATEGORY_UNKNOWN = 'unknown';
    const CATEGORY_MODIFY = 'modify';
    const CATEGORY_REMOVE = 'remove';
    const CATEGORY_CREATE = 'create';
    const CATEGORY_ACCESS = 'access';
    const SCOPE_TYPE_UNKNOWN = 'unknown';
    const SCOPE_TYPE_DEPLOYMENT = 'deployment';
    const SCOPE_TYPE_ENTERPRISE = 'enterprise';
    const SCOPE_TYPE_ORGANIZATION = 'organization';
    const SCOPE_TYPE_PROJECT = 'project';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_UNKNOWN,
            self::CATEGORY_MODIFY,
            self::CATEGORY_REMOVE,
            self::CATEGORY_CREATE,
            self::CATEGORY_ACCESS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScopeTypeAllowableValues()
    {
        return [
            self::SCOPE_TYPE_UNKNOWN,
            self::SCOPE_TYPE_DEPLOYMENT,
            self::SCOPE_TYPE_ENTERPRISE,
            self::SCOPE_TYPE_ORGANIZATION,
            self::SCOPE_TYPE_PROJECT,
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
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['activityId'] = isset($data['activityId']) ? $data['activityId'] : null;
        $this->container['actorCUID'] = isset($data['actorCUID']) ? $data['actorCUID'] : null;
        $this->container['actorDisplayName'] = isset($data['actorDisplayName']) ? $data['actorDisplayName'] : null;
        $this->container['actorImageUrl'] = isset($data['actorImageUrl']) ? $data['actorImageUrl'] : null;
        $this->container['actorUserId'] = isset($data['actorUserId']) ? $data['actorUserId'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['authenticationMechanism'] = isset($data['authenticationMechanism']) ? $data['authenticationMechanism'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['categoryDisplayName'] = isset($data['categoryDisplayName']) ? $data['categoryDisplayName'] : null;
        $this->container['correlationId'] = isset($data['correlationId']) ? $data['correlationId'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['scopeDisplayName'] = isset($data['scopeDisplayName']) ? $data['scopeDisplayName'] : null;
        $this->container['scopeId'] = isset($data['scopeId']) ? $data['scopeId'] : null;
        $this->container['scopeType'] = isset($data['scopeType']) ? $data['scopeType'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['userAgent'] = isset($data['userAgent']) ? $data['userAgent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getScopeTypeAllowableValues();
        if (!is_null($this->container['scopeType']) && !in_array($this->container['scopeType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'scopeType', must be one of '%s'",
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
     * Gets actionId
     *
     * @return string
     */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
     * Sets actionId
     *
     * @param string $actionId The action id for the event, i.e Git.CreateRepo, Project.RenameProject
     *
     * @return $this
     */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;

        return $this;
    }

    /**
     * Gets activityId
     *
     * @return string
     */
    public function getActivityId()
    {
        return $this->container['activityId'];
    }

    /**
     * Sets activityId
     *
     * @param string $activityId ActivityId
     *
     * @return $this
     */
    public function setActivityId($activityId)
    {
        $this->container['activityId'] = $activityId;

        return $this;
    }

    /**
     * Gets actorCUID
     *
     * @return string
     */
    public function getActorCUID()
    {
        return $this->container['actorCUID'];
    }

    /**
     * Sets actorCUID
     *
     * @param string $actorCUID The Actor's CUID
     *
     * @return $this
     */
    public function setActorCUID($actorCUID)
    {
        $this->container['actorCUID'] = $actorCUID;

        return $this;
    }

    /**
     * Gets actorDisplayName
     *
     * @return string
     */
    public function getActorDisplayName()
    {
        return $this->container['actorDisplayName'];
    }

    /**
     * Sets actorDisplayName
     *
     * @param string $actorDisplayName DisplayName of the user who initiated the action
     *
     * @return $this
     */
    public function setActorDisplayName($actorDisplayName)
    {
        $this->container['actorDisplayName'] = $actorDisplayName;

        return $this;
    }

    /**
     * Gets actorImageUrl
     *
     * @return string
     */
    public function getActorImageUrl()
    {
        return $this->container['actorImageUrl'];
    }

    /**
     * Sets actorImageUrl
     *
     * @param string $actorImageUrl URL of Actor's Profile image
     *
     * @return $this
     */
    public function setActorImageUrl($actorImageUrl)
    {
        $this->container['actorImageUrl'] = $actorImageUrl;

        return $this;
    }

    /**
     * Gets actorUserId
     *
     * @return string
     */
    public function getActorUserId()
    {
        return $this->container['actorUserId'];
    }

    /**
     * Sets actorUserId
     *
     * @param string $actorUserId The Actor's User Id
     *
     * @return $this
     */
    public function setActorUserId($actorUserId)
    {
        $this->container['actorUserId'] = $actorUserId;

        return $this;
    }

    /**
     * Gets area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param string $area Area of Azure DevOps the action occurred
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets authenticationMechanism
     *
     * @return string
     */
    public function getAuthenticationMechanism()
    {
        return $this->container['authenticationMechanism'];
    }

    /**
     * Sets authenticationMechanism
     *
     * @param string $authenticationMechanism Type of authentication used by the actor
     *
     * @return $this
     */
    public function setAuthenticationMechanism($authenticationMechanism)
    {
        $this->container['authenticationMechanism'] = $authenticationMechanism;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category Type of action executed
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($category) && !in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets categoryDisplayName
     *
     * @return string
     */
    public function getCategoryDisplayName()
    {
        return $this->container['categoryDisplayName'];
    }

    /**
     * Sets categoryDisplayName
     *
     * @param string $categoryDisplayName DisplayName of the category
     *
     * @return $this
     */
    public function setCategoryDisplayName($categoryDisplayName)
    {
        $this->container['categoryDisplayName'] = $categoryDisplayName;

        return $this;
    }

    /**
     * Gets correlationId
     *
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->container['correlationId'];
    }

    /**
     * Sets correlationId
     *
     * @param string $correlationId This allows related audit entries to be grouped together. Generally this occurs when a single action causes a cascade of audit entries. For example, project creation.
     *
     * @return $this
     */
    public function setCorrelationId($correlationId)
    {
        $this->container['correlationId'] = $correlationId;

        return $this;
    }

    /**
     * Gets data
     *
     * @return map[string,object]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param map[string,object] $data External data such as CUIDs, item names, etc.
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string $details Decorated details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

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
     * @param string $id EventId - Needs to be unique per service
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
     * Sets ipAddress
     *
     * @param string $ipAddress IP Address where the event was originated
     *
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;

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
     * @param string $projectId When specified, the id of the project this event is associated to
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Gets projectName
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
     * Sets projectName
     *
     * @param string $projectName When specified, the name of the project this event is associated to
     *
     * @return $this
     */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;

        return $this;
    }

    /**
     * Gets scopeDisplayName
     *
     * @return string
     */
    public function getScopeDisplayName()
    {
        return $this->container['scopeDisplayName'];
    }

    /**
     * Sets scopeDisplayName
     *
     * @param string $scopeDisplayName DisplayName of the scope
     *
     * @return $this
     */
    public function setScopeDisplayName($scopeDisplayName)
    {
        $this->container['scopeDisplayName'] = $scopeDisplayName;

        return $this;
    }

    /**
     * Gets scopeId
     *
     * @return string
     */
    public function getScopeId()
    {
        return $this->container['scopeId'];
    }

    /**
     * Sets scopeId
     *
     * @param string $scopeId The organization Id (Organization is the only scope currently supported)
     *
     * @return $this
     */
    public function setScopeId($scopeId)
    {
        $this->container['scopeId'] = $scopeId;

        return $this;
    }

    /**
     * Gets scopeType
     *
     * @return string
     */
    public function getScopeType()
    {
        return $this->container['scopeType'];
    }

    /**
     * Sets scopeType
     *
     * @param string $scopeType The type of the scope (Organization is only scope currently supported)
     *
     * @return $this
     */
    public function setScopeType($scopeType)
    {
        $allowedValues = $this->getScopeTypeAllowableValues();
        if (!is_null($scopeType) && !in_array($scopeType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'scopeType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scopeType'] = $scopeType;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp The time when the event occurred in UTC
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->container['userAgent'];
    }

    /**
     * Sets userAgent
     *
     * @param string $userAgent The user agent from the request
     *
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        $this->container['userAgent'] = $userAgent;

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


