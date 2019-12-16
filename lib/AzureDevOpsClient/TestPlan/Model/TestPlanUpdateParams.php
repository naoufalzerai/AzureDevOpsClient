<?php
/**
 * TestPlanUpdateParams
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\TestPlan
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TestPlan
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

namespace FrankHouweling\AzureDevOpsClient\TestPlan\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\TestPlan\ObjectSerializer;

/**
 * TestPlanUpdateParams Class Doc Comment
 *
 * @category Class
 * @description The test plan update parameters.
 * @package  FrankHouweling\AzureDevOpsClient\TestPlan
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestPlanUpdateParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestPlanUpdateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'areaPath' => 'string',
        'buildDefinition' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\BuildDefinitionReference',
        'buildId' => 'int',
        'description' => 'string',
        'endDate' => '\DateTime',
        'iteration' => 'string',
        'name' => 'string',
        'owner' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef',
        'releaseEnvironmentDefinition' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\ReleaseEnvironmentDefinitionReference',
        'startDate' => '\DateTime',
        'state' => 'string',
        'testOutcomeSettings' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestOutcomeSettings',
        'revision' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'areaPath' => null,
        'buildDefinition' => null,
        'buildId' => 'int32',
        'description' => null,
        'endDate' => 'date-time',
        'iteration' => null,
        'name' => null,
        'owner' => null,
        'releaseEnvironmentDefinition' => null,
        'startDate' => 'date-time',
        'state' => null,
        'testOutcomeSettings' => null,
        'revision' => 'int32'
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
        'areaPath' => 'areaPath',
        'buildDefinition' => 'buildDefinition',
        'buildId' => 'buildId',
        'description' => 'description',
        'endDate' => 'endDate',
        'iteration' => 'iteration',
        'name' => 'name',
        'owner' => 'owner',
        'releaseEnvironmentDefinition' => 'releaseEnvironmentDefinition',
        'startDate' => 'startDate',
        'state' => 'state',
        'testOutcomeSettings' => 'testOutcomeSettings',
        'revision' => 'revision'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'areaPath' => 'setAreaPath',
        'buildDefinition' => 'setBuildDefinition',
        'buildId' => 'setBuildId',
        'description' => 'setDescription',
        'endDate' => 'setEndDate',
        'iteration' => 'setIteration',
        'name' => 'setName',
        'owner' => 'setOwner',
        'releaseEnvironmentDefinition' => 'setReleaseEnvironmentDefinition',
        'startDate' => 'setStartDate',
        'state' => 'setState',
        'testOutcomeSettings' => 'setTestOutcomeSettings',
        'revision' => 'setRevision'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'areaPath' => 'getAreaPath',
        'buildDefinition' => 'getBuildDefinition',
        'buildId' => 'getBuildId',
        'description' => 'getDescription',
        'endDate' => 'getEndDate',
        'iteration' => 'getIteration',
        'name' => 'getName',
        'owner' => 'getOwner',
        'releaseEnvironmentDefinition' => 'getReleaseEnvironmentDefinition',
        'startDate' => 'getStartDate',
        'state' => 'getState',
        'testOutcomeSettings' => 'getTestOutcomeSettings',
        'revision' => 'getRevision'
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
        $this->container['areaPath'] = isset($data['areaPath']) ? $data['areaPath'] : null;
        $this->container['buildDefinition'] = isset($data['buildDefinition']) ? $data['buildDefinition'] : null;
        $this->container['buildId'] = isset($data['buildId']) ? $data['buildId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['iteration'] = isset($data['iteration']) ? $data['iteration'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['releaseEnvironmentDefinition'] = isset($data['releaseEnvironmentDefinition']) ? $data['releaseEnvironmentDefinition'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['testOutcomeSettings'] = isset($data['testOutcomeSettings']) ? $data['testOutcomeSettings'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
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
     * Gets areaPath
     *
     * @return string
     */
    public function getAreaPath()
    {
        return $this->container['areaPath'];
    }

    /**
     * Sets areaPath
     *
     * @param string $areaPath Area of the test plan.
     *
     * @return $this
     */
    public function setAreaPath($areaPath)
    {
        $this->container['areaPath'] = $areaPath;

        return $this;
    }

    /**
     * Gets buildDefinition
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\BuildDefinitionReference
     */
    public function getBuildDefinition()
    {
        return $this->container['buildDefinition'];
    }

    /**
     * Sets buildDefinition
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\BuildDefinitionReference $buildDefinition The Build Definition that generates a build associated with this test plan.
     *
     * @return $this
     */
    public function setBuildDefinition($buildDefinition)
    {
        $this->container['buildDefinition'] = $buildDefinition;

        return $this;
    }

    /**
     * Gets buildId
     *
     * @return int
     */
    public function getBuildId()
    {
        return $this->container['buildId'];
    }

    /**
     * Sets buildId
     *
     * @param int $buildId Build to be tested.
     *
     * @return $this
     */
    public function setBuildId($buildId)
    {
        $this->container['buildId'] = $buildId;

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
     * @param string $description Description of the test plan.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime $endDate End date for the test plan.
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets iteration
     *
     * @return string
     */
    public function getIteration()
    {
        return $this->container['iteration'];
    }

    /**
     * Sets iteration
     *
     * @param string $iteration Iteration path of the test plan.
     *
     * @return $this
     */
    public function setIteration($iteration)
    {
        $this->container['iteration'] = $iteration;

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
     * @param string $name Name of the test plan.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef $owner Owner of the test plan.
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets releaseEnvironmentDefinition
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\ReleaseEnvironmentDefinitionReference
     */
    public function getReleaseEnvironmentDefinition()
    {
        return $this->container['releaseEnvironmentDefinition'];
    }

    /**
     * Sets releaseEnvironmentDefinition
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\ReleaseEnvironmentDefinitionReference $releaseEnvironmentDefinition Release Environment to be used to deploy the build and run automated tests from this test plan.
     *
     * @return $this
     */
    public function setReleaseEnvironmentDefinition($releaseEnvironmentDefinition)
    {
        $this->container['releaseEnvironmentDefinition'] = $releaseEnvironmentDefinition;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime $startDate Start date for the test plan.
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State of the test plan.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets testOutcomeSettings
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestOutcomeSettings
     */
    public function getTestOutcomeSettings()
    {
        return $this->container['testOutcomeSettings'];
    }

    /**
     * Sets testOutcomeSettings
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestOutcomeSettings $testOutcomeSettings Value to configure how same tests across test suites under a test plan need to behave
     *
     * @return $this
     */
    public function setTestOutcomeSettings($testOutcomeSettings)
    {
        $this->container['testOutcomeSettings'] = $testOutcomeSettings;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int $revision Revision of the test plan.
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

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


