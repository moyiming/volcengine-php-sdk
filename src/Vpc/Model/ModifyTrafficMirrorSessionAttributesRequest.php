<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Vpc\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class ModifyTrafficMirrorSessionAttributesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModifyTrafficMirrorSessionAttributesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'packet_length' => 'int',
        'priority' => 'int',
        'traffic_mirror_filter_id' => 'string',
        'traffic_mirror_session_id' => 'string',
        'traffic_mirror_session_name' => 'string',
        'traffic_mirror_target_id' => 'string',
        'virtual_network_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'packet_length' => null,
        'priority' => null,
        'traffic_mirror_filter_id' => null,
        'traffic_mirror_session_id' => null,
        'traffic_mirror_session_name' => null,
        'traffic_mirror_target_id' => null,
        'virtual_network_id' => null
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
        'description' => 'Description',
        'packet_length' => 'PacketLength',
        'priority' => 'Priority',
        'traffic_mirror_filter_id' => 'TrafficMirrorFilterId',
        'traffic_mirror_session_id' => 'TrafficMirrorSessionId',
        'traffic_mirror_session_name' => 'TrafficMirrorSessionName',
        'traffic_mirror_target_id' => 'TrafficMirrorTargetId',
        'virtual_network_id' => 'VirtualNetworkId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'packet_length' => 'setPacketLength',
        'priority' => 'setPriority',
        'traffic_mirror_filter_id' => 'setTrafficMirrorFilterId',
        'traffic_mirror_session_id' => 'setTrafficMirrorSessionId',
        'traffic_mirror_session_name' => 'setTrafficMirrorSessionName',
        'traffic_mirror_target_id' => 'setTrafficMirrorTargetId',
        'virtual_network_id' => 'setVirtualNetworkId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'packet_length' => 'getPacketLength',
        'priority' => 'getPriority',
        'traffic_mirror_filter_id' => 'getTrafficMirrorFilterId',
        'traffic_mirror_session_id' => 'getTrafficMirrorSessionId',
        'traffic_mirror_session_name' => 'getTrafficMirrorSessionName',
        'traffic_mirror_target_id' => 'getTrafficMirrorTargetId',
        'virtual_network_id' => 'getVirtualNetworkId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['packet_length'] = isset($data['packet_length']) ? $data['packet_length'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['traffic_mirror_filter_id'] = isset($data['traffic_mirror_filter_id']) ? $data['traffic_mirror_filter_id'] : null;
        $this->container['traffic_mirror_session_id'] = isset($data['traffic_mirror_session_id']) ? $data['traffic_mirror_session_id'] : null;
        $this->container['traffic_mirror_session_name'] = isset($data['traffic_mirror_session_name']) ? $data['traffic_mirror_session_name'] : null;
        $this->container['traffic_mirror_target_id'] = isset($data['traffic_mirror_target_id']) ? $data['traffic_mirror_target_id'] : null;
        $this->container['virtual_network_id'] = isset($data['virtual_network_id']) ? $data['virtual_network_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['traffic_mirror_session_id'] === null) {
            $invalidProperties[] = "'traffic_mirror_session_id' can't be null";
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
     * Gets packet_length
     *
     * @return int
     */
    public function getPacketLength()
    {
        return $this->container['packet_length'];
    }

    /**
     * Sets packet_length
     *
     * @param int $packet_length packet_length
     *
     * @return $this
     */
    public function setPacketLength($packet_length)
    {
        $this->container['packet_length'] = $packet_length;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets traffic_mirror_filter_id
     *
     * @return string
     */
    public function getTrafficMirrorFilterId()
    {
        return $this->container['traffic_mirror_filter_id'];
    }

    /**
     * Sets traffic_mirror_filter_id
     *
     * @param string $traffic_mirror_filter_id traffic_mirror_filter_id
     *
     * @return $this
     */
    public function setTrafficMirrorFilterId($traffic_mirror_filter_id)
    {
        $this->container['traffic_mirror_filter_id'] = $traffic_mirror_filter_id;

        return $this;
    }

    /**
     * Gets traffic_mirror_session_id
     *
     * @return string
     */
    public function getTrafficMirrorSessionId()
    {
        return $this->container['traffic_mirror_session_id'];
    }

    /**
     * Sets traffic_mirror_session_id
     *
     * @param string $traffic_mirror_session_id traffic_mirror_session_id
     *
     * @return $this
     */
    public function setTrafficMirrorSessionId($traffic_mirror_session_id)
    {
        $this->container['traffic_mirror_session_id'] = $traffic_mirror_session_id;

        return $this;
    }

    /**
     * Gets traffic_mirror_session_name
     *
     * @return string
     */
    public function getTrafficMirrorSessionName()
    {
        return $this->container['traffic_mirror_session_name'];
    }

    /**
     * Sets traffic_mirror_session_name
     *
     * @param string $traffic_mirror_session_name traffic_mirror_session_name
     *
     * @return $this
     */
    public function setTrafficMirrorSessionName($traffic_mirror_session_name)
    {
        $this->container['traffic_mirror_session_name'] = $traffic_mirror_session_name;

        return $this;
    }

    /**
     * Gets traffic_mirror_target_id
     *
     * @return string
     */
    public function getTrafficMirrorTargetId()
    {
        return $this->container['traffic_mirror_target_id'];
    }

    /**
     * Sets traffic_mirror_target_id
     *
     * @param string $traffic_mirror_target_id traffic_mirror_target_id
     *
     * @return $this
     */
    public function setTrafficMirrorTargetId($traffic_mirror_target_id)
    {
        $this->container['traffic_mirror_target_id'] = $traffic_mirror_target_id;

        return $this;
    }

    /**
     * Gets virtual_network_id
     *
     * @return int
     */
    public function getVirtualNetworkId()
    {
        return $this->container['virtual_network_id'];
    }

    /**
     * Sets virtual_network_id
     *
     * @param int $virtual_network_id virtual_network_id
     *
     * @return $this
     */
    public function setVirtualNetworkId($virtual_network_id)
    {
        $this->container['virtual_network_id'] = $virtual_network_id;

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

