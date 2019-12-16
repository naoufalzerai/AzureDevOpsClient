<?php
/**
 * TfvcItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Git
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

namespace FrankHouweling\AzureDevOpsClient\Git\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Git\ObjectSerializer;

/**
 * TfvcItem Class Doc Comment
 *
 * @category Class
 * @description Metadata for an item.
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TfvcItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TfvcItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks',
        'content' => 'string',
        'contentMetadata' => '\FrankHouweling\AzureDevOpsClient\Git\Model\FileContentMetadata',
        'isFolder' => 'bool',
        'isSymLink' => 'bool',
        'path' => 'string',
        'url' => 'string',
        'changeDate' => '\DateTime',
        'deletionId' => 'int',
        'encoding' => 'int',
        'hashValue' => 'string',
        'isBranch' => 'bool',
        'isPendingChange' => 'bool',
        'size' => 'int',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'content' => null,
        'contentMetadata' => null,
        'isFolder' => null,
        'isSymLink' => null,
        'path' => null,
        'url' => null,
        'changeDate' => 'date-time',
        'deletionId' => 'int32',
        'encoding' => 'int32',
        'hashValue' => null,
        'isBranch' => null,
        'isPendingChange' => null,
        'size' => 'int64',
        'version' => 'int32'
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
        'content' => 'content',
        'contentMetadata' => 'contentMetadata',
        'isFolder' => 'isFolder',
        'isSymLink' => 'isSymLink',
        'path' => 'path',
        'url' => 'url',
        'changeDate' => 'changeDate',
        'deletionId' => 'deletionId',
        'encoding' => 'encoding',
        'hashValue' => 'hashValue',
        'isBranch' => 'isBranch',
        'isPendingChange' => 'isPendingChange',
        'size' => 'size',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'content' => 'setContent',
        'contentMetadata' => 'setContentMetadata',
        'isFolder' => 'setIsFolder',
        'isSymLink' => 'setIsSymLink',
        'path' => 'setPath',
        'url' => 'setUrl',
        'changeDate' => 'setChangeDate',
        'deletionId' => 'setDeletionId',
        'encoding' => 'setEncoding',
        'hashValue' => 'setHashValue',
        'isBranch' => 'setIsBranch',
        'isPendingChange' => 'setIsPendingChange',
        'size' => 'setSize',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'content' => 'getContent',
        'contentMetadata' => 'getContentMetadata',
        'isFolder' => 'getIsFolder',
        'isSymLink' => 'getIsSymLink',
        'path' => 'getPath',
        'url' => 'getUrl',
        'changeDate' => 'getChangeDate',
        'deletionId' => 'getDeletionId',
        'encoding' => 'getEncoding',
        'hashValue' => 'getHashValue',
        'isBranch' => 'getIsBranch',
        'isPendingChange' => 'getIsPendingChange',
        'size' => 'getSize',
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['contentMetadata'] = isset($data['contentMetadata']) ? $data['contentMetadata'] : null;
        $this->container['isFolder'] = isset($data['isFolder']) ? $data['isFolder'] : null;
        $this->container['isSymLink'] = isset($data['isSymLink']) ? $data['isSymLink'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['changeDate'] = isset($data['changeDate']) ? $data['changeDate'] : null;
        $this->container['deletionId'] = isset($data['deletionId']) ? $data['deletionId'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['hashValue'] = isset($data['hashValue']) ? $data['hashValue'] : null;
        $this->container['isBranch'] = isset($data['isBranch']) ? $data['isBranch'] : null;
        $this->container['isPendingChange'] = isset($data['isPendingChange']) ? $data['isPendingChange'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets contentMetadata
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\FileContentMetadata
     */
    public function getContentMetadata()
    {
        return $this->container['contentMetadata'];
    }

    /**
     * Sets contentMetadata
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\FileContentMetadata $contentMetadata contentMetadata
     *
     * @return $this
     */
    public function setContentMetadata($contentMetadata)
    {
        $this->container['contentMetadata'] = $contentMetadata;

        return $this;
    }

    /**
     * Gets isFolder
     *
     * @return bool
     */
    public function getIsFolder()
    {
        return $this->container['isFolder'];
    }

    /**
     * Sets isFolder
     *
     * @param bool $isFolder isFolder
     *
     * @return $this
     */
    public function setIsFolder($isFolder)
    {
        $this->container['isFolder'] = $isFolder;

        return $this;
    }

    /**
     * Gets isSymLink
     *
     * @return bool
     */
    public function getIsSymLink()
    {
        return $this->container['isSymLink'];
    }

    /**
     * Sets isSymLink
     *
     * @param bool $isSymLink isSymLink
     *
     * @return $this
     */
    public function setIsSymLink($isSymLink)
    {
        $this->container['isSymLink'] = $isSymLink;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

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
     * Gets changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->container['changeDate'];
    }

    /**
     * Sets changeDate
     *
     * @param \DateTime $changeDate Item changed datetime.
     *
     * @return $this
     */
    public function setChangeDate($changeDate)
    {
        $this->container['changeDate'] = $changeDate;

        return $this;
    }

    /**
     * Gets deletionId
     *
     * @return int
     */
    public function getDeletionId()
    {
        return $this->container['deletionId'];
    }

    /**
     * Sets deletionId
     *
     * @param int $deletionId Greater than 0 if item is deleted.
     *
     * @return $this
     */
    public function setDeletionId($deletionId)
    {
        $this->container['deletionId'] = $deletionId;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return int
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param int $encoding File encoding from database, -1 represents binary.
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets hashValue
     *
     * @return string
     */
    public function getHashValue()
    {
        return $this->container['hashValue'];
    }

    /**
     * Sets hashValue
     *
     * @param string $hashValue MD5 hash as a base 64 string, applies to files only.
     *
     * @return $this
     */
    public function setHashValue($hashValue)
    {
        $this->container['hashValue'] = $hashValue;

        return $this;
    }

    /**
     * Gets isBranch
     *
     * @return bool
     */
    public function getIsBranch()
    {
        return $this->container['isBranch'];
    }

    /**
     * Sets isBranch
     *
     * @param bool $isBranch True if item is a branch.
     *
     * @return $this
     */
    public function setIsBranch($isBranch)
    {
        $this->container['isBranch'] = $isBranch;

        return $this;
    }

    /**
     * Gets isPendingChange
     *
     * @return bool
     */
    public function getIsPendingChange()
    {
        return $this->container['isPendingChange'];
    }

    /**
     * Sets isPendingChange
     *
     * @param bool $isPendingChange True if there is a change pending.
     *
     * @return $this
     */
    public function setIsPendingChange($isPendingChange)
    {
        $this->container['isPendingChange'] = $isPendingChange;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size The size of the file, if applicable.
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version Changeset version Id.
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


