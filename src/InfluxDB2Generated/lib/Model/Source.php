<?php
/**
 * Source
 *
 * PHP version 5
 *
 * @category Class
 * @package  InfluxDB2Generated
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Influx API Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace InfluxDB2Generated\Model;

use \ArrayAccess;
use \InfluxDB2Generated\ObjectSerializer;

/**
 * Source Class Doc Comment
 *
 * @category Class
 * @package  InfluxDB2Generated
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Source implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Source';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'links' => '\InfluxDB2Generated\Model\SourceLinks',
        'id' => 'string',
        'org_id' => 'string',
        'default' => 'bool',
        'name' => 'string',
        'type' => 'string',
        'url' => 'string',
        'insecure_skip_verify' => 'bool',
        'telegraf' => 'string',
        'token' => 'string',
        'username' => 'string',
        'password' => 'string',
        'shared_secret' => 'string',
        'meta_url' => 'string',
        'default_rp' => 'string',
        'languages' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'links' => null,
        'id' => null,
        'org_id' => null,
        'default' => null,
        'name' => null,
        'type' => null,
        'url' => 'uri',
        'insecure_skip_verify' => null,
        'telegraf' => null,
        'token' => null,
        'username' => null,
        'password' => null,
        'shared_secret' => null,
        'meta_url' => 'uri',
        'default_rp' => null,
        'languages' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'links' => 'links',
        'id' => 'id',
        'org_id' => 'orgID',
        'default' => 'default',
        'name' => 'name',
        'type' => 'type',
        'url' => 'url',
        'insecure_skip_verify' => 'insecureSkipVerify',
        'telegraf' => 'telegraf',
        'token' => 'token',
        'username' => 'username',
        'password' => 'password',
        'shared_secret' => 'sharedSecret',
        'meta_url' => 'metaUrl',
        'default_rp' => 'defaultRP',
        'languages' => 'languages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'id' => 'setId',
        'org_id' => 'setOrgId',
        'default' => 'setDefault',
        'name' => 'setName',
        'type' => 'setType',
        'url' => 'setUrl',
        'insecure_skip_verify' => 'setInsecureSkipVerify',
        'telegraf' => 'setTelegraf',
        'token' => 'setToken',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'shared_secret' => 'setSharedSecret',
        'meta_url' => 'setMetaUrl',
        'default_rp' => 'setDefaultRp',
        'languages' => 'setLanguages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'id' => 'getId',
        'org_id' => 'getOrgId',
        'default' => 'getDefault',
        'name' => 'getName',
        'type' => 'getType',
        'url' => 'getUrl',
        'insecure_skip_verify' => 'getInsecureSkipVerify',
        'telegraf' => 'getTelegraf',
        'token' => 'getToken',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'shared_secret' => 'getSharedSecret',
        'meta_url' => 'getMetaUrl',
        'default_rp' => 'getDefaultRp',
        'languages' => 'getLanguages'
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
        return self::$openAPIModelName;
    }

    const TYPE_V1 = 'v1';
    const TYPE_V2 = 'v2';
    const TYPE_SELF = 'self';
    const LANGUAGES_FLUX = 'flux';
    const LANGUAGES_INFLUXQL = 'influxql';
    const LANGUAGES_SPEC = 'spec';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_V1,
            self::TYPE_V2,
            self::TYPE_SELF,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguagesAllowableValues()
    {
        return [
            self::LANGUAGES_FLUX,
            self::LANGUAGES_INFLUXQL,
            self::LANGUAGES_SPEC,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['org_id'] = isset($data['org_id']) ? $data['org_id'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['insecure_skip_verify'] = isset($data['insecure_skip_verify']) ? $data['insecure_skip_verify'] : null;
        $this->container['telegraf'] = isset($data['telegraf']) ? $data['telegraf'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['shared_secret'] = isset($data['shared_secret']) ? $data['shared_secret'] : null;
        $this->container['meta_url'] = isset($data['meta_url']) ? $data['meta_url'] : null;
        $this->container['default_rp'] = isset($data['default_rp']) ? $data['default_rp'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * @return \InfluxDB2Generated\Model\SourceLinks|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \InfluxDB2Generated\Model\SourceLinks|null $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets org_id
     *
     * @return string|null
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param string|null $org_id org_id
     *
     * @return $this
     */
    public function setOrgId($org_id)
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets default
     *
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool|null $default default
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets insecure_skip_verify
     *
     * @return bool|null
     */
    public function getInsecureSkipVerify()
    {
        return $this->container['insecure_skip_verify'];
    }

    /**
     * Sets insecure_skip_verify
     *
     * @param bool|null $insecure_skip_verify insecure_skip_verify
     *
     * @return $this
     */
    public function setInsecureSkipVerify($insecure_skip_verify)
    {
        $this->container['insecure_skip_verify'] = $insecure_skip_verify;

        return $this;
    }

    /**
     * Gets telegraf
     *
     * @return string|null
     */
    public function getTelegraf()
    {
        return $this->container['telegraf'];
    }

    /**
     * Sets telegraf
     *
     * @param string|null $telegraf telegraf
     *
     * @return $this
     */
    public function setTelegraf($telegraf)
    {
        $this->container['telegraf'] = $telegraf;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets shared_secret
     *
     * @return string|null
     */
    public function getSharedSecret()
    {
        return $this->container['shared_secret'];
    }

    /**
     * Sets shared_secret
     *
     * @param string|null $shared_secret shared_secret
     *
     * @return $this
     */
    public function setSharedSecret($shared_secret)
    {
        $this->container['shared_secret'] = $shared_secret;

        return $this;
    }

    /**
     * Gets meta_url
     *
     * @return string|null
     */
    public function getMetaUrl()
    {
        return $this->container['meta_url'];
    }

    /**
     * Sets meta_url
     *
     * @param string|null $meta_url meta_url
     *
     * @return $this
     */
    public function setMetaUrl($meta_url)
    {
        $this->container['meta_url'] = $meta_url;

        return $this;
    }

    /**
     * Gets default_rp
     *
     * @return string|null
     */
    public function getDefaultRp()
    {
        return $this->container['default_rp'];
    }

    /**
     * Sets default_rp
     *
     * @param string|null $default_rp default_rp
     *
     * @return $this
     */
    public function setDefaultRp($default_rp)
    {
        $this->container['default_rp'] = $default_rp;

        return $this;
    }

    /**
     * Gets languages
     *
     * @return string[]|null
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     *
     * @param string[]|null $languages languages
     *
     * @return $this
     */
    public function setLanguages($languages)
    {
        $allowedValues = $this->getLanguagesAllowableValues();
        if (!is_null($languages) && array_diff($languages, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'languages', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['languages'] = $languages;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


