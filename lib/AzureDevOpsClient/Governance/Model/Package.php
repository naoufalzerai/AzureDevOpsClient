<?php
/**
 * Package
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Governance
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Npm
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

namespace FrankHouweling\AzureDevOpsClient\Governance\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Governance\ObjectSerializer;

/**
 * Package Class Doc Comment
 *
 * @category Class
 * @description Package version metadata for an npm package
 * @package  FrankHouweling\AzureDevOpsClient\Governance
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Package implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Package';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\FrankHouweling\AzureDevOpsClient\Governance\Model\ReferenceLinks',
        'deprecateMessage' => 'string',
        'id' => 'string',
        'name' => 'string',
        'permanentlyDeletedDate' => '\DateTime',
        'sourceChain' => '\FrankHouweling\AzureDevOpsClient\Governance\Model\UpstreamSourceInfo[]',
        'unpublishedDate' => '\DateTime',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'deprecateMessage' => null,
        'id' => null,
        'name' => null,
        'permanentlyDeletedDate' => 'date-time',
        'sourceChain' => null,
        'unpublishedDate' => 'date-time',
        'version' => null
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
        'deprecateMessage' => 'deprecateMessage',
        'id' => 'id',
        'name' => 'name',
        'permanentlyDeletedDate' => 'permanentlyDeletedDate',
        'sourceChain' => 'sourceChain',
        'unpublishedDate' => 'unpublishedDate',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'deprecateMessage' => 'setDeprecateMessage',
        'id' => 'setId',
        'name' => 'setName',
        'permanentlyDeletedDate' => 'setPermanentlyDeletedDate',
        'sourceChain' => 'setSourceChain',
        'unpublishedDate' => 'setUnpublishedDate',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'deprecateMessage' => 'getDeprecateMessage',
        'id' => 'getId',
        'name' => 'getName',
        'permanentlyDeletedDate' => 'getPermanentlyDeletedDate',
        'sourceChain' => 'getSourceChain',
        'unpublishedDate' => 'getUnpublishedDate',
        'version' => 'getVersion'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['deprecateMessage'] = isset($data['deprecateMessage']) ? $data['deprecateMessage'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['permanentlyDeletedDate'] = isset($data['permanentlyDeletedDate']) ? $data['permanentlyDeletedDate'] : null;
        $this->container['sourceChain'] = isset($data['sourceChain']) ? $data['sourceChain'] : null;
        $this->container['unpublishedDate'] = isset($data['unpublishedDate']) ? $data['unpublishedDate'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
     * Gets links
     *
     * @return \FrankHouweling\AzureDevOpsClient\Governance\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \FrankHouweling\AzureDevOpsClient\Governance\Model\ReferenceLinks $links Related REST links.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets deprecateMessage
     *
     * @return string
     */
    public function getDeprecateMessage()
    {
        return $this->container['deprecateMessage'];
    }

    /**
     * Sets deprecateMessage
     *
     * @param string $deprecateMessage Deprecated message, if any, for the package.
     *
     * @return $this
     */
    public function setDeprecateMessage($deprecateMessage)
    {
        $this->container['deprecateMessage'] = $deprecateMessage;

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
     * @param string $id Package Id.
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
     * @param string $name The display name of the package.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets permanentlyDeletedDate
     *
     * @return \DateTime
     */
    public function getPermanentlyDeletedDate()
    {
        return $this->container['permanentlyDeletedDate'];
    }

    /**
     * Sets permanentlyDeletedDate
     *
     * @param \DateTime $permanentlyDeletedDate If and when the package was permanently deleted.
     *
     * @return $this
     */
    public function setPermanentlyDeletedDate($permanentlyDeletedDate)
    {
        $this->container['permanentlyDeletedDate'] = $permanentlyDeletedDate;

        return $this;
    }

    /**
     * Gets sourceChain
     *
     * @return \FrankHouweling\AzureDevOpsClient\Governance\Model\UpstreamSourceInfo[]
     */
    public function getSourceChain()
    {
        return $this->container['sourceChain'];
    }

    /**
     * Sets sourceChain
     *
     * @param \FrankHouweling\AzureDevOpsClient\Governance\Model\UpstreamSourceInfo[] $sourceChain The history of upstream sources for this package. The first source in the list is the immediate source from which this package was saved.
     *
     * @return $this
     */
    public function setSourceChain($sourceChain)
    {
        $this->container['sourceChain'] = $sourceChain;

        return $this;
    }

    /**
     * Gets unpublishedDate
     *
     * @return \DateTime
     */
    public function getUnpublishedDate()
    {
        return $this->container['unpublishedDate'];
    }

    /**
     * Sets unpublishedDate
     *
     * @param \DateTime $unpublishedDate If and when the package was deleted.
     *
     * @return $this
     */
    public function setUnpublishedDate($unpublishedDate)
    {
        $this->container['unpublishedDate'] = $unpublishedDate;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The version of the package.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


