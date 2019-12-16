<?php
/**
 * FileCoverageRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\TestResults
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TestResults
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

namespace FrankHouweling\AzureDevOpsClient\TestResults\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\TestResults\ObjectSerializer;

/**
 * FileCoverageRequest Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\TestResults
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileCoverageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FileCoverageRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filePath' => 'string',
        'pullRequestBaseIterationId' => 'int',
        'pullRequestId' => 'int',
        'pullRequestIterationId' => 'int',
        'repoId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filePath' => null,
        'pullRequestBaseIterationId' => 'int32',
        'pullRequestId' => 'int32',
        'pullRequestIterationId' => 'int32',
        'repoId' => null
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
        'filePath' => 'filePath',
        'pullRequestBaseIterationId' => 'pullRequestBaseIterationId',
        'pullRequestId' => 'pullRequestId',
        'pullRequestIterationId' => 'pullRequestIterationId',
        'repoId' => 'repoId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filePath' => 'setFilePath',
        'pullRequestBaseIterationId' => 'setPullRequestBaseIterationId',
        'pullRequestId' => 'setPullRequestId',
        'pullRequestIterationId' => 'setPullRequestIterationId',
        'repoId' => 'setRepoId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filePath' => 'getFilePath',
        'pullRequestBaseIterationId' => 'getPullRequestBaseIterationId',
        'pullRequestId' => 'getPullRequestId',
        'pullRequestIterationId' => 'getPullRequestIterationId',
        'repoId' => 'getRepoId'
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['pullRequestBaseIterationId'] = isset($data['pullRequestBaseIterationId']) ? $data['pullRequestBaseIterationId'] : null;
        $this->container['pullRequestId'] = isset($data['pullRequestId']) ? $data['pullRequestId'] : null;
        $this->container['pullRequestIterationId'] = isset($data['pullRequestIterationId']) ? $data['pullRequestIterationId'] : null;
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
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
     * Gets filePath
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
     * Sets filePath
     *
     * @param string $filePath filePath
     *
     * @return $this
     */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;

        return $this;
    }

    /**
     * Gets pullRequestBaseIterationId
     *
     * @return int
     */
    public function getPullRequestBaseIterationId()
    {
        return $this->container['pullRequestBaseIterationId'];
    }

    /**
     * Sets pullRequestBaseIterationId
     *
     * @param int $pullRequestBaseIterationId pullRequestBaseIterationId
     *
     * @return $this
     */
    public function setPullRequestBaseIterationId($pullRequestBaseIterationId)
    {
        $this->container['pullRequestBaseIterationId'] = $pullRequestBaseIterationId;

        return $this;
    }

    /**
     * Gets pullRequestId
     *
     * @return int
     */
    public function getPullRequestId()
    {
        return $this->container['pullRequestId'];
    }

    /**
     * Sets pullRequestId
     *
     * @param int $pullRequestId pullRequestId
     *
     * @return $this
     */
    public function setPullRequestId($pullRequestId)
    {
        $this->container['pullRequestId'] = $pullRequestId;

        return $this;
    }

    /**
     * Gets pullRequestIterationId
     *
     * @return int
     */
    public function getPullRequestIterationId()
    {
        return $this->container['pullRequestIterationId'];
    }

    /**
     * Sets pullRequestIterationId
     *
     * @param int $pullRequestIterationId pullRequestIterationId
     *
     * @return $this
     */
    public function setPullRequestIterationId($pullRequestIterationId)
    {
        $this->container['pullRequestIterationId'] = $pullRequestIterationId;

        return $this;
    }

    /**
     * Gets repoId
     *
     * @return string
     */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
     * Sets repoId
     *
     * @param string $repoId repoId
     *
     * @return $this
     */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;

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


