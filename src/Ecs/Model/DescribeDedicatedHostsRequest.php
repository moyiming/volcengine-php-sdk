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

class DescribeDedicatedHostsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DescribeDedicatedHostsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dedicated_host_cluster_id' => 'string',
        'dedicated_host_ids' => 'string[]',
        'dedicated_host_name' => 'string',
        'dedicated_host_type_id' => 'string',
        'max_results' => 'int',
        'next_token' => 'string',
        'status' => 'string',
        'zone_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dedicated_host_cluster_id' => null,
        'dedicated_host_ids' => null,
        'dedicated_host_name' => null,
        'dedicated_host_type_id' => null,
        'max_results' => 'int32',
        'next_token' => null,
        'status' => null,
        'zone_id' => null
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
        'dedicated_host_cluster_id' => 'DedicatedHostClusterId',
        'dedicated_host_ids' => 'DedicatedHostIds',
        'dedicated_host_name' => 'DedicatedHostName',
        'dedicated_host_type_id' => 'DedicatedHostTypeId',
        'max_results' => 'MaxResults',
        'next_token' => 'NextToken',
        'status' => 'Status',
        'zone_id' => 'ZoneId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dedicated_host_cluster_id' => 'setDedicatedHostClusterId',
        'dedicated_host_ids' => 'setDedicatedHostIds',
        'dedicated_host_name' => 'setDedicatedHostName',
        'dedicated_host_type_id' => 'setDedicatedHostTypeId',
        'max_results' => 'setMaxResults',
        'next_token' => 'setNextToken',
        'status' => 'setStatus',
        'zone_id' => 'setZoneId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dedicated_host_cluster_id' => 'getDedicatedHostClusterId',
        'dedicated_host_ids' => 'getDedicatedHostIds',
        'dedicated_host_name' => 'getDedicatedHostName',
        'dedicated_host_type_id' => 'getDedicatedHostTypeId',
        'max_results' => 'getMaxResults',
        'next_token' => 'getNextToken',
        'status' => 'getStatus',
        'zone_id' => 'getZoneId'
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
        $this->container['dedicated_host_cluster_id'] = isset($data['dedicated_host_cluster_id']) ? $data['dedicated_host_cluster_id'] : null;
        $this->container['dedicated_host_ids'] = isset($data['dedicated_host_ids']) ? $data['dedicated_host_ids'] : null;
        $this->container['dedicated_host_name'] = isset($data['dedicated_host_name']) ? $data['dedicated_host_name'] : null;
        $this->container['dedicated_host_type_id'] = isset($data['dedicated_host_type_id']) ? $data['dedicated_host_type_id'] : null;
        $this->container['max_results'] = isset($data['max_results']) ? $data['max_results'] : null;
        $this->container['next_token'] = isset($data['next_token']) ? $data['next_token'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['zone_id'] = isset($data['zone_id']) ? $data['zone_id'] : null;
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
     * Gets dedicated_host_cluster_id
     *
     * @return string
     */
    public function getDedicatedHostClusterId()
    {
        return $this->container['dedicated_host_cluster_id'];
    }

    /**
     * Sets dedicated_host_cluster_id
     *
     * @param string $dedicated_host_cluster_id dedicated_host_cluster_id
     *
     * @return $this
     */
    public function setDedicatedHostClusterId($dedicated_host_cluster_id)
    {
        $this->container['dedicated_host_cluster_id'] = $dedicated_host_cluster_id;

        return $this;
    }

    /**
     * Gets dedicated_host_ids
     *
     * @return string[]
     */
    public function getDedicatedHostIds()
    {
        return $this->container['dedicated_host_ids'];
    }

    /**
     * Sets dedicated_host_ids
     *
     * @param string[] $dedicated_host_ids dedicated_host_ids
     *
     * @return $this
     */
    public function setDedicatedHostIds($dedicated_host_ids)
    {
        $this->container['dedicated_host_ids'] = $dedicated_host_ids;

        return $this;
    }

    /**
     * Gets dedicated_host_name
     *
     * @return string
     */
    public function getDedicatedHostName()
    {
        return $this->container['dedicated_host_name'];
    }

    /**
     * Sets dedicated_host_name
     *
     * @param string $dedicated_host_name dedicated_host_name
     *
     * @return $this
     */
    public function setDedicatedHostName($dedicated_host_name)
    {
        $this->container['dedicated_host_name'] = $dedicated_host_name;

        return $this;
    }

    /**
     * Gets dedicated_host_type_id
     *
     * @return string
     */
    public function getDedicatedHostTypeId()
    {
        return $this->container['dedicated_host_type_id'];
    }

    /**
     * Sets dedicated_host_type_id
     *
     * @param string $dedicated_host_type_id dedicated_host_type_id
     *
     * @return $this
     */
    public function setDedicatedHostTypeId($dedicated_host_type_id)
    {
        $this->container['dedicated_host_type_id'] = $dedicated_host_type_id;

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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets zone_id
     *
     * @return string
     */
    public function getZoneId()
    {
        return $this->container['zone_id'];
    }

    /**
     * Sets zone_id
     *
     * @param string $zone_id zone_id
     *
     * @return $this
     */
    public function setZoneId($zone_id)
    {
        $this->container['zone_id'] = $zone_id;

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

