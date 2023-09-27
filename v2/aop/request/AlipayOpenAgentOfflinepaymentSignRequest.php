<?php
/**
 * ALIPAY API: alipay.open.agent.offlinepayment.sign request
 *
 * @author auto create
 * @since 1.0, 2023-09-11 19:44:31
 */
class AlipayOpenAgentOfflinepaymentSignRequest
{
	/** 
	 * 代商户操作事务编号，通过alipay.open.agent.create接口进行创建。
	 **/
	private $batchNo;
	
	/** 
	 * 被邀请授权的营业执照法人手机号码，上传非同人营业执照时必填
	 **/
	private $businessLicenseMobile;
	
	/** 
	 * 营业执照号码。若填写，请与以下营业执照图片、期限、一起提供。
	 **/
	private $businessLicenseNo;
	
	/** 
	 * 营业执照图片。被代创建商户运营主体为个人账户必填，企业账户无需填写，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $businessLicensePic;
	
	/** 
	 * 营业期限
	 **/
	private $dateLimitation;
	
	/** 
	 * 送货地址
	 **/
	private $deliveryAddress;
	
	/** 
	 * 营业期限是否长期有效
	 **/
	private $longTerm;
	
	/** 
	 * 所属MCCCode，可参考
<a href="https://opendocs.alipay.com/open/01n22g#%E5%95%86%E5%AE%B6%E7%BB%8F%E8%90%A5%E7%B1%BB%E7%9B%AE">商家经营类目</a> 中的“经营类目编码”
	 **/
	private $mccCode;
	
	/** 
	 * 服务费率（%），0.38~3之间，精确到0.01
	 **/
	private $rate;
	
	/** 
	 * 店铺地址
	 **/
	private $shopAddress;
	
	/** 
	 * 店铺名称
	 **/
	private $shopName;
	
	/** 
	 * 店铺内景照片，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $shopScenePic;
	
	/** 
	 * 店铺门头照图片，需要包括招牌信息。最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $shopSignBoardPic;
	
	/** 
	 * 企业特殊资质图片，可参考
<a href="https://opendocs.alipay.com/open/01n22g#%E5%95%86%E5%AE%B6%E7%BB%8F%E8%90%A5%E7%B1%BB%E7%9B%AE">商家经营类目</a> 中的“需要的特殊资质证书”，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $specialLicensePic;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBatchNo($batchNo)
	{
		$this->batchNo = $batchNo;
		$this->apiParas["batch_no"] = $batchNo;
	}

	public function getBatchNo()
	{
		return $this->batchNo;
	}

	public function setBusinessLicenseMobile($businessLicenseMobile)
	{
		$this->businessLicenseMobile = $businessLicenseMobile;
		$this->apiParas["business_license_mobile"] = $businessLicenseMobile;
	}

	public function getBusinessLicenseMobile()
	{
		return $this->businessLicenseMobile;
	}

	public function setBusinessLicenseNo($businessLicenseNo)
	{
		$this->businessLicenseNo = $businessLicenseNo;
		$this->apiParas["business_license_no"] = $businessLicenseNo;
	}

	public function getBusinessLicenseNo()
	{
		return $this->businessLicenseNo;
	}

	public function setBusinessLicensePic($businessLicensePic)
	{
		$this->businessLicensePic = $businessLicensePic;
		$this->apiParas["business_license_pic"] = $businessLicensePic;
	}

	public function getBusinessLicensePic()
	{
		return $this->businessLicensePic;
	}

	public function setDateLimitation($dateLimitation)
	{
		$this->dateLimitation = $dateLimitation;
		$this->apiParas["date_limitation"] = $dateLimitation;
	}

	public function getDateLimitation()
	{
		return $this->dateLimitation;
	}

	public function setDeliveryAddress($deliveryAddress)
	{
		$this->deliveryAddress = $deliveryAddress;
		$this->apiParas["delivery_address"] = $deliveryAddress;
	}

	public function getDeliveryAddress()
	{
		return $this->deliveryAddress;
	}

	public function setLongTerm($longTerm)
	{
		$this->longTerm = $longTerm;
		$this->apiParas["long_term"] = $longTerm;
	}

	public function getLongTerm()
	{
		return $this->longTerm;
	}

	public function setMccCode($mccCode)
	{
		$this->mccCode = $mccCode;
		$this->apiParas["mcc_code"] = $mccCode;
	}

	public function getMccCode()
	{
		return $this->mccCode;
	}

	public function setRate($rate)
	{
		$this->rate = $rate;
		$this->apiParas["rate"] = $rate;
	}

	public function getRate()
	{
		return $this->rate;
	}

	public function setShopAddress($shopAddress)
	{
		$this->shopAddress = $shopAddress;
		$this->apiParas["shop_address"] = $shopAddress;
	}

	public function getShopAddress()
	{
		return $this->shopAddress;
	}

	public function setShopName($shopName)
	{
		$this->shopName = $shopName;
		$this->apiParas["shop_name"] = $shopName;
	}

	public function getShopName()
	{
		return $this->shopName;
	}

	public function setShopScenePic($shopScenePic)
	{
		$this->shopScenePic = $shopScenePic;
		$this->apiParas["shop_scene_pic"] = $shopScenePic;
	}

	public function getShopScenePic()
	{
		return $this->shopScenePic;
	}

	public function setShopSignBoardPic($shopSignBoardPic)
	{
		$this->shopSignBoardPic = $shopSignBoardPic;
		$this->apiParas["shop_sign_board_pic"] = $shopSignBoardPic;
	}

	public function getShopSignBoardPic()
	{
		return $this->shopSignBoardPic;
	}

	public function setSpecialLicensePic($specialLicensePic)
	{
		$this->specialLicensePic = $specialLicensePic;
		$this->apiParas["special_license_pic"] = $specialLicensePic;
	}

	public function getSpecialLicensePic()
	{
		return $this->specialLicensePic;
	}

	public function getApiMethodName()
	{
		return "alipay.open.agent.offlinepayment.sign";
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
