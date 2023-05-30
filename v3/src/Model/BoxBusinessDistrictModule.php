<?php
/**
 * BoxBusinessDistrictModule
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2023-05-22
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * BoxBusinessDistrictModule Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BoxBusinessDistrictModule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BoxBusinessDistrictModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'businessDistrictInfos' => '\Alipay\OpenAPISDK\Model\BoxBusinessDistrictInfo[]',
        'moduleId' => 'string',
        'moduleType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'businessDistrictInfos' => null,
        'moduleId' => null,
        'moduleType' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'businessDistrictInfos' => 'business_district_infos',
        'moduleId' => 'module_id',
        'moduleType' => 'module_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'businessDistrictInfos' => 'setBusinessDistrictInfos',
        'moduleId' => 'setModuleId',
        'moduleType' => 'setModuleType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'businessDistrictInfos' => 'getBusinessDistrictInfos',
        'moduleId' => 'getModuleId',
        'moduleType' => 'getModuleType'
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
        return self::$openAPIModelName;
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
        $this->container['businessDistrictInfos'] = $data['businessDistrictInfos'] ?? null;
        $this->container['moduleId'] = $data['moduleId'] ?? null;
        $this->container['moduleType'] = $data['moduleType'] ?? null;
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
     * Gets businessDistrictInfos
     *
     * @return \Alipay\OpenAPISDK\Model\BoxBusinessDistrictInfo[]|null
     */
    public function getBusinessDistrictInfos()
    {
        return $this->container['businessDistrictInfos'];
    }

    /**
     * Sets businessDistrictInfos
     *
     * @param \Alipay\OpenAPISDK\Model\BoxBusinessDistrictInfo[]|null $businessDistrictInfos 商圈选择
     *
     * @return self
     */
    public function setBusinessDistrictInfos($businessDistrictInfos)
    {
        $this->container['businessDistrictInfos'] = $businessDistrictInfos;

        return $this;
    }

    /**
     * Gets moduleId
     *
     * @return string|null
     */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
     * Sets moduleId
     *
     * @param string|null $moduleId 模块ID
     *
     * @return self
     */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;

        return $this;
    }

    /**
     * Gets moduleType
     *
     * @return string|null
     */
    public function getModuleType()
    {
        return $this->container['moduleType'];
    }

    /**
     * Sets moduleType
     *
     * @param string|null $moduleType 搜索直达模块类型，BOX_EXCLUSIVE_BASE-基础信息/BOX_EXCLUSIVE_KEYWORD-关键词/BOX_EXCLUSIVE_FUNCTIONS-功能服务/BOX_EXCLUSIVE_ACCOUNTS-关联账号/BOX_ATMOSPHERE_IMAGE-氛围图/BOX_BUSINESS_DISTRICT-商圈信息/BOX_EXCLUSIVE_AREA_KEYWORD-地域触发词
     *
     * @return self
     */
    public function setModuleType($moduleType)
    {
        $this->container['moduleType'] = $moduleType;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

