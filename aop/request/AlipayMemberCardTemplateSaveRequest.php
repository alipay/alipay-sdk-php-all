<?php
/**
 * ALIPAY API: alipay.member.card.template.save request
 *
 * @author auto create
 * @since 1.0, 2020-08-31 10:32:29
 */
class AlipayMemberCardTemplateSaveRequest
{
	/** 
	 * 支付宝会员卡模板Id
	 **/
	private $alipayTemplateId;
	
	/** 
	 * 使用说明
	 **/
	private $applyExplain;
	
	/** 
	 * 权益描述集合，json结构，单个权益描述可选Key如下：
title：权益标题；
benefitDesc：权益描述
benefitRange：特权使用范围-- GLOBAL：通用特权； CITY：城市特权； SHOP：门店特权。
city：城市码，当benefit_range为CITY时，该属性不能为空。
shop：门店码，当benefitRange为SHOP时，该属性不能为空。
	 **/
	private $benifitConfigList;
	
	/** 
	 * 发卡机构。
ALIPAY：支付宝
PARTNER：合作商户
	 **/
	private $cardInst;
	
	/** 
	 * 卡商户信息，json格式。
目前仅支持如下key：
merchantUniId：商户唯一标识
merchantUniIdType：支持以下3种取值。
  LOGON_ID：商户登录ID，邮箱或者手机号格式；
  UID：商户的支付宝用户号，以2088开头的16位纯数字组成；
  BINDING_MOBILE：商户支付宝账号绑定的手机号。

注意：
本参数主要用于发卡平台接入场景，request_from为PLATFORM时，不能为空。
	 **/
	private $cardMerchantInfo;
	
	/** 
	 * 会员卡名称
	 **/
	private $cardName;
	
	/** 
	 * 卡类型。
MEMBER_CARD：会员卡
FUND_CARD：资金卡
	 **/
	private $cardType;
	
	/** 
	 * 统一服务电话
	 **/
	private $contactTel;
	
	/** 
	 * 卡显示配置，json结构，可选key如下：
displayBalance：是否显示余额，布尔值，下同；
displayLevel：是否展示等级；
displayPoint：是否显示积分；
displayStore：是否展示门店信息；
displayTelephone：是否展示统一联系电话
	 **/
	private $displayConfig;
	
	/** 
	 * 扩展信息，json格式。
	 **/
	private $extInfo;
	
	/** 
	 * 资金卡发行面额配置集合，json结构,当card_type为FUND_CARD时，该配置不能为空，单个发行面额可选key如下：
denomination：面额
discount：折扣
validDate：面额日期，格式为yyyy-MM-dd HH:mm:ss。
	 **/
	private $issuedConfigList;
	
	/** 
	 * 商家简介
	 **/
	private $merchantIntroduction;
	
	/** 
	 * 外部商户卡模板Id
	 **/
	private $outTemplateId;
	
	/** 
	 * 请求来源。
PLATFORM：发卡平台商
PARTNER：直联商户
	 **/
	private $requestFrom;
	
	/** 
	 * 模板状态，目前只支持发行状态。
发行：PUBLISH
	 **/
	private $status;
	
	/** 
	 * 卡样式配置，json结构，可选Key如下：
logoUrl：图片链接，图片为正方形，推荐大小92*92
backgroundUrl：背景链接，图片为长方形，推荐大小534*318
	 **/
	private $styleConfig;
	
	/** 
	 * 有效期类型
Interval：固定时间段；
DeadLine：截止时间
	 **/
	private $validDateType;
	
	/** 
	 * 有效期值
Interval：0-永久,比如1\12\24（月为单位）；
DeadLine：格式为yyyy-MM-dd HH:mm:ss
	 **/
	private $validDateValue;
	
	/** 
	 * 核销方式。
QRCODE：二维码
DQRCODE：动态二维码
WAVE：声波
BARCORE：条码
DBARCORE：动态条码
TEXT：文本
	 **/
	private $writeOffType;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAlipayTemplateId($alipayTemplateId)
	{
		$this->alipayTemplateId = $alipayTemplateId;
		$this->apiParas["alipay_template_id"] = $alipayTemplateId;
	}

	public function getAlipayTemplateId()
	{
		return $this->alipayTemplateId;
	}

	public function setApplyExplain($applyExplain)
	{
		$this->applyExplain = $applyExplain;
		$this->apiParas["apply_explain"] = $applyExplain;
	}

	public function getApplyExplain()
	{
		return $this->applyExplain;
	}

	public function setBenifitConfigList($benifitConfigList)
	{
		$this->benifitConfigList = $benifitConfigList;
		$this->apiParas["benifit_config_list"] = $benifitConfigList;
	}

	public function getBenifitConfigList()
	{
		return $this->benifitConfigList;
	}

	public function setCardInst($cardInst)
	{
		$this->cardInst = $cardInst;
		$this->apiParas["card_inst"] = $cardInst;
	}

	public function getCardInst()
	{
		return $this->cardInst;
	}

	public function setCardMerchantInfo($cardMerchantInfo)
	{
		$this->cardMerchantInfo = $cardMerchantInfo;
		$this->apiParas["card_merchant_info"] = $cardMerchantInfo;
	}

	public function getCardMerchantInfo()
	{
		return $this->cardMerchantInfo;
	}

	public function setCardName($cardName)
	{
		$this->cardName = $cardName;
		$this->apiParas["card_name"] = $cardName;
	}

	public function getCardName()
	{
		return $this->cardName;
	}

	public function setCardType($cardType)
	{
		$this->cardType = $cardType;
		$this->apiParas["card_type"] = $cardType;
	}

	public function getCardType()
	{
		return $this->cardType;
	}

	public function setContactTel($contactTel)
	{
		$this->contactTel = $contactTel;
		$this->apiParas["contact_tel"] = $contactTel;
	}

	public function getContactTel()
	{
		return $this->contactTel;
	}

	public function setDisplayConfig($displayConfig)
	{
		$this->displayConfig = $displayConfig;
		$this->apiParas["display_config"] = $displayConfig;
	}

	public function getDisplayConfig()
	{
		return $this->displayConfig;
	}

	public function setExtInfo($extInfo)
	{
		$this->extInfo = $extInfo;
		$this->apiParas["ext_info"] = $extInfo;
	}

	public function getExtInfo()
	{
		return $this->extInfo;
	}

	public function setIssuedConfigList($issuedConfigList)
	{
		$this->issuedConfigList = $issuedConfigList;
		$this->apiParas["issued_config_list"] = $issuedConfigList;
	}

	public function getIssuedConfigList()
	{
		return $this->issuedConfigList;
	}

	public function setMerchantIntroduction($merchantIntroduction)
	{
		$this->merchantIntroduction = $merchantIntroduction;
		$this->apiParas["merchant_introduction"] = $merchantIntroduction;
	}

	public function getMerchantIntroduction()
	{
		return $this->merchantIntroduction;
	}

	public function setOutTemplateId($outTemplateId)
	{
		$this->outTemplateId = $outTemplateId;
		$this->apiParas["out_template_id"] = $outTemplateId;
	}

	public function getOutTemplateId()
	{
		return $this->outTemplateId;
	}

	public function setRequestFrom($requestFrom)
	{
		$this->requestFrom = $requestFrom;
		$this->apiParas["request_from"] = $requestFrom;
	}

	public function getRequestFrom()
	{
		return $this->requestFrom;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStyleConfig($styleConfig)
	{
		$this->styleConfig = $styleConfig;
		$this->apiParas["style_config"] = $styleConfig;
	}

	public function getStyleConfig()
	{
		return $this->styleConfig;
	}

	public function setValidDateType($validDateType)
	{
		$this->validDateType = $validDateType;
		$this->apiParas["valid_date_type"] = $validDateType;
	}

	public function getValidDateType()
	{
		return $this->validDateType;
	}

	public function setValidDateValue($validDateValue)
	{
		$this->validDateValue = $validDateValue;
		$this->apiParas["valid_date_value"] = $validDateValue;
	}

	public function getValidDateValue()
	{
		return $this->validDateValue;
	}

	public function setWriteOffType($writeOffType)
	{
		$this->writeOffType = $writeOffType;
		$this->apiParas["write_off_type"] = $writeOffType;
	}

	public function getWriteOffType()
	{
		return $this->writeOffType;
	}

	public function getApiMethodName()
	{
		return "alipay.member.card.template.save";
	}

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl=$notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function setReturnUrl($returnUrl)
	{
		$this->returnUrl=$returnUrl;
	}

	public function getReturnUrl()
	{
		return $this->returnUrl;
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function getTerminalType()
	{
		return $this->terminalType;
	}

	public function setTerminalType($terminalType)
	{
		$this->terminalType = $terminalType;
	}

	public function getTerminalInfo()
	{
		return $this->terminalInfo;
	}

	public function setTerminalInfo($terminalInfo)
	{
		$this->terminalInfo = $terminalInfo;
	}

	public function getProdCode()
	{
		return $this->prodCode;
	}

	public function setProdCode($prodCode)
	{
		$this->prodCode = $prodCode;
	}

	public function setApiVersion($apiVersion)
	{
		$this->apiVersion=$apiVersion;
	}

	public function getApiVersion()
	{
		return $this->apiVersion;
	}

  public function setNeedEncrypt($needEncrypt)
  {

     $this->needEncrypt=$needEncrypt;

  }

  public function getNeedEncrypt()
  {
    return $this->needEncrypt;
  }

}
