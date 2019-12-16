<?php
/**
 * ArtifactTypeDefinition
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
 * ArtifactTypeDefinition Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ArtifactTypeDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ArtifactTypeDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'artifactTriggerConfiguration' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ArtifactTriggerConfiguration',
        'artifactType' => 'string',
        'displayName' => 'string',
        'endpointTypeId' => 'string',
        'inputDescriptors' => '\FrankHouweling\AzureDevOpsClient\Release\Model\InputDescriptor[]',
        'isCommitsTraceabilitySupported' => 'bool',
        'isWorkitemsTraceabilitySupported' => 'bool',
        'name' => 'string',
        'uniqueSourceIdentifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'artifactTriggerConfiguration' => null,
        'artifactType' => null,
        'displayName' => null,
        'endpointTypeId' => null,
        'inputDescriptors' => null,
        'isCommitsTraceabilitySupported' => null,
        'isWorkitemsTraceabilitySupported' => null,
        'name' => null,
        'uniqueSourceIdentifier' => null
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
        'artifactTriggerConfiguration' => 'artifactTriggerConfiguration',
        'artifactType' => 'artifactType',
        'displayName' => 'displayName',
        'endpointTypeId' => 'endpointTypeId',
        'inputDescriptors' => 'inputDescriptors',
        'isCommitsTraceabilitySupported' => 'isCommitsTraceabilitySupported',
        'isWorkitemsTraceabilitySupported' => 'isWorkitemsTraceabilitySupported',
        'name' => 'name',
        'uniqueSourceIdentifier' => 'uniqueSourceIdentifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'artifactTriggerConfiguration' => 'setArtifactTriggerConfiguration',
        'artifactType' => 'setArtifactType',
        'displayName' => 'setDisplayName',
        'endpointTypeId' => 'setEndpointTypeId',
        'inputDescriptors' => 'setInputDescriptors',
        'isCommitsTraceabilitySupported' => 'setIsCommitsTraceabilitySupported',
        'isWorkitemsTraceabilitySupported' => 'setIsWorkitemsTraceabilitySupported',
        'name' => 'setName',
        'uniqueSourceIdentifier' => 'setUniqueSourceIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'artifactTriggerConfiguration' => 'getArtifactTriggerConfiguration',
        'artifactType' => 'getArtifactType',
        'displayName' => 'getDisplayName',
        'endpointTypeId' => 'getEndpointTypeId',
        'inputDescriptors' => 'getInputDescriptors',
        'isCommitsTraceabilitySupported' => 'getIsCommitsTraceabilitySupported',
        'isWorkitemsTraceabilitySupported' => 'getIsWorkitemsTraceabilitySupported',
        'name' => 'getName',
        'uniqueSourceIdentifier' => 'getUniqueSourceIdentifier'
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
        $this->container['artifactTriggerConfiguration'] = isset($data['artifactTriggerConfiguration']) ? $data['artifactTriggerConfiguration'] : null;
        $this->container['artifactType'] = isset($data['artifactType']) ? $data['artifactType'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['endpointTypeId'] = isset($data['endpointTypeId']) ? $data['endpointTypeId'] : null;
        $this->container['inputDescriptors'] = isset($data['inputDescriptors']) ? $data['inputDescriptors'] : null;
        $this->container['isCommitsTraceabilitySupported'] = isset($data['isCommitsTraceabilitySupported']) ? $data['isCommitsTraceabilitySupported'] : null;
        $this->container['isWorkitemsTraceabilitySupported'] = isset($data['isWorkitemsTraceabilitySupported']) ? $data['isWorkitemsTraceabilitySupported'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uniqueSourceIdentifier'] = isset($data['uniqueSourceIdentifier']) ? $data['uniqueSourceIdentifier'] : null;
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
     * Gets artifactTriggerConfiguration
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ArtifactTriggerConfiguration
     */
    public function getArtifactTriggerConfiguration()
    {
        return $this->container['artifactTriggerConfiguration'];
    }

    /**
     * Sets artifactTriggerConfiguration
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ArtifactTriggerConfiguration $artifactTriggerConfiguration Gets or sets the artifact trigger configuration of artifact type definition.
     *
     * @return $this
     */
    public function setArtifactTriggerConfiguration($artifactTriggerConfiguration)
    {
        $this->container['artifactTriggerConfiguration'] = $artifactTriggerConfiguration;

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
     * @param string $artifactType Gets or sets the artifact type of artifact type definition. Valid values are 'Build', 'Package', 'Source' or 'ContainerImage'.
     *
     * @return $this
     */
    public function setArtifactType($artifactType)
    {
        $this->container['artifactType'] = $artifactType;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string $displayName Gets or sets the display name of artifact type definition.
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets endpointTypeId
     *
     * @return string
     */
    public function getEndpointTypeId()
    {
        return $this->container['endpointTypeId'];
    }

    /**
     * Sets endpointTypeId
     *
     * @param string $endpointTypeId Gets or sets the endpoint type id of artifact type definition.
     *
     * @return $this
     */
    public function setEndpointTypeId($endpointTypeId)
    {
        $this->container['endpointTypeId'] = $endpointTypeId;

        return $this;
    }

    /**
     * Gets inputDescriptors
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\InputDescriptor[]
     */
    public function getInputDescriptors()
    {
        return $this->container['inputDescriptors'];
    }

    /**
     * Sets inputDescriptors
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\InputDescriptor[] $inputDescriptors Gets or sets the input descriptors of artifact type definition.
     *
     * @return $this
     */
    public function setInputDescriptors($inputDescriptors)
    {
        $this->container['inputDescriptors'] = $inputDescriptors;

        return $this;
    }

    /**
     * Gets isCommitsTraceabilitySupported
     *
     * @return bool
     */
    public function getIsCommitsTraceabilitySupported()
    {
        return $this->container['isCommitsTraceabilitySupported'];
    }

    /**
     * Sets isCommitsTraceabilitySupported
     *
     * @param bool $isCommitsTraceabilitySupported Gets or sets the is commits tracebility supported value of artifact type defintion.
     *
     * @return $this
     */
    public function setIsCommitsTraceabilitySupported($isCommitsTraceabilitySupported)
    {
        $this->container['isCommitsTraceabilitySupported'] = $isCommitsTraceabilitySupported;

        return $this;
    }

    /**
     * Gets isWorkitemsTraceabilitySupported
     *
     * @return bool
     */
    public function getIsWorkitemsTraceabilitySupported()
    {
        return $this->container['isWorkitemsTraceabilitySupported'];
    }

    /**
     * Sets isWorkitemsTraceabilitySupported
     *
     * @param bool $isWorkitemsTraceabilitySupported Gets or sets the is workitems tracebility supported value of artifact type defintion.
     *
     * @return $this
     */
    public function setIsWorkitemsTraceabilitySupported($isWorkitemsTraceabilitySupported)
    {
        $this->container['isWorkitemsTraceabilitySupported'] = $isWorkitemsTraceabilitySupported;

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
     * @param string $name Gets or sets the name of artifact type definition.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets uniqueSourceIdentifier
     *
     * @return string
     */
    public function getUniqueSourceIdentifier()
    {
        return $this->container['uniqueSourceIdentifier'];
    }

    /**
     * Sets uniqueSourceIdentifier
     *
     * @param string $uniqueSourceIdentifier Gets or sets the unique source identifier of artifact type definition.
     *
     * @return $this
     */
    public function setUniqueSourceIdentifier($uniqueSourceIdentifier)
    {
        $this->container['uniqueSourceIdentifier'] = $uniqueSourceIdentifier;

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


