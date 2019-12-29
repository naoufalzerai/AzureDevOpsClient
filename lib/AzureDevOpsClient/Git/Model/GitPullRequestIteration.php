<?php
/**
 * GitPullRequestIteration
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
 * GitPullRequestIteration Class Doc Comment
 *
 * @category Class
 * @description Provides properties that describe a Git pull request iteration. Iterations are created as a result of creating and pushing updates to a pull request.
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitPullRequestIteration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitPullRequestIteration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks',
        'author' => '\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef',
        'changeList' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestChange[]',
        'commits' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef[]',
        'commonRefCommit' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef',
        'createdDate' => '\DateTime',
        'description' => 'string',
        'hasMoreCommits' => 'bool',
        'id' => 'int',
        'newTargetRefName' => 'string',
        'oldTargetRefName' => 'string',
        'push' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GitPushRef',
        'reason' => 'string',
        'sourceRefCommit' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef',
        'targetRefCommit' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef',
        'updatedDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'author' => null,
        'changeList' => null,
        'commits' => null,
        'commonRefCommit' => null,
        'createdDate' => 'date-time',
        'description' => null,
        'hasMoreCommits' => null,
        'id' => 'int32',
        'newTargetRefName' => null,
        'oldTargetRefName' => null,
        'push' => null,
        'reason' => null,
        'sourceRefCommit' => null,
        'targetRefCommit' => null,
        'updatedDate' => 'date-time'
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
        'author' => 'author',
        'changeList' => 'changeList',
        'commits' => 'commits',
        'commonRefCommit' => 'commonRefCommit',
        'createdDate' => 'createdDate',
        'description' => 'description',
        'hasMoreCommits' => 'hasMoreCommits',
        'id' => 'id',
        'newTargetRefName' => 'newTargetRefName',
        'oldTargetRefName' => 'oldTargetRefName',
        'push' => 'push',
        'reason' => 'reason',
        'sourceRefCommit' => 'sourceRefCommit',
        'targetRefCommit' => 'targetRefCommit',
        'updatedDate' => 'updatedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'author' => 'setAuthor',
        'changeList' => 'setChangeList',
        'commits' => 'setCommits',
        'commonRefCommit' => 'setCommonRefCommit',
        'createdDate' => 'setCreatedDate',
        'description' => 'setDescription',
        'hasMoreCommits' => 'setHasMoreCommits',
        'id' => 'setId',
        'newTargetRefName' => 'setNewTargetRefName',
        'oldTargetRefName' => 'setOldTargetRefName',
        'push' => 'setPush',
        'reason' => 'setReason',
        'sourceRefCommit' => 'setSourceRefCommit',
        'targetRefCommit' => 'setTargetRefCommit',
        'updatedDate' => 'setUpdatedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'author' => 'getAuthor',
        'changeList' => 'getChangeList',
        'commits' => 'getCommits',
        'commonRefCommit' => 'getCommonRefCommit',
        'createdDate' => 'getCreatedDate',
        'description' => 'getDescription',
        'hasMoreCommits' => 'getHasMoreCommits',
        'id' => 'getId',
        'newTargetRefName' => 'getNewTargetRefName',
        'oldTargetRefName' => 'getOldTargetRefName',
        'push' => 'getPush',
        'reason' => 'getReason',
        'sourceRefCommit' => 'getSourceRefCommit',
        'targetRefCommit' => 'getTargetRefCommit',
        'updatedDate' => 'getUpdatedDate'
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

    const REASON_PUSH = 'push';
    const REASON_FORCE_PUSH = 'forcePush';
    const REASON_CREATE = 'create';
    const REASON_REBASE = 'rebase';
    const REASON_UNKNOWN = 'unknown';
    const REASON_RETARGET = 'retarget';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_PUSH,
            self::REASON_FORCE_PUSH,
            self::REASON_CREATE,
            self::REASON_REBASE,
            self::REASON_UNKNOWN,
            self::REASON_RETARGET,
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['changeList'] = isset($data['changeList']) ? $data['changeList'] : null;
        $this->container['commits'] = isset($data['commits']) ? $data['commits'] : null;
        $this->container['commonRefCommit'] = isset($data['commonRefCommit']) ? $data['commonRefCommit'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['hasMoreCommits'] = isset($data['hasMoreCommits']) ? $data['hasMoreCommits'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['newTargetRefName'] = isset($data['newTargetRefName']) ? $data['newTargetRefName'] : null;
        $this->container['oldTargetRefName'] = isset($data['oldTargetRefName']) ? $data['oldTargetRefName'] : null;
        $this->container['push'] = isset($data['push']) ? $data['push'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['sourceRefCommit'] = isset($data['sourceRefCommit']) ? $data['sourceRefCommit'] : null;
        $this->container['targetRefCommit'] = isset($data['targetRefCommit']) ? $data['targetRefCommit'] : null;
        $this->container['updatedDate'] = isset($data['updatedDate']) ? $data['updatedDate'] : null;
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
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks $links A collection of related REST reference links.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets author
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef $author Author of the pull request iteration.
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets changeList
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestChange[]
     */
    public function getChangeList()
    {
        return $this->container['changeList'];
    }

    /**
     * Sets changeList
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestChange[] $changeList Changes included with the pull request iteration.
     *
     * @return $this
     */
    public function setChangeList($changeList)
    {
        $this->container['changeList'] = $changeList;

        return $this;
    }

    /**
     * Gets commits
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef[]
     */
    public function getCommits()
    {
        return $this->container['commits'];
    }

    /**
     * Sets commits
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef[] $commits The commits included with the pull request iteration.
     *
     * @return $this
     */
    public function setCommits($commits)
    {
        $this->container['commits'] = $commits;

        return $this;
    }

    /**
     * Gets commonRefCommit
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef
     */
    public function getCommonRefCommit()
    {
        return $this->container['commonRefCommit'];
    }

    /**
     * Sets commonRefCommit
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef $commonRefCommit The first common Git commit of the source and target refs.
     *
     * @return $this
     */
    public function setCommonRefCommit($commonRefCommit)
    {
        $this->container['commonRefCommit'] = $commonRefCommit;

        return $this;
    }

    /**
     * Gets createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param \DateTime $createdDate The creation date of the pull request iteration.
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

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
     * @param string $description Description of the pull request iteration.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets hasMoreCommits
     *
     * @return bool
     */
    public function getHasMoreCommits()
    {
        return $this->container['hasMoreCommits'];
    }

    /**
     * Sets hasMoreCommits
     *
     * @param bool $hasMoreCommits Indicates if the Commits property contains a truncated list of commits in this pull request iteration.
     *
     * @return $this
     */
    public function setHasMoreCommits($hasMoreCommits)
    {
        $this->container['hasMoreCommits'] = $hasMoreCommits;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID of the pull request iteration. Iterations are created as a result of creating and pushing updates to a pull request.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets newTargetRefName
     *
     * @return string
     */
    public function getNewTargetRefName()
    {
        return $this->container['newTargetRefName'];
    }

    /**
     * Sets newTargetRefName
     *
     * @param string $newTargetRefName If the iteration reason is Retarget, this is the refName of the new target
     *
     * @return $this
     */
    public function setNewTargetRefName($newTargetRefName)
    {
        $this->container['newTargetRefName'] = $newTargetRefName;

        return $this;
    }

    /**
     * Gets oldTargetRefName
     *
     * @return string
     */
    public function getOldTargetRefName()
    {
        return $this->container['oldTargetRefName'];
    }

    /**
     * Sets oldTargetRefName
     *
     * @param string $oldTargetRefName If the iteration reason is Retarget, this is the original target refName
     *
     * @return $this
     */
    public function setOldTargetRefName($oldTargetRefName)
    {
        $this->container['oldTargetRefName'] = $oldTargetRefName;

        return $this;
    }

    /**
     * Gets push
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitPushRef
     */
    public function getPush()
    {
        return $this->container['push'];
    }

    /**
     * Sets push
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GitPushRef $push The Git push information associated with this pull request iteration.
     *
     * @return $this
     */
    public function setPush($push)
    {
        $this->container['push'] = $push;

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
     * @param string $reason The reason for which the pull request iteration was created.
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
     * Gets sourceRefCommit
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef
     */
    public function getSourceRefCommit()
    {
        return $this->container['sourceRefCommit'];
    }

    /**
     * Sets sourceRefCommit
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef $sourceRefCommit The source Git commit of this iteration.
     *
     * @return $this
     */
    public function setSourceRefCommit($sourceRefCommit)
    {
        $this->container['sourceRefCommit'] = $sourceRefCommit;

        return $this;
    }

    /**
     * Gets targetRefCommit
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef
     */
    public function getTargetRefCommit()
    {
        return $this->container['targetRefCommit'];
    }

    /**
     * Sets targetRefCommit
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef $targetRefCommit The target Git commit of this iteration.
     *
     * @return $this
     */
    public function setTargetRefCommit($targetRefCommit)
    {
        $this->container['targetRefCommit'] = $targetRefCommit;

        return $this;
    }

    /**
     * Gets updatedDate
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->container['updatedDate'];
    }

    /**
     * Sets updatedDate
     *
     * @param \DateTime $updatedDate The updated date of the pull request iteration.
     *
     * @return $this
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->container['updatedDate'] = $updatedDate;

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

