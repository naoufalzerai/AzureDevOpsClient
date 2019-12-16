<?php
/**
 * ExternalConfigurationDescriptor
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Hooks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ServiceHooks
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

namespace FrankHouweling\AzureDevOpsClient\Hooks\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Hooks\ObjectSerializer;

/**
 * ExternalConfigurationDescriptor Class Doc Comment
 *
 * @category Class
 * @description Describes how to configure a subscription that is managed externally.
 * @package  FrankHouweling\AzureDevOpsClient\Hooks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExternalConfigurationDescriptor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExternalConfigurationDescriptor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'createSubscriptionUrl' => 'string',
        'editSubscriptionPropertyName' => 'string',
        'hostedOnly' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'createSubscriptionUrl' => null,
        'editSubscriptionPropertyName' => null,
        'hostedOnly' => null
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
        'createSubscriptionUrl' => 'createSubscriptionUrl',
        'editSubscriptionPropertyName' => 'editSubscriptionPropertyName',
        'hostedOnly' => 'hostedOnly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createSubscriptionUrl' => 'setCreateSubscriptionUrl',
        'editSubscriptionPropertyName' => 'setEditSubscriptionPropertyName',
        'hostedOnly' => 'setHostedOnly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createSubscriptionUrl' => 'getCreateSubscriptionUrl',
        'editSubscriptionPropertyName' => 'getEditSubscriptionPropertyName',
        'hostedOnly' => 'getHostedOnly'
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
        $this->container['createSubscriptionUrl'] = isset($data['createSubscriptionUrl']) ? $data['createSubscriptionUrl'] : null;
        $this->container['editSubscriptionPropertyName'] = isset($data['editSubscriptionPropertyName']) ? $data['editSubscriptionPropertyName'] : null;
        $this->container['hostedOnly'] = isset($data['hostedOnly']) ? $data['hostedOnly'] : null;
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
     * Gets createSubscriptionUrl
     *
     * @return string
     */
    public function getCreateSubscriptionUrl()
    {
        return $this->container['createSubscriptionUrl'];
    }

    /**
     * Sets createSubscriptionUrl
     *
     * @param string $createSubscriptionUrl Url of the site to create this type of subscription.
     *
     * @return $this
     */
    public function setCreateSubscriptionUrl($createSubscriptionUrl)
    {
        $this->container['createSubscriptionUrl'] = $createSubscriptionUrl;

        return $this;
    }

    /**
     * Gets editSubscriptionPropertyName
     *
     * @return string
     */
    public function getEditSubscriptionPropertyName()
    {
        return $this->container['editSubscriptionPropertyName'];
    }

    /**
     * Sets editSubscriptionPropertyName
     *
     * @param string $editSubscriptionPropertyName The name of an input property that contains the URL to edit a subscription.
     *
     * @return $this
     */
    public function setEditSubscriptionPropertyName($editSubscriptionPropertyName)
    {
        $this->container['editSubscriptionPropertyName'] = $editSubscriptionPropertyName;

        return $this;
    }

    /**
     * Gets hostedOnly
     *
     * @return bool
     */
    public function getHostedOnly()
    {
        return $this->container['hostedOnly'];
    }

    /**
     * Sets hostedOnly
     *
     * @param bool $hostedOnly True if the external configuration applies only to hosted.
     *
     * @return $this
     */
    public function setHostedOnly($hostedOnly)
    {
        $this->container['hostedOnly'] = $hostedOnly;

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


