<?php
/**
 * ContinuousDeploymentTriggerIssue
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
 * ContinuousDeploymentTriggerIssue Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContinuousDeploymentTriggerIssue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContinuousDeploymentTriggerIssue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'issue' => '\FrankHouweling\AzureDevOpsClient\Release\Model\Issue',
        'issueSource' => 'string',
        'project' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ProjectReference',
        'releaseDefinitionReference' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionShallowReference',
        'releaseTriggerType' => 'string',
        'artifactType' => 'string',
        'artifactVersionId' => 'string',
        'sourceId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'issue' => null,
        'issueSource' => null,
        'project' => null,
        'releaseDefinitionReference' => null,
        'releaseTriggerType' => null,
        'artifactType' => null,
        'artifactVersionId' => null,
        'sourceId' => null
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
        'issue' => 'issue',
        'issueSource' => 'issueSource',
        'project' => 'project',
        'releaseDefinitionReference' => 'releaseDefinitionReference',
        'releaseTriggerType' => 'releaseTriggerType',
        'artifactType' => 'artifactType',
        'artifactVersionId' => 'artifactVersionId',
        'sourceId' => 'sourceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'issue' => 'setIssue',
        'issueSource' => 'setIssueSource',
        'project' => 'setProject',
        'releaseDefinitionReference' => 'setReleaseDefinitionReference',
        'releaseTriggerType' => 'setReleaseTriggerType',
        'artifactType' => 'setArtifactType',
        'artifactVersionId' => 'setArtifactVersionId',
        'sourceId' => 'setSourceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'issue' => 'getIssue',
        'issueSource' => 'getIssueSource',
        'project' => 'getProject',
        'releaseDefinitionReference' => 'getReleaseDefinitionReference',
        'releaseTriggerType' => 'getReleaseTriggerType',
        'artifactType' => 'getArtifactType',
        'artifactVersionId' => 'getArtifactVersionId',
        'sourceId' => 'getSourceId'
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

    const ISSUE_SOURCE_NONE = 'none';
    const ISSUE_SOURCE_USER = 'user';
    const ISSUE_SOURCE_SYSTEM = 'system';
    const RELEASE_TRIGGER_TYPE_UNDEFINED = 'undefined';
    const RELEASE_TRIGGER_TYPE_ARTIFACT_SOURCE = 'artifactSource';
    const RELEASE_TRIGGER_TYPE_SCHEDULE = 'schedule';
    const RELEASE_TRIGGER_TYPE_SOURCE_REPO = 'sourceRepo';
    const RELEASE_TRIGGER_TYPE_CONTAINER_IMAGE = 'containerImage';
    const RELEASE_TRIGGER_TYPE_PACKAGE = 'package';
    const RELEASE_TRIGGER_TYPE_PULL_REQUEST = 'pullRequest';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIssueSourceAllowableValues()
    {
        return [
            self::ISSUE_SOURCE_NONE,
            self::ISSUE_SOURCE_USER,
            self::ISSUE_SOURCE_SYSTEM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReleaseTriggerTypeAllowableValues()
    {
        return [
            self::RELEASE_TRIGGER_TYPE_UNDEFINED,
            self::RELEASE_TRIGGER_TYPE_ARTIFACT_SOURCE,
            self::RELEASE_TRIGGER_TYPE_SCHEDULE,
            self::RELEASE_TRIGGER_TYPE_SOURCE_REPO,
            self::RELEASE_TRIGGER_TYPE_CONTAINER_IMAGE,
            self::RELEASE_TRIGGER_TYPE_PACKAGE,
            self::RELEASE_TRIGGER_TYPE_PULL_REQUEST,
        ];
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
        $this->container['issue'] = isset($data['issue']) ? $data['issue'] : null;
        $this->container['issueSource'] = isset($data['issueSource']) ? $data['issueSource'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['releaseDefinitionReference'] = isset($data['releaseDefinitionReference']) ? $data['releaseDefinitionReference'] : null;
        $this->container['releaseTriggerType'] = isset($data['releaseTriggerType']) ? $data['releaseTriggerType'] : null;
        $this->container['artifactType'] = isset($data['artifactType']) ? $data['artifactType'] : null;
        $this->container['artifactVersionId'] = isset($data['artifactVersionId']) ? $data['artifactVersionId'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getIssueSourceAllowableValues();
        if (!is_null($this->container['issueSource']) && !in_array($this->container['issueSource'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'issueSource', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReleaseTriggerTypeAllowableValues();
        if (!is_null($this->container['releaseTriggerType']) && !in_array($this->container['releaseTriggerType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'releaseTriggerType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets issue
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\Issue
     */
    public function getIssue()
    {
        return $this->container['issue'];
    }

    /**
     * Sets issue
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\Issue $issue issue
     *
     * @return $this
     */
    public function setIssue($issue)
    {
        $this->container['issue'] = $issue;

        return $this;
    }

    /**
     * Gets issueSource
     *
     * @return string
     */
    public function getIssueSource()
    {
        return $this->container['issueSource'];
    }

    /**
     * Sets issueSource
     *
     * @param string $issueSource issueSource
     *
     * @return $this
     */
    public function setIssueSource($issueSource)
    {
        $allowedValues = $this->getIssueSourceAllowableValues();
        if (!is_null($issueSource) && !in_array($issueSource, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'issueSource', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['issueSource'] = $issueSource;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ProjectReference
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ProjectReference $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets releaseDefinitionReference
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionShallowReference
     */
    public function getReleaseDefinitionReference()
    {
        return $this->container['releaseDefinitionReference'];
    }

    /**
     * Sets releaseDefinitionReference
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionShallowReference $releaseDefinitionReference releaseDefinitionReference
     *
     * @return $this
     */
    public function setReleaseDefinitionReference($releaseDefinitionReference)
    {
        $this->container['releaseDefinitionReference'] = $releaseDefinitionReference;

        return $this;
    }

    /**
     * Gets releaseTriggerType
     *
     * @return string
     */
    public function getReleaseTriggerType()
    {
        return $this->container['releaseTriggerType'];
    }

    /**
     * Sets releaseTriggerType
     *
     * @param string $releaseTriggerType releaseTriggerType
     *
     * @return $this
     */
    public function setReleaseTriggerType($releaseTriggerType)
    {
        $allowedValues = $this->getReleaseTriggerTypeAllowableValues();
        if (!is_null($releaseTriggerType) && !in_array($releaseTriggerType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'releaseTriggerType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['releaseTriggerType'] = $releaseTriggerType;

        return $this;
    }

    /**
     * Gets artifactType
     *
     * @return string
     */
    public function getArtifactType()
    {
        return $this->container['artifactType'];
    }

    /**
     * Sets artifactType
     *
     * @param string $artifactType Artifact type.
     *
     * @return $this
     */
    public function setArtifactType($artifactType)
    {
        $this->container['artifactType'] = $artifactType;

        return $this;
    }

    /**
     * Gets artifactVersionId
     *
     * @return string
     */
    public function getArtifactVersionId()
    {
        return $this->container['artifactVersionId'];
    }

    /**
     * Sets artifactVersionId
     *
     * @param string $artifactVersionId ArtifactVersion ID.
     *
     * @return $this
     */
    public function setArtifactVersionId($artifactVersionId)
    {
        $this->container['artifactVersionId'] = $artifactVersionId;

        return $this;
    }

    /**
     * Gets sourceId
     *
     * @return string
     */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
     * Sets sourceId
     *
     * @param string $sourceId Artifact source ID.
     *
     * @return $this
     */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;

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


