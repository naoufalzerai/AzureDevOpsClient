<?php
/**
 * TaskAgentJobRequest
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
 * TaskAgentJobRequest Class Doc Comment
 *
 * @category Class
 * @description A job request for an agent.
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskAgentJobRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskAgentJobRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agentDelays' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentDelaySource[]',
        'agentSpecification' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\JObject',
        'assignTime' => '\DateTime',
        'data' => 'map[string,string]',
        'definition' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner',
        'demands' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\Demand[]',
        'expectedDuration' => 'string',
        'finishTime' => '\DateTime',
        'hostId' => 'string',
        'jobId' => 'string',
        'jobName' => 'string',
        'lockedUntil' => '\DateTime',
        'matchedAgents' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentReference[]',
        'matchesAllAgentsInPool' => 'bool',
        'orchestrationId' => 'string',
        'owner' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner',
        'planGroup' => 'string',
        'planId' => 'string',
        'planType' => 'string',
        'poolId' => 'int',
        'queueId' => 'int',
        'queueTime' => '\DateTime',
        'receiveTime' => '\DateTime',
        'requestId' => 'int',
        'reservedAgent' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentReference',
        'result' => 'string',
        'scopeId' => 'string',
        'serviceOwner' => 'string',
        'statusMessage' => 'string',
        'userDelayed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agentDelays' => null,
        'agentSpecification' => null,
        'assignTime' => 'date-time',
        'data' => null,
        'definition' => null,
        'demands' => null,
        'expectedDuration' => 'TimeSpan',
        'finishTime' => 'date-time',
        'hostId' => 'uuid',
        'jobId' => 'uuid',
        'jobName' => null,
        'lockedUntil' => 'date-time',
        'matchedAgents' => null,
        'matchesAllAgentsInPool' => null,
        'orchestrationId' => null,
        'owner' => null,
        'planGroup' => null,
        'planId' => 'uuid',
        'planType' => null,
        'poolId' => 'int32',
        'queueId' => 'int32',
        'queueTime' => 'date-time',
        'receiveTime' => 'date-time',
        'requestId' => 'int64',
        'reservedAgent' => null,
        'result' => null,
        'scopeId' => 'uuid',
        'serviceOwner' => 'uuid',
        'statusMessage' => null,
        'userDelayed' => null
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
        'agentDelays' => 'agentDelays',
        'agentSpecification' => 'agentSpecification',
        'assignTime' => 'assignTime',
        'data' => 'data',
        'definition' => 'definition',
        'demands' => 'demands',
        'expectedDuration' => 'expectedDuration',
        'finishTime' => 'finishTime',
        'hostId' => 'hostId',
        'jobId' => 'jobId',
        'jobName' => 'jobName',
        'lockedUntil' => 'lockedUntil',
        'matchedAgents' => 'matchedAgents',
        'matchesAllAgentsInPool' => 'matchesAllAgentsInPool',
        'orchestrationId' => 'orchestrationId',
        'owner' => 'owner',
        'planGroup' => 'planGroup',
        'planId' => 'planId',
        'planType' => 'planType',
        'poolId' => 'poolId',
        'queueId' => 'queueId',
        'queueTime' => 'queueTime',
        'receiveTime' => 'receiveTime',
        'requestId' => 'requestId',
        'reservedAgent' => 'reservedAgent',
        'result' => 'result',
        'scopeId' => 'scopeId',
        'serviceOwner' => 'serviceOwner',
        'statusMessage' => 'statusMessage',
        'userDelayed' => 'userDelayed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agentDelays' => 'setAgentDelays',
        'agentSpecification' => 'setAgentSpecification',
        'assignTime' => 'setAssignTime',
        'data' => 'setData',
        'definition' => 'setDefinition',
        'demands' => 'setDemands',
        'expectedDuration' => 'setExpectedDuration',
        'finishTime' => 'setFinishTime',
        'hostId' => 'setHostId',
        'jobId' => 'setJobId',
        'jobName' => 'setJobName',
        'lockedUntil' => 'setLockedUntil',
        'matchedAgents' => 'setMatchedAgents',
        'matchesAllAgentsInPool' => 'setMatchesAllAgentsInPool',
        'orchestrationId' => 'setOrchestrationId',
        'owner' => 'setOwner',
        'planGroup' => 'setPlanGroup',
        'planId' => 'setPlanId',
        'planType' => 'setPlanType',
        'poolId' => 'setPoolId',
        'queueId' => 'setQueueId',
        'queueTime' => 'setQueueTime',
        'receiveTime' => 'setReceiveTime',
        'requestId' => 'setRequestId',
        'reservedAgent' => 'setReservedAgent',
        'result' => 'setResult',
        'scopeId' => 'setScopeId',
        'serviceOwner' => 'setServiceOwner',
        'statusMessage' => 'setStatusMessage',
        'userDelayed' => 'setUserDelayed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agentDelays' => 'getAgentDelays',
        'agentSpecification' => 'getAgentSpecification',
        'assignTime' => 'getAssignTime',
        'data' => 'getData',
        'definition' => 'getDefinition',
        'demands' => 'getDemands',
        'expectedDuration' => 'getExpectedDuration',
        'finishTime' => 'getFinishTime',
        'hostId' => 'getHostId',
        'jobId' => 'getJobId',
        'jobName' => 'getJobName',
        'lockedUntil' => 'getLockedUntil',
        'matchedAgents' => 'getMatchedAgents',
        'matchesAllAgentsInPool' => 'getMatchesAllAgentsInPool',
        'orchestrationId' => 'getOrchestrationId',
        'owner' => 'getOwner',
        'planGroup' => 'getPlanGroup',
        'planId' => 'getPlanId',
        'planType' => 'getPlanType',
        'poolId' => 'getPoolId',
        'queueId' => 'getQueueId',
        'queueTime' => 'getQueueTime',
        'receiveTime' => 'getReceiveTime',
        'requestId' => 'getRequestId',
        'reservedAgent' => 'getReservedAgent',
        'result' => 'getResult',
        'scopeId' => 'getScopeId',
        'serviceOwner' => 'getServiceOwner',
        'statusMessage' => 'getStatusMessage',
        'userDelayed' => 'getUserDelayed'
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

    const RESULT_SUCCEEDED = 'succeeded';
    const RESULT_SUCCEEDED_WITH_ISSUES = 'succeededWithIssues';
    const RESULT_FAILED = 'failed';
    const RESULT_CANCELED = 'canceled';
    const RESULT_SKIPPED = 'skipped';
    const RESULT_ABANDONED = 'abandoned';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_SUCCEEDED,
            self::RESULT_SUCCEEDED_WITH_ISSUES,
            self::RESULT_FAILED,
            self::RESULT_CANCELED,
            self::RESULT_SKIPPED,
            self::RESULT_ABANDONED,
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
        $this->container['agentDelays'] = isset($data['agentDelays']) ? $data['agentDelays'] : null;
        $this->container['agentSpecification'] = isset($data['agentSpecification']) ? $data['agentSpecification'] : null;
        $this->container['assignTime'] = isset($data['assignTime']) ? $data['assignTime'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['demands'] = isset($data['demands']) ? $data['demands'] : null;
        $this->container['expectedDuration'] = isset($data['expectedDuration']) ? $data['expectedDuration'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['lockedUntil'] = isset($data['lockedUntil']) ? $data['lockedUntil'] : null;
        $this->container['matchedAgents'] = isset($data['matchedAgents']) ? $data['matchedAgents'] : null;
        $this->container['matchesAllAgentsInPool'] = isset($data['matchesAllAgentsInPool']) ? $data['matchesAllAgentsInPool'] : null;
        $this->container['orchestrationId'] = isset($data['orchestrationId']) ? $data['orchestrationId'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['planGroup'] = isset($data['planGroup']) ? $data['planGroup'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['planType'] = isset($data['planType']) ? $data['planType'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['queueId'] = isset($data['queueId']) ? $data['queueId'] : null;
        $this->container['queueTime'] = isset($data['queueTime']) ? $data['queueTime'] : null;
        $this->container['receiveTime'] = isset($data['receiveTime']) ? $data['receiveTime'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['reservedAgent'] = isset($data['reservedAgent']) ? $data['reservedAgent'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['scopeId'] = isset($data['scopeId']) ? $data['scopeId'] : null;
        $this->container['serviceOwner'] = isset($data['serviceOwner']) ? $data['serviceOwner'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
        $this->container['userDelayed'] = isset($data['userDelayed']) ? $data['userDelayed'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getResultAllowableValues();
        if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'result', must be one of '%s'",
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
     * Gets agentDelays
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentDelaySource[]
     */
    public function getAgentDelays()
    {
        return $this->container['agentDelays'];
    }

    /**
     * Sets agentDelays
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentDelaySource[] $agentDelays agentDelays
     *
     * @return $this
     */
    public function setAgentDelays($agentDelays)
    {
        $this->container['agentDelays'] = $agentDelays;

        return $this;
    }

    /**
     * Gets agentSpecification
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\JObject
     */
    public function getAgentSpecification()
    {
        return $this->container['agentSpecification'];
    }

    /**
     * Sets agentSpecification
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\JObject $agentSpecification agentSpecification
     *
     * @return $this
     */
    public function setAgentSpecification($agentSpecification)
    {
        $this->container['agentSpecification'] = $agentSpecification;

        return $this;
    }

    /**
     * Gets assignTime
     *
     * @return \DateTime
     */
    public function getAssignTime()
    {
        return $this->container['assignTime'];
    }

    /**
     * Sets assignTime
     *
     * @param \DateTime $assignTime The date/time this request was assigned.
     *
     * @return $this
     */
    public function setAssignTime($assignTime)
    {
        $this->container['assignTime'] = $assignTime;

        return $this;
    }

    /**
     * Gets data
     *
     * @return map[string,string]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param map[string,string] $data Additional data about the request.
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets definition
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner
     */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
     * Sets definition
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner $definition The pipeline definition associated with this request
     *
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;

        return $this;
    }

    /**
     * Gets demands
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\Demand[]
     */
    public function getDemands()
    {
        return $this->container['demands'];
    }

    /**
     * Sets demands
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\Demand[] $demands A list of demands required to fulfill this request.
     *
     * @return $this
     */
    public function setDemands($demands)
    {
        $this->container['demands'] = $demands;

        return $this;
    }

    /**
     * Gets expectedDuration
     *
     * @return string
     */
    public function getExpectedDuration()
    {
        return $this->container['expectedDuration'];
    }

    /**
     * Sets expectedDuration
     *
     * @param string $expectedDuration expectedDuration
     *
     * @return $this
     */
    public function setExpectedDuration($expectedDuration)
    {
        $this->container['expectedDuration'] = $expectedDuration;

        return $this;
    }

    /**
     * Gets finishTime
     *
     * @return \DateTime
     */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
     * Sets finishTime
     *
     * @param \DateTime $finishTime The date/time this request was finished.
     *
     * @return $this
     */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;

        return $this;
    }

    /**
     * Gets hostId
     *
     * @return string
     */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
     * Sets hostId
     *
     * @param string $hostId The host which triggered this request.
     *
     * @return $this
     */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param string $jobId ID of the job resulting from this request.
     *
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets jobName
     *
     * @return string
     */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
     * Sets jobName
     *
     * @param string $jobName Name of the job resulting from this request.
     *
     * @return $this
     */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;

        return $this;
    }

    /**
     * Gets lockedUntil
     *
     * @return \DateTime
     */
    public function getLockedUntil()
    {
        return $this->container['lockedUntil'];
    }

    /**
     * Sets lockedUntil
     *
     * @param \DateTime $lockedUntil The deadline for the agent to renew the lock.
     *
     * @return $this
     */
    public function setLockedUntil($lockedUntil)
    {
        $this->container['lockedUntil'] = $lockedUntil;

        return $this;
    }

    /**
     * Gets matchedAgents
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentReference[]
     */
    public function getMatchedAgents()
    {
        return $this->container['matchedAgents'];
    }

    /**
     * Sets matchedAgents
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentReference[] $matchedAgents matchedAgents
     *
     * @return $this
     */
    public function setMatchedAgents($matchedAgents)
    {
        $this->container['matchedAgents'] = $matchedAgents;

        return $this;
    }

    /**
     * Gets matchesAllAgentsInPool
     *
     * @return bool
     */
    public function getMatchesAllAgentsInPool()
    {
        return $this->container['matchesAllAgentsInPool'];
    }

    /**
     * Sets matchesAllAgentsInPool
     *
     * @param bool $matchesAllAgentsInPool matchesAllAgentsInPool
     *
     * @return $this
     */
    public function setMatchesAllAgentsInPool($matchesAllAgentsInPool)
    {
        $this->container['matchesAllAgentsInPool'] = $matchesAllAgentsInPool;

        return $this;
    }

    /**
     * Gets orchestrationId
     *
     * @return string
     */
    public function getOrchestrationId()
    {
        return $this->container['orchestrationId'];
    }

    /**
     * Sets orchestrationId
     *
     * @param string $orchestrationId orchestrationId
     *
     * @return $this
     */
    public function setOrchestrationId($orchestrationId)
    {
        $this->container['orchestrationId'] = $orchestrationId;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner $owner The pipeline associated with this request
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets planGroup
     *
     * @return string
     */
    public function getPlanGroup()
    {
        return $this->container['planGroup'];
    }

    /**
     * Sets planGroup
     *
     * @param string $planGroup planGroup
     *
     * @return $this
     */
    public function setPlanGroup($planGroup)
    {
        $this->container['planGroup'] = $planGroup;

        return $this;
    }

    /**
     * Gets planId
     *
     * @return string
     */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
     * Sets planId
     *
     * @param string $planId Internal ID for the orchestration plan connected with this request.
     *
     * @return $this
     */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;

        return $this;
    }

    /**
     * Gets planType
     *
     * @return string
     */
    public function getPlanType()
    {
        return $this->container['planType'];
    }

    /**
     * Sets planType
     *
     * @param string $planType Internal detail representing the type of orchestration plan.
     *
     * @return $this
     */
    public function setPlanType($planType)
    {
        $this->container['planType'] = $planType;

        return $this;
    }

    /**
     * Gets poolId
     *
     * @return int
     */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
     * Sets poolId
     *
     * @param int $poolId The ID of the pool this request targets
     *
     * @return $this
     */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;

        return $this;
    }

    /**
     * Gets queueId
     *
     * @return int
     */
    public function getQueueId()
    {
        return $this->container['queueId'];
    }

    /**
     * Sets queueId
     *
     * @param int $queueId The ID of the queue this request targets
     *
     * @return $this
     */
    public function setQueueId($queueId)
    {
        $this->container['queueId'] = $queueId;

        return $this;
    }

    /**
     * Gets queueTime
     *
     * @return \DateTime
     */
    public function getQueueTime()
    {
        return $this->container['queueTime'];
    }

    /**
     * Sets queueTime
     *
     * @param \DateTime $queueTime The date/time this request was queued.
     *
     * @return $this
     */
    public function setQueueTime($queueTime)
    {
        $this->container['queueTime'] = $queueTime;

        return $this;
    }

    /**
     * Gets receiveTime
     *
     * @return \DateTime
     */
    public function getReceiveTime()
    {
        return $this->container['receiveTime'];
    }

    /**
     * Sets receiveTime
     *
     * @param \DateTime $receiveTime The date/time this request was receieved by an agent.
     *
     * @return $this
     */
    public function setReceiveTime($receiveTime)
    {
        $this->container['receiveTime'] = $receiveTime;

        return $this;
    }

    /**
     * Gets requestId
     *
     * @return int
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     *
     * @param int $requestId ID of the request.
     *
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;

        return $this;
    }

    /**
     * Gets reservedAgent
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentReference
     */
    public function getReservedAgent()
    {
        return $this->container['reservedAgent'];
    }

    /**
     * Sets reservedAgent
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentReference $reservedAgent The agent allocated for this request.
     *
     * @return $this
     */
    public function setReservedAgent($reservedAgent)
    {
        $this->container['reservedAgent'] = $reservedAgent;

        return $this;
    }

    /**
     * Gets result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string $result The result of this request.
     *
     * @return $this
     */
    public function setResult($result)
    {
        $allowedValues = $this->getResultAllowableValues();
        if (!is_null($result) && !in_array($result, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'result', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets scopeId
     *
     * @return string
     */
    public function getScopeId()
    {
        return $this->container['scopeId'];
    }

    /**
     * Sets scopeId
     *
     * @param string $scopeId Scope of the pipeline; matches the project ID.
     *
     * @return $this
     */
    public function setScopeId($scopeId)
    {
        $this->container['scopeId'] = $scopeId;

        return $this;
    }

    /**
     * Gets serviceOwner
     *
     * @return string
     */
    public function getServiceOwner()
    {
        return $this->container['serviceOwner'];
    }

    /**
     * Sets serviceOwner
     *
     * @param string $serviceOwner The service which owns this request.
     *
     * @return $this
     */
    public function setServiceOwner($serviceOwner)
    {
        $this->container['serviceOwner'] = $serviceOwner;

        return $this;
    }

    /**
     * Gets statusMessage
     *
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
     * Sets statusMessage
     *
     * @param string $statusMessage statusMessage
     *
     * @return $this
     */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;

        return $this;
    }

    /**
     * Gets userDelayed
     *
     * @return bool
     */
    public function getUserDelayed()
    {
        return $this->container['userDelayed'];
    }

    /**
     * Sets userDelayed
     *
     * @param bool $userDelayed userDelayed
     *
     * @return $this
     */
    public function setUserDelayed($userDelayed)
    {
        $this->container['userDelayed'] = $userDelayed;

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

