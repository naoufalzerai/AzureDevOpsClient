<?php
/**
 * TfvcLabelRequestData
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
 * TfvcLabelRequestData Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Tfvc
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TfvcLabelRequestData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TfvcLabelRequestData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'includeLinks' => 'bool',
        'itemLabelFilter' => 'string',
        'labelScope' => 'string',
        'maxItemCount' => 'int',
        'name' => 'string',
        'owner' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'includeLinks' => null,
        'itemLabelFilter' => null,
        'labelScope' => null,
        'maxItemCount' => 'int32',
        'name' => null,
        'owner' => null
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
        'includeLinks' => 'includeLinks',
        'itemLabelFilter' => 'itemLabelFilter',
        'labelScope' => 'labelScope',
        'maxItemCount' => 'maxItemCount',
        'name' => 'name',
        'owner' => 'owner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'includeLinks' => 'setIncludeLinks',
        'itemLabelFilter' => 'setItemLabelFilter',
        'labelScope' => 'setLabelScope',
        'maxItemCount' => 'setMaxItemCount',
        'name' => 'setName',
        'owner' => 'setOwner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'includeLinks' => 'getIncludeLinks',
        'itemLabelFilter' => 'getItemLabelFilter',
        'labelScope' => 'getLabelScope',
        'maxItemCount' => 'getMaxItemCount',
        'name' => 'getName',
        'owner' => 'getOwner'
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
        $this->container['includeLinks'] = isset($data['includeLinks']) ? $data['includeLinks'] : null;
        $this->container['itemLabelFilter'] = isset($data['itemLabelFilter']) ? $data['itemLabelFilter'] : null;
        $this->container['labelScope'] = isset($data['labelScope']) ? $data['labelScope'] : null;
        $this->container['maxItemCount'] = isset($data['maxItemCount']) ? $data['maxItemCount'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
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
     * Gets includeLinks
     *
     * @return bool
     */
    public function getIncludeLinks()
    {
        return $this->container['includeLinks'];
    }

    /**
     * Sets includeLinks
     *
     * @param bool $includeLinks Whether to include the _links field on the shallow references
     *
     * @return $this
     */
    public function setIncludeLinks($includeLinks)
    {
        $this->container['includeLinks'] = $includeLinks;

        return $this;
    }

    /**
     * Gets itemLabelFilter
     *
     * @return string
     */
    public function getItemLabelFilter()
    {
        return $this->container['itemLabelFilter'];
    }

    /**
     * Sets itemLabelFilter
     *
     * @param string $itemLabelFilter itemLabelFilter
     *
     * @return $this
     */
    public function setItemLabelFilter($itemLabelFilter)
    {
        $this->container['itemLabelFilter'] = $itemLabelFilter;

        return $this;
    }

    /**
     * Gets labelScope
     *
     * @return string
     */
    public function getLabelScope()
    {
        return $this->container['labelScope'];
    }

    /**
     * Sets labelScope
     *
     * @param string $labelScope labelScope
     *
     * @return $this
     */
    public function setLabelScope($labelScope)
    {
        $this->container['labelScope'] = $labelScope;

        return $this;
    }

    /**
     * Gets maxItemCount
     *
     * @return int
     */
    public function getMaxItemCount()
    {
        return $this->container['maxItemCount'];
    }

    /**
     * Sets maxItemCount
     *
     * @param int $maxItemCount maxItemCount
     *
     * @return $this
     */
    public function setMaxItemCount($maxItemCount)
    {
        $this->container['maxItemCount'] = $maxItemCount;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

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


