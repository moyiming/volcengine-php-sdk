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

class DescribeImagesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DescribeImagesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'image_ids' => 'string[]',
        'image_name' => 'string',
        'image_status' => 'string',
        'instance_type_id' => 'string',
        'is_lts' => 'bool',
        'is_support_cloud_init' => 'bool',
        'max_results' => 'int',
        'next_token' => 'string',
        'os_type' => 'string',
        'platform' => 'string',
        'project_name' => 'string',
        'status' => 'string[]',
        'tag_filters' => '\Volcengine\Ecs\Model\TagFilterForDescribeImagesInput[]',
        'visibility' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'image_ids' => null,
        'image_name' => null,
        'image_status' => null,
        'instance_type_id' => null,
        'is_lts' => null,
        'is_support_cloud_init' => null,
        'max_results' => 'int32',
        'next_token' => null,
        'os_type' => null,
        'platform' => null,
        'project_name' => null,
        'status' => null,
        'tag_filters' => null,
        'visibility' => null
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
        'image_ids' => 'ImageIds',
        'image_name' => 'ImageName',
        'image_status' => 'ImageStatus',
        'instance_type_id' => 'InstanceTypeId',
        'is_lts' => 'IsLTS',
        'is_support_cloud_init' => 'IsSupportCloudInit',
        'max_results' => 'MaxResults',
        'next_token' => 'NextToken',
        'os_type' => 'OsType',
        'platform' => 'Platform',
        'project_name' => 'ProjectName',
        'status' => 'Status',
        'tag_filters' => 'TagFilters',
        'visibility' => 'Visibility'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image_ids' => 'setImageIds',
        'image_name' => 'setImageName',
        'image_status' => 'setImageStatus',
        'instance_type_id' => 'setInstanceTypeId',
        'is_lts' => 'setIsLts',
        'is_support_cloud_init' => 'setIsSupportCloudInit',
        'max_results' => 'setMaxResults',
        'next_token' => 'setNextToken',
        'os_type' => 'setOsType',
        'platform' => 'setPlatform',
        'project_name' => 'setProjectName',
        'status' => 'setStatus',
        'tag_filters' => 'setTagFilters',
        'visibility' => 'setVisibility'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image_ids' => 'getImageIds',
        'image_name' => 'getImageName',
        'image_status' => 'getImageStatus',
        'instance_type_id' => 'getInstanceTypeId',
        'is_lts' => 'getIsLts',
        'is_support_cloud_init' => 'getIsSupportCloudInit',
        'max_results' => 'getMaxResults',
        'next_token' => 'getNextToken',
        'os_type' => 'getOsType',
        'platform' => 'getPlatform',
        'project_name' => 'getProjectName',
        'status' => 'getStatus',
        'tag_filters' => 'getTagFilters',
        'visibility' => 'getVisibility'
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
        $this->container['image_ids'] = isset($data['image_ids']) ? $data['image_ids'] : null;
        $this->container['image_name'] = isset($data['image_name']) ? $data['image_name'] : null;
        $this->container['image_status'] = isset($data['image_status']) ? $data['image_status'] : null;
        $this->container['instance_type_id'] = isset($data['instance_type_id']) ? $data['instance_type_id'] : null;
        $this->container['is_lts'] = isset($data['is_lts']) ? $data['is_lts'] : null;
        $this->container['is_support_cloud_init'] = isset($data['is_support_cloud_init']) ? $data['is_support_cloud_init'] : null;
        $this->container['max_results'] = isset($data['max_results']) ? $data['max_results'] : null;
        $this->container['next_token'] = isset($data['next_token']) ? $data['next_token'] : null;
        $this->container['os_type'] = isset($data['os_type']) ? $data['os_type'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tag_filters'] = isset($data['tag_filters']) ? $data['tag_filters'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
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
     * Gets image_ids
     *
     * @return string[]
     */
    public function getImageIds()
    {
        return $this->container['image_ids'];
    }

    /**
     * Sets image_ids
     *
     * @param string[] $image_ids image_ids
     *
     * @return $this
     */
    public function setImageIds($image_ids)
    {
        $this->container['image_ids'] = $image_ids;

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
     * Gets image_status
     *
     * @return string
     */
    public function getImageStatus()
    {
        return $this->container['image_status'];
    }

    /**
     * Sets image_status
     *
     * @param string $image_status image_status
     *
     * @return $this
     */
    public function setImageStatus($image_status)
    {
        $this->container['image_status'] = $image_status;

        return $this;
    }

    /**
     * Gets instance_type_id
     *
     * @return string
     */
    public function getInstanceTypeId()
    {
        return $this->container['instance_type_id'];
    }

    /**
     * Sets instance_type_id
     *
     * @param string $instance_type_id instance_type_id
     *
     * @return $this
     */
    public function setInstanceTypeId($instance_type_id)
    {
        $this->container['instance_type_id'] = $instance_type_id;

        return $this;
    }

    /**
     * Gets is_lts
     *
     * @return bool
     */
    public function getIsLts()
    {
        return $this->container['is_lts'];
    }

    /**
     * Sets is_lts
     *
     * @param bool $is_lts is_lts
     *
     * @return $this
     */
    public function setIsLts($is_lts)
    {
        $this->container['is_lts'] = $is_lts;

        return $this;
    }

    /**
     * Gets is_support_cloud_init
     *
     * @return bool
     */
    public function getIsSupportCloudInit()
    {
        return $this->container['is_support_cloud_init'];
    }

    /**
     * Sets is_support_cloud_init
     *
     * @param bool $is_support_cloud_init is_support_cloud_init
     *
     * @return $this
     */
    public function setIsSupportCloudInit($is_support_cloud_init)
    {
        $this->container['is_support_cloud_init'] = $is_support_cloud_init;

        return $this;
    }

    /**
     * Gets max_results
     *
     * @return int
     */
    public function getMaxResults()
    {
        return $this->container['max_results'];
    }

    /**
     * Sets max_results
     *
     * @param int $max_results max_results
     *
     * @return $this
     */
    public function setMaxResults($max_results)
    {
        $this->container['max_results'] = $max_results;

        return $this;
    }

    /**
     * Gets next_token
     *
     * @return string
     */
    public function getNextToken()
    {
        return $this->container['next_token'];
    }

    /**
     * Sets next_token
     *
     * @param string $next_token next_token
     *
     * @return $this
     */
    public function setNextToken($next_token)
    {
        $this->container['next_token'] = $next_token;

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
     * Gets status
     *
     * @return string[]
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string[] $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tag_filters
     *
     * @return \Volcengine\Ecs\Model\TagFilterForDescribeImagesInput[]
     */
    public function getTagFilters()
    {
        return $this->container['tag_filters'];
    }

    /**
     * Sets tag_filters
     *
     * @param \Volcengine\Ecs\Model\TagFilterForDescribeImagesInput[] $tag_filters tag_filters
     *
     * @return $this
     */
    public function setTagFilters($tag_filters)
    {
        $this->container['tag_filters'] = $tag_filters;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param string $visibility visibility
     *
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;

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

