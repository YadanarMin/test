<?php
/**
 * VersionAttributes
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
 * VersionAttributes Class Doc Comment
 *
 * @category    Class
 * @package     Autodesk\Forge\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VersionAttributes implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'version_attributes';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'name' => 'string',
        'display_name' => 'string',
        'version_number' => 'int',
        'mime_type' => 'string',
        'file_type' => 'string',
        'storage_size' => 'int',
        'updated_time' => 'string',
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
        'name' => 'name',
        'display_name' => 'displayName',
        'version_number' => 'versionNumber',
        'mime_type' => 'mimeType',
        'file_type' => 'fileType',
        'storage_size' => 'storageSize',
        'updated_time' => 'lastModifiedTime',
        'extension' => 'extension',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'display_name' => 'setDisplayName',
        'version_number' => 'setVersionNumber',
        'mime_type' => 'setMimeType',
        'file_type' => 'setFileType',
        'storage_size' => 'setStorageSize',
        'updated_time' => 'setlastModifiedTime',
        'extension' => 'setExtension',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'display_name' => 'getDisplayName',
        'version_number' => 'getVersionNumber',
        'mime_type' => 'getMimeType',
        'file_type' => 'getFileType',
        'storage_size' => 'getStorageSize',
        'updated_time' => 'getlastModifiedTime',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['version_number'] = isset($data['version_number']) ? $data['version_number'] : null;
        $this->container['mime_type'] = isset($data['mime_type']) ? $data['mime_type'] : null;
        $this->container['file_type'] = isset($data['file_type']) ? $data['file_type'] : null;
        $this->container['storage_size'] = isset($data['storage_size']) ? $data['storage_size'] : null;
        $this->container['updated_time'] = isset($data['updated_time']) ? $data['updated_time'] : null;
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

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalid_properties[] = "'display_name' can't be null";
        }
        if ($this->container['version_number'] === null) {
            $invalid_properties[] = "'version_number' can't be null";
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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['display_name'] === null) {
            return false;
        }
        if ($this->container['version_number'] === null) {
            return false;
        }
        if ($this->container['extension'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name filename used when synced to local disk
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets display_name
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     * @param string $display_name displayable name of the version
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets version_number
     * @return int
     */
    public function getVersionNumber()
    {
        return $this->container['version_number'];
    }

    /**
     * Sets version_number
     * @param int $version_number version number of this version
     * @return $this
     */
    public function setVersionNumber($version_number)
    {
        $this->container['version_number'] = $version_number;

        return $this;
    }

    /**
     * Gets mime_type
     * @return string
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     * @param string $mime_type mimetype of the version`s content
     * @return $this
     */
    public function setMimeType($mime_type)
    {
        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets file_type
     * @return string
     */
    public function getFileType()
    {
        return $this->container['file_type'];
    }

    /**
     * Sets file_type
     * @param string $file_type file type, only present if this version represents a file
     * @return $this
     */
    public function setFileType($file_type)
    {
        $this->container['file_type'] = $file_type;

        return $this;
    }

    /**
     * Gets storage_size
     * @return int
     */
    public function getStorageSize()
    {
        return $this->container['storage_size'];
    }

    /**
     * Gets storage_size
     * @return int
     */
    public function getlastModifiedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * set storage_size
     * @return int
     */
    public function setlastModifiedTime($updated_time)
    {
        $this->container['updated_time'] = $updated_time;
        return $this;
    }


    /**
     * Sets storage_size
     * @param int $storage_size file size in bytes, only present if this version represents a file
     * @return $this
     */
    public function setStorageSize($storage_size)
    {
        $this->container['storage_size'] = $storage_size;

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


