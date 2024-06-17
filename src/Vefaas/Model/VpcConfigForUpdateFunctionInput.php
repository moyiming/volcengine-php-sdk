<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Vefaas\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class VpcConfigForUpdateFunctionInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VpcConfigForUpdateFunctionInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enable_shared_internet_access' => 'bool',
        'enable_vpc' => 'bool',
        'security_group_ids' => 'string[]',
        'subnet_ids' => 'string[]',
        'vpc_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enable_shared_internet_access' => null,
        'enable_vpc' => null,
        'security_group_ids' => null,
        'subnet_ids' => null,
        'vpc_id' => null
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
        'enable_shared_internet_access' => 'EnableSharedInternetAccess',
        'enable_vpc' => 'EnableVpc',
        'security_group_ids' => 'SecurityGroupIds',
        'subnet_ids' => 'SubnetIds',
        'vpc_id' => 'VpcId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enable_shared_internet_access' => 'setEnableSharedInternetAccess',
        'enable_vpc' => 'setEnableVpc',
        'security_group_ids' => 'setSecurityGroupIds',
        'subnet_ids' => 'setSubnetIds',
        'vpc_id' => 'setVpcId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enable_shared_internet_access' => 'getEnableSharedInternetAccess',
        'enable_vpc' => 'getEnableVpc',
        'security_group_ids' => 'getSecurityGroupIds',
        'subnet_ids' => 'getSubnetIds',
        'vpc_id' => 'getVpcId'
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
        $this->container['enable_shared_internet_access'] = isset($data['enable_shared_internet_access']) ? $data['enable_shared_internet_access'] : null;
        $this->container['enable_vpc'] = isset($data['enable_vpc']) ? $data['enable_vpc'] : null;
        $this->container['security_group_ids'] = isset($data['security_group_ids']) ? $data['security_group_ids'] : null;
        $this->container['subnet_ids'] = isset($data['subnet_ids']) ? $data['subnet_ids'] : null;
        $this->container['vpc_id'] = isset($data['vpc_id']) ? $data['vpc_id'] : null;
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
     * Gets enable_shared_internet_access
     *
     * @return bool
     */
    public function getEnableSharedInternetAccess()
    {
        return $this->container['enable_shared_internet_access'];
    }

    /**
     * Sets enable_shared_internet_access
     *
     * @param bool $enable_shared_internet_access enable_shared_internet_access
     *
     * @return $this
     */
    public function setEnableSharedInternetAccess($enable_shared_internet_access)
    {
        $this->container['enable_shared_internet_access'] = $enable_shared_internet_access;

        return $this;
    }

    /**
     * Gets enable_vpc
     *
     * @return bool
     */
    public function getEnableVpc()
    {
        return $this->container['enable_vpc'];
    }

    /**
     * Sets enable_vpc
     *
     * @param bool $enable_vpc enable_vpc
     *
     * @return $this
     */
    public function setEnableVpc($enable_vpc)
    {
        $this->container['enable_vpc'] = $enable_vpc;

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
     * Gets subnet_ids
     *
     * @return string[]
     */
    public function getSubnetIds()
    {
        return $this->container['subnet_ids'];
    }

    /**
     * Sets subnet_ids
     *
     * @param string[] $subnet_ids subnet_ids
     *
     * @return $this
     */
    public function setSubnetIds($subnet_ids)
    {
        $this->container['subnet_ids'] = $subnet_ids;

        return $this;
    }

    /**
     * Gets vpc_id
     *
     * @return string
     */
    public function getVpcId()
    {
        return $this->container['vpc_id'];
    }

    /**
     * Sets vpc_id
     *
     * @param string $vpc_id vpc_id
     *
     * @return $this
     */
    public function setVpcId($vpc_id)
    {
        $this->container['vpc_id'] = $vpc_id;

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

