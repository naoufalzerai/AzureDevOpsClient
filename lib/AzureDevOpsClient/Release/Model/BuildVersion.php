<?php
/**
 * BuildVersion
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
 * BuildVersion Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuildVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'commitMessage' => 'string',
        'definitionId' => 'string',
        'definitionName' => 'string',
        'id' => 'string',
        'isMultiDefinitionType' => 'bool',
        'name' => 'string',
        'sourceBranch' => 'string',
        'sourcePullRequestVersion' => '\FrankHouweling\AzureDevOpsClient\Release\Model\SourcePullRequestVersion',
        'sourceRepositoryId' => 'string',
        'sourceRepositoryType' => 'string',
        'sourceVersion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'commitMessage' => null,
        'definitionId' => null,
        'definitionName' => null,
        'id' => null,
        'isMultiDefinitionType' => null,
        'name' => null,
        'sourceBranch' => null,
        'sourcePullRequestVersion' => null,
        'sourceRepositoryId' => null,
        'sourceRepositoryType' => null,
        'sourceVersion' => null
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
        'commitMessage' => 'commitMessage',
        'definitionId' => 'definitionId',
        'definitionName' => 'definitionName',
        'id' => 'id',
        'isMultiDefinitionType' => 'isMultiDefinitionType',
        'name' => 'name',
        'sourceBranch' => 'sourceBranch',
        'sourcePullRequestVersion' => 'sourcePullRequestVersion',
        'sourceRepositoryId' => 'sourceRepositoryId',
        'sourceRepositoryType' => 'sourceRepositoryType',
        'sourceVersion' => 'sourceVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commitMessage' => 'setCommitMessage',
        'definitionId' => 'setDefinitionId',
        'definitionName' => 'setDefinitionName',
        'id' => 'setId',
        'isMultiDefinitionType' => 'setIsMultiDefinitionType',
        'name' => 'setName',
        'sourceBranch' => 'setSourceBranch',
        'sourcePullRequestVersion' => 'setSourcePullRequestVersion',
        'sourceRepositoryId' => 'setSourceRepositoryId',
        'sourceRepositoryType' => 'setSourceRepositoryType',
        'sourceVersion' => 'setSourceVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commitMessage' => 'getCommitMessage',
        'definitionId' => 'getDefinitionId',
        'definitionName' => 'getDefinitionName',
        'id' => 'getId',
        'isMultiDefinitionType' => 'getIsMultiDefinitionType',
        'name' => 'getName',
        'sourceBranch' => 'getSourceBranch',
        'sourcePullRequestVersion' => 'getSourcePullRequestVersion',
        'sourceRepositoryId' => 'getSourceRepositoryId',
        'sourceRepositoryType' => 'getSourceRepositoryType',
        'sourceVersion' => 'getSourceVersion'
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
        $this->container['commitMessage'] = isset($data['commitMessage']) ? $data['commitMessage'] : null;
        $this->container['definitionId'] = isset($data['definitionId']) ? $data['definitionId'] : null;
        $this->container['definitionName'] = isset($data['definitionName']) ? $data['definitionName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isMultiDefinitionType'] = isset($data['isMultiDefinitionType']) ? $data['isMultiDefinitionType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['sourcePullRequestVersion'] = isset($data['sourcePullRequestVersion']) ? $data['sourcePullRequestVersion'] : null;
        $this->container['sourceRepositoryId'] = isset($data['sourceRepositoryId']) ? $data['sourceRepositoryId'] : null;
        $this->container['sourceRepositoryType'] = isset($data['sourceRepositoryType']) ? $data['sourceRepositoryType'] : null;
        $this->container['sourceVersion'] = isset($data['sourceVersion']) ? $data['sourceVersion'] : null;
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
     * Gets commitMessage
     *
     * @return string
     */
    public function getCommitMessage()
    {
        return $this->container['commitMessage'];
    }

    /**
     * Sets commitMessage
     *
     * @param string $commitMessage Gets or sets the commit message for the artifact.
     *
     * @return $this
     */
    public function setCommitMessage($commitMessage)
    {
        $this->container['commitMessage'] = $commitMessage;

        return $this;
    }

    /**
     * Gets definitionId
     *
     * @return string
     */
    public function getDefinitionId()
    {
        return $this->container['definitionId'];
    }

    /**
     * Sets definitionId
     *
     * @param string $definitionId Gets or sets the definition id.
     *
     * @return $this
     */
    public function setDefinitionId($definitionId)
    {
        $this->container['definitionId'] = $definitionId;

        return $this;
    }

    /**
     * Gets definitionName
     *
     * @return string
     */
    public function getDefinitionName()
    {
        return $this->container['definitionName'];
    }

    /**
     * Sets definitionName
     *
     * @param string $definitionName Gets or sets the definition name.
     *
     * @return $this
     */
    public function setDefinitionName($definitionName)
    {
        $this->container['definitionName'] = $definitionName;

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
     * @param string $id Gets or sets the build id.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isMultiDefinitionType
     *
     * @return bool
     */
    public function getIsMultiDefinitionType()
    {
        return $this->container['isMultiDefinitionType'];
    }

    /**
     * Sets isMultiDefinitionType
     *
     * @param bool $isMultiDefinitionType Gets or sets if the artifact supports multiple definitions.
     *
     * @return $this
     */
    public function setIsMultiDefinitionType($isMultiDefinitionType)
    {
        $this->container['isMultiDefinitionType'] = $isMultiDefinitionType;

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
     * @param string $name Gets or sets the build number.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets sourceBranch
     *
     * @return string
     */
    public function getSourceBranch()
    {
        return $this->container['sourceBranch'];
    }

    /**
     * Sets sourceBranch
     *
     * @param string $sourceBranch Gets or sets the source branch for the artifact.
     *
     * @return $this
     */
    public function setSourceBranch($sourceBranch)
    {
        $this->container['sourceBranch'] = $sourceBranch;

        return $this;
    }

    /**
     * Gets sourcePullRequestVersion
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\SourcePullRequestVersion
     */
    public function getSourcePullRequestVersion()
    {
        return $this->container['sourcePullRequestVersion'];
    }

    /**
     * Sets sourcePullRequestVersion
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\SourcePullRequestVersion $sourcePullRequestVersion Gets or sets the source pull request version for the artifact.
     *
     * @return $this
     */
    public function setSourcePullRequestVersion($sourcePullRequestVersion)
    {
        $this->container['sourcePullRequestVersion'] = $sourcePullRequestVersion;

        return $this;
    }

    /**
     * Gets sourceRepositoryId
     *
     * @return string
     */
    public function getSourceRepositoryId()
    {
        return $this->container['sourceRepositoryId'];
    }

    /**
     * Sets sourceRepositoryId
     *
     * @param string $sourceRepositoryId Gets or sets the repository id for the artifact.
     *
     * @return $this
     */
    public function setSourceRepositoryId($sourceRepositoryId)
    {
        $this->container['sourceRepositoryId'] = $sourceRepositoryId;

        return $this;
    }

    /**
     * Gets sourceRepositoryType
     *
     * @return string
     */
    public function getSourceRepositoryType()
    {
        return $this->container['sourceRepositoryType'];
    }

    /**
     * Sets sourceRepositoryType
     *
     * @param string $sourceRepositoryType Gets or sets the repository type for the artifact.
     *
     * @return $this
     */
    public function setSourceRepositoryType($sourceRepositoryType)
    {
        $this->container['sourceRepositoryType'] = $sourceRepositoryType;

        return $this;
    }

    /**
     * Gets sourceVersion
     *
     * @return string
     */
    public function getSourceVersion()
    {
        return $this->container['sourceVersion'];
    }

    /**
     * Sets sourceVersion
     *
     * @param string $sourceVersion Gets or sets the source version for the artifact.
     *
     * @return $this
     */
    public function setSourceVersion($sourceVersion)
    {
        $this->container['sourceVersion'] = $sourceVersion;

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


