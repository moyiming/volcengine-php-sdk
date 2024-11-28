<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Cv20240606\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class HighAesGeneralV14IPKeepRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HighAesGeneralV14IPKeepRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'binary_data_base64' => 'string[]',
        'ddim_steps' => 'int',
        'height' => 'int',
        'image_urls' => 'string[]',
        'logo_info' => '\Volcengine\Cv20240606\Model\LogoInfoForHighAesGeneralV14IPKeepInput',
        'model_version' => 'string',
        'prompt' => 'string',
        'ref_id_weight' => 'float',
        'ref_ip_weight' => 'float',
        'req_key' => 'string',
        'return_url' => 'bool',
        'scale' => 'float',
        'seed' => 'int',
        'use_predict_tags' => 'bool',
        'use_rephraser' => 'bool',
        'use_sr' => 'bool',
        'width' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'binary_data_base64' => null,
        'ddim_steps' => 'int32',
        'height' => 'int32',
        'image_urls' => null,
        'logo_info' => null,
        'model_version' => null,
        'prompt' => null,
        'ref_id_weight' => 'float',
        'ref_ip_weight' => 'float',
        'req_key' => null,
        'return_url' => null,
        'scale' => 'float',
        'seed' => 'int32',
        'use_predict_tags' => null,
        'use_rephraser' => null,
        'use_sr' => null,
        'width' => 'int32'
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
        'binary_data_base64' => 'binary_data_base64',
        'ddim_steps' => 'ddim_steps',
        'height' => 'height',
        'image_urls' => 'image_urls',
        'logo_info' => 'logo_info',
        'model_version' => 'model_version',
        'prompt' => 'prompt',
        'ref_id_weight' => 'ref_id_weight',
        'ref_ip_weight' => 'ref_ip_weight',
        'req_key' => 'req_key',
        'return_url' => 'return_url',
        'scale' => 'scale',
        'seed' => 'seed',
        'use_predict_tags' => 'use_predict_tags',
        'use_rephraser' => 'use_rephraser',
        'use_sr' => 'use_sr',
        'width' => 'width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'binary_data_base64' => 'setBinaryDataBase64',
        'ddim_steps' => 'setDdimSteps',
        'height' => 'setHeight',
        'image_urls' => 'setImageUrls',
        'logo_info' => 'setLogoInfo',
        'model_version' => 'setModelVersion',
        'prompt' => 'setPrompt',
        'ref_id_weight' => 'setRefIdWeight',
        'ref_ip_weight' => 'setRefIpWeight',
        'req_key' => 'setReqKey',
        'return_url' => 'setReturnUrl',
        'scale' => 'setScale',
        'seed' => 'setSeed',
        'use_predict_tags' => 'setUsePredictTags',
        'use_rephraser' => 'setUseRephraser',
        'use_sr' => 'setUseSr',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'binary_data_base64' => 'getBinaryDataBase64',
        'ddim_steps' => 'getDdimSteps',
        'height' => 'getHeight',
        'image_urls' => 'getImageUrls',
        'logo_info' => 'getLogoInfo',
        'model_version' => 'getModelVersion',
        'prompt' => 'getPrompt',
        'ref_id_weight' => 'getRefIdWeight',
        'ref_ip_weight' => 'getRefIpWeight',
        'req_key' => 'getReqKey',
        'return_url' => 'getReturnUrl',
        'scale' => 'getScale',
        'seed' => 'getSeed',
        'use_predict_tags' => 'getUsePredictTags',
        'use_rephraser' => 'getUseRephraser',
        'use_sr' => 'getUseSr',
        'width' => 'getWidth'
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
        $this->container['binary_data_base64'] = isset($data['binary_data_base64']) ? $data['binary_data_base64'] : null;
        $this->container['ddim_steps'] = isset($data['ddim_steps']) ? $data['ddim_steps'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['image_urls'] = isset($data['image_urls']) ? $data['image_urls'] : null;
        $this->container['logo_info'] = isset($data['logo_info']) ? $data['logo_info'] : null;
        $this->container['model_version'] = isset($data['model_version']) ? $data['model_version'] : null;
        $this->container['prompt'] = isset($data['prompt']) ? $data['prompt'] : null;
        $this->container['ref_id_weight'] = isset($data['ref_id_weight']) ? $data['ref_id_weight'] : null;
        $this->container['ref_ip_weight'] = isset($data['ref_ip_weight']) ? $data['ref_ip_weight'] : null;
        $this->container['req_key'] = isset($data['req_key']) ? $data['req_key'] : null;
        $this->container['return_url'] = isset($data['return_url']) ? $data['return_url'] : null;
        $this->container['scale'] = isset($data['scale']) ? $data['scale'] : null;
        $this->container['seed'] = isset($data['seed']) ? $data['seed'] : null;
        $this->container['use_predict_tags'] = isset($data['use_predict_tags']) ? $data['use_predict_tags'] : null;
        $this->container['use_rephraser'] = isset($data['use_rephraser']) ? $data['use_rephraser'] : null;
        $this->container['use_sr'] = isset($data['use_sr']) ? $data['use_sr'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['model_version'] === null) {
            $invalidProperties[] = "'model_version' can't be null";
        }
        if ($this->container['prompt'] === null) {
            $invalidProperties[] = "'prompt' can't be null";
        }
        if ($this->container['req_key'] === null) {
            $invalidProperties[] = "'req_key' can't be null";
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
     * Gets binary_data_base64
     *
     * @return string[]
     */
    public function getBinaryDataBase64()
    {
        return $this->container['binary_data_base64'];
    }

    /**
     * Sets binary_data_base64
     *
     * @param string[] $binary_data_base64 binary_data_base64
     *
     * @return $this
     */
    public function setBinaryDataBase64($binary_data_base64)
    {
        $this->container['binary_data_base64'] = $binary_data_base64;

        return $this;
    }

    /**
     * Gets ddim_steps
     *
     * @return int
     */
    public function getDdimSteps()
    {
        return $this->container['ddim_steps'];
    }

    /**
     * Sets ddim_steps
     *
     * @param int $ddim_steps ddim_steps
     *
     * @return $this
     */
    public function setDdimSteps($ddim_steps)
    {
        $this->container['ddim_steps'] = $ddim_steps;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets image_urls
     *
     * @return string[]
     */
    public function getImageUrls()
    {
        return $this->container['image_urls'];
    }

    /**
     * Sets image_urls
     *
     * @param string[] $image_urls image_urls
     *
     * @return $this
     */
    public function setImageUrls($image_urls)
    {
        $this->container['image_urls'] = $image_urls;

        return $this;
    }

    /**
     * Gets logo_info
     *
     * @return \Volcengine\Cv20240606\Model\LogoInfoForHighAesGeneralV14IPKeepInput
     */
    public function getLogoInfo()
    {
        return $this->container['logo_info'];
    }

    /**
     * Sets logo_info
     *
     * @param \Volcengine\Cv20240606\Model\LogoInfoForHighAesGeneralV14IPKeepInput $logo_info logo_info
     *
     * @return $this
     */
    public function setLogoInfo($logo_info)
    {
        $this->container['logo_info'] = $logo_info;

        return $this;
    }

    /**
     * Gets model_version
     *
     * @return string
     */
    public function getModelVersion()
    {
        return $this->container['model_version'];
    }

    /**
     * Sets model_version
     *
     * @param string $model_version model_version
     *
     * @return $this
     */
    public function setModelVersion($model_version)
    {
        $this->container['model_version'] = $model_version;

        return $this;
    }

    /**
     * Gets prompt
     *
     * @return string
     */
    public function getPrompt()
    {
        return $this->container['prompt'];
    }

    /**
     * Sets prompt
     *
     * @param string $prompt prompt
     *
     * @return $this
     */
    public function setPrompt($prompt)
    {
        $this->container['prompt'] = $prompt;

        return $this;
    }

    /**
     * Gets ref_id_weight
     *
     * @return float
     */
    public function getRefIdWeight()
    {
        return $this->container['ref_id_weight'];
    }

    /**
     * Sets ref_id_weight
     *
     * @param float $ref_id_weight ref_id_weight
     *
     * @return $this
     */
    public function setRefIdWeight($ref_id_weight)
    {
        $this->container['ref_id_weight'] = $ref_id_weight;

        return $this;
    }

    /**
     * Gets ref_ip_weight
     *
     * @return float
     */
    public function getRefIpWeight()
    {
        return $this->container['ref_ip_weight'];
    }

    /**
     * Sets ref_ip_weight
     *
     * @param float $ref_ip_weight ref_ip_weight
     *
     * @return $this
     */
    public function setRefIpWeight($ref_ip_weight)
    {
        $this->container['ref_ip_weight'] = $ref_ip_weight;

        return $this;
    }

    /**
     * Gets req_key
     *
     * @return string
     */
    public function getReqKey()
    {
        return $this->container['req_key'];
    }

    /**
     * Sets req_key
     *
     * @param string $req_key req_key
     *
     * @return $this
     */
    public function setReqKey($req_key)
    {
        $this->container['req_key'] = $req_key;

        return $this;
    }

    /**
     * Gets return_url
     *
     * @return bool
     */
    public function getReturnUrl()
    {
        return $this->container['return_url'];
    }

    /**
     * Sets return_url
     *
     * @param bool $return_url return_url
     *
     * @return $this
     */
    public function setReturnUrl($return_url)
    {
        $this->container['return_url'] = $return_url;

        return $this;
    }

    /**
     * Gets scale
     *
     * @return float
     */
    public function getScale()
    {
        return $this->container['scale'];
    }

    /**
     * Sets scale
     *
     * @param float $scale scale
     *
     * @return $this
     */
    public function setScale($scale)
    {
        $this->container['scale'] = $scale;

        return $this;
    }

    /**
     * Gets seed
     *
     * @return int
     */
    public function getSeed()
    {
        return $this->container['seed'];
    }

    /**
     * Sets seed
     *
     * @param int $seed seed
     *
     * @return $this
     */
    public function setSeed($seed)
    {
        $this->container['seed'] = $seed;

        return $this;
    }

    /**
     * Gets use_predict_tags
     *
     * @return bool
     */
    public function getUsePredictTags()
    {
        return $this->container['use_predict_tags'];
    }

    /**
     * Sets use_predict_tags
     *
     * @param bool $use_predict_tags use_predict_tags
     *
     * @return $this
     */
    public function setUsePredictTags($use_predict_tags)
    {
        $this->container['use_predict_tags'] = $use_predict_tags;

        return $this;
    }

    /**
     * Gets use_rephraser
     *
     * @return bool
     */
    public function getUseRephraser()
    {
        return $this->container['use_rephraser'];
    }

    /**
     * Sets use_rephraser
     *
     * @param bool $use_rephraser use_rephraser
     *
     * @return $this
     */
    public function setUseRephraser($use_rephraser)
    {
        $this->container['use_rephraser'] = $use_rephraser;

        return $this;
    }

    /**
     * Gets use_sr
     *
     * @return bool
     */
    public function getUseSr()
    {
        return $this->container['use_sr'];
    }

    /**
     * Sets use_sr
     *
     * @param bool $use_sr use_sr
     *
     * @return $this
     */
    public function setUseSr($use_sr)
    {
        $this->container['use_sr'] = $use_sr;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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

