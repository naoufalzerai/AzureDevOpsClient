<?php
/**
 * SourcePullRequestVersion
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
 * SourcePullRequestVersion Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SourcePullRequestVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SourcePullRequestVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'iterationId' => 'string',
        'pullRequestId' => 'string',
        'pullRequestMergedAt' => '\DateTime',
        'sourceBranch' => 'string',
        'sourceBranchCommitId' => 'string',
        'targetBranch' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'iterationId' => null,
        'pullRequestId' => null,
        'pullRequestMergedAt' => 'date-time',
        'sourceBranch' => null,
        'sourceBranchCommitId' => null,
        'targetBranch' => null
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
        'iterationId' => 'iterationId',
        'pullRequestId' => 'pullRequestId',
        'pullRequestMergedAt' => 'pullRequestMergedAt',
        'sourceBranch' => 'sourceBranch',
        'sourceBranchCommitId' => 'sourceBranchCommitId',
        'targetBranch' => 'targetBranch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iterationId' => 'setIterationId',
        'pullRequestId' => 'setPullRequestId',
        'pullRequestMergedAt' => 'setPullRequestMergedAt',
        'sourceBranch' => 'setSourceBranch',
        'sourceBranchCommitId' => 'setSourceBranchCommitId',
        'targetBranch' => 'setTargetBranch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iterationId' => 'getIterationId',
        'pullRequestId' => 'getPullRequestId',
        'pullRequestMergedAt' => 'getPullRequestMergedAt',
        'sourceBranch' => 'getSourceBranch',
        'sourceBranchCommitId' => 'getSourceBranchCommitId',
        'targetBranch' => 'getTargetBranch'
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
        $this->container['iterationId'] = isset($data['iterationId']) ? $data['iterationId'] : null;
        $this->container['pullRequestId'] = isset($data['pullRequestId']) ? $data['pullRequestId'] : null;
        $this->container['pullRequestMergedAt'] = isset($data['pullRequestMergedAt']) ? $data['pullRequestMergedAt'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['sourceBranchCommitId'] = isset($data['sourceBranchCommitId']) ? $data['sourceBranchCommitId'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
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
     * Gets iterationId
     *
     * @return string
     */
    public function getIterationId()
    {
        return $this->container['iterationId'];
    }

    /**
     * Sets iterationId
     *
     * @param string $iterationId Pull Request Iteration Id for which the release will publish status.
     *
     * @return $this
     */
    public function setIterationId($iterationId)
    {
        $this->container['iterationId'] = $iterationId;

        return $this;
    }

    /**
     * Gets pullRequestId
     *
     * @return string
     */
    public function getPullRequestId()
    {
        return $this->container['pullRequestId'];
    }

    /**
     * Sets pullRequestId
     *
     * @param string $pullRequestId Pull Request Id for which the release will publish status.
     *
     * @return $this
     */
    public function setPullRequestId($pullRequestId)
    {
        $this->container['pullRequestId'] = $pullRequestId;

        return $this;
    }

    /**
     * Gets pullRequestMergedAt
     *
     * @return \DateTime
     */
    public function getPullRequestMergedAt()
    {
        return $this->container['pullRequestMergedAt'];
    }

    /**
     * Sets pullRequestMergedAt
     *
     * @param \DateTime $pullRequestMergedAt Date and time of the pull request merge creation. It is required to keep timeline record of Releases created by pull request.
     *
     * @return $this
     */
    public function setPullRequestMergedAt($pullRequestMergedAt)
    {
        $this->container['pullRequestMergedAt'] = $pullRequestMergedAt;

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
     * @param string $sourceBranch Source branch of the Pull Request.
     *
     * @return $this
     */
    public function setSourceBranch($sourceBranch)
    {
        $this->container['sourceBranch'] = $sourceBranch;

        return $this;
    }

    /**
     * Gets sourceBranchCommitId
     *
     * @return string
     */
    public function getSourceBranchCommitId()
    {
        return $this->container['sourceBranchCommitId'];
    }

    /**
     * Sets sourceBranchCommitId
     *
     * @param string $sourceBranchCommitId Source branch commit Id of the Pull Request for which the release will publish status.
     *
     * @return $this
     */
    public function setSourceBranchCommitId($sourceBranchCommitId)
    {
        $this->container['sourceBranchCommitId'] = $sourceBranchCommitId;

        return $this;
    }

    /**
     * Gets targetBranch
     *
     * @return string
     */
    public function getTargetBranch()
    {
        return $this->container['targetBranch'];
    }

    /**
     * Sets targetBranch
     *
     * @param string $targetBranch Target branch of the Pull Request.
     *
     * @return $this
     */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;

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


