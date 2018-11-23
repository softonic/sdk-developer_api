<?php
/**
 * Developer
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\DeveloperApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Restful API based on CoreAPI technology
 *
 * Add your description here
 *
 * OpenAPI spec version: v2.115.0
 * Contact: XXXXXXXXX@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\DeveloperApiSdk\Client\Model;

use \ArrayAccess;
use \JsonSerializable;
use \Softonic\DeveloperApiSdk\ObjectSerializer;

/**
 * Developer Class Doc Comment
 *
 * @category Class
 * @package  Softonic\DeveloperApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Developer implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    const GET_ALL_ATTRIBUTES = true;

    const GET_SET_ATTRIBUTES = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Developer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_developer' => 'string',
        'name' => 'string',
        'email' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_developer' => null,
        'name' => null,
        'email' => null,
        'url' => null
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
        'id_developer' => 'id_developer',
        'name' => 'name',
        'email' => 'email',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_developer' => 'setIdDeveloper',
        'name' => 'setName',
        'email' => 'setEmail',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_developer' => 'getIdDeveloper',
        'name' => 'getName',
        'email' => 'getEmail',
        'url' => 'getUrl'
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
    public function __construct(array $data = [])
    {
        array_key_exists('id_developer', $data) && $this->container['id_developer'] = $data['id_developer'];
        array_key_exists('name', $data) && $this->container['name'] = $data['name'];
        array_key_exists('email', $data) && $this->container['email'] = $data['email'];
        array_key_exists('url', $data) && $this->container['url'] = $data['url'];
    }

    /**
     * Returns true if all attributes are set. False otherwise.
     *
     * @return bool
     */
    public function hasAllAttributesSet()
    {
        return count($this->container) === count(self::$attributeMap);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_developer'] === null) {
            $invalidProperties[] = "'id_developer' can't be null";
        }
        if (!preg_match("/^[a-z0-9]+(?:-[a-z0-9]+)*$/", $this->container['id_developer'])) {
            $invalidProperties[] = "invalid value for 'id_developer', must be conform to the pattern /^[a-z0-9]+(?:-[a-z0-9]+)*$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (($this->container['email'] !== null) && (strlen($this->container['email']) > 200)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 200.";
        }

        if (($this->container['url'] !== null) && (strlen($this->container['url']) > 200)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 200.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model ensuring the required ones are set
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->offsetGet('id_developer') === null) {
            return false;
        }
        if ($this->offsetGet('name') === null) {
            return false;
        }

        return $this->validProperties();
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function validProperties()
    {

        if (array_key_exists('id_developer', $this->container) && $this->container['id_developer'] === null) {
            return false;
        }
        if (array_key_exists('id_developer', $this->container) && !preg_match("/^[a-z0-9]+(?:-[a-z0-9]+)*$/", $this->container['id_developer'])) {
            return false;
        }
        if (array_key_exists('name', $this->container) && $this->container['name'] === null) {
            return false;
        }
        if (array_key_exists('name', $this->container) && (strlen($this->container['name']) > 100)) {
            return false;
        }
        if (array_key_exists('email', $this->container) && ($this->container['email'] !== null) && (strlen($this->container['email']) > 200)) {
            return false;
        }
        if (array_key_exists('url', $this->container) && ($this->container['url'] !== null) && (strlen($this->container['url']) > 200)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_developer
     *
     * @return string
     */
    public function getIdDeveloper()
    {
        return array_key_exists('id_developer', $this->container) ? $this->container['id_developer'] : null;
    }

    /**
     * Sets id_developer
     *
     * @param string $id_developer Developer identifier
     *
     * @return $this
     */
    public function setIdDeveloper($id_developer)
    {

        if ((!preg_match("/^[a-z0-9]+(?:-[a-z0-9]+)*$/", $id_developer))) {
            throw new \InvalidArgumentException("invalid value for $id_developer when calling Developer., must conform to the pattern /^[a-z0-9]+(?:-[a-z0-9]+)*$/.");
        }

        $this->container['id_developer'] = $id_developer;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return array_key_exists('name', $this->container) ? $this->container['name'] : null;
    }

    /**
     * Sets name
     *
     * @param string $name Developer name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Developer., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return array_key_exists('email', $this->container) ? $this->container['email'] : null;
    }

    /**
     * Sets email
     *
     * @param string $email Developer email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (($email !== null) && (strlen($email) > 200)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Developer., must be smaller than or equal to 200.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return array_key_exists('url', $this->container) ? $this->container['url'] : null;
    }

    /**
     * Sets url
     *
     * @param string $url Developer url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        if (($url !== null) && (strlen($url) > 200)) {
            throw new \InvalidArgumentException('invalid length for $url when calling Developer., must be smaller than or equal to 200.');
        }

        $this->container['url'] = $url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->container);
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
        return $this->container[$offset] ?? null;
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
        if (null === $offset) {
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

    /**
     * Returns data which can be serialized by json_encode()
     *
     * @return mixed[]
     */
    public function jsonSerialize()
    {
        return $this->container;
    }

    /**
     * Returns data as array.
     *
     * @param bool $getAllAttributes Should convert with all attributes or just the set ones?
     *
     * @return array
     */
    public function toArray($getAllAttributes = self::GET_SET_ATTRIBUTES)
    {
        if (!$getAllAttributes) {
            return $this->container;
        }

        $data = [];
        $data['id_developer'] = $this->getIdDeveloper();
        $data['name'] = $this->getName();
        $data['email'] = $this->getEmail();
        $data['url'] = $this->getUrl();

        return $data;
    }
}


