<?php
/**
 * ReleaseStartMetadata
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
 * ReleaseStartMetadata Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReleaseStartMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReleaseStartMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'artifacts' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ArtifactMetadata[]',
        'definitionId' => 'int',
        'description' => 'string',
        'environmentsMetadata' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseStartEnvironmentMetadata[]',
        'isDraft' => 'bool',
        'manualEnvironments' => 'string[]',
        'properties' => '\FrankHouweling\AzureDevOpsClient\Release\Model\PropertiesCollection',
        'reason' => 'string',
        'variables' => 'map[string,\FrankHouweling\AzureDevOpsClient\Release\Model\ConfigurationVariableValue]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'artifacts' => null,
        'definitionId' => 'int32',
        'description' => null,
        'environmentsMetadata' => null,
        'isDraft' => null,
        'manualEnvironments' => null,
        'properties' => null,
        'reason' => null,
        'variables' => null
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
        'artifacts' => 'artifacts',
        'definitionId' => 'definitionId',
        'description' => 'description',
        'environmentsMetadata' => 'environmentsMetadata',
        'isDraft' => 'isDraft',
        'manualEnvironments' => 'manualEnvironments',
        'properties' => 'properties',
        'reason' => 'reason',
        'variables' => 'variables'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'artifacts' => 'setArtifacts',
        'definitionId' => 'setDefinitionId',
        'description' => 'setDescription',
        'environmentsMetadata' => 'setEnvironmentsMetadata',
        'isDraft' => 'setIsDraft',
        'manualEnvironments' => 'setManualEnvironments',
        'properties' => 'setProperties',
        'reason' => 'setReason',
        'variables' => 'setVariables'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'artifacts' => 'getArtifacts',
        'definitionId' => 'getDefinitionId',
        'description' => 'getDescription',
        'environmentsMetadata' => 'getEnvironmentsMetadata',
        'isDraft' => 'getIsDraft',
        'manualEnvironments' => 'getManualEnvironments',
        'properties' => 'getProperties',
        'reason' => 'getReason',
        'variables' => 'getVariables'
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

    const REASON_NONE = 'none';
    const REASON_MANUAL = 'manual';
    const REASON_CONTINUOUS_INTEGRATION = 'continuousIntegration';
    const REASON_SCHEDULE = 'schedule';
    const REASON_PULL_REQUEST = 'pullRequest';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_NONE,
            self::REASON_MANUAL,
            self::REASON_CONTINUOUS_INTEGRATION,
            self::REASON_SCHEDULE,
            self::REASON_PULL_REQUEST,
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
        $this->container['artifacts'] = isset($data['artifacts']) ? $data['artifacts'] : null;
        $this->container['definitionId'] = isset($data['definitionId']) ? $data['definitionId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['environmentsMetadata'] = isset($data['environmentsMetadata']) ? $data['environmentsMetadata'] : null;
        $this->container['isDraft'] = isset($data['isDraft']) ? $data['isDraft'] : null;
        $this->container['manualEnvironments'] = isset($data['manualEnvironments']) ? $data['manualEnvironments'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
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
     * Gets artifacts
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ArtifactMetadata[]
     */
    public function getArtifacts()
    {
        return $this->container['artifacts'];
    }

    /**
     * Sets artifacts
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ArtifactMetadata[] $artifacts Sets list of artifact to create a release.
     *
     * @return $this
     */
    public function setArtifacts($artifacts)
    {
        $this->container['artifacts'] = $artifacts;

        return $this;
    }

    /**
     * Gets definitionId
     *
     * @return int
     */
    public function getDefinitionId()
    {
        return $this->container['definitionId'];
    }

    /**
     * Sets definitionId
     *
     * @param int $definitionId Sets definition Id to create a release.
     *
     * @return $this
     */
    public function setDefinitionId($definitionId)
    {
        $this->container['definitionId'] = $definitionId;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Sets description to create a release.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets environmentsMetadata
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseStartEnvironmentMetadata[]
     */
    public function getEnvironmentsMetadata()
    {
        return $this->container['environmentsMetadata'];
    }

    /**
     * Sets environmentsMetadata
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseStartEnvironmentMetadata[] $environmentsMetadata Sets list of environments meta data.
     *
     * @return $this
     */
    public function setEnvironmentsMetadata($environmentsMetadata)
    {
        $this->container['environmentsMetadata'] = $environmentsMetadata;

        return $this;
    }

    /**
     * Gets isDraft
     *
     * @return bool
     */
    public function getIsDraft()
    {
        return $this->container['isDraft'];
    }

    /**
     * Sets isDraft
     *
     * @param bool $isDraft Sets 'true' to create release in draft mode, 'false' otherwise.
     *
     * @return $this
     */
    public function setIsDraft($isDraft)
    {
        $this->container['isDraft'] = $isDraft;

        return $this;
    }

    /**
     * Gets manualEnvironments
     *
     * @return string[]
     */
    public function getManualEnvironments()
    {
        return $this->container['manualEnvironments'];
    }

    /**
     * Sets manualEnvironments
     *
     * @param string[] $manualEnvironments Sets list of environments to manual as condition.
     *
     * @return $this
     */
    public function setManualEnvironments($manualEnvironments)
    {
        $this->container['manualEnvironments'] = $manualEnvironments;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\PropertiesCollection
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\PropertiesCollection $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason Sets reason to create a release.
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($reason) && !in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets variables
     *
     * @return map[string,\FrankHouweling\AzureDevOpsClient\Release\Model\ConfigurationVariableValue]
     */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
     * Sets variables
     *
     * @param map[string,\FrankHouweling\AzureDevOpsClient\Release\Model\ConfigurationVariableValue] $variables Sets list of release variables to be overridden at deployment time.
     *
     * @return $this
     */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;

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

