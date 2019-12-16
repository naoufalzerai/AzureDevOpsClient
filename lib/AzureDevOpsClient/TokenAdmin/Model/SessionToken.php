<?php
/**
 * SessionToken
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\TokenAdmin
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TokenAdmin
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

namespace FrankHouweling\AzureDevOpsClient\TokenAdmin\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\TokenAdmin\ObjectSerializer;

/**
 * SessionToken Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\TokenAdmin
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SessionToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SessionToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accessId' => 'string',
        'alternateToken' => 'string',
        'authorizationId' => 'string',
        'claims' => 'map[string,string]',
        'clientId' => 'string',
        'displayName' => 'string',
        'hostAuthorizationId' => 'string',
        'isPublic' => 'bool',
        'isValid' => 'bool',
        'publicData' => 'string',
        'scope' => 'string',
        'source' => 'string',
        'targetAccounts' => 'string[]',
        'token' => 'string',
        'userId' => 'string',
        'validFrom' => '\DateTime',
        'validTo' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accessId' => 'uuid',
        'alternateToken' => null,
        'authorizationId' => 'uuid',
        'claims' => null,
        'clientId' => 'uuid',
        'displayName' => null,
        'hostAuthorizationId' => 'uuid',
        'isPublic' => null,
        'isValid' => null,
        'publicData' => null,
        'scope' => null,
        'source' => null,
        'targetAccounts' => 'uuid',
        'token' => null,
        'userId' => 'uuid',
        'validFrom' => 'date-time',
        'validTo' => 'date-time'
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
        'accessId' => 'accessId',
        'alternateToken' => 'alternateToken',
        'authorizationId' => 'authorizationId',
        'claims' => 'claims',
        'clientId' => 'clientId',
        'displayName' => 'displayName',
        'hostAuthorizationId' => 'hostAuthorizationId',
        'isPublic' => 'isPublic',
        'isValid' => 'isValid',
        'publicData' => 'publicData',
        'scope' => 'scope',
        'source' => 'source',
        'targetAccounts' => 'targetAccounts',
        'token' => 'token',
        'userId' => 'userId',
        'validFrom' => 'validFrom',
        'validTo' => 'validTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessId' => 'setAccessId',
        'alternateToken' => 'setAlternateToken',
        'authorizationId' => 'setAuthorizationId',
        'claims' => 'setClaims',
        'clientId' => 'setClientId',
        'displayName' => 'setDisplayName',
        'hostAuthorizationId' => 'setHostAuthorizationId',
        'isPublic' => 'setIsPublic',
        'isValid' => 'setIsValid',
        'publicData' => 'setPublicData',
        'scope' => 'setScope',
        'source' => 'setSource',
        'targetAccounts' => 'setTargetAccounts',
        'token' => 'setToken',
        'userId' => 'setUserId',
        'validFrom' => 'setValidFrom',
        'validTo' => 'setValidTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessId' => 'getAccessId',
        'alternateToken' => 'getAlternateToken',
        'authorizationId' => 'getAuthorizationId',
        'claims' => 'getClaims',
        'clientId' => 'getClientId',
        'displayName' => 'getDisplayName',
        'hostAuthorizationId' => 'getHostAuthorizationId',
        'isPublic' => 'getIsPublic',
        'isValid' => 'getIsValid',
        'publicData' => 'getPublicData',
        'scope' => 'getScope',
        'source' => 'getSource',
        'targetAccounts' => 'getTargetAccounts',
        'token' => 'getToken',
        'userId' => 'getUserId',
        'validFrom' => 'getValidFrom',
        'validTo' => 'getValidTo'
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
        $this->container['accessId'] = isset($data['accessId']) ? $data['accessId'] : null;
        $this->container['alternateToken'] = isset($data['alternateToken']) ? $data['alternateToken'] : null;
        $this->container['authorizationId'] = isset($data['authorizationId']) ? $data['authorizationId'] : null;
        $this->container['claims'] = isset($data['claims']) ? $data['claims'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['hostAuthorizationId'] = isset($data['hostAuthorizationId']) ? $data['hostAuthorizationId'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
        $this->container['publicData'] = isset($data['publicData']) ? $data['publicData'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['targetAccounts'] = isset($data['targetAccounts']) ? $data['targetAccounts'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['validFrom'] = isset($data['validFrom']) ? $data['validFrom'] : null;
        $this->container['validTo'] = isset($data['validTo']) ? $data['validTo'] : null;
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
     * Gets accessId
     *
     * @return string
     */
    public function getAccessId()
    {
        return $this->container['accessId'];
    }

    /**
     * Sets accessId
     *
     * @param string $accessId accessId
     *
     * @return $this
     */
    public function setAccessId($accessId)
    {
        $this->container['accessId'] = $accessId;

        return $this;
    }

    /**
     * Gets alternateToken
     *
     * @return string
     */
    public function getAlternateToken()
    {
        return $this->container['alternateToken'];
    }

    /**
     * Sets alternateToken
     *
     * @param string $alternateToken This is populated when user requests a compact token. The alternate token value is self describing token.
     *
     * @return $this
     */
    public function setAlternateToken($alternateToken)
    {
        $this->container['alternateToken'] = $alternateToken;

        return $this;
    }

    /**
     * Gets authorizationId
     *
     * @return string
     */
    public function getAuthorizationId()
    {
        return $this->container['authorizationId'];
    }

    /**
     * Sets authorizationId
     *
     * @param string $authorizationId authorizationId
     *
     * @return $this
     */
    public function setAuthorizationId($authorizationId)
    {
        $this->container['authorizationId'] = $authorizationId;

        return $this;
    }

    /**
     * Gets claims
     *
     * @return map[string,string]
     */
    public function getClaims()
    {
        return $this->container['claims'];
    }

    /**
     * Sets claims
     *
     * @param map[string,string] $claims claims
     *
     * @return $this
     */
    public function setClaims($claims)
    {
        $this->container['claims'] = $claims;

        return $this;
    }

    /**
     * Gets clientId
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     *
     * @param string $clientId clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

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
     * @param string $displayName displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets hostAuthorizationId
     *
     * @return string
     */
    public function getHostAuthorizationId()
    {
        return $this->container['hostAuthorizationId'];
    }

    /**
     * Sets hostAuthorizationId
     *
     * @param string $hostAuthorizationId hostAuthorizationId
     *
     * @return $this
     */
    public function setHostAuthorizationId($hostAuthorizationId)
    {
        $this->container['hostAuthorizationId'] = $hostAuthorizationId;

        return $this;
    }

    /**
     * Gets isPublic
     *
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
     * Sets isPublic
     *
     * @param bool $isPublic isPublic
     *
     * @return $this
     */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;

        return $this;
    }

    /**
     * Gets isValid
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
     * Sets isValid
     *
     * @param bool $isValid isValid
     *
     * @return $this
     */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;

        return $this;
    }

    /**
     * Gets publicData
     *
     * @return string
     */
    public function getPublicData()
    {
        return $this->container['publicData'];
    }

    /**
     * Sets publicData
     *
     * @param string $publicData publicData
     *
     * @return $this
     */
    public function setPublicData($publicData)
    {
        $this->container['publicData'] = $publicData;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string $scope scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets targetAccounts
     *
     * @return string[]
     */
    public function getTargetAccounts()
    {
        return $this->container['targetAccounts'];
    }

    /**
     * Sets targetAccounts
     *
     * @param string[] $targetAccounts targetAccounts
     *
     * @return $this
     */
    public function setTargetAccounts($targetAccounts)
    {
        $this->container['targetAccounts'] = $targetAccounts;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token This is computed and not returned in Get queries
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string $userId userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->container['validFrom'];
    }

    /**
     * Sets validFrom
     *
     * @param \DateTime $validFrom validFrom
     *
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->container['validFrom'] = $validFrom;

        return $this;
    }

    /**
     * Gets validTo
     *
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->container['validTo'];
    }

    /**
     * Sets validTo
     *
     * @param \DateTime $validTo validTo
     *
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->container['validTo'] = $validTo;

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


