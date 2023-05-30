<?php
/**
 * MiniAppCategory
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
 * MiniAppCategory Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MiniAppCategory implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MiniAppCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categoryId' => 'string',
        'categoryName' => 'string',
        'hasChild' => 'bool',
        'needLicense' => 'bool',
        'needOutDoorPic' => 'bool',
        'needSpecialLicense' => 'bool',
        'parentCategoryId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'categoryId' => null,
        'categoryName' => null,
        'hasChild' => null,
        'needLicense' => null,
        'needOutDoorPic' => null,
        'needSpecialLicense' => null,
        'parentCategoryId' => null
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
        'categoryId' => 'category_id',
        'categoryName' => 'category_name',
        'hasChild' => 'has_child',
        'needLicense' => 'need_license',
        'needOutDoorPic' => 'need_out_door_pic',
        'needSpecialLicense' => 'need_special_license',
        'parentCategoryId' => 'parent_category_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoryId' => 'setCategoryId',
        'categoryName' => 'setCategoryName',
        'hasChild' => 'setHasChild',
        'needLicense' => 'setNeedLicense',
        'needOutDoorPic' => 'setNeedOutDoorPic',
        'needSpecialLicense' => 'setNeedSpecialLicense',
        'parentCategoryId' => 'setParentCategoryId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoryId' => 'getCategoryId',
        'categoryName' => 'getCategoryName',
        'hasChild' => 'getHasChild',
        'needLicense' => 'getNeedLicense',
        'needOutDoorPic' => 'getNeedOutDoorPic',
        'needSpecialLicense' => 'getNeedSpecialLicense',
        'parentCategoryId' => 'getParentCategoryId'
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
        $this->container['categoryId'] = $data['categoryId'] ?? null;
        $this->container['categoryName'] = $data['categoryName'] ?? null;
        $this->container['hasChild'] = $data['hasChild'] ?? null;
        $this->container['needLicense'] = $data['needLicense'] ?? null;
        $this->container['needOutDoorPic'] = $data['needOutDoorPic'] ?? null;
        $this->container['needSpecialLicense'] = $data['needSpecialLicense'] ?? null;
        $this->container['parentCategoryId'] = $data['parentCategoryId'] ?? null;
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
     * Gets categoryId
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param string|null $categoryId 类目id
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets categoryName
     *
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->container['categoryName'];
    }

    /**
     * Sets categoryName
     *
     * @param string|null $categoryName 类目名称
     *
     * @return self
     */
    public function setCategoryName($categoryName)
    {
        $this->container['categoryName'] = $categoryName;

        return $this;
    }

    /**
     * Gets hasChild
     *
     * @return bool|null
     */
    public function getHasChild()
    {
        return $this->container['hasChild'];
    }

    /**
     * Sets hasChild
     *
     * @param bool|null $hasChild 是否有子类目
     *
     * @return self
     */
    public function setHasChild($hasChild)
    {
        $this->container['hasChild'] = $hasChild;

        return $this;
    }

    /**
     * Gets needLicense
     *
     * @return bool|null
     */
    public function getNeedLicense()
    {
        return $this->container['needLicense'];
    }

    /**
     * Sets needLicense
     *
     * @param bool|null $needLicense 是否需要营业执照
     *
     * @return self
     */
    public function setNeedLicense($needLicense)
    {
        $this->container['needLicense'] = $needLicense;

        return $this;
    }

    /**
     * Gets needOutDoorPic
     *
     * @return bool|null
     */
    public function getNeedOutDoorPic()
    {
        return $this->container['needOutDoorPic'];
    }

    /**
     * Sets needOutDoorPic
     *
     * @param bool|null $needOutDoorPic 是否需要门头照
     *
     * @return self
     */
    public function setNeedOutDoorPic($needOutDoorPic)
    {
        $this->container['needOutDoorPic'] = $needOutDoorPic;

        return $this;
    }

    /**
     * Gets needSpecialLicense
     *
     * @return bool|null
     */
    public function getNeedSpecialLicense()
    {
        return $this->container['needSpecialLicense'];
    }

    /**
     * Sets needSpecialLicense
     *
     * @param bool|null $needSpecialLicense 是否需要特许营业执照
     *
     * @return self
     */
    public function setNeedSpecialLicense($needSpecialLicense)
    {
        $this->container['needSpecialLicense'] = $needSpecialLicense;

        return $this;
    }

    /**
     * Gets parentCategoryId
     *
     * @return string|null
     */
    public function getParentCategoryId()
    {
        return $this->container['parentCategoryId'];
    }

    /**
     * Sets parentCategoryId
     *
     * @param string|null $parentCategoryId 父类目id
     *
     * @return self
     */
    public function setParentCategoryId($parentCategoryId)
    {
        $this->container['parentCategoryId'] = $parentCategoryId;

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

