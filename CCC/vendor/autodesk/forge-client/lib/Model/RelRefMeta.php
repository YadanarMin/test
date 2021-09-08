<?php
/**
 * RelRefMeta
 *
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Forge\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Autodesk\Forge\Client\Model;

use \ArrayAccess;

/**
 * RelRefMeta Class Doc Comment
 *
 * @category    Class
 * @package     Autodesk\Forge\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RelRefMeta implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'rel_ref_meta';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'ref_type' => 'string',
        'direction' => 'string',
        'from_id' => 'string',
        'from_type' => 'string',
        'to_id' => 'string',
        'to_type' => 'string',
        'extension' => '\Autodesk\Forge\Client\Model\BaseAttributesExtensionObject',
    ];

    /**
     * @return \string[]
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'ref_type' => 'refType',
        'direction' => 'direction',
        'from_id' => 'fromId',
        'from_type' => 'fromType',
        'to_id' => 'toId',
        'to_type' => 'toType',
        'extension' => 'extension',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_type' => 'setRefType',
        'direction' => 'setDirection',
        'from_id' => 'setFromId',
        'from_type' => 'setFromType',
        'to_id' => 'setToId',
        'to_type' => 'setToType',
        'extension' => 'setExtension',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_type' => 'getRefType',
        'direction' => 'getDirection',
        'from_id' => 'getFromId',
        'from_type' => 'getFromType',
        'to_id' => 'getToId',
        'to_type' => 'getToType',
        'extension' => 'getExtension',
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const REF_TYPE_DERIVED = 'derived';
    const REF_TYPE_DEPENDENCIES = 'dependencies';
    const REF_TYPE_AUXILIARY = 'auxiliary';
    const REF_TYPE_XREFS = 'xrefs';
    const DIRECTION_FROM = 'from';
    const DIRECTION_TO = 'to';
    const FROM_TYPE_FOLDERS = 'folders';
    const FROM_TYPE_ITEMS = 'items';
    const FROM_TYPE_VERSIONS = 'versions';
    const TO_TYPE_FOLDERS = 'folders';
    const TO_TYPE_ITEMS = 'items';
    const TO_TYPE_VERSIONS = 'versions';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRefTypeAllowableValues()
    {
        return [
            self::REF_TYPE_DERIVED,
            self::REF_TYPE_DEPENDENCIES,
            self::REF_TYPE_AUXILIARY,
            self::REF_TYPE_XREFS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_FROM,
            self::DIRECTION_TO,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFromTypeAllowableValues()
    {
        return [
            self::FROM_TYPE_FOLDERS,
            self::FROM_TYPE_ITEMS,
            self::FROM_TYPE_VERSIONS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getToTypeAllowableValues()
    {
        return [
            self::TO_TYPE_FOLDERS,
            self::TO_TYPE_ITEMS,
            self::TO_TYPE_VERSIONS,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ref_type'] = isset($data['ref_type']) ? $data['ref_type'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['from_id'] = isset($data['from_id']) ? $data['from_id'] : null;
        $this->container['from_type'] = isset($data['from_type']) ? $data['from_type'] : null;
        $this->container['to_id'] = isset($data['to_id']) ? $data['to_id'] : null;
        $this->container['to_type'] = isset($data['to_type']) ? $data['to_type'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['ref_type'] === null) {
            $invalid_properties[] = "'ref_type' can't be null";
        }
        $allowed_values = ["derived", "dependencies", "auxiliary", "xrefs"];
        if (!in_array($this->container['ref_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'ref_type', must be one of 'derived', 'dependencies', 'auxiliary', 'xrefs'.";
        }

        if ($this->container['direction'] === null) {
            $invalid_properties[] = "'direction' can't be null";
        }
        $allowed_values = ["from", "to"];
        if (!in_array($this->container['direction'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'direction', must be one of 'from', 'to'.";
        }

        if ($this->container['from_id'] === null) {
            $invalid_properties[] = "'from_id' can't be null";
        }
        if ($this->container['from_type'] === null) {
            $invalid_properties[] = "'from_type' can't be null";
        }
        $allowed_values = ["folders", "items", "versions"];
        if (!in_array($this->container['from_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'from_type', must be one of 'folders', 'items', 'versions'.";
        }

        if ($this->container['to_id'] === null) {
            $invalid_properties[] = "'to_id' can't be null";
        }
        if ($this->container['to_type'] === null) {
            $invalid_properties[] = "'to_type' can't be null";
        }
        $allowed_values = ["folders", "items", "versions"];
        if (!in_array($this->container['to_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'to_type', must be one of 'folders', 'items', 'versions'.";
        }

        if ($this->container['extension'] === null) {
            $invalid_properties[] = "'extension' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['ref_type'] === null) {
            return false;
        }
        $allowed_values = ["derived", "dependencies", "auxiliary", "xrefs"];
        if (!in_array($this->container['ref_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['direction'] === null) {
            return false;
        }
        $allowed_values = ["from", "to"];
        if (!in_array($this->container['direction'], $allowed_values)) {
            return false;
        }
        if ($this->container['from_id'] === null) {
            return false;
        }
        if ($this->container['from_type'] === null) {
            return false;
        }
        $allowed_values = ["folders", "items", "versions"];
        if (!in_array($this->container['from_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['to_id'] === null) {
            return false;
        }
        if ($this->container['to_type'] === null) {
            return false;
        }
        $allowed_values = ["folders", "items", "versions"];
        if (!in_array($this->container['to_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['extension'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets ref_type
     * @return string
     */
    public function getRefType()
    {
        return $this->container['ref_type'];
    }

    /**
     * Sets ref_type
     * @param string $ref_type
     * @return $this
     */
    public function setRefType($ref_type)
    {
        $allowed_values = array('derived', 'dependencies', 'auxiliary', 'xrefs');
        if ((!in_array($ref_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'ref_type', must be one of 'derived', 'dependencies', 'auxiliary', 'xrefs'");
        }
        $this->container['ref_type'] = $ref_type;

        return $this;
    }

    /**
     * Gets direction
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     * @param string $direction describes the direction of the reference relative to the resource the refs are queried for
     * @return $this
     */
    public function setDirection($direction)
    {
        $allowed_values = array('from', 'to');
        if ((!in_array($direction, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'direction', must be one of 'from', 'to'");
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets from_id
     * @return string
     */
    public function getFromId()
    {
        return $this->container['from_id'];
    }

    /**
     * Sets from_id
     * @param string $from_id
     * @return $this
     */
    public function setFromId($from_id)
    {
        $this->container['from_id'] = $from_id;

        return $this;
    }

    /**
     * Gets from_type
     * @return string
     */
    public function getFromType()
    {
        return $this->container['from_type'];
    }

    /**
     * Sets from_type
     * @param string $from_type
     * @return $this
     */
    public function setFromType($from_type)
    {
        $allowed_values = array('folders', 'items', 'versions');
        if ((!in_array($from_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'from_type', must be one of 'folders', 'items', 'versions'");
        }
        $this->container['from_type'] = $from_type;

        return $this;
    }

    /**
     * Gets to_id
     * @return string
     */
    public function getToId()
    {
        return $this->container['to_id'];
    }

    /**
     * Sets to_id
     * @param string $to_id
     * @return $this
     */
    public function setToId($to_id)
    {
        $this->container['to_id'] = $to_id;

        return $this;
    }

    /**
     * Gets to_type
     * @return string
     */
    public function getToType()
    {
        return $this->container['to_type'];
    }

    /**
     * Sets to_type
     * @param string $to_type
     * @return $this
     */
    public function setToType($to_type)
    {
        $allowed_values = array('folders', 'items', 'versions');
        if ((!in_array($to_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'to_type', must be one of 'folders', 'items', 'versions'");
        }
        $this->container['to_type'] = $to_type;

        return $this;
    }

    /**
     * Gets extension
     * @return \Autodesk\Forge\Client\Model\BaseAttributesExtensionObject
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     * @param \Autodesk\Forge\Client\Model\BaseAttributesExtensionObject $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Autodesk\Forge\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Autodesk\Forge\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


