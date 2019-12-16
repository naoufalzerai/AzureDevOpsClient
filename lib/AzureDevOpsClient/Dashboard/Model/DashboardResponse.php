<?php
/**
 * DashboardResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Dashboard
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dashboard
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

namespace FrankHouweling\AzureDevOpsClient\Dashboard\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Dashboard\ObjectSerializer;

/**
 * DashboardResponse Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Dashboard
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DashboardResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DashboardResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\FrankHouweling\AzureDevOpsClient\Dashboard\Model\ReferenceLinks',
        'dashboardScope' => 'string',
        'description' => 'string',
        'eTag' => 'string',
        'groupId' => 'string',
        'id' => 'string',
        'name' => 'string',
        'ownerId' => 'string',
        'position' => 'int',
        'refreshInterval' => 'int',
        'url' => 'string',
        'widgets' => '\FrankHouweling\AzureDevOpsClient\Dashboard\Model\Widget[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'dashboardScope' => null,
        'description' => null,
        'eTag' => null,
        'groupId' => 'uuid',
        'id' => 'uuid',
        'name' => null,
        'ownerId' => 'uuid',
        'position' => 'int32',
        'refreshInterval' => 'int32',
        'url' => null,
        'widgets' => null
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
        'links' => '_links',
        'dashboardScope' => 'dashboardScope',
        'description' => 'description',
        'eTag' => 'eTag',
        'groupId' => 'groupId',
        'id' => 'id',
        'name' => 'name',
        'ownerId' => 'ownerId',
        'position' => 'position',
        'refreshInterval' => 'refreshInterval',
        'url' => 'url',
        'widgets' => 'widgets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'dashboardScope' => 'setDashboardScope',
        'description' => 'setDescription',
        'eTag' => 'setETag',
        'groupId' => 'setGroupId',
        'id' => 'setId',
        'name' => 'setName',
        'ownerId' => 'setOwnerId',
        'position' => 'setPosition',
        'refreshInterval' => 'setRefreshInterval',
        'url' => 'setUrl',
        'widgets' => 'setWidgets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'dashboardScope' => 'getDashboardScope',
        'description' => 'getDescription',
        'eTag' => 'getETag',
        'groupId' => 'getGroupId',
        'id' => 'getId',
        'name' => 'getName',
        'ownerId' => 'getOwnerId',
        'position' => 'getPosition',
        'refreshInterval' => 'getRefreshInterval',
        'url' => 'getUrl',
        'widgets' => 'getWidgets'
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

    const DASHBOARD_SCOPE_COLLECTION_USER = 'collection_User';
    const DASHBOARD_SCOPE_PROJECT_TEAM = 'project_Team';
    const DASHBOARD_SCOPE_PROJECT = 'project';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDashboardScopeAllowableValues()
    {
        return [
            self::DASHBOARD_SCOPE_COLLECTION_USER,
            self::DASHBOARD_SCOPE_PROJECT_TEAM,
            self::DASHBOARD_SCOPE_PROJECT,
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['dashboardScope'] = isset($data['dashboardScope']) ? $data['dashboardScope'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['eTag'] = isset($data['eTag']) ? $data['eTag'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['refreshInterval'] = isset($data['refreshInterval']) ? $data['refreshInterval'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['widgets'] = isset($data['widgets']) ? $data['widgets'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDashboardScopeAllowableValues();
        if (!is_null($this->container['dashboardScope']) && !in_array($this->container['dashboardScope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dashboardScope', must be one of '%s'",
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
     * Gets links
     *
     * @return \FrankHouweling\AzureDevOpsClient\Dashboard\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \FrankHouweling\AzureDevOpsClient\Dashboard\Model\ReferenceLinks $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets dashboardScope
     *
     * @return string
     */
    public function getDashboardScope()
    {
        return $this->container['dashboardScope'];
    }

    /**
     * Sets dashboardScope
     *
     * @param string $dashboardScope Entity to which the dashboard is scoped.
     *
     * @return $this
     */
    public function setDashboardScope($dashboardScope)
    {
        $allowedValues = $this->getDashboardScopeAllowableValues();
        if (!is_null($dashboardScope) && !in_array($dashboardScope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'dashboardScope', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dashboardScope'] = $dashboardScope;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the dashboard.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets eTag
     *
     * @return string
     */
    public function getETag()
    {
        return $this->container['eTag'];
    }

    /**
     * Sets eTag
     *
     * @param string $eTag Server defined version tracking value, used for edit collision detection.
     *
     * @return $this
     */
    public function setETag($eTag)
    {
        $this->container['eTag'] = $eTag;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string $groupId ID of the group for a dashboard. For team-scoped dashboards, this is the unique identifier for the team associated with the dashboard. For project-scoped dashboards this property is empty.
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

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
     * @param string $id ID of the Dashboard. Provided by service at creation time.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the Dashboard.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ownerId
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
     * Sets ownerId
     *
     * @param string $ownerId ID of the owner for a dashboard. For team-scoped dashboards, this is the unique identifier for the team associated with the dashboard. For project-scoped dashboards, this is the unique identifier for the user identity associated with the dashboard.
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position Position of the dashboard, within a dashboard group. If unset at creation time, position is decided by the service.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets refreshInterval
     *
     * @return int
     */
    public function getRefreshInterval()
    {
        return $this->container['refreshInterval'];
    }

    /**
     * Sets refreshInterval
     *
     * @param int $refreshInterval Interval for client to automatically refresh the dashboard. Expressed in minutes.
     *
     * @return $this
     */
    public function setRefreshInterval($refreshInterval)
    {
        $this->container['refreshInterval'] = $refreshInterval;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets widgets
     *
     * @return \FrankHouweling\AzureDevOpsClient\Dashboard\Model\Widget[]
     */
    public function getWidgets()
    {
        return $this->container['widgets'];
    }

    /**
     * Sets widgets
     *
     * @param \FrankHouweling\AzureDevOpsClient\Dashboard\Model\Widget[] $widgets The set of Widgets on the dashboard.
     *
     * @return $this
     */
    public function setWidgets($widgets)
    {
        $this->container['widgets'] = $widgets;

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


