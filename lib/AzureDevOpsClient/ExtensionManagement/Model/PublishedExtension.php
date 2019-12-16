<?php
/**
 * PublishedExtension
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\ExtensionManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ExtensionManagement
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

namespace FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\ExtensionManagement\ObjectSerializer;

/**
 * PublishedExtension Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\ExtensionManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PublishedExtension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PublishedExtension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'categories' => 'string[]',
        'deploymentType' => 'string',
        'displayName' => 'string',
        'extensionId' => 'string',
        'extensionName' => 'string',
        'flags' => 'string',
        'installationTargets' => '\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstallationTarget[]',
        'lastUpdated' => '\DateTime',
        'longDescription' => 'string',
        'publishedDate' => '\DateTime',
        'publisher' => '\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\PublisherFacts',
        'releaseDate' => '\DateTime',
        'sharedWith' => '\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionShare[]',
        'shortDescription' => 'string',
        'statistics' => '\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionStatistic[]',
        'tags' => 'string[]',
        'versions' => '\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionVersion[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'categories' => null,
        'deploymentType' => null,
        'displayName' => null,
        'extensionId' => 'uuid',
        'extensionName' => null,
        'flags' => null,
        'installationTargets' => null,
        'lastUpdated' => 'date-time',
        'longDescription' => null,
        'publishedDate' => 'date-time',
        'publisher' => null,
        'releaseDate' => 'date-time',
        'sharedWith' => null,
        'shortDescription' => null,
        'statistics' => null,
        'tags' => null,
        'versions' => null
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
        'categories' => 'categories',
        'deploymentType' => 'deploymentType',
        'displayName' => 'displayName',
        'extensionId' => 'extensionId',
        'extensionName' => 'extensionName',
        'flags' => 'flags',
        'installationTargets' => 'installationTargets',
        'lastUpdated' => 'lastUpdated',
        'longDescription' => 'longDescription',
        'publishedDate' => 'publishedDate',
        'publisher' => 'publisher',
        'releaseDate' => 'releaseDate',
        'sharedWith' => 'sharedWith',
        'shortDescription' => 'shortDescription',
        'statistics' => 'statistics',
        'tags' => 'tags',
        'versions' => 'versions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categories' => 'setCategories',
        'deploymentType' => 'setDeploymentType',
        'displayName' => 'setDisplayName',
        'extensionId' => 'setExtensionId',
        'extensionName' => 'setExtensionName',
        'flags' => 'setFlags',
        'installationTargets' => 'setInstallationTargets',
        'lastUpdated' => 'setLastUpdated',
        'longDescription' => 'setLongDescription',
        'publishedDate' => 'setPublishedDate',
        'publisher' => 'setPublisher',
        'releaseDate' => 'setReleaseDate',
        'sharedWith' => 'setSharedWith',
        'shortDescription' => 'setShortDescription',
        'statistics' => 'setStatistics',
        'tags' => 'setTags',
        'versions' => 'setVersions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categories' => 'getCategories',
        'deploymentType' => 'getDeploymentType',
        'displayName' => 'getDisplayName',
        'extensionId' => 'getExtensionId',
        'extensionName' => 'getExtensionName',
        'flags' => 'getFlags',
        'installationTargets' => 'getInstallationTargets',
        'lastUpdated' => 'getLastUpdated',
        'longDescription' => 'getLongDescription',
        'publishedDate' => 'getPublishedDate',
        'publisher' => 'getPublisher',
        'releaseDate' => 'getReleaseDate',
        'sharedWith' => 'getSharedWith',
        'shortDescription' => 'getShortDescription',
        'statistics' => 'getStatistics',
        'tags' => 'getTags',
        'versions' => 'getVersions'
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

    const DEPLOYMENT_TYPE_EXE = 'exe';
    const DEPLOYMENT_TYPE_MSI = 'msi';
    const DEPLOYMENT_TYPE_VSIX = 'vsix';
    const DEPLOYMENT_TYPE_REFERRAL_LINK = 'referralLink';
    const FLAGS_NONE = 'none';
    const FLAGS_DISABLED = 'disabled';
    const FLAGS_BUILT_IN = 'builtIn';
    const FLAGS_VALIDATED = 'validated';
    const FLAGS_TRUSTED = 'trusted';
    const FLAGS_PAID = 'paid';
    const FLAGS__PUBLIC = 'public';
    const FLAGS_MULTI_VERSION = 'multiVersion';
    const FLAGS_SYSTEM = 'system';
    const FLAGS_PREVIEW = 'preview';
    const FLAGS_UNPUBLISHED = 'unpublished';
    const FLAGS_TRIAL = 'trial';
    const FLAGS_LOCKED = 'locked';
    const FLAGS_HIDDEN = 'hidden';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeploymentTypeAllowableValues()
    {
        return [
            self::DEPLOYMENT_TYPE_EXE,
            self::DEPLOYMENT_TYPE_MSI,
            self::DEPLOYMENT_TYPE_VSIX,
            self::DEPLOYMENT_TYPE_REFERRAL_LINK,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlagsAllowableValues()
    {
        return [
            self::FLAGS_NONE,
            self::FLAGS_DISABLED,
            self::FLAGS_BUILT_IN,
            self::FLAGS_VALIDATED,
            self::FLAGS_TRUSTED,
            self::FLAGS_PAID,
            self::FLAGS__PUBLIC,
            self::FLAGS_MULTI_VERSION,
            self::FLAGS_SYSTEM,
            self::FLAGS_PREVIEW,
            self::FLAGS_UNPUBLISHED,
            self::FLAGS_TRIAL,
            self::FLAGS_LOCKED,
            self::FLAGS_HIDDEN,
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
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['deploymentType'] = isset($data['deploymentType']) ? $data['deploymentType'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['extensionId'] = isset($data['extensionId']) ? $data['extensionId'] : null;
        $this->container['extensionName'] = isset($data['extensionName']) ? $data['extensionName'] : null;
        $this->container['flags'] = isset($data['flags']) ? $data['flags'] : null;
        $this->container['installationTargets'] = isset($data['installationTargets']) ? $data['installationTargets'] : null;
        $this->container['lastUpdated'] = isset($data['lastUpdated']) ? $data['lastUpdated'] : null;
        $this->container['longDescription'] = isset($data['longDescription']) ? $data['longDescription'] : null;
        $this->container['publishedDate'] = isset($data['publishedDate']) ? $data['publishedDate'] : null;
        $this->container['publisher'] = isset($data['publisher']) ? $data['publisher'] : null;
        $this->container['releaseDate'] = isset($data['releaseDate']) ? $data['releaseDate'] : null;
        $this->container['sharedWith'] = isset($data['sharedWith']) ? $data['sharedWith'] : null;
        $this->container['shortDescription'] = isset($data['shortDescription']) ? $data['shortDescription'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDeploymentTypeAllowableValues();
        if (!is_null($this->container['deploymentType']) && !in_array($this->container['deploymentType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deploymentType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets categories
     *
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[] $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets deploymentType
     *
     * @return string
     */
    public function getDeploymentType()
    {
        return $this->container['deploymentType'];
    }

    /**
     * Sets deploymentType
     *
     * @param string $deploymentType deploymentType
     *
     * @return $this
     */
    public function setDeploymentType($deploymentType)
    {
        $allowedValues = $this->getDeploymentTypeAllowableValues();
        if (!is_null($deploymentType) && !in_array($deploymentType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deploymentType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deploymentType'] = $deploymentType;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string $displayName displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets extensionId
     *
     * @return string
     */
    public function getExtensionId()
    {
        return $this->container['extensionId'];
    }

    /**
     * Sets extensionId
     *
     * @param string $extensionId extensionId
     *
     * @return $this
     */
    public function setExtensionId($extensionId)
    {
        $this->container['extensionId'] = $extensionId;

        return $this;
    }

    /**
     * Gets extensionName
     *
     * @return string
     */
    public function getExtensionName()
    {
        return $this->container['extensionName'];
    }

    /**
     * Sets extensionName
     *
     * @param string $extensionName extensionName
     *
     * @return $this
     */
    public function setExtensionName($extensionName)
    {
        $this->container['extensionName'] = $extensionName;

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
     * @param string $flags flags
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
     * Gets installationTargets
     *
     * @return \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstallationTarget[]
     */
    public function getInstallationTargets()
    {
        return $this->container['installationTargets'];
    }

    /**
     * Sets installationTargets
     *
     * @param \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstallationTarget[] $installationTargets installationTargets
     *
     * @return $this
     */
    public function setInstallationTargets($installationTargets)
    {
        $this->container['installationTargets'] = $installationTargets;

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
     * Gets longDescription
     *
     * @return string
     */
    public function getLongDescription()
    {
        return $this->container['longDescription'];
    }

    /**
     * Sets longDescription
     *
     * @param string $longDescription longDescription
     *
     * @return $this
     */
    public function setLongDescription($longDescription)
    {
        $this->container['longDescription'] = $longDescription;

        return $this;
    }

    /**
     * Gets publishedDate
     *
     * @return \DateTime
     */
    public function getPublishedDate()
    {
        return $this->container['publishedDate'];
    }

    /**
     * Sets publishedDate
     *
     * @param \DateTime $publishedDate Date on which the extension was first uploaded.
     *
     * @return $this
     */
    public function setPublishedDate($publishedDate)
    {
        $this->container['publishedDate'] = $publishedDate;

        return $this;
    }

    /**
     * Gets publisher
     *
     * @return \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\PublisherFacts
     */
    public function getPublisher()
    {
        return $this->container['publisher'];
    }

    /**
     * Sets publisher
     *
     * @param \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\PublisherFacts $publisher publisher
     *
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->container['publisher'] = $publisher;

        return $this;
    }

    /**
     * Gets releaseDate
     *
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->container['releaseDate'];
    }

    /**
     * Sets releaseDate
     *
     * @param \DateTime $releaseDate Date on which the extension first went public.
     *
     * @return $this
     */
    public function setReleaseDate($releaseDate)
    {
        $this->container['releaseDate'] = $releaseDate;

        return $this;
    }

    /**
     * Gets sharedWith
     *
     * @return \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionShare[]
     */
    public function getSharedWith()
    {
        return $this->container['sharedWith'];
    }

    /**
     * Sets sharedWith
     *
     * @param \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionShare[] $sharedWith sharedWith
     *
     * @return $this
     */
    public function setSharedWith($sharedWith)
    {
        $this->container['sharedWith'] = $sharedWith;

        return $this;
    }

    /**
     * Gets shortDescription
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->container['shortDescription'];
    }

    /**
     * Sets shortDescription
     *
     * @param string $shortDescription shortDescription
     *
     * @return $this
     */
    public function setShortDescription($shortDescription)
    {
        $this->container['shortDescription'] = $shortDescription;

        return $this;
    }

    /**
     * Gets statistics
     *
     * @return \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionStatistic[]
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     *
     * @param \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionStatistic[] $statistics statistics
     *
     * @return $this
     */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;

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
     * Gets versions
     *
     * @return \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionVersion[]
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionVersion[] $versions versions
     *
     * @return $this
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

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


