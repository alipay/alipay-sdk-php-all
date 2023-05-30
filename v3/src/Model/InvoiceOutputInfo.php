<?php
/**
 * InvoiceOutputInfo
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
 * InvoiceOutputInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InvoiceOutputInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceOutputInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'checkCode' => 'string',
        'checker' => 'string',
        'clerk' => 'string',
        'exTaxAmount' => 'string',
        'invoiceCode' => 'string',
        'invoiceContent' => '\Alipay\OpenAPISDK\Model\InvoiceItemOpenModel[]',
        'invoiceDate' => 'string',
        'invoiceImgUrl' => 'string',
        'invoiceKind' => 'string',
        'invoiceMemo' => 'string',
        'invoiceNo' => 'string',
        'invoiceTitle' => '\Alipay\OpenAPISDK\Model\InvoiceTitleOpenModel',
        'invoiceType' => 'string',
        'oriBlueInvCode' => 'string',
        'oriBlueInvNo' => 'string',
        'payee' => 'string',
        'payeeAddressTel' => 'string',
        'payeeBankNameAccount' => 'string',
        'payeeName' => 'string',
        'payeeRegisterNo' => 'string',
        'sumAmount' => 'string',
        'taxAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'checkCode' => null,
        'checker' => null,
        'clerk' => null,
        'exTaxAmount' => null,
        'invoiceCode' => null,
        'invoiceContent' => null,
        'invoiceDate' => null,
        'invoiceImgUrl' => null,
        'invoiceKind' => null,
        'invoiceMemo' => null,
        'invoiceNo' => null,
        'invoiceTitle' => null,
        'invoiceType' => null,
        'oriBlueInvCode' => null,
        'oriBlueInvNo' => null,
        'payee' => null,
        'payeeAddressTel' => null,
        'payeeBankNameAccount' => null,
        'payeeName' => null,
        'payeeRegisterNo' => null,
        'sumAmount' => null,
        'taxAmount' => null
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
        'checkCode' => 'check_code',
        'checker' => 'checker',
        'clerk' => 'clerk',
        'exTaxAmount' => 'ex_tax_amount',
        'invoiceCode' => 'invoice_code',
        'invoiceContent' => 'invoice_content',
        'invoiceDate' => 'invoice_date',
        'invoiceImgUrl' => 'invoice_img_url',
        'invoiceKind' => 'invoice_kind',
        'invoiceMemo' => 'invoice_memo',
        'invoiceNo' => 'invoice_no',
        'invoiceTitle' => 'invoice_title',
        'invoiceType' => 'invoice_type',
        'oriBlueInvCode' => 'ori_blue_inv_code',
        'oriBlueInvNo' => 'ori_blue_inv_no',
        'payee' => 'payee',
        'payeeAddressTel' => 'payee_address_tel',
        'payeeBankNameAccount' => 'payee_bank_name_account',
        'payeeName' => 'payee_name',
        'payeeRegisterNo' => 'payee_register_no',
        'sumAmount' => 'sum_amount',
        'taxAmount' => 'tax_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checkCode' => 'setCheckCode',
        'checker' => 'setChecker',
        'clerk' => 'setClerk',
        'exTaxAmount' => 'setExTaxAmount',
        'invoiceCode' => 'setInvoiceCode',
        'invoiceContent' => 'setInvoiceContent',
        'invoiceDate' => 'setInvoiceDate',
        'invoiceImgUrl' => 'setInvoiceImgUrl',
        'invoiceKind' => 'setInvoiceKind',
        'invoiceMemo' => 'setInvoiceMemo',
        'invoiceNo' => 'setInvoiceNo',
        'invoiceTitle' => 'setInvoiceTitle',
        'invoiceType' => 'setInvoiceType',
        'oriBlueInvCode' => 'setOriBlueInvCode',
        'oriBlueInvNo' => 'setOriBlueInvNo',
        'payee' => 'setPayee',
        'payeeAddressTel' => 'setPayeeAddressTel',
        'payeeBankNameAccount' => 'setPayeeBankNameAccount',
        'payeeName' => 'setPayeeName',
        'payeeRegisterNo' => 'setPayeeRegisterNo',
        'sumAmount' => 'setSumAmount',
        'taxAmount' => 'setTaxAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checkCode' => 'getCheckCode',
        'checker' => 'getChecker',
        'clerk' => 'getClerk',
        'exTaxAmount' => 'getExTaxAmount',
        'invoiceCode' => 'getInvoiceCode',
        'invoiceContent' => 'getInvoiceContent',
        'invoiceDate' => 'getInvoiceDate',
        'invoiceImgUrl' => 'getInvoiceImgUrl',
        'invoiceKind' => 'getInvoiceKind',
        'invoiceMemo' => 'getInvoiceMemo',
        'invoiceNo' => 'getInvoiceNo',
        'invoiceTitle' => 'getInvoiceTitle',
        'invoiceType' => 'getInvoiceType',
        'oriBlueInvCode' => 'getOriBlueInvCode',
        'oriBlueInvNo' => 'getOriBlueInvNo',
        'payee' => 'getPayee',
        'payeeAddressTel' => 'getPayeeAddressTel',
        'payeeBankNameAccount' => 'getPayeeBankNameAccount',
        'payeeName' => 'getPayeeName',
        'payeeRegisterNo' => 'getPayeeRegisterNo',
        'sumAmount' => 'getSumAmount',
        'taxAmount' => 'getTaxAmount'
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
        $this->container['checkCode'] = $data['checkCode'] ?? null;
        $this->container['checker'] = $data['checker'] ?? null;
        $this->container['clerk'] = $data['clerk'] ?? null;
        $this->container['exTaxAmount'] = $data['exTaxAmount'] ?? null;
        $this->container['invoiceCode'] = $data['invoiceCode'] ?? null;
        $this->container['invoiceContent'] = $data['invoiceContent'] ?? null;
        $this->container['invoiceDate'] = $data['invoiceDate'] ?? null;
        $this->container['invoiceImgUrl'] = $data['invoiceImgUrl'] ?? null;
        $this->container['invoiceKind'] = $data['invoiceKind'] ?? null;
        $this->container['invoiceMemo'] = $data['invoiceMemo'] ?? null;
        $this->container['invoiceNo'] = $data['invoiceNo'] ?? null;
        $this->container['invoiceTitle'] = $data['invoiceTitle'] ?? null;
        $this->container['invoiceType'] = $data['invoiceType'] ?? null;
        $this->container['oriBlueInvCode'] = $data['oriBlueInvCode'] ?? null;
        $this->container['oriBlueInvNo'] = $data['oriBlueInvNo'] ?? null;
        $this->container['payee'] = $data['payee'] ?? null;
        $this->container['payeeAddressTel'] = $data['payeeAddressTel'] ?? null;
        $this->container['payeeBankNameAccount'] = $data['payeeBankNameAccount'] ?? null;
        $this->container['payeeName'] = $data['payeeName'] ?? null;
        $this->container['payeeRegisterNo'] = $data['payeeRegisterNo'] ?? null;
        $this->container['sumAmount'] = $data['sumAmount'] ?? null;
        $this->container['taxAmount'] = $data['taxAmount'] ?? null;
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
     * Gets checkCode
     *
     * @return string|null
     */
    public function getCheckCode()
    {
        return $this->container['checkCode'];
    }

    /**
     * Sets checkCode
     *
     * @param string|null $checkCode 发票防伪码，验证码
     *
     * @return self
     */
    public function setCheckCode($checkCode)
    {
        $this->container['checkCode'] = $checkCode;

        return $this;
    }

    /**
     * Gets checker
     *
     * @return string|null
     */
    public function getChecker()
    {
        return $this->container['checker'];
    }

    /**
     * Sets checker
     *
     * @param string|null $checker 票面上复核人信息。
     *
     * @return self
     */
    public function setChecker($checker)
    {
        $this->container['checker'] = $checker;

        return $this;
    }

    /**
     * Gets clerk
     *
     * @return string|null
     */
    public function getClerk()
    {
        return $this->container['clerk'];
    }

    /**
     * Sets clerk
     *
     * @param string|null $clerk 票面上开票员信息。
     *
     * @return self
     */
    public function setClerk($clerk)
    {
        $this->container['clerk'] = $clerk;

        return $this;
    }

    /**
     * Gets exTaxAmount
     *
     * @return string|null
     */
    public function getExTaxAmount()
    {
        return $this->container['exTaxAmount'];
    }

    /**
     * Sets exTaxAmount
     *
     * @param string|null $exTaxAmount 不含税金额，票面上的不含税金额，单位（元），保留两位小数。
     *
     * @return self
     */
    public function setExTaxAmount($exTaxAmount)
    {
        $this->container['exTaxAmount'] = $exTaxAmount;

        return $this;
    }

    /**
     * Gets invoiceCode
     *
     * @return string|null
     */
    public function getInvoiceCode()
    {
        return $this->container['invoiceCode'];
    }

    /**
     * Sets invoiceCode
     *
     * @param string|null $invoiceCode 发票代码
     *
     * @return self
     */
    public function setInvoiceCode($invoiceCode)
    {
        $this->container['invoiceCode'] = $invoiceCode;

        return $this;
    }

    /**
     * Gets invoiceContent
     *
     * @return \Alipay\OpenAPISDK\Model\InvoiceItemOpenModel[]|null
     */
    public function getInvoiceContent()
    {
        return $this->container['invoiceContent'];
    }

    /**
     * Sets invoiceContent
     *
     * @param \Alipay\OpenAPISDK\Model\InvoiceItemOpenModel[]|null $invoiceContent 发票明细项。
     *
     * @return self
     */
    public function setInvoiceContent($invoiceContent)
    {
        $this->container['invoiceContent'] = $invoiceContent;

        return $this;
    }

    /**
     * Gets invoiceDate
     *
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoiceDate'];
    }

    /**
     * Sets invoiceDate
     *
     * @param string|null $invoiceDate 开票日期，格式如：YYYY-MM-DD。
     *
     * @return self
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets invoiceImgUrl
     *
     * @return string|null
     */
    public function getInvoiceImgUrl()
    {
        return $this->container['invoiceImgUrl'];
    }

    /**
     * Sets invoiceImgUrl
     *
     * @param string|null $invoiceImgUrl 发票预览图片地址
     *
     * @return self
     */
    public function setInvoiceImgUrl($invoiceImgUrl)
    {
        $this->container['invoiceImgUrl'] = $invoiceImgUrl;

        return $this;
    }

    /**
     * Gets invoiceKind
     *
     * @return string|null
     */
    public function getInvoiceKind()
    {
        return $this->container['invoiceKind'];
    }

    /**
     * Sets invoiceKind
     *
     * @param string|null $invoiceKind 标识发票的类型，PLAIN:增值税电子普通发票;SPECIAL:增值税专用发票;PLAIN_INVOICE:增值税普通发票;SALSE_INVOICE:机动车销售统一发票 ;PAPER_INVOICE:增值税普通发票(卷式)。
     *
     * @return self
     */
    public function setInvoiceKind($invoiceKind)
    {
        $this->container['invoiceKind'] = $invoiceKind;

        return $this;
    }

    /**
     * Gets invoiceMemo
     *
     * @return string|null
     */
    public function getInvoiceMemo()
    {
        return $this->container['invoiceMemo'];
    }

    /**
     * Sets invoiceMemo
     *
     * @param string|null $invoiceMemo 票面上备注信息。
     *
     * @return self
     */
    public function setInvoiceMemo($invoiceMemo)
    {
        $this->container['invoiceMemo'] = $invoiceMemo;

        return $this;
    }

    /**
     * Gets invoiceNo
     *
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoiceNo'];
    }

    /**
     * Sets invoiceNo
     *
     * @param string|null $invoiceNo 发票号码
     *
     * @return self
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->container['invoiceNo'] = $invoiceNo;

        return $this;
    }

    /**
     * Gets invoiceTitle
     *
     * @return \Alipay\OpenAPISDK\Model\InvoiceTitleOpenModel|null
     */
    public function getInvoiceTitle()
    {
        return $this->container['invoiceTitle'];
    }

    /**
     * Sets invoiceTitle
     *
     * @param \Alipay\OpenAPISDK\Model\InvoiceTitleOpenModel|null $invoiceTitle invoiceTitle
     *
     * @return self
     */
    public function setInvoiceTitle($invoiceTitle)
    {
        $this->container['invoiceTitle'] = $invoiceTitle;

        return $this;
    }

    /**
     * Gets invoiceType
     *
     * @return string|null
     */
    public function getInvoiceType()
    {
        return $this->container['invoiceType'];
    }

    /**
     * Sets invoiceType
     *
     * @param string|null $invoiceType 标识是红票还是蓝票，RED:红票;BLUE:蓝票
     *
     * @return self
     */
    public function setInvoiceType($invoiceType)
    {
        $this->container['invoiceType'] = $invoiceType;

        return $this;
    }

    /**
     * Gets oriBlueInvCode
     *
     * @return string|null
     */
    public function getOriBlueInvCode()
    {
        return $this->container['oriBlueInvCode'];
    }

    /**
     * Sets oriBlueInvCode
     *
     * @param string|null $oriBlueInvCode 红票情况下，必须填入原始蓝票的发票代码。
     *
     * @return self
     */
    public function setOriBlueInvCode($oriBlueInvCode)
    {
        $this->container['oriBlueInvCode'] = $oriBlueInvCode;

        return $this;
    }

    /**
     * Gets oriBlueInvNo
     *
     * @return string|null
     */
    public function getOriBlueInvNo()
    {
        return $this->container['oriBlueInvNo'];
    }

    /**
     * Sets oriBlueInvNo
     *
     * @param string|null $oriBlueInvNo 红票情况下，必须填入原始蓝票的发票号码。
     *
     * @return self
     */
    public function setOriBlueInvNo($oriBlueInvNo)
    {
        $this->container['oriBlueInvNo'] = $oriBlueInvNo;

        return $this;
    }

    /**
     * Gets payee
     *
     * @return string|null
     */
    public function getPayee()
    {
        return $this->container['payee'];
    }

    /**
     * Sets payee
     *
     * @param string|null $payee 票面上收款人信息。
     *
     * @return self
     */
    public function setPayee($payee)
    {
        $this->container['payee'] = $payee;

        return $this;
    }

    /**
     * Gets payeeAddressTel
     *
     * @return string|null
     */
    public function getPayeeAddressTel()
    {
        return $this->container['payeeAddressTel'];
    }

    /**
     * Sets payeeAddressTel
     *
     * @param string|null $payeeAddressTel 票面上销售方地址、电话信息。
     *
     * @return self
     */
    public function setPayeeAddressTel($payeeAddressTel)
    {
        $this->container['payeeAddressTel'] = $payeeAddressTel;

        return $this;
    }

    /**
     * Gets payeeBankNameAccount
     *
     * @return string|null
     */
    public function getPayeeBankNameAccount()
    {
        return $this->container['payeeBankNameAccount'];
    }

    /**
     * Sets payeeBankNameAccount
     *
     * @param string|null $payeeBankNameAccount 票面上销售方开户行及账号。
     *
     * @return self
     */
    public function setPayeeBankNameAccount($payeeBankNameAccount)
    {
        $this->container['payeeBankNameAccount'] = $payeeBankNameAccount;

        return $this;
    }

    /**
     * Gets payeeName
     *
     * @return string|null
     */
    public function getPayeeName()
    {
        return $this->container['payeeName'];
    }

    /**
     * Sets payeeName
     *
     * @param string|null $payeeName 票面上销售方企业名称。
     *
     * @return self
     */
    public function setPayeeName($payeeName)
    {
        $this->container['payeeName'] = $payeeName;

        return $this;
    }

    /**
     * Gets payeeRegisterNo
     *
     * @return string|null
     */
    public function getPayeeRegisterNo()
    {
        return $this->container['payeeRegisterNo'];
    }

    /**
     * Sets payeeRegisterNo
     *
     * @param string|null $payeeRegisterNo 票面上销售方税号信息。
     *
     * @return self
     */
    public function setPayeeRegisterNo($payeeRegisterNo)
    {
        $this->container['payeeRegisterNo'] = $payeeRegisterNo;

        return $this;
    }

    /**
     * Gets sumAmount
     *
     * @return string|null
     */
    public function getSumAmount()
    {
        return $this->container['sumAmount'];
    }

    /**
     * Sets sumAmount
     *
     * @param string|null $sumAmount 价税合计，票面上的总开票金额，单位（元），保留两位小数，sum_amount=ex_tax_amount+tax_amount。
     *
     * @return self
     */
    public function setSumAmount($sumAmount)
    {
        $this->container['sumAmount'] = $sumAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return string|null
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param string|null $taxAmount 合计税额，票面上的合计税额，单位（元），保留两位小数。
     *
     * @return self
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

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

