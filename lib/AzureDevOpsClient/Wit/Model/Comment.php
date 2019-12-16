<?php
/**
 * Comment
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Wit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WorkItemTracking
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

namespace FrankHouweling\AzureDevOpsClient\Wit\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Wit\ObjectSerializer;

/**
 * Comment Class Doc Comment
 *
 * @category Class
 * @description Comment on a Work Item.
 * @package  FrankHouweling\AzureDevOpsClient\Wit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Comment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Comment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\FrankHouweling\AzureDevOpsClient\Wit\Model\ReferenceLinks',
        'url' => 'string',
        'createdBy' => '\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef',
        'createdDate' => '\DateTime',
        'createdOnBehalfDate' => '\DateTime',
        'createdOnBehalfOf' => '\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef',
        'id' => 'int',
        'isDeleted' => 'bool',
        'mentions' => '\FrankHouweling\AzureDevOpsClient\Wit\Model\CommentMention[]',
        'modifiedBy' => '\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef',
        'modifiedDate' => '\DateTime',
        'reactions' => '\FrankHouweling\AzureDevOpsClient\Wit\Model\CommentReaction[]',
        'text' => 'string',
        'version' => 'int',
        'workItemId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'url' => null,
        'createdBy' => null,
        'createdDate' => 'date-time',
        'createdOnBehalfDate' => 'date-time',
        'createdOnBehalfOf' => null,
        'id' => 'int32',
        'isDeleted' => null,
        'mentions' => null,
        'modifiedBy' => null,
        'modifiedDate' => 'date-time',
        'reactions' => null,
        'text' => null,
        'version' => 'int32',
        'workItemId' => 'int32'
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
        'url' => 'url',
        'createdBy' => 'createdBy',
        'createdDate' => 'createdDate',
        'createdOnBehalfDate' => 'createdOnBehalfDate',
        'createdOnBehalfOf' => 'createdOnBehalfOf',
        'id' => 'id',
        'isDeleted' => 'isDeleted',
        'mentions' => 'mentions',
        'modifiedBy' => 'modifiedBy',
        'modifiedDate' => 'modifiedDate',
        'reactions' => 'reactions',
        'text' => 'text',
        'version' => 'version',
        'workItemId' => 'workItemId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'url' => 'setUrl',
        'createdBy' => 'setCreatedBy',
        'createdDate' => 'setCreatedDate',
        'createdOnBehalfDate' => 'setCreatedOnBehalfDate',
        'createdOnBehalfOf' => 'setCreatedOnBehalfOf',
        'id' => 'setId',
        'isDeleted' => 'setIsDeleted',
        'mentions' => 'setMentions',
        'modifiedBy' => 'setModifiedBy',
        'modifiedDate' => 'setModifiedDate',
        'reactions' => 'setReactions',
        'text' => 'setText',
        'version' => 'setVersion',
        'workItemId' => 'setWorkItemId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'url' => 'getUrl',
        'createdBy' => 'getCreatedBy',
        'createdDate' => 'getCreatedDate',
        'createdOnBehalfDate' => 'getCreatedOnBehalfDate',
        'createdOnBehalfOf' => 'getCreatedOnBehalfOf',
        'id' => 'getId',
        'isDeleted' => 'getIsDeleted',
        'mentions' => 'getMentions',
        'modifiedBy' => 'getModifiedBy',
        'modifiedDate' => 'getModifiedDate',
        'reactions' => 'getReactions',
        'text' => 'getText',
        'version' => 'getVersion',
        'workItemId' => 'getWorkItemId'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['createdOnBehalfDate'] = isset($data['createdOnBehalfDate']) ? $data['createdOnBehalfDate'] : null;
        $this->container['createdOnBehalfOf'] = isset($data['createdOnBehalfOf']) ? $data['createdOnBehalfOf'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['mentions'] = isset($data['mentions']) ? $data['mentions'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['reactions'] = isset($data['reactions']) ? $data['reactions'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['workItemId'] = isset($data['workItemId']) ? $data['workItemId'] : null;
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
     * @return \FrankHouweling\AzureDevOpsClient\Wit\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \FrankHouweling\AzureDevOpsClient\Wit\Model\ReferenceLinks $links Link references to related REST resources.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef $createdBy IdentityRef of the creator of the comment.
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

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
     * @param \DateTime $createdDate The creation date of the comment.
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

        return $this;
    }

    /**
     * Gets createdOnBehalfDate
     *
     * @return \DateTime
     */
    public function getCreatedOnBehalfDate()
    {
        return $this->container['createdOnBehalfDate'];
    }

    /**
     * Sets createdOnBehalfDate
     *
     * @param \DateTime $createdOnBehalfDate Effective Date/time value for adding the comment. Can be optionally different from CreatedDate.
     *
     * @return $this
     */
    public function setCreatedOnBehalfDate($createdOnBehalfDate)
    {
        $this->container['createdOnBehalfDate'] = $createdOnBehalfDate;

        return $this;
    }

    /**
     * Gets createdOnBehalfOf
     *
     * @return \FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef
     */
    public function getCreatedOnBehalfOf()
    {
        return $this->container['createdOnBehalfOf'];
    }

    /**
     * Sets createdOnBehalfOf
     *
     * @param \FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef $createdOnBehalfOf Identity on whose behalf this comment has been added. Can be optionally different from CreatedBy.
     *
     * @return $this
     */
    public function setCreatedOnBehalfOf($createdOnBehalfOf)
    {
        $this->container['createdOnBehalfOf'] = $createdOnBehalfOf;

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
     * @param int $id The id assigned to the comment.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
     * Sets isDeleted
     *
     * @param bool $isDeleted Indicates if the comment has been deleted.
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;

        return $this;
    }

    /**
     * Gets mentions
     *
     * @return \FrankHouweling\AzureDevOpsClient\Wit\Model\CommentMention[]
     */
    public function getMentions()
    {
        return $this->container['mentions'];
    }

    /**
     * Sets mentions
     *
     * @param \FrankHouweling\AzureDevOpsClient\Wit\Model\CommentMention[] $mentions The mentions of the comment.
     *
     * @return $this
     */
    public function setMentions($mentions)
    {
        $this->container['mentions'] = $mentions;

        return $this;
    }

    /**
     * Gets modifiedBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef
     */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
     * Sets modifiedBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef $modifiedBy IdentityRef of the user who last modified the comment.
     *
     * @return $this
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;

        return $this;
    }

    /**
     * Gets modifiedDate
     *
     * @return \DateTime
     */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
     * Sets modifiedDate
     *
     * @param \DateTime $modifiedDate The last modification date of the comment.
     *
     * @return $this
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;

        return $this;
    }

    /**
     * Gets reactions
     *
     * @return \FrankHouweling\AzureDevOpsClient\Wit\Model\CommentReaction[]
     */
    public function getReactions()
    {
        return $this->container['reactions'];
    }

    /**
     * Sets reactions
     *
     * @param \FrankHouweling\AzureDevOpsClient\Wit\Model\CommentReaction[] $reactions The reactions of the comment.
     *
     * @return $this
     */
    public function setReactions($reactions)
    {
        $this->container['reactions'] = $reactions;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text The text of the comment.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The current version of the comment.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets workItemId
     *
     * @return int
     */
    public function getWorkItemId()
    {
        return $this->container['workItemId'];
    }

    /**
     * Sets workItemId
     *
     * @param int $workItemId The id of the work item this comment belongs to.
     *
     * @return $this
     */
    public function setWorkItemId($workItemId)
    {
        $this->container['workItemId'] = $workItemId;

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


