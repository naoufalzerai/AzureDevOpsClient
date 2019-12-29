<?php
/**
 * EnvironmentOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Release
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

namespace FrankHouweling\AzureDevOpsClient\Release\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Release\ObjectSerializer;

/**
 * EnvironmentOptions Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnvironmentOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EnvironmentOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'autoLinkWorkItems' => 'bool',
        'badgeEnabled' => 'bool',
        'publishDeploymentStatus' => 'bool',
        'pullRequestDeploymentEnabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'autoLinkWorkItems' => null,
        'badgeEnabled' => null,
        'publishDeploymentStatus' => null,
        'pullRequestDeploymentEnabled' => null
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
        'autoLinkWorkItems' => 'autoLinkWorkItems',
        'badgeEnabled' => 'badgeEnabled',
        'publishDeploymentStatus' => 'publishDeploymentStatus',
        'pullRequestDeploymentEnabled' => 'pullRequestDeploymentEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'autoLinkWorkItems' => 'setAutoLinkWorkItems',
        'badgeEnabled' => 'setBadgeEnabled',
        'publishDeploymentStatus' => 'setPublishDeploymentStatus',
        'pullRequestDeploymentEnabled' => 'setPullRequestDeploymentEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'autoLinkWorkItems' => 'getAutoLinkWorkItems',
        'badgeEnabled' => 'getBadgeEnabled',
        'publishDeploymentStatus' => 'getPublishDeploymentStatus',
        'pullRequestDeploymentEnabled' => 'getPullRequestDeploymentEnabled'
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
        $this->container['autoLinkWorkItems'] = isset($data['autoLinkWorkItems']) ? $data['autoLinkWorkItems'] : null;
        $this->container['badgeEnabled'] = isset($data['badgeEnabled']) ? $data['badgeEnabled'] : null;
        $this->container['publishDeploymentStatus'] = isset($data['publishDeploymentStatus']) ? $data['publishDeploymentStatus'] : null;
        $this->container['pullRequestDeploymentEnabled'] = isset($data['pullRequestDeploymentEnabled']) ? $data['pullRequestDeploymentEnabled'] : null;
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
     * Gets autoLinkWorkItems
     *
     * @return bool
     */
    public function getAutoLinkWorkItems()
    {
        return $this->container['autoLinkWorkItems'];
    }

    /**
     * Sets autoLinkWorkItems
     *
     * @param bool $autoLinkWorkItems Gets and sets as the auto link workitems or not.
     *
     * @return $this
     */
    public function setAutoLinkWorkItems($autoLinkWorkItems)
    {
        $this->container['autoLinkWorkItems'] = $autoLinkWorkItems;

        return $this;
    }

    /**
     * Gets badgeEnabled
     *
     * @return bool
     */
    public function getBadgeEnabled()
    {
        return $this->container['badgeEnabled'];
    }

    /**
     * Sets badgeEnabled
     *
     * @param bool $badgeEnabled Gets and sets as the badge enabled or not.
     *
     * @return $this
     */
    public function setBadgeEnabled($badgeEnabled)
    {
        $this->container['badgeEnabled'] = $badgeEnabled;

        return $this;
    }

    /**
     * Gets publishDeploymentStatus
     *
     * @return bool
     */
    public function getPublishDeploymentStatus()
    {
        return $this->container['publishDeploymentStatus'];
    }

    /**
     * Sets publishDeploymentStatus
     *
     * @param bool $publishDeploymentStatus Gets and sets as the publish deployment status or not.
     *
     * @return $this
     */
    public function setPublishDeploymentStatus($publishDeploymentStatus)
    {
        $this->container['publishDeploymentStatus'] = $publishDeploymentStatus;

        return $this;
    }

    /**
     * Gets pullRequestDeploymentEnabled
     *
     * @return bool
     */
    public function getPullRequestDeploymentEnabled()
    {
        return $this->container['pullRequestDeploymentEnabled'];
    }

    /**
     * Sets pullRequestDeploymentEnabled
     *
     * @param bool $pullRequestDeploymentEnabled Gets and sets as the.pull request deployment enabled or not.
     *
     * @return $this
     */
    public function setPullRequestDeploymentEnabled($pullRequestDeploymentEnabled)
    {
        $this->container['pullRequestDeploymentEnabled'] = $pullRequestDeploymentEnabled;

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

