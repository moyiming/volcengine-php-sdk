<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Ecs\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class ImportImageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportImageRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'architecture' => 'string',
        'boot_mode' => 'string',
        'description' => 'string',
        'image_name' => 'string',
        'license_type' => 'string',
        'need_detection' => 'bool',
        'os_type' => 'string',
        'platform' => 'string',
        'platform_version' => 'string',
        'project_name' => 'string',
        'tags' => '\Volcengine\Ecs\Model\TagForImportImageInput[]',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'architecture' => null,
        'boot_mode' => null,
        'description' => null,
        'image_name' => null,
        'license_type' => null,
        'need_detection' => null,
        'os_type' => null,
        'platform' => null,
        'platform_version' => null,
        'project_name' => null,
        'tags' => null,
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
        'architecture' => 'Architecture',
        'boot_mode' => 'BootMode',
        'description' => 'Description',
        'image_name' => 'ImageName',
        'license_type' => 'LicenseType',
        'need_detection' => 'NeedDetection',
        'os_type' => 'OsType',
        'platform' => 'Platform',
        'platform_version' => 'PlatformVersion',
        'project_name' => 'ProjectName',
        'tags' => 'Tags',
        'url' => 'Url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'architecture' => 'setArchitecture',
        'boot_mode' => 'setBootMode',
        'description' => 'setDescription',
        'image_name' => 'setImageName',
        'license_type' => 'setLicenseType',
        'need_detection' => 'setNeedDetection',
        'os_type' => 'setOsType',
        'platform' => 'setPlatform',
        'platform_version' => 'setPlatformVersion',
        'project_name' => 'setProjectName',
        'tags' => 'setTags',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'architecture' => 'getArchitecture',
        'boot_mode' => 'getBootMode',
        'description' => 'getDescription',
        'image_name' => 'getImageName',
        'license_type' => 'getLicenseType',
        'need_detection' => 'getNeedDetection',
        'os_type' => 'getOsType',
        'platform' => 'getPlatform',
        'platform_version' => 'getPlatformVersion',
        'project_name' => 'getProjectName',
        'tags' => 'getTags',
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
    public function __construct(array $data = null)
    {
        $this->container['architecture'] = isset($data['architecture']) ? $data['architecture'] : null;
        $this->container['boot_mode'] = isset($data['boot_mode']) ? $data['boot_mode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['image_name'] = isset($data['image_name']) ? $data['image_name'] : null;
        $this->container['license_type'] = isset($data['license_type']) ? $data['license_type'] : null;
        $this->container['need_detection'] = isset($data['need_detection']) ? $data['need_detection'] : null;
        $this->container['os_type'] = isset($data['os_type']) ? $data['os_type'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['platform_version'] = isset($data['platform_version']) ? $data['platform_version'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['image_name'] === null) {
            $invalidProperties[] = "'image_name' can't be null";
        }
        if ($this->container['platform'] === null) {
            $invalidProperties[] = "'platform' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
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
     * Gets architecture
     *
     * @return string
     */
    public function getArchitecture()
    {
        return $this->container['architecture'];
    }

    /**
     * Sets architecture
     *
     * @param string $architecture architecture
     *
     * @return $this
     */
    public function setArchitecture($architecture)
    {
        $this->container['architecture'] = $architecture;

        return $this;
    }

    /**
     * Gets boot_mode
     *
     * @return string
     */
    public function getBootMode()
    {
        return $this->container['boot_mode'];
    }

    /**
     * Sets boot_mode
     *
     * @param string $boot_mode boot_mode
     *
     * @return $this
     */
    public function setBootMode($boot_mode)
    {
        $this->container['boot_mode'] = $boot_mode;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets image_name
     *
     * @return string
     */
    public function getImageName()
    {
        return $this->container['image_name'];
    }

    /**
     * Sets image_name
     *
     * @param string $image_name image_name
     *
     * @return $this
     */
    public function setImageName($image_name)
    {
        $this->container['image_name'] = $image_name;

        return $this;
    }

    /**
     * Gets license_type
     *
     * @return string
     */
    public function getLicenseType()
    {
        return $this->container['license_type'];
    }

    /**
     * Sets license_type
     *
     * @param string $license_type license_type
     *
     * @return $this
     */
    public function setLicenseType($license_type)
    {
        $this->container['license_type'] = $license_type;

        return $this;
    }

    /**
     * Gets need_detection
     *
     * @return bool
     */
    public function getNeedDetection()
    {
        return $this->container['need_detection'];
    }

    /**
     * Sets need_detection
     *
     * @param bool $need_detection need_detection
     *
     * @return $this
     */
    public function setNeedDetection($need_detection)
    {
        $this->container['need_detection'] = $need_detection;

        return $this;
    }

    /**
     * Gets os_type
     *
     * @return string
     */
    public function getOsType()
    {
        return $this->container['os_type'];
    }

    /**
     * Sets os_type
     *
     * @param string $os_type os_type
     *
     * @return $this
     */
    public function setOsType($os_type)
    {
        $this->container['os_type'] = $os_type;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string $platform platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets platform_version
     *
     * @return string
     */
    public function getPlatformVersion()
    {
        return $this->container['platform_version'];
    }

    /**
     * Sets platform_version
     *
     * @param string $platform_version platform_version
     *
     * @return $this
     */
    public function setPlatformVersion($platform_version)
    {
        $this->container['platform_version'] = $platform_version;

        return $this;
    }

    /**
     * Gets project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /**
     * Sets project_name
     *
     * @param string $project_name project_name
     *
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->container['project_name'] = $project_name;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Volcengine\Ecs\Model\TagForImportImageInput[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Volcengine\Ecs\Model\TagForImportImageInput[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

