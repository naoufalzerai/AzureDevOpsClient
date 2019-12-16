<?php
/**
 * TfvcShelveset
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
 * TfvcShelveset Class Doc Comment
 *
 * @category Class
 * @description Metadata for a shelveset.
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TfvcShelveset implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TfvcShelveset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks',
        'comment' => 'string',
        'commentTruncated' => 'bool',
        'createdDate' => '\DateTime',
        'id' => 'string',
        'name' => 'string',
        'owner' => '\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef',
        'url' => 'string',
        'changes' => '\FrankHouweling\AzureDevOpsClient\Git\Model\TfvcChange[]',
        'notes' => '\FrankHouweling\AzureDevOpsClient\Git\Model\CheckinNote[]',
        'policyOverride' => '\FrankHouweling\AzureDevOpsClient\Git\Model\TfvcPolicyOverrideInfo',
        'workItems' => '\FrankHouweling\AzureDevOpsClient\Git\Model\AssociatedWorkItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'comment' => null,
        'commentTruncated' => null,
        'createdDate' => 'date-time',
        'id' => null,
        'name' => null,
        'owner' => null,
        'url' => null,
        'changes' => null,
        'notes' => null,
        'policyOverride' => null,
        'workItems' => null
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
        'comment' => 'comment',
        'commentTruncated' => 'commentTruncated',
        'createdDate' => 'createdDate',
        'id' => 'id',
        'name' => 'name',
        'owner' => 'owner',
        'url' => 'url',
        'changes' => 'changes',
        'notes' => 'notes',
        'policyOverride' => 'policyOverride',
        'workItems' => 'workItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'comment' => 'setComment',
        'commentTruncated' => 'setCommentTruncated',
        'createdDate' => 'setCreatedDate',
        'id' => 'setId',
        'name' => 'setName',
        'owner' => 'setOwner',
        'url' => 'setUrl',
        'changes' => 'setChanges',
        'notes' => 'setNotes',
        'policyOverride' => 'setPolicyOverride',
        'workItems' => 'setWorkItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'comment' => 'getComment',
        'commentTruncated' => 'getCommentTruncated',
        'createdDate' => 'getCreatedDate',
        'id' => 'getId',
        'name' => 'getName',
        'owner' => 'getOwner',
        'url' => 'getUrl',
        'changes' => 'getChanges',
        'notes' => 'getNotes',
        'policyOverride' => 'getPolicyOverride',
        'workItems' => 'getWorkItems'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['commentTruncated'] = isset($data['commentTruncated']) ? $data['commentTruncated'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['changes'] = isset($data['changes']) ? $data['changes'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['policyOverride'] = isset($data['policyOverride']) ? $data['policyOverride'] : null;
        $this->container['workItems'] = isset($data['workItems']) ? $data['workItems'] : null;
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
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks $links List of reference links for the shelveset.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Shelveset comment.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets commentTruncated
     *
     * @return bool
     */
    public function getCommentTruncated()
    {
        return $this->container['commentTruncated'];
    }

    /**
     * Sets commentTruncated
     *
     * @param bool $commentTruncated Shelveset comment truncated as applicable.
     *
     * @return $this
     */
    public function setCommentTruncated($commentTruncated)
    {
        $this->container['commentTruncated'] = $commentTruncated;

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
     * @param \DateTime $createdDate Shelveset create date.
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

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
     * @param string $id Shelveset Id.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name Shelveset name.
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
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef $owner Shelveset Owner.
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Shelveset Url.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets changes
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\TfvcChange[]
     */
    public function getChanges()
    {
        return $this->container['changes'];
    }

    /**
     * Sets changes
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\TfvcChange[] $changes List of changes.
     *
     * @return $this
     */
    public function setChanges($changes)
    {
        $this->container['changes'] = $changes;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\CheckinNote[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\CheckinNote[] $notes List of checkin notes.
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets policyOverride
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\TfvcPolicyOverrideInfo
     */
    public function getPolicyOverride()
    {
        return $this->container['policyOverride'];
    }

    /**
     * Sets policyOverride
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\TfvcPolicyOverrideInfo $policyOverride Policy override information if applicable.
     *
     * @return $this
     */
    public function setPolicyOverride($policyOverride)
    {
        $this->container['policyOverride'] = $policyOverride;

        return $this;
    }

    /**
     * Gets workItems
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\AssociatedWorkItem[]
     */
    public function getWorkItems()
    {
        return $this->container['workItems'];
    }

    /**
     * Sets workItems
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\AssociatedWorkItem[] $workItems List of associated workitems.
     *
     * @return $this
     */
    public function setWorkItems($workItems)
    {
        $this->container['workItems'] = $workItems;

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


