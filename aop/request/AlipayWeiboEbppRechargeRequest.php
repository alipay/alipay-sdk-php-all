<?php
/**
 * ALIPAY API: alipay.weibo.ebpp.recharge request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayWeiboEbppRechargeRequest
{
	/** 
	 * 商户用户的设备信息
	 **/
	private $apdId;
	
	/** 
	 * 手机位置信息
	 **/
	private $cellId;
	
	/** 
	 * device_info_token
	 **/
	private $deviceInfoToken;
	
	/** 
	 * 商户输入的扩展信息
	 **/
	private $exparam;
	
	/** 
	 * 终端设备号
	 **/
	private $imei;
	
	/** 
	 * 商户用户的ip信息
	 **/
	private $ip;
	
	/** 
	 * 基站LAC
	 **/
	private $lacId;
	
	/** 
	 * 免登来源
	 **/
	private $loginFrom;
	
	/** 
	 * 设备mac信息
	 **/
	private $mac;
	
	/** 
	 * 商户的用户Id
	 **/
	private $partnerUserId;
	
	/** 
	 * 设备的安全支付标识
	 **/
	private $tid;
	
	/** 
	 * 商户免登Token
	 **/
	private $token;
	
	/** 
	 * 设备umid信息
	 **/
	private $umid;
	
	/** 
	 * wireless_mac
	 **/
	private $wirelessMac;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setApdId($apdId)
	{
		$this->apdId = $apdId;
		$this->apiParas["apd_id"] = $apdId;
	}

	public function getApdId()
	{
		return $this->apdId;
	}

	public function setCellId($cellId)
	{
		$this->cellId = $cellId;
		$this->apiParas["cell_id"] = $cellId;
	}

	public function getCellId()
	{
		return $this->cellId;
	}

	public function setDeviceInfoToken($deviceInfoToken)
	{
		$this->deviceInfoToken = $deviceInfoToken;
		$this->apiParas["device_info_token"] = $deviceInfoToken;
	}

	public function getDeviceInfoToken()
	{
		return $this->deviceInfoToken;
	}

	public function setExparam($exparam)
	{
		$this->exparam = $exparam;
		$this->apiParas["exparam"] = $exparam;
	}

	public function getExparam()
	{
		return $this->exparam;
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

	public function setIp($ip)
	{
		$this->ip = $ip;
		$this->apiParas["ip"] = $ip;
	}

	public function getIp()
	{
		return $this->ip;
	}

	public function setLacId($lacId)
	{
		$this->lacId = $lacId;
		$this->apiParas["lac_id"] = $lacId;
	}

	public function getLacId()
	{
		return $this->lacId;
	}

	public function setLoginFrom($loginFrom)
	{
		$this->loginFrom = $loginFrom;
		$this->apiParas["login_from"] = $loginFrom;
	}

	public function getLoginFrom()
	{
		return $this->loginFrom;
	}

	public function setMac($mac)
	{
		$this->mac = $mac;
		$this->apiParas["mac"] = $mac;
	}

	public function getMac()
	{
		return $this->mac;
	}

	public function setPartnerUserId($partnerUserId)
	{
		$this->partnerUserId = $partnerUserId;
		$this->apiParas["partner_user_id"] = $partnerUserId;
	}

	public function getPartnerUserId()
	{
		return $this->partnerUserId;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
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

	public function setWirelessMac($wirelessMac)
	{
		$this->wirelessMac = $wirelessMac;
		$this->apiParas["wireless_mac"] = $wirelessMac;
	}

	public function getWirelessMac()
	{
		return $this->wirelessMac;
	}

	public function getApiMethodName()
	{
		return "alipay.weibo.ebpp.recharge";
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
