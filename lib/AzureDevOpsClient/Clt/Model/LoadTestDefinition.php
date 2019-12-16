<?php
/**
 * LoadTestDefinition
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Clt
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CloudLoadTest
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

namespace FrankHouweling\AzureDevOpsClient\Clt\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Clt\ObjectSerializer;

/**
 * LoadTestDefinition Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Clt
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoadTestDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LoadTestDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agentCount' => 'int',
        'browserMixs' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\BrowserMix[]',
        'coreCount' => 'int',
        'coresPerAgent' => 'int',
        'loadGenerationGeoLocations' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\LoadGenerationGeoLocation[]',
        'loadPatternName' => 'string',
        'loadTestName' => 'string',
        'maxVusers' => 'int',
        'runDuration' => 'int',
        'samplingRate' => 'int',
        'thinkTime' => 'int',
        'urls' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agentCount' => 'int32',
        'browserMixs' => null,
        'coreCount' => 'int32',
        'coresPerAgent' => 'int32',
        'loadGenerationGeoLocations' => null,
        'loadPatternName' => null,
        'loadTestName' => null,
        'maxVusers' => 'int32',
        'runDuration' => 'int32',
        'samplingRate' => 'int32',
        'thinkTime' => 'int32',
        'urls' => null
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
        'agentCount' => 'agentCount',
        'browserMixs' => 'browserMixs',
        'coreCount' => 'coreCount',
        'coresPerAgent' => 'coresPerAgent',
        'loadGenerationGeoLocations' => 'loadGenerationGeoLocations',
        'loadPatternName' => 'loadPatternName',
        'loadTestName' => 'loadTestName',
        'maxVusers' => 'maxVusers',
        'runDuration' => 'runDuration',
        'samplingRate' => 'samplingRate',
        'thinkTime' => 'thinkTime',
        'urls' => 'urls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agentCount' => 'setAgentCount',
        'browserMixs' => 'setBrowserMixs',
        'coreCount' => 'setCoreCount',
        'coresPerAgent' => 'setCoresPerAgent',
        'loadGenerationGeoLocations' => 'setLoadGenerationGeoLocations',
        'loadPatternName' => 'setLoadPatternName',
        'loadTestName' => 'setLoadTestName',
        'maxVusers' => 'setMaxVusers',
        'runDuration' => 'setRunDuration',
        'samplingRate' => 'setSamplingRate',
        'thinkTime' => 'setThinkTime',
        'urls' => 'setUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agentCount' => 'getAgentCount',
        'browserMixs' => 'getBrowserMixs',
        'coreCount' => 'getCoreCount',
        'coresPerAgent' => 'getCoresPerAgent',
        'loadGenerationGeoLocations' => 'getLoadGenerationGeoLocations',
        'loadPatternName' => 'getLoadPatternName',
        'loadTestName' => 'getLoadTestName',
        'maxVusers' => 'getMaxVusers',
        'runDuration' => 'getRunDuration',
        'samplingRate' => 'getSamplingRate',
        'thinkTime' => 'getThinkTime',
        'urls' => 'getUrls'
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
        $this->container['agentCount'] = isset($data['agentCount']) ? $data['agentCount'] : null;
        $this->container['browserMixs'] = isset($data['browserMixs']) ? $data['browserMixs'] : null;
        $this->container['coreCount'] = isset($data['coreCount']) ? $data['coreCount'] : null;
        $this->container['coresPerAgent'] = isset($data['coresPerAgent']) ? $data['coresPerAgent'] : null;
        $this->container['loadGenerationGeoLocations'] = isset($data['loadGenerationGeoLocations']) ? $data['loadGenerationGeoLocations'] : null;
        $this->container['loadPatternName'] = isset($data['loadPatternName']) ? $data['loadPatternName'] : null;
        $this->container['loadTestName'] = isset($data['loadTestName']) ? $data['loadTestName'] : null;
        $this->container['maxVusers'] = isset($data['maxVusers']) ? $data['maxVusers'] : null;
        $this->container['runDuration'] = isset($data['runDuration']) ? $data['runDuration'] : null;
        $this->container['samplingRate'] = isset($data['samplingRate']) ? $data['samplingRate'] : null;
        $this->container['thinkTime'] = isset($data['thinkTime']) ? $data['thinkTime'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
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
     * Gets agentCount
     *
     * @return int
     */
    public function getAgentCount()
    {
        return $this->container['agentCount'];
    }

    /**
     * Sets agentCount
     *
     * @param int $agentCount agentCount
     *
     * @return $this
     */
    public function setAgentCount($agentCount)
    {
        $this->container['agentCount'] = $agentCount;

        return $this;
    }

    /**
     * Gets browserMixs
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\BrowserMix[]
     */
    public function getBrowserMixs()
    {
        return $this->container['browserMixs'];
    }

    /**
     * Sets browserMixs
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\BrowserMix[] $browserMixs browserMixs
     *
     * @return $this
     */
    public function setBrowserMixs($browserMixs)
    {
        $this->container['browserMixs'] = $browserMixs;

        return $this;
    }

    /**
     * Gets coreCount
     *
     * @return int
     */
    public function getCoreCount()
    {
        return $this->container['coreCount'];
    }

    /**
     * Sets coreCount
     *
     * @param int $coreCount coreCount
     *
     * @return $this
     */
    public function setCoreCount($coreCount)
    {
        $this->container['coreCount'] = $coreCount;

        return $this;
    }

    /**
     * Gets coresPerAgent
     *
     * @return int
     */
    public function getCoresPerAgent()
    {
        return $this->container['coresPerAgent'];
    }

    /**
     * Sets coresPerAgent
     *
     * @param int $coresPerAgent coresPerAgent
     *
     * @return $this
     */
    public function setCoresPerAgent($coresPerAgent)
    {
        $this->container['coresPerAgent'] = $coresPerAgent;

        return $this;
    }

    /**
     * Gets loadGenerationGeoLocations
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\LoadGenerationGeoLocation[]
     */
    public function getLoadGenerationGeoLocations()
    {
        return $this->container['loadGenerationGeoLocations'];
    }

    /**
     * Sets loadGenerationGeoLocations
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\LoadGenerationGeoLocation[] $loadGenerationGeoLocations loadGenerationGeoLocations
     *
     * @return $this
     */
    public function setLoadGenerationGeoLocations($loadGenerationGeoLocations)
    {
        $this->container['loadGenerationGeoLocations'] = $loadGenerationGeoLocations;

        return $this;
    }

    /**
     * Gets loadPatternName
     *
     * @return string
     */
    public function getLoadPatternName()
    {
        return $this->container['loadPatternName'];
    }

    /**
     * Sets loadPatternName
     *
     * @param string $loadPatternName loadPatternName
     *
     * @return $this
     */
    public function setLoadPatternName($loadPatternName)
    {
        $this->container['loadPatternName'] = $loadPatternName;

        return $this;
    }

    /**
     * Gets loadTestName
     *
     * @return string
     */
    public function getLoadTestName()
    {
        return $this->container['loadTestName'];
    }

    /**
     * Sets loadTestName
     *
     * @param string $loadTestName loadTestName
     *
     * @return $this
     */
    public function setLoadTestName($loadTestName)
    {
        $this->container['loadTestName'] = $loadTestName;

        return $this;
    }

    /**
     * Gets maxVusers
     *
     * @return int
     */
    public function getMaxVusers()
    {
        return $this->container['maxVusers'];
    }

    /**
     * Sets maxVusers
     *
     * @param int $maxVusers maxVusers
     *
     * @return $this
     */
    public function setMaxVusers($maxVusers)
    {
        $this->container['maxVusers'] = $maxVusers;

        return $this;
    }

    /**
     * Gets runDuration
     *
     * @return int
     */
    public function getRunDuration()
    {
        return $this->container['runDuration'];
    }

    /**
     * Sets runDuration
     *
     * @param int $runDuration runDuration
     *
     * @return $this
     */
    public function setRunDuration($runDuration)
    {
        $this->container['runDuration'] = $runDuration;

        return $this;
    }

    /**
     * Gets samplingRate
     *
     * @return int
     */
    public function getSamplingRate()
    {
        return $this->container['samplingRate'];
    }

    /**
     * Sets samplingRate
     *
     * @param int $samplingRate samplingRate
     *
     * @return $this
     */
    public function setSamplingRate($samplingRate)
    {
        $this->container['samplingRate'] = $samplingRate;

        return $this;
    }

    /**
     * Gets thinkTime
     *
     * @return int
     */
    public function getThinkTime()
    {
        return $this->container['thinkTime'];
    }

    /**
     * Sets thinkTime
     *
     * @param int $thinkTime thinkTime
     *
     * @return $this
     */
    public function setThinkTime($thinkTime)
    {
        $this->container['thinkTime'] = $thinkTime;

        return $this;
    }

    /**
     * Gets urls
     *
     * @return string[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param string[] $urls urls
     *
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

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


