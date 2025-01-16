<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Ark\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class PresetDatasetForGetModelCustomizationJobOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PresetDatasetForGetModelCustomizationJobOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dataset_version_id' => 'string',
        'inject_multiplier' => 'double',
        'inject_sample_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dataset_version_id' => null,
        'inject_multiplier' => 'double',
        'inject_sample_count' => 'int64'
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
        'dataset_version_id' => 'DatasetVersionId',
        'inject_multiplier' => 'InjectMultiplier',
        'inject_sample_count' => 'InjectSampleCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dataset_version_id' => 'setDatasetVersionId',
        'inject_multiplier' => 'setInjectMultiplier',
        'inject_sample_count' => 'setInjectSampleCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dataset_version_id' => 'getDatasetVersionId',
        'inject_multiplier' => 'getInjectMultiplier',
        'inject_sample_count' => 'getInjectSampleCount'
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
        $this->container['dataset_version_id'] = isset($data['dataset_version_id']) ? $data['dataset_version_id'] : null;
        $this->container['inject_multiplier'] = isset($data['inject_multiplier']) ? $data['inject_multiplier'] : null;
        $this->container['inject_sample_count'] = isset($data['inject_sample_count']) ? $data['inject_sample_count'] : null;
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
     * Gets dataset_version_id
     *
     * @return string
     */
    public function getDatasetVersionId()
    {
        return $this->container['dataset_version_id'];
    }

    /**
     * Sets dataset_version_id
     *
     * @param string $dataset_version_id dataset_version_id
     *
     * @return $this
     */
    public function setDatasetVersionId($dataset_version_id)
    {
        $this->container['dataset_version_id'] = $dataset_version_id;

        return $this;
    }

    /**
     * Gets inject_multiplier
     *
     * @return double
     */
    public function getInjectMultiplier()
    {
        return $this->container['inject_multiplier'];
    }

    /**
     * Sets inject_multiplier
     *
     * @param double $inject_multiplier inject_multiplier
     *
     * @return $this
     */
    public function setInjectMultiplier($inject_multiplier)
    {
        $this->container['inject_multiplier'] = $inject_multiplier;

        return $this;
    }

    /**
     * Gets inject_sample_count
     *
     * @return int
     */
    public function getInjectSampleCount()
    {
        return $this->container['inject_sample_count'];
    }

    /**
     * Sets inject_sample_count
     *
     * @param int $inject_sample_count inject_sample_count
     *
     * @return $this
     */
    public function setInjectSampleCount($inject_sample_count)
    {
        $this->container['inject_sample_count'] = $inject_sample_count;

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

