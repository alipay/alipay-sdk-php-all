<?php
/**
 * AlipayIserviceCcmAgentQueryModel
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
 * AlipayIserviceCcmAgentQueryModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayIserviceCcmAgentQueryModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayIserviceCcmAgentQueryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'answeringMode' => 'string',
        'ccsInstanceId' => 'string',
        'chatExtGroupIds' => 'string[]',
        'chatGroupIds' => 'string[]',
        'chatLevelIds' => 'string[]',
        'email' => 'string',
        'hotlineGroupIds' => 'string[]',
        'pageNum' => 'int',
        'pageSize' => 'int',
        'realName' => 'string',
        'roleIds' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'answeringMode' => null,
        'ccsInstanceId' => null,
        'chatExtGroupIds' => null,
        'chatGroupIds' => null,
        'chatLevelIds' => null,
        'email' => null,
        'hotlineGroupIds' => null,
        'pageNum' => null,
        'pageSize' => null,
        'realName' => null,
        'roleIds' => null
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
        'answeringMode' => 'answering_mode',
        'ccsInstanceId' => 'ccs_instance_id',
        'chatExtGroupIds' => 'chat_ext_group_ids',
        'chatGroupIds' => 'chat_group_ids',
        'chatLevelIds' => 'chat_level_ids',
        'email' => 'email',
        'hotlineGroupIds' => 'hotline_group_ids',
        'pageNum' => 'page_num',
        'pageSize' => 'page_size',
        'realName' => 'real_name',
        'roleIds' => 'role_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'answeringMode' => 'setAnsweringMode',
        'ccsInstanceId' => 'setCcsInstanceId',
        'chatExtGroupIds' => 'setChatExtGroupIds',
        'chatGroupIds' => 'setChatGroupIds',
        'chatLevelIds' => 'setChatLevelIds',
        'email' => 'setEmail',
        'hotlineGroupIds' => 'setHotlineGroupIds',
        'pageNum' => 'setPageNum',
        'pageSize' => 'setPageSize',
        'realName' => 'setRealName',
        'roleIds' => 'setRoleIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'answeringMode' => 'getAnsweringMode',
        'ccsInstanceId' => 'getCcsInstanceId',
        'chatExtGroupIds' => 'getChatExtGroupIds',
        'chatGroupIds' => 'getChatGroupIds',
        'chatLevelIds' => 'getChatLevelIds',
        'email' => 'getEmail',
        'hotlineGroupIds' => 'getHotlineGroupIds',
        'pageNum' => 'getPageNum',
        'pageSize' => 'getPageSize',
        'realName' => 'getRealName',
        'roleIds' => 'getRoleIds'
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
        $this->container['answeringMode'] = $data['answeringMode'] ?? null;
        $this->container['ccsInstanceId'] = $data['ccsInstanceId'] ?? null;
        $this->container['chatExtGroupIds'] = $data['chatExtGroupIds'] ?? null;
        $this->container['chatGroupIds'] = $data['chatGroupIds'] ?? null;
        $this->container['chatLevelIds'] = $data['chatLevelIds'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['hotlineGroupIds'] = $data['hotlineGroupIds'] ?? null;
        $this->container['pageNum'] = $data['pageNum'] ?? null;
        $this->container['pageSize'] = $data['pageSize'] ?? null;
        $this->container['realName'] = $data['realName'] ?? null;
        $this->container['roleIds'] = $data['roleIds'] ?? null;
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
     * Gets answeringMode
     *
     * @return string|null
     */
    public function getAnsweringMode()
    {
        return $this->container['answeringMode'];
    }

    /**
     * Sets answeringMode
     *
     * @param string|null $answeringMode 热线接入方式
     *
     * @return self
     */
    public function setAnsweringMode($answeringMode)
    {
        $this->container['answeringMode'] = $answeringMode;

        return $this;
    }

    /**
     * Gets ccsInstanceId
     *
     * @return string|null
     */
    public function getCcsInstanceId()
    {
        return $this->container['ccsInstanceId'];
    }

    /**
     * Sets ccsInstanceId
     *
     * @param string|null $ccsInstanceId 部门id
     *
     * @return self
     */
    public function setCcsInstanceId($ccsInstanceId)
    {
        $this->container['ccsInstanceId'] = $ccsInstanceId;

        return $this;
    }

    /**
     * Gets chatExtGroupIds
     *
     * @return string[]|null
     */
    public function getChatExtGroupIds()
    {
        return $this->container['chatExtGroupIds'];
    }

    /**
     * Sets chatExtGroupIds
     *
     * @param string[]|null $chatExtGroupIds 在线扩展技能组id
     *
     * @return self
     */
    public function setChatExtGroupIds($chatExtGroupIds)
    {
        $this->container['chatExtGroupIds'] = $chatExtGroupIds;

        return $this;
    }

    /**
     * Gets chatGroupIds
     *
     * @return string[]|null
     */
    public function getChatGroupIds()
    {
        return $this->container['chatGroupIds'];
    }

    /**
     * Sets chatGroupIds
     *
     * @param string[]|null $chatGroupIds 在线技能组id
     *
     * @return self
     */
    public function setChatGroupIds($chatGroupIds)
    {
        $this->container['chatGroupIds'] = $chatGroupIds;

        return $this;
    }

    /**
     * Gets chatLevelIds
     *
     * @return string[]|null
     */
    public function getChatLevelIds()
    {
        return $this->container['chatLevelIds'];
    }

    /**
     * Sets chatLevelIds
     *
     * @param string[]|null $chatLevelIds 在线服务等级
     *
     * @return self
     */
    public function setChatLevelIds($chatLevelIds)
    {
        $this->container['chatLevelIds'] = $chatLevelIds;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email 客服邮箱
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets hotlineGroupIds
     *
     * @return string[]|null
     */
    public function getHotlineGroupIds()
    {
        return $this->container['hotlineGroupIds'];
    }

    /**
     * Sets hotlineGroupIds
     *
     * @param string[]|null $hotlineGroupIds 热线扩展技能组id
     *
     * @return self
     */
    public function setHotlineGroupIds($hotlineGroupIds)
    {
        $this->container['hotlineGroupIds'] = $hotlineGroupIds;

        return $this;
    }

    /**
     * Gets pageNum
     *
     * @return int|null
     */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
     * Sets pageNum
     *
     * @param int|null $pageNum 查询结果的页码，起始值为 1，默认值为 1
     *
     * @return self
     */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int|null $pageSize 分页查询时设置的每页记录数，最大值 100 行，默认为 10
     *
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets realName
     *
     * @return string|null
     */
    public function getRealName()
    {
        return $this->container['realName'];
    }

    /**
     * Sets realName
     *
     * @param string|null $realName 客服姓名
     *
     * @return self
     */
    public function setRealName($realName)
    {
        $this->container['realName'] = $realName;

        return $this;
    }

    /**
     * Gets roleIds
     *
     * @return string[]|null
     */
    public function getRoleIds()
    {
        return $this->container['roleIds'];
    }

    /**
     * Sets roleIds
     *
     * @param string[]|null $roleIds 客服角色id
     *
     * @return self
     */
    public function setRoleIds($roleIds)
    {
        $this->container['roleIds'] = $roleIds;

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

