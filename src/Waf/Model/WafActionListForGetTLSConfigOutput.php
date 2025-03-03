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

class WafActionListForGetTLSConfigOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WafActionListForGetTLSConfigOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'answer_opt' => 'bool',
        'block' => 'bool',
        'drop' => 'bool',
        'human_verify' => 'bool',
        'human_verify_block' => 'bool',
        'js' => 'bool',
        'js_block' => 'bool',
        'observe' => 'bool',
        'pass' => 'bool',
        'permit' => 'bool',
        'pow' => 'bool',
        'pow_block' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'answer_opt' => null,
        'block' => null,
        'drop' => null,
        'human_verify' => null,
        'human_verify_block' => null,
        'js' => null,
        'js_block' => null,
        'observe' => null,
        'pass' => null,
        'permit' => null,
        'pow' => null,
        'pow_block' => null
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
        'answer_opt' => 'AnswerOpt',
        'block' => 'Block',
        'drop' => 'Drop',
        'human_verify' => 'HumanVerify',
        'human_verify_block' => 'HumanVerifyBlock',
        'js' => 'JS',
        'js_block' => 'JSBlock',
        'observe' => 'Observe',
        'pass' => 'Pass',
        'permit' => 'Permit',
        'pow' => 'Pow',
        'pow_block' => 'PowBlock'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'answer_opt' => 'setAnswerOpt',
        'block' => 'setBlock',
        'drop' => 'setDrop',
        'human_verify' => 'setHumanVerify',
        'human_verify_block' => 'setHumanVerifyBlock',
        'js' => 'setJs',
        'js_block' => 'setJsBlock',
        'observe' => 'setObserve',
        'pass' => 'setPass',
        'permit' => 'setPermit',
        'pow' => 'setPow',
        'pow_block' => 'setPowBlock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'answer_opt' => 'getAnswerOpt',
        'block' => 'getBlock',
        'drop' => 'getDrop',
        'human_verify' => 'getHumanVerify',
        'human_verify_block' => 'getHumanVerifyBlock',
        'js' => 'getJs',
        'js_block' => 'getJsBlock',
        'observe' => 'getObserve',
        'pass' => 'getPass',
        'permit' => 'getPermit',
        'pow' => 'getPow',
        'pow_block' => 'getPowBlock'
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
        $this->container['answer_opt'] = isset($data['answer_opt']) ? $data['answer_opt'] : null;
        $this->container['block'] = isset($data['block']) ? $data['block'] : null;
        $this->container['drop'] = isset($data['drop']) ? $data['drop'] : null;
        $this->container['human_verify'] = isset($data['human_verify']) ? $data['human_verify'] : null;
        $this->container['human_verify_block'] = isset($data['human_verify_block']) ? $data['human_verify_block'] : null;
        $this->container['js'] = isset($data['js']) ? $data['js'] : null;
        $this->container['js_block'] = isset($data['js_block']) ? $data['js_block'] : null;
        $this->container['observe'] = isset($data['observe']) ? $data['observe'] : null;
        $this->container['pass'] = isset($data['pass']) ? $data['pass'] : null;
        $this->container['permit'] = isset($data['permit']) ? $data['permit'] : null;
        $this->container['pow'] = isset($data['pow']) ? $data['pow'] : null;
        $this->container['pow_block'] = isset($data['pow_block']) ? $data['pow_block'] : null;
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
     * Gets answer_opt
     *
     * @return bool
     */
    public function getAnswerOpt()
    {
        return $this->container['answer_opt'];
    }

    /**
     * Sets answer_opt
     *
     * @param bool $answer_opt answer_opt
     *
     * @return $this
     */
    public function setAnswerOpt($answer_opt)
    {
        $this->container['answer_opt'] = $answer_opt;

        return $this;
    }

    /**
     * Gets block
     *
     * @return bool
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param bool $block block
     *
     * @return $this
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets drop
     *
     * @return bool
     */
    public function getDrop()
    {
        return $this->container['drop'];
    }

    /**
     * Sets drop
     *
     * @param bool $drop drop
     *
     * @return $this
     */
    public function setDrop($drop)
    {
        $this->container['drop'] = $drop;

        return $this;
    }

    /**
     * Gets human_verify
     *
     * @return bool
     */
    public function getHumanVerify()
    {
        return $this->container['human_verify'];
    }

    /**
     * Sets human_verify
     *
     * @param bool $human_verify human_verify
     *
     * @return $this
     */
    public function setHumanVerify($human_verify)
    {
        $this->container['human_verify'] = $human_verify;

        return $this;
    }

    /**
     * Gets human_verify_block
     *
     * @return bool
     */
    public function getHumanVerifyBlock()
    {
        return $this->container['human_verify_block'];
    }

    /**
     * Sets human_verify_block
     *
     * @param bool $human_verify_block human_verify_block
     *
     * @return $this
     */
    public function setHumanVerifyBlock($human_verify_block)
    {
        $this->container['human_verify_block'] = $human_verify_block;

        return $this;
    }

    /**
     * Gets js
     *
     * @return bool
     */
    public function getJs()
    {
        return $this->container['js'];
    }

    /**
     * Sets js
     *
     * @param bool $js js
     *
     * @return $this
     */
    public function setJs($js)
    {
        $this->container['js'] = $js;

        return $this;
    }

    /**
     * Gets js_block
     *
     * @return bool
     */
    public function getJsBlock()
    {
        return $this->container['js_block'];
    }

    /**
     * Sets js_block
     *
     * @param bool $js_block js_block
     *
     * @return $this
     */
    public function setJsBlock($js_block)
    {
        $this->container['js_block'] = $js_block;

        return $this;
    }

    /**
     * Gets observe
     *
     * @return bool
     */
    public function getObserve()
    {
        return $this->container['observe'];
    }

    /**
     * Sets observe
     *
     * @param bool $observe observe
     *
     * @return $this
     */
    public function setObserve($observe)
    {
        $this->container['observe'] = $observe;

        return $this;
    }

    /**
     * Gets pass
     *
     * @return bool
     */
    public function getPass()
    {
        return $this->container['pass'];
    }

    /**
     * Sets pass
     *
     * @param bool $pass pass
     *
     * @return $this
     */
    public function setPass($pass)
    {
        $this->container['pass'] = $pass;

        return $this;
    }

    /**
     * Gets permit
     *
     * @return bool
     */
    public function getPermit()
    {
        return $this->container['permit'];
    }

    /**
     * Sets permit
     *
     * @param bool $permit permit
     *
     * @return $this
     */
    public function setPermit($permit)
    {
        $this->container['permit'] = $permit;

        return $this;
    }

    /**
     * Gets pow
     *
     * @return bool
     */
    public function getPow()
    {
        return $this->container['pow'];
    }

    /**
     * Sets pow
     *
     * @param bool $pow pow
     *
     * @return $this
     */
    public function setPow($pow)
    {
        $this->container['pow'] = $pow;

        return $this;
    }

    /**
     * Gets pow_block
     *
     * @return bool
     */
    public function getPowBlock()
    {
        return $this->container['pow_block'];
    }

    /**
     * Sets pow_block
     *
     * @param bool $pow_block pow_block
     *
     * @return $this
     */
    public function setPowBlock($pow_block)
    {
        $this->container['pow_block'] = $pow_block;

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

