<?php
/**
 * TfvcMergeSource
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Tfvc
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Tfvc
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

namespace FrankHouweling\AzureDevOpsClient\Tfvc\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Tfvc\ObjectSerializer;

/**
 * TfvcMergeSource Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Tfvc
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TfvcMergeSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TfvcMergeSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isRename' => 'bool',
        'serverItem' => 'string',
        'versionFrom' => 'int',
        'versionTo' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isRename' => null,
        'serverItem' => null,
        'versionFrom' => 'int32',
        'versionTo' => 'int32'
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
        'isRename' => 'isRename',
        'serverItem' => 'serverItem',
        'versionFrom' => 'versionFrom',
        'versionTo' => 'versionTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isRename' => 'setIsRename',
        'serverItem' => 'setServerItem',
        'versionFrom' => 'setVersionFrom',
        'versionTo' => 'setVersionTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isRename' => 'getIsRename',
        'serverItem' => 'getServerItem',
        'versionFrom' => 'getVersionFrom',
        'versionTo' => 'getVersionTo'
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
        $this->container['isRename'] = isset($data['isRename']) ? $data['isRename'] : null;
        $this->container['serverItem'] = isset($data['serverItem']) ? $data['serverItem'] : null;
        $this->container['versionFrom'] = isset($data['versionFrom']) ? $data['versionFrom'] : null;
        $this->container['versionTo'] = isset($data['versionTo']) ? $data['versionTo'] : null;
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
     * Gets isRename
     *
     * @return bool
     */
    public function getIsRename()
    {
        return $this->container['isRename'];
    }

    /**
     * Sets isRename
     *
     * @param bool $isRename Indicates if this a rename source. If false, it is a merge source.
     *
     * @return $this
     */
    public function setIsRename($isRename)
    {
        $this->container['isRename'] = $isRename;

        return $this;
    }

    /**
     * Gets serverItem
     *
     * @return string
     */
    public function getServerItem()
    {
        return $this->container['serverItem'];
    }

    /**
     * Sets serverItem
     *
     * @param string $serverItem The server item of the merge source.
     *
     * @return $this
     */
    public function setServerItem($serverItem)
    {
        $this->container['serverItem'] = $serverItem;

        return $this;
    }

    /**
     * Gets versionFrom
     *
     * @return int
     */
    public function getVersionFrom()
    {
        return $this->container['versionFrom'];
    }

    /**
     * Sets versionFrom
     *
     * @param int $versionFrom Start of the version range.
     *
     * @return $this
     */
    public function setVersionFrom($versionFrom)
    {
        $this->container['versionFrom'] = $versionFrom;

        return $this;
    }

    /**
     * Gets versionTo
     *
     * @return int
     */
    public function getVersionTo()
    {
        return $this->container['versionTo'];
    }

    /**
     * Sets versionTo
     *
     * @param int $versionTo End of the version range.
     *
     * @return $this
     */
    public function setVersionTo($versionTo)
    {
        $this->container['versionTo'] = $versionTo;

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


