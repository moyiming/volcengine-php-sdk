<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Cloudtrail20180101\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class CreateTrailResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateTrailResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'event_rw' => 'string',
        'event_sources' => 'string[]',
        'tls_project_name' => 'string',
        'tls_project_region' => 'string',
        'tls_topic_name' => 'string',
        'tos_bucket_name' => 'string',
        'tos_bucket_region' => 'string',
        'tos_key_prefix' => 'string',
        'trail_name' => 'string',
        'trail_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'event_rw' => null,
        'event_sources' => null,
        'tls_project_name' => null,
        'tls_project_region' => null,
        'tls_topic_name' => null,
        'tos_bucket_name' => null,
        'tos_bucket_region' => null,
        'tos_key_prefix' => null,
        'trail_name' => null,
        'trail_type' => 'int32'
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
        'event_rw' => 'EventRW',
        'event_sources' => 'EventSources',
        'tls_project_name' => 'TlsProjectName',
        'tls_project_region' => 'TlsProjectRegion',
        'tls_topic_name' => 'TlsTopicName',
        'tos_bucket_name' => 'TosBucketName',
        'tos_bucket_region' => 'TosBucketRegion',
        'tos_key_prefix' => 'TosKeyPrefix',
        'trail_name' => 'TrailName',
        'trail_type' => 'TrailType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_rw' => 'setEventRw',
        'event_sources' => 'setEventSources',
        'tls_project_name' => 'setTlsProjectName',
        'tls_project_region' => 'setTlsProjectRegion',
        'tls_topic_name' => 'setTlsTopicName',
        'tos_bucket_name' => 'setTosBucketName',
        'tos_bucket_region' => 'setTosBucketRegion',
        'tos_key_prefix' => 'setTosKeyPrefix',
        'trail_name' => 'setTrailName',
        'trail_type' => 'setTrailType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_rw' => 'getEventRw',
        'event_sources' => 'getEventSources',
        'tls_project_name' => 'getTlsProjectName',
        'tls_project_region' => 'getTlsProjectRegion',
        'tls_topic_name' => 'getTlsTopicName',
        'tos_bucket_name' => 'getTosBucketName',
        'tos_bucket_region' => 'getTosBucketRegion',
        'tos_key_prefix' => 'getTosKeyPrefix',
        'trail_name' => 'getTrailName',
        'trail_type' => 'getTrailType'
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
        $this->container['event_rw'] = isset($data['event_rw']) ? $data['event_rw'] : null;
        $this->container['event_sources'] = isset($data['event_sources']) ? $data['event_sources'] : null;
        $this->container['tls_project_name'] = isset($data['tls_project_name']) ? $data['tls_project_name'] : null;
        $this->container['tls_project_region'] = isset($data['tls_project_region']) ? $data['tls_project_region'] : null;
        $this->container['tls_topic_name'] = isset($data['tls_topic_name']) ? $data['tls_topic_name'] : null;
        $this->container['tos_bucket_name'] = isset($data['tos_bucket_name']) ? $data['tos_bucket_name'] : null;
        $this->container['tos_bucket_region'] = isset($data['tos_bucket_region']) ? $data['tos_bucket_region'] : null;
        $this->container['tos_key_prefix'] = isset($data['tos_key_prefix']) ? $data['tos_key_prefix'] : null;
        $this->container['trail_name'] = isset($data['trail_name']) ? $data['trail_name'] : null;
        $this->container['trail_type'] = isset($data['trail_type']) ? $data['trail_type'] : null;
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
     * Gets event_rw
     *
     * @return string
     */
    public function getEventRw()
    {
        return $this->container['event_rw'];
    }

    /**
     * Sets event_rw
     *
     * @param string $event_rw event_rw
     *
     * @return $this
     */
    public function setEventRw($event_rw)
    {
        $this->container['event_rw'] = $event_rw;

        return $this;
    }

    /**
     * Gets event_sources
     *
     * @return string[]
     */
    public function getEventSources()
    {
        return $this->container['event_sources'];
    }

    /**
     * Sets event_sources
     *
     * @param string[] $event_sources event_sources
     *
     * @return $this
     */
    public function setEventSources($event_sources)
    {
        $this->container['event_sources'] = $event_sources;

        return $this;
    }

    /**
     * Gets tls_project_name
     *
     * @return string
     */
    public function getTlsProjectName()
    {
        return $this->container['tls_project_name'];
    }

    /**
     * Sets tls_project_name
     *
     * @param string $tls_project_name tls_project_name
     *
     * @return $this
     */
    public function setTlsProjectName($tls_project_name)
    {
        $this->container['tls_project_name'] = $tls_project_name;

        return $this;
    }

    /**
     * Gets tls_project_region
     *
     * @return string
     */
    public function getTlsProjectRegion()
    {
        return $this->container['tls_project_region'];
    }

    /**
     * Sets tls_project_region
     *
     * @param string $tls_project_region tls_project_region
     *
     * @return $this
     */
    public function setTlsProjectRegion($tls_project_region)
    {
        $this->container['tls_project_region'] = $tls_project_region;

        return $this;
    }

    /**
     * Gets tls_topic_name
     *
     * @return string
     */
    public function getTlsTopicName()
    {
        return $this->container['tls_topic_name'];
    }

    /**
     * Sets tls_topic_name
     *
     * @param string $tls_topic_name tls_topic_name
     *
     * @return $this
     */
    public function setTlsTopicName($tls_topic_name)
    {
        $this->container['tls_topic_name'] = $tls_topic_name;

        return $this;
    }

    /**
     * Gets tos_bucket_name
     *
     * @return string
     */
    public function getTosBucketName()
    {
        return $this->container['tos_bucket_name'];
    }

    /**
     * Sets tos_bucket_name
     *
     * @param string $tos_bucket_name tos_bucket_name
     *
     * @return $this
     */
    public function setTosBucketName($tos_bucket_name)
    {
        $this->container['tos_bucket_name'] = $tos_bucket_name;

        return $this;
    }

    /**
     * Gets tos_bucket_region
     *
     * @return string
     */
    public function getTosBucketRegion()
    {
        return $this->container['tos_bucket_region'];
    }

    /**
     * Sets tos_bucket_region
     *
     * @param string $tos_bucket_region tos_bucket_region
     *
     * @return $this
     */
    public function setTosBucketRegion($tos_bucket_region)
    {
        $this->container['tos_bucket_region'] = $tos_bucket_region;

        return $this;
    }

    /**
     * Gets tos_key_prefix
     *
     * @return string
     */
    public function getTosKeyPrefix()
    {
        return $this->container['tos_key_prefix'];
    }

    /**
     * Sets tos_key_prefix
     *
     * @param string $tos_key_prefix tos_key_prefix
     *
     * @return $this
     */
    public function setTosKeyPrefix($tos_key_prefix)
    {
        $this->container['tos_key_prefix'] = $tos_key_prefix;

        return $this;
    }

    /**
     * Gets trail_name
     *
     * @return string
     */
    public function getTrailName()
    {
        return $this->container['trail_name'];
    }

    /**
     * Sets trail_name
     *
     * @param string $trail_name trail_name
     *
     * @return $this
     */
    public function setTrailName($trail_name)
    {
        $this->container['trail_name'] = $trail_name;

        return $this;
    }

    /**
     * Gets trail_type
     *
     * @return int
     */
    public function getTrailType()
    {
        return $this->container['trail_type'];
    }

    /**
     * Sets trail_type
     *
     * @param int $trail_type trail_type
     *
     * @return $this
     */
    public function setTrailType($trail_type)
    {
        $this->container['trail_type'] = $trail_type;

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

