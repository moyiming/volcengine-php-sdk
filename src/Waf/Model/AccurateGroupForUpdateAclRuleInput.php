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

class AccurateGroupForUpdateAclRuleInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccurateGroupForUpdateAclRuleInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accurate_group_priority' => 'int',
        'accurate_rules' => '\Volcengine\Waf\Model\AccurateRuleForUpdateAclRuleInput[]',
        'id' => 'int',
        'logic' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accurate_group_priority' => 'int32',
        'accurate_rules' => null,
        'id' => 'int32',
        'logic' => 'int32'
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
        'accurate_group_priority' => 'AccurateGroupPriority',
        'accurate_rules' => 'AccurateRules',
        'id' => 'Id',
        'logic' => 'Logic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accurate_group_priority' => 'setAccurateGroupPriority',
        'accurate_rules' => 'setAccurateRules',
        'id' => 'setId',
        'logic' => 'setLogic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accurate_group_priority' => 'getAccurateGroupPriority',
        'accurate_rules' => 'getAccurateRules',
        'id' => 'getId',
        'logic' => 'getLogic'
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
        $this->container['accurate_group_priority'] = isset($data['accurate_group_priority']) ? $data['accurate_group_priority'] : null;
        $this->container['accurate_rules'] = isset($data['accurate_rules']) ? $data['accurate_rules'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['logic'] = isset($data['logic']) ? $data['logic'] : null;
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
     * Gets accurate_group_priority
     *
     * @return int
     */
    public function getAccurateGroupPriority()
    {
        return $this->container['accurate_group_priority'];
    }

    /**
     * Sets accurate_group_priority
     *
     * @param int $accurate_group_priority accurate_group_priority
     *
     * @return $this
     */
    public function setAccurateGroupPriority($accurate_group_priority)
    {
        $this->container['accurate_group_priority'] = $accurate_group_priority;

        return $this;
    }

    /**
     * Gets accurate_rules
     *
     * @return \Volcengine\Waf\Model\AccurateRuleForUpdateAclRuleInput[]
     */
    public function getAccurateRules()
    {
        return $this->container['accurate_rules'];
    }

    /**
     * Sets accurate_rules
     *
     * @param \Volcengine\Waf\Model\AccurateRuleForUpdateAclRuleInput[] $accurate_rules accurate_rules
     *
     * @return $this
     */
    public function setAccurateRules($accurate_rules)
    {
        $this->container['accurate_rules'] = $accurate_rules;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets logic
     *
     * @return int
     */
    public function getLogic()
    {
        return $this->container['logic'];
    }

    /**
     * Sets logic
     *
     * @param int $logic logic
     *
     * @return $this
     */
    public function setLogic($logic)
    {
        $this->container['logic'] = $logic;

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

