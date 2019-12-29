<?php
/**
 * TaskAgentCloud
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TaskAgent
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

namespace FrankHouweling\AzureDevOpsClient\DistributedTask\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\DistributedTask\ObjectSerializer;

/**
 * TaskAgentCloud Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskAgentCloud implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskAgentCloud';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acquireAgentEndpoint' => 'string',
        'acquisitionTimeout' => 'int',
        'agentCloudId' => 'int',
        'getAccountParallelismEndpoint' => 'string',
        'getAgentDefinitionEndpoint' => 'string',
        'getAgentRequestStatusEndpoint' => 'string',
        'id' => 'string',
        'internal' => 'bool',
        'maxParallelism' => 'int',
        'name' => 'string',
        'releaseAgentEndpoint' => 'string',
        'sharedSecret' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acquireAgentEndpoint' => null,
        'acquisitionTimeout' => 'int32',
        'agentCloudId' => 'int32',
        'getAccountParallelismEndpoint' => null,
        'getAgentDefinitionEndpoint' => null,
        'getAgentRequestStatusEndpoint' => null,
        'id' => 'uuid',
        'internal' => null,
        'maxParallelism' => 'int32',
        'name' => null,
        'releaseAgentEndpoint' => null,
        'sharedSecret' => null,
        'type' => null
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
        'acquireAgentEndpoint' => 'acquireAgentEndpoint',
        'acquisitionTimeout' => 'acquisitionTimeout',
        'agentCloudId' => 'agentCloudId',
        'getAccountParallelismEndpoint' => 'getAccountParallelismEndpoint',
        'getAgentDefinitionEndpoint' => 'getAgentDefinitionEndpoint',
        'getAgentRequestStatusEndpoint' => 'getAgentRequestStatusEndpoint',
        'id' => 'id',
        'internal' => 'internal',
        'maxParallelism' => 'maxParallelism',
        'name' => 'name',
        'releaseAgentEndpoint' => 'releaseAgentEndpoint',
        'sharedSecret' => 'sharedSecret',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acquireAgentEndpoint' => 'setAcquireAgentEndpoint',
        'acquisitionTimeout' => 'setAcquisitionTimeout',
        'agentCloudId' => 'setAgentCloudId',
        'getAccountParallelismEndpoint' => 'setGetAccountParallelismEndpoint',
        'getAgentDefinitionEndpoint' => 'setGetAgentDefinitionEndpoint',
        'getAgentRequestStatusEndpoint' => 'setGetAgentRequestStatusEndpoint',
        'id' => 'setId',
        'internal' => 'setInternal',
        'maxParallelism' => 'setMaxParallelism',
        'name' => 'setName',
        'releaseAgentEndpoint' => 'setReleaseAgentEndpoint',
        'sharedSecret' => 'setSharedSecret',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acquireAgentEndpoint' => 'getAcquireAgentEndpoint',
        'acquisitionTimeout' => 'getAcquisitionTimeout',
        'agentCloudId' => 'getAgentCloudId',
        'getAccountParallelismEndpoint' => 'getGetAccountParallelismEndpoint',
        'getAgentDefinitionEndpoint' => 'getGetAgentDefinitionEndpoint',
        'getAgentRequestStatusEndpoint' => 'getGetAgentRequestStatusEndpoint',
        'id' => 'getId',
        'internal' => 'getInternal',
        'maxParallelism' => 'getMaxParallelism',
        'name' => 'getName',
        'releaseAgentEndpoint' => 'getReleaseAgentEndpoint',
        'sharedSecret' => 'getSharedSecret',
        'type' => 'getType'
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
        $this->container['acquireAgentEndpoint'] = isset($data['acquireAgentEndpoint']) ? $data['acquireAgentEndpoint'] : null;
        $this->container['acquisitionTimeout'] = isset($data['acquisitionTimeout']) ? $data['acquisitionTimeout'] : null;
        $this->container['agentCloudId'] = isset($data['agentCloudId']) ? $data['agentCloudId'] : null;
        $this->container['getAccountParallelismEndpoint'] = isset($data['getAccountParallelismEndpoint']) ? $data['getAccountParallelismEndpoint'] : null;
        $this->container['getAgentDefinitionEndpoint'] = isset($data['getAgentDefinitionEndpoint']) ? $data['getAgentDefinitionEndpoint'] : null;
        $this->container['getAgentRequestStatusEndpoint'] = isset($data['getAgentRequestStatusEndpoint']) ? $data['getAgentRequestStatusEndpoint'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['internal'] = isset($data['internal']) ? $data['internal'] : null;
        $this->container['maxParallelism'] = isset($data['maxParallelism']) ? $data['maxParallelism'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['releaseAgentEndpoint'] = isset($data['releaseAgentEndpoint']) ? $data['releaseAgentEndpoint'] : null;
        $this->container['sharedSecret'] = isset($data['sharedSecret']) ? $data['sharedSecret'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets acquireAgentEndpoint
     *
     * @return string
     */
    public function getAcquireAgentEndpoint()
    {
        return $this->container['acquireAgentEndpoint'];
    }

    /**
     * Sets acquireAgentEndpoint
     *
     * @param string $acquireAgentEndpoint Gets or sets a AcquireAgentEndpoint using which a request can be made to acquire new agent
     *
     * @return $this
     */
    public function setAcquireAgentEndpoint($acquireAgentEndpoint)
    {
        $this->container['acquireAgentEndpoint'] = $acquireAgentEndpoint;

        return $this;
    }

    /**
     * Gets acquisitionTimeout
     *
     * @return int
     */
    public function getAcquisitionTimeout()
    {
        return $this->container['acquisitionTimeout'];
    }

    /**
     * Sets acquisitionTimeout
     *
     * @param int $acquisitionTimeout acquisitionTimeout
     *
     * @return $this
     */
    public function setAcquisitionTimeout($acquisitionTimeout)
    {
        $this->container['acquisitionTimeout'] = $acquisitionTimeout;

        return $this;
    }

    /**
     * Gets agentCloudId
     *
     * @return int
     */
    public function getAgentCloudId()
    {
        return $this->container['agentCloudId'];
    }

    /**
     * Sets agentCloudId
     *
     * @param int $agentCloudId agentCloudId
     *
     * @return $this
     */
    public function setAgentCloudId($agentCloudId)
    {
        $this->container['agentCloudId'] = $agentCloudId;

        return $this;
    }

    /**
     * Gets getAccountParallelismEndpoint
     *
     * @return string
     */
    public function getGetAccountParallelismEndpoint()
    {
        return $this->container['getAccountParallelismEndpoint'];
    }

    /**
     * Sets getAccountParallelismEndpoint
     *
     * @param string $getAccountParallelismEndpoint getAccountParallelismEndpoint
     *
     * @return $this
     */
    public function setGetAccountParallelismEndpoint($getAccountParallelismEndpoint)
    {
        $this->container['getAccountParallelismEndpoint'] = $getAccountParallelismEndpoint;

        return $this;
    }

    /**
     * Gets getAgentDefinitionEndpoint
     *
     * @return string
     */
    public function getGetAgentDefinitionEndpoint()
    {
        return $this->container['getAgentDefinitionEndpoint'];
    }

    /**
     * Sets getAgentDefinitionEndpoint
     *
     * @param string $getAgentDefinitionEndpoint getAgentDefinitionEndpoint
     *
     * @return $this
     */
    public function setGetAgentDefinitionEndpoint($getAgentDefinitionEndpoint)
    {
        $this->container['getAgentDefinitionEndpoint'] = $getAgentDefinitionEndpoint;

        return $this;
    }

    /**
     * Gets getAgentRequestStatusEndpoint
     *
     * @return string
     */
    public function getGetAgentRequestStatusEndpoint()
    {
        return $this->container['getAgentRequestStatusEndpoint'];
    }

    /**
     * Sets getAgentRequestStatusEndpoint
     *
     * @param string $getAgentRequestStatusEndpoint getAgentRequestStatusEndpoint
     *
     * @return $this
     */
    public function setGetAgentRequestStatusEndpoint($getAgentRequestStatusEndpoint)
    {
        $this->container['getAgentRequestStatusEndpoint'] = $getAgentRequestStatusEndpoint;

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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets internal
     *
     * @return bool
     */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
     * Sets internal
     *
     * @param bool $internal Signifies that this Agent Cloud is internal and should not be user-manageable
     *
     * @return $this
     */
    public function setInternal($internal)
    {
        $this->container['internal'] = $internal;

        return $this;
    }

    /**
     * Gets maxParallelism
     *
     * @return int
     */
    public function getMaxParallelism()
    {
        return $this->container['maxParallelism'];
    }

    /**
     * Sets maxParallelism
     *
     * @param int $maxParallelism maxParallelism
     *
     * @return $this
     */
    public function setMaxParallelism($maxParallelism)
    {
        $this->container['maxParallelism'] = $maxParallelism;

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
     * Gets releaseAgentEndpoint
     *
     * @return string
     */
    public function getReleaseAgentEndpoint()
    {
        return $this->container['releaseAgentEndpoint'];
    }

    /**
     * Sets releaseAgentEndpoint
     *
     * @param string $releaseAgentEndpoint releaseAgentEndpoint
     *
     * @return $this
     */
    public function setReleaseAgentEndpoint($releaseAgentEndpoint)
    {
        $this->container['releaseAgentEndpoint'] = $releaseAgentEndpoint;

        return $this;
    }

    /**
     * Gets sharedSecret
     *
     * @return string
     */
    public function getSharedSecret()
    {
        return $this->container['sharedSecret'];
    }

    /**
     * Sets sharedSecret
     *
     * @param string $sharedSecret sharedSecret
     *
     * @return $this
     */
    public function setSharedSecret($sharedSecret)
    {
        $this->container['sharedSecret'] = $sharedSecret;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Gets or sets the type of the endpoint.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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

