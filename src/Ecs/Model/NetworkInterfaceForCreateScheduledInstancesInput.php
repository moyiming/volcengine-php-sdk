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

class NetworkInterfaceForCreateScheduledInstancesInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NetworkInterfaceForCreateScheduledInstancesInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'primary_ip_address' => 'string',
        'private_ip_addresses' => 'string[]',
        'security_group_ids' => 'string[]',
        'subnet_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'primary_ip_address' => null,
        'private_ip_addresses' => null,
        'security_group_ids' => null,
        'subnet_id' => null
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
        'primary_ip_address' => 'PrimaryIpAddress',
        'private_ip_addresses' => 'PrivateIpAddresses',
        'security_group_ids' => 'SecurityGroupIds',
        'subnet_id' => 'SubnetId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'primary_ip_address' => 'setPrimaryIpAddress',
        'private_ip_addresses' => 'setPrivateIpAddresses',
        'security_group_ids' => 'setSecurityGroupIds',
        'subnet_id' => 'setSubnetId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'primary_ip_address' => 'getPrimaryIpAddress',
        'private_ip_addresses' => 'getPrivateIpAddresses',
        'security_group_ids' => 'getSecurityGroupIds',
        'subnet_id' => 'getSubnetId'
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
        $this->container['primary_ip_address'] = isset($data['primary_ip_address']) ? $data['primary_ip_address'] : null;
        $this->container['private_ip_addresses'] = isset($data['private_ip_addresses']) ? $data['private_ip_addresses'] : null;
        $this->container['security_group_ids'] = isset($data['security_group_ids']) ? $data['security_group_ids'] : null;
        $this->container['subnet_id'] = isset($data['subnet_id']) ? $data['subnet_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['subnet_id'] === null) {
            $invalidProperties[] = "'subnet_id' can't be null";
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
     * Gets primary_ip_address
     *
     * @return string
     */
    public function getPrimaryIpAddress()
    {
        return $this->container['primary_ip_address'];
    }

    /**
     * Sets primary_ip_address
     *
     * @param string $primary_ip_address primary_ip_address
     *
     * @return $this
     */
    public function setPrimaryIpAddress($primary_ip_address)
    {
        $this->container['primary_ip_address'] = $primary_ip_address;

        return $this;
    }

    /**
     * Gets private_ip_addresses
     *
     * @return string[]
     */
    public function getPrivateIpAddresses()
    {
        return $this->container['private_ip_addresses'];
    }

    /**
     * Sets private_ip_addresses
     *
     * @param string[] $private_ip_addresses private_ip_addresses
     *
     * @return $this
     */
    public function setPrivateIpAddresses($private_ip_addresses)
    {
        $this->container['private_ip_addresses'] = $private_ip_addresses;

        return $this;
    }

    /**
     * Gets security_group_ids
     *
     * @return string[]
     */
    public function getSecurityGroupIds()
    {
        return $this->container['security_group_ids'];
    }

    /**
     * Sets security_group_ids
     *
     * @param string[] $security_group_ids security_group_ids
     *
     * @return $this
     */
    public function setSecurityGroupIds($security_group_ids)
    {
        $this->container['security_group_ids'] = $security_group_ids;

        return $this;
    }

    /**
     * Gets subnet_id
     *
     * @return string
     */
    public function getSubnetId()
    {
        return $this->container['subnet_id'];
    }

    /**
     * Sets subnet_id
     *
     * @param string $subnet_id subnet_id
     *
     * @return $this
     */
    public function setSubnetId($subnet_id)
    {
        $this->container['subnet_id'] = $subnet_id;

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

