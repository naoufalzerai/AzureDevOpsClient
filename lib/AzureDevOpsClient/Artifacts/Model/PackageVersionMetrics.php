<?php
/**
 * PackageVersionMetrics
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Artifacts
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Feed
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

namespace FrankHouweling\AzureDevOpsClient\Artifacts\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Artifacts\ObjectSerializer;

/**
 * PackageVersionMetrics Class Doc Comment
 *
 * @category Class
 * @description All metrics for a certain package version id
 * @package  FrankHouweling\AzureDevOpsClient\Artifacts
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackageVersionMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PackageVersionMetrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'downloadCount' => 'double',
        'downloadUniqueUsers' => 'double',
        'lastDownloaded' => '\DateTime',
        'packageId' => 'string',
        'packageVersionId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'downloadCount' => 'double',
        'downloadUniqueUsers' => 'double',
        'lastDownloaded' => 'date-time',
        'packageId' => 'uuid',
        'packageVersionId' => 'uuid'
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
        'downloadCount' => 'downloadCount',
        'downloadUniqueUsers' => 'downloadUniqueUsers',
        'lastDownloaded' => 'lastDownloaded',
        'packageId' => 'packageId',
        'packageVersionId' => 'packageVersionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'downloadCount' => 'setDownloadCount',
        'downloadUniqueUsers' => 'setDownloadUniqueUsers',
        'lastDownloaded' => 'setLastDownloaded',
        'packageId' => 'setPackageId',
        'packageVersionId' => 'setPackageVersionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'downloadCount' => 'getDownloadCount',
        'downloadUniqueUsers' => 'getDownloadUniqueUsers',
        'lastDownloaded' => 'getLastDownloaded',
        'packageId' => 'getPackageId',
        'packageVersionId' => 'getPackageVersionId'
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
        $this->container['downloadCount'] = isset($data['downloadCount']) ? $data['downloadCount'] : null;
        $this->container['downloadUniqueUsers'] = isset($data['downloadUniqueUsers']) ? $data['downloadUniqueUsers'] : null;
        $this->container['lastDownloaded'] = isset($data['lastDownloaded']) ? $data['lastDownloaded'] : null;
        $this->container['packageId'] = isset($data['packageId']) ? $data['packageId'] : null;
        $this->container['packageVersionId'] = isset($data['packageVersionId']) ? $data['packageVersionId'] : null;
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
     * Gets downloadCount
     *
     * @return double
     */
    public function getDownloadCount()
    {
        return $this->container['downloadCount'];
    }

    /**
     * Sets downloadCount
     *
     * @param double $downloadCount Total count of downloads per package version id.
     *
     * @return $this
     */
    public function setDownloadCount($downloadCount)
    {
        $this->container['downloadCount'] = $downloadCount;

        return $this;
    }

    /**
     * Gets downloadUniqueUsers
     *
     * @return double
     */
    public function getDownloadUniqueUsers()
    {
        return $this->container['downloadUniqueUsers'];
    }

    /**
     * Sets downloadUniqueUsers
     *
     * @param double $downloadUniqueUsers Number of downloads per unique user per package version id.
     *
     * @return $this
     */
    public function setDownloadUniqueUsers($downloadUniqueUsers)
    {
        $this->container['downloadUniqueUsers'] = $downloadUniqueUsers;

        return $this;
    }

    /**
     * Gets lastDownloaded
     *
     * @return \DateTime
     */
    public function getLastDownloaded()
    {
        return $this->container['lastDownloaded'];
    }

    /**
     * Sets lastDownloaded
     *
     * @param \DateTime $lastDownloaded UTC date and time when package version was last downloaded.
     *
     * @return $this
     */
    public function setLastDownloaded($lastDownloaded)
    {
        $this->container['lastDownloaded'] = $lastDownloaded;

        return $this;
    }

    /**
     * Gets packageId
     *
     * @return string
     */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
     * Sets packageId
     *
     * @param string $packageId Package id.
     *
     * @return $this
     */
    public function setPackageId($packageId)
    {
        $this->container['packageId'] = $packageId;

        return $this;
    }

    /**
     * Gets packageVersionId
     *
     * @return string
     */
    public function getPackageVersionId()
    {
        return $this->container['packageVersionId'];
    }

    /**
     * Sets packageVersionId
     *
     * @param string $packageVersionId Package version id.
     *
     * @return $this
     */
    public function setPackageVersionId($packageVersionId)
    {
        $this->container['packageVersionId'] = $packageVersionId;

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

