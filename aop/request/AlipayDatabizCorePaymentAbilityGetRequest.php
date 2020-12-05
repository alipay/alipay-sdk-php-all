<?php
/**
 * ALIPAY API: alipay.databiz.core.payment.ability.get request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayDatabizCorePaymentAbilityGetRequest
{
	/** 
	 * 外部商户应用名称
	 **/
	private $appInfo;
	
	/** 
	 * 移动设备唯一标示码，后续版本废弃该参数，手机号码作为唯一查询标示。
	 **/
	private $imei;
	
	/** 
	 * 手机号码，必选！
	 **/
	private $mobileNum;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAppInfo($appInfo)
	{
		$this->appInfo = $appInfo;
		$this->apiParas["app_info"] = $appInfo;
	}

	public function getAppInfo()
	{
		return $this->appInfo;
	}

	public function setImei($imei)
	{
		$this->imei = $imei;
		$this->apiParas["imei"] = $imei;
	}

	public function getImei()
	{
		return $this->imei;
	}

	public function setMobileNum($mobileNum)
	{
		$this->mobileNum = $mobileNum;
		$this->apiParas["mobile_num"] = $mobileNum;
	}

	public function getMobileNum()
	{
		return $this->mobileNum;
	}

	public function getApiMethodName()
	{
		return "alipay.databiz.core.payment.ability.get";
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
