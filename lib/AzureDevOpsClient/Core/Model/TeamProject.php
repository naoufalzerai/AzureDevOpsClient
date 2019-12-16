<?php
/**
 * TeamProject
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Core
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Core
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

namespace FrankHouweling\AzureDevOpsClient\Core\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Core\ObjectSerializer;

/**
 * TeamProject Class Doc Comment
 *
 * @category Class
 * @description Represents a Team Project object.
 * @package  FrankHouweling\AzureDevOpsClient\Core
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TeamProject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TeamProject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'abbreviation' => 'string',
        'defaultTeamImageUrl' => 'string',
        'description' => 'string',
        'id' => 'string',
        'lastUpdateTime' => '\DateTime',
        'name' => 'string',
        'revision' => 'int',
        'state' => 'string',
        'url' => 'string',
        'visibility' => 'string',
        'links' => '\FrankHouweling\AzureDevOpsClient\Core\Model\ReferenceLinks',
        'capabilities' => 'map[string,map[string,string]]',
        'defaultTeam' => '\FrankHouweling\AzureDevOpsClient\Core\Model\WebApiTeamRef'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'abbreviation' => null,
        'defaultTeamImageUrl' => null,
        'description' => null,
        'id' => 'uuid',
        'lastUpdateTime' => 'date-time',
        'name' => null,
        'revision' => 'int64',
        'state' => null,
        'url' => null,
        'visibility' => null,
        'links' => null,
        'capabilities' => null,
        'defaultTeam' => null
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
        'abbreviation' => 'abbreviation',
        'defaultTeamImageUrl' => 'defaultTeamImageUrl',
        'description' => 'description',
        'id' => 'id',
        'lastUpdateTime' => 'lastUpdateTime',
        'name' => 'name',
        'revision' => 'revision',
        'state' => 'state',
        'url' => 'url',
        'visibility' => 'visibility',
        'links' => '_links',
        'capabilities' => 'capabilities',
        'defaultTeam' => 'defaultTeam'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'abbreviation' => 'setAbbreviation',
        'defaultTeamImageUrl' => 'setDefaultTeamImageUrl',
        'description' => 'setDescription',
        'id' => 'setId',
        'lastUpdateTime' => 'setLastUpdateTime',
        'name' => 'setName',
        'revision' => 'setRevision',
        'state' => 'setState',
        'url' => 'setUrl',
        'visibility' => 'setVisibility',
        'links' => 'setLinks',
        'capabilities' => 'setCapabilities',
        'defaultTeam' => 'setDefaultTeam'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'abbreviation' => 'getAbbreviation',
        'defaultTeamImageUrl' => 'getDefaultTeamImageUrl',
        'description' => 'getDescription',
        'id' => 'getId',
        'lastUpdateTime' => 'getLastUpdateTime',
        'name' => 'getName',
        'revision' => 'getRevision',
        'state' => 'getState',
        'url' => 'getUrl',
        'visibility' => 'getVisibility',
        'links' => 'getLinks',
        'capabilities' => 'getCapabilities',
        'defaultTeam' => 'getDefaultTeam'
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

    const STATE_DELETING = 'deleting';
    const STATE__NEW = 'new';
    const STATE_WELL_FORMED = 'wellFormed';
    const STATE_CREATE_PENDING = 'createPending';
    const STATE_ALL = 'all';
    const STATE_UNCHANGED = 'unchanged';
    const STATE_DELETED = 'deleted';
    const VISIBILITY__PRIVATE = 'private';
    const VISIBILITY__PUBLIC = 'public';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_DELETING,
            self::STATE__NEW,
            self::STATE_WELL_FORMED,
            self::STATE_CREATE_PENDING,
            self::STATE_ALL,
            self::STATE_UNCHANGED,
            self::STATE_DELETED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY__PRIVATE,
            self::VISIBILITY__PUBLIC,
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
        $this->container['abbreviation'] = isset($data['abbreviation']) ? $data['abbreviation'] : null;
        $this->container['defaultTeamImageUrl'] = isset($data['defaultTeamImageUrl']) ? $data['defaultTeamImageUrl'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['capabilities'] = isset($data['capabilities']) ? $data['capabilities'] : null;
        $this->container['defaultTeam'] = isset($data['defaultTeam']) ? $data['defaultTeam'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVisibilityAllowableValues();
        if (!is_null($this->container['visibility']) && !in_array($this->container['visibility'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'visibility', must be one of '%s'",
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
     * Gets abbreviation
     *
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->container['abbreviation'];
    }

    /**
     * Sets abbreviation
     *
     * @param string $abbreviation Project abbreviation.
     *
     * @return $this
     */
    public function setAbbreviation($abbreviation)
    {
        $this->container['abbreviation'] = $abbreviation;

        return $this;
    }

    /**
     * Gets defaultTeamImageUrl
     *
     * @return string
     */
    public function getDefaultTeamImageUrl()
    {
        return $this->container['defaultTeamImageUrl'];
    }

    /**
     * Sets defaultTeamImageUrl
     *
     * @param string $defaultTeamImageUrl Url to default team identity image.
     *
     * @return $this
     */
    public function setDefaultTeamImageUrl($defaultTeamImageUrl)
    {
        $this->container['defaultTeamImageUrl'] = $defaultTeamImageUrl;

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
     * @param string $description The project's description (if any).
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $id Project identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lastUpdateTime
     *
     * @return \DateTime
     */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
     * Sets lastUpdateTime
     *
     * @param \DateTime $lastUpdateTime Project last update time.
     *
     * @return $this
     */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;

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
     * @param string $name Project name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int $revision Project revision.
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Project state.
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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
     * @param string $url Url to the full version of the object.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param string $visibility Project visibility.
     *
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $allowedValues = $this->getVisibilityAllowableValues();
        if (!is_null($visibility) && !in_array($visibility, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'visibility', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \FrankHouweling\AzureDevOpsClient\Core\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \FrankHouweling\AzureDevOpsClient\Core\Model\ReferenceLinks $links The links to other objects related to this object.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets capabilities
     *
     * @return map[string,map[string,string]]
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param map[string,map[string,string]] $capabilities Set of capabilities this project has (such as process template & version control).
     *
     * @return $this
     */
    public function setCapabilities($capabilities)
    {
        $this->container['capabilities'] = $capabilities;

        return $this;
    }

    /**
     * Gets defaultTeam
     *
     * @return \FrankHouweling\AzureDevOpsClient\Core\Model\WebApiTeamRef
     */
    public function getDefaultTeam()
    {
        return $this->container['defaultTeam'];
    }

    /**
     * Sets defaultTeam
     *
     * @param \FrankHouweling\AzureDevOpsClient\Core\Model\WebApiTeamRef $defaultTeam The shallow ref to the default team.
     *
     * @return $this
     */
    public function setDefaultTeam($defaultTeam)
    {
        $this->container['defaultTeam'] = $defaultTeam;

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


