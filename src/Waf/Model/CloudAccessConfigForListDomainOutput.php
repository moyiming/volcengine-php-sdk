<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Waf\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class CloudAccessConfigForListDomainOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CloudAccessConfigForListDomainOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_protocol' => 'string',
        'defence_mode' => 'int',
        'instance_id' => 'string',
        'instance_name' => 'string',
        'listener_id' => 'string',
        'lost_association_from_alb' => 'int',
        'port' => 'string',
        'protocol' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_protocol' => null,
        'defence_mode' => 'int32',
        'instance_id' => null,
        'instance_name' => null,
        'listener_id' => null,
        'lost_association_from_alb' => 'int32',
        'port' => null,
        'protocol' => null
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
        'access_protocol' => 'AccessProtocol',
        'defence_mode' => 'DefenceMode',
        'instance_id' => 'InstanceID',
        'instance_name' => 'InstanceName',
        'listener_id' => 'ListenerID',
        'lost_association_from_alb' => 'LostAssociationFromALB',
        'port' => 'Port',
        'protocol' => 'Protocol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_protocol' => 'setAccessProtocol',
        'defence_mode' => 'setDefenceMode',
        'instance_id' => 'setInstanceId',
        'instance_name' => 'setInstanceName',
        'listener_id' => 'setListenerId',
        'lost_association_from_alb' => 'setLostAssociationFromAlb',
        'port' => 'setPort',
        'protocol' => 'setProtocol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_protocol' => 'getAccessProtocol',
        'defence_mode' => 'getDefenceMode',
        'instance_id' => 'getInstanceId',
        'instance_name' => 'getInstanceName',
        'listener_id' => 'getListenerId',
        'lost_association_from_alb' => 'getLostAssociationFromAlb',
        'port' => 'getPort',
        'protocol' => 'getProtocol'
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
        $this->container['access_protocol'] = isset($data['access_protocol']) ? $data['access_protocol'] : null;
        $this->container['defence_mode'] = isset($data['defence_mode']) ? $data['defence_mode'] : null;
        $this->container['instance_id'] = isset($data['instance_id']) ? $data['instance_id'] : null;
        $this->container['instance_name'] = isset($data['instance_name']) ? $data['instance_name'] : null;
        $this->container['listener_id'] = isset($data['listener_id']) ? $data['listener_id'] : null;
        $this->container['lost_association_from_alb'] = isset($data['lost_association_from_alb']) ? $data['lost_association_from_alb'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
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
     * Gets access_protocol
     *
     * @return string
     */
    public function getAccessProtocol()
    {
        return $this->container['access_protocol'];
    }

    /**
     * Sets access_protocol
     *
     * @param string $access_protocol access_protocol
     *
     * @return $this
     */
    public function setAccessProtocol($access_protocol)
    {
        $this->container['access_protocol'] = $access_protocol;

        return $this;
    }

    /**
     * Gets defence_mode
     *
     * @return int
     */
    public function getDefenceMode()
    {
        return $this->container['defence_mode'];
    }

    /**
     * Sets defence_mode
     *
     * @param int $defence_mode defence_mode
     *
     * @return $this
     */
    public function setDefenceMode($defence_mode)
    {
        $this->container['defence_mode'] = $defence_mode;

        return $this;
    }

    /**
     * Gets instance_id
     *
     * @return string
     */
    public function getInstanceId()
    {
        return $this->container['instance_id'];
    }

    /**
     * Sets instance_id
     *
     * @param string $instance_id instance_id
     *
     * @return $this
     */
    public function setInstanceId($instance_id)
    {
        $this->container['instance_id'] = $instance_id;

        return $this;
    }

    /**
     * Gets instance_name
     *
     * @return string
     */
    public function getInstanceName()
    {
        return $this->container['instance_name'];
    }

    /**
     * Sets instance_name
     *
     * @param string $instance_name instance_name
     *
     * @return $this
     */
    public function setInstanceName($instance_name)
    {
        $this->container['instance_name'] = $instance_name;

        return $this;
    }

    /**
     * Gets listener_id
     *
     * @return string
     */
    public function getListenerId()
    {
        return $this->container['listener_id'];
    }

    /**
     * Sets listener_id
     *
     * @param string $listener_id listener_id
     *
     * @return $this
     */
    public function setListenerId($listener_id)
    {
        $this->container['listener_id'] = $listener_id;

        return $this;
    }

    /**
     * Gets lost_association_from_alb
     *
     * @return int
     */
    public function getLostAssociationFromAlb()
    {
        return $this->container['lost_association_from_alb'];
    }

    /**
     * Sets lost_association_from_alb
     *
     * @param int $lost_association_from_alb lost_association_from_alb
     *
     * @return $this
     */
    public function setLostAssociationFromAlb($lost_association_from_alb)
    {
        $this->container['lost_association_from_alb'] = $lost_association_from_alb;

        return $this;
    }

    /**
     * Gets port
     *
     * @return string
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param string $port port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string $protocol protocol
     *
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;

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

