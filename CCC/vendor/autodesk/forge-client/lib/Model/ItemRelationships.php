<?php
/**
 * ItemRelationships
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
 * ItemRelationships Class Doc Comment
 *
 * @category    Class
 * @package     Autodesk\Forge\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemRelationships implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'item_relationships';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'parent' => '\Autodesk\Forge\Client\Model\JsonApiRelationshipsLinksInternalResource',
        'tip' => '\Autodesk\Forge\Client\Model\JsonApiRelationshipsLinksInternalResource',
        'versions' => '\Autodesk\Forge\Client\Model\JsonApiRelationshipsLinksInternal',
        'refs' => '\Autodesk\Forge\Client\Model\JsonApiRelationshipsLinksRefs',
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
        'parent' => 'parent',
        'tip' => 'tip',
        'versions' => 'versions',
        'refs' => 'refs',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'parent' => 'setParent',
        'tip' => 'setTip',
        'versions' => 'setVersions',
        'refs' => 'setRefs',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'parent' => 'getParent',
        'tip' => 'getTip',
        'versions' => 'getVersions',
        'refs' => 'getRefs',
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
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['tip'] = isset($data['tip']) ? $data['tip'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
        $this->container['refs'] = isset($data['refs']) ? $data['refs'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['parent'] === null) {
            $invalid_properties[] = "'parent' can't be null";
        }
        if ($this->container['tip'] === null) {
            $invalid_properties[] = "'tip' can't be null";
        }
        if ($this->container['versions'] === null) {
            $invalid_properties[] = "'versions' can't be null";
        }
        if ($this->container['refs'] === null) {
            $invalid_properties[] = "'refs' can't be null";
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

        if ($this->container['parent'] === null) {
            return false;
        }
        if ($this->container['tip'] === null) {
            return false;
        }
        if ($this->container['versions'] === null) {
            return false;
        }
        if ($this->container['refs'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets parent
     * @return \Autodesk\Forge\Client\Model\JsonApiRelationshipsLinksInternalResource
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     * @param \Autodesk\Forge\Client\Model\JsonApiRelationshipsLinksInternalResource $parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets tip
     * @return \Autodesk\Forge\Client\Model\JsonApiRelationshipsLinksInternalResource
     */
    public function getTip()
    {
        return $this->container['tip'];
    }

    /**
     * Sets tip
     * @param \Autodesk\Forge\Client\Model\JsonApiRelationshipsLinksInternalResource $tip
     * @return $this
     */
    public function setTip($tip)
    {
        $this->container['tip'] = $tip;

        return $this;
    }

    /**
     * Gets versions
     * @return \Autodesk\Forge\Client\Model\JsonApiRelationshipsLinksInternal
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     * @param \Autodesk\Forge\Client\Model\JsonApiRelationshipsLinksInternal $versions
     * @return $this
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

        return $this;
    }

    /**
     * Gets refs
     * @return \Autodesk\Forge\Client\Model\JsonApiRelationshipsLinksRefs
     */
    public function getRefs()
    {
        return $this->container['refs'];
    }

    /**
     * Sets refs
     * @param \Autodesk\Forge\Client\Model\JsonApiRelationshipsLinksRefs $refs
     * @return $this
     */
    public function setRefs($refs)
    {
        $this->container['refs'] = $refs;

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


