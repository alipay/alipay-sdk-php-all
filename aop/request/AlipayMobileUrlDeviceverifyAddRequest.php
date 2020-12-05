<?php
/**
 * ALIPAY API: alipay.mobile.url.deviceverify.add request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayMobileUrlDeviceverifyAddRequest
{
	/** 
	 * 设备指纹id
	 **/
	private $apdid;
	
	/** 
	 * 应用版本号
	 **/
	private $appVersion;
	
	/** 
	 * 应用名
	 **/
	private $appid;
	
	/** 
	 * 集团统一id
	 **/
	private $hid;
	
	/** 
	 * 手机号码
	 **/
	private $mobile;
	
	/** 
	 * 统一sdk的版本
	 **/
	private $sdkVersion;
	
	/** 
	 * 手淘设备ID
	 **/
	private $umid;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setApdid($apdid)
	{
		$this->apdid = $apdid;
		$this->apiParas["apdid"] = $apdid;
	}

	public function getApdid()
	{
		return $this->apdid;
	}

	public function setAppVersion($appVersion)
	{
		$this->appVersion = $appVersion;
		$this->apiParas["app_version"] = $appVersion;
	}

	public function getAppVersion()
	{
		return $this->appVersion;
	}

	public function setAppid($appid)
	{
		$this->appid = $appid;
		$this->apiParas["appid"] = $appid;
	}

	public function getAppid()
	{
		return $this->appid;
	}

	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
	}

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function setSdkVersion($sdkVersion)
	{
		$this->sdkVersion = $sdkVersion;
		$this->apiParas["sdk_version"] = $sdkVersion;
	}

	public function getSdkVersion()
	{
		return $this->sdkVersion;
	}

	public function setUmid($umid)
	{
		$this->umid = $umid;
		$this->apiParas["umid"] = $umid;
	}

	public function getUmid()
	{
		return $this->umid;
	}

	public function getApiMethodName()
	{
		return "alipay.mobile.url.deviceverify.add";
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
