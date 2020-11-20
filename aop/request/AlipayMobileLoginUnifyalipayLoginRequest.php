<?php
/**
 * ALIPAY API: alipay.mobile.login.unifyalipay.login request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayMobileLoginUnifyalipayLoginRequest
{
	/** 
	 * 用户无线接入点名称
	 **/
	private $accessPoint;
	
	/** 
	 * 环境上下文数据--RDS数据采集支付宝（由支付宝提供的JS或sdk采集的设备信息及用户行为信息）
	 **/
	private $alipayEnvJson;
	
	/** 
	 * 设备指纹
	 **/
	private $apdid;
	
	/** 
	 * 应用标识
	 **/
	private $appClientId;
	
	/** 
	 * 应用key
	 **/
	private $appKey;
	
	/** 
	 * 手机基站
	 **/
	private $cellId;
	
	/** 
	 * apple-iphone
	 **/
	private $channel;
	
	/** 
	 * 456123
	 **/
	private $checkCode;
	
	/** 
	 * 校验码id
	 **/
	private $checkCodeId;
	
	/** 
	 * 终端位置（地理位置）
	 **/
	private $clientPostion;
	
	/** 
	 * 客户端类型(IOS,ANDRIOD)
	 **/
	private $clientType;
	
	/** 
	 * 扩展参数(json格式)
	 **/
	private $externParams;
	
	/** 
	 * IMEI
	 **/
	private $imei;
	
	/** 
	 * IMSI
	 **/
	private $imsi;
	
	/** 
	 * 基站LAC
	 **/
	private $lacId;
	
	/** 
	 * 登录帐号(手机号码或邮箱)
	 **/
	private $loginId;
	
	/** 
	 * 登陆密码（RSA加密后）
	 **/
	private $loginPwd;
	
	/** 
	 * 登录类型（TAOBAO或者ALIPAY）
	 **/
	private $loginType;
	
	/** 
	 * 手机品牌
	 **/
	private $mobileBrand;
	
	/** 
	 * 手机机型
	 **/
	private $mobileModel;
	
	/** 
	 * 设备是否越狱
	 **/
	private $prisonBreak;
	
	/** 
	 * 屏幕高
	 **/
	private $screenHigh;
	
	/** 
	 * 屏幕宽
	 **/
	private $screenWidth;
	
	/** 
	 * 操作系统类型
	 **/
	private $systemType;
	
	/** 
	 * 操作系统版本
	 **/
	private $systemVersion;
	
	/** 
	 * 标识
	 **/
	private $token;
	
	/** 
	 * userAgent
	 **/
	private $userAgent;
	
	/** 
	 * 38:83:45:e4:76:c0
	 **/
	private $wifiMac;
	
	/** 
	 * wifi 接入点名称
	 **/
	private $wifiNodeName;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAccessPoint($accessPoint)
	{
		$this->accessPoint = $accessPoint;
		$this->apiParas["access_point"] = $accessPoint;
	}

	public function getAccessPoint()
	{
		return $this->accessPoint;
	}

	public function setAlipayEnvJson($alipayEnvJson)
	{
		$this->alipayEnvJson = $alipayEnvJson;
		$this->apiParas["alipay_env_json"] = $alipayEnvJson;
	}

	public function getAlipayEnvJson()
	{
		return $this->alipayEnvJson;
	}

	public function setApdid($apdid)
	{
		$this->apdid = $apdid;
		$this->apiParas["apdid"] = $apdid;
	}

	public function getApdid()
	{
		return $this->apdid;
	}

	public function setAppClientId($appClientId)
	{
		$this->appClientId = $appClientId;
		$this->apiParas["app_client_id"] = $appClientId;
	}

	public function getAppClientId()
	{
		return $this->appClientId;
	}

	public function setAppKey($appKey)
	{
		$this->appKey = $appKey;
		$this->apiParas["app_key"] = $appKey;
	}

	public function getAppKey()
	{
		return $this->appKey;
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

	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setCheckCode($checkCode)
	{
		$this->checkCode = $checkCode;
		$this->apiParas["check_code"] = $checkCode;
	}

	public function getCheckCode()
	{
		return $this->checkCode;
	}

	public function setCheckCodeId($checkCodeId)
	{
		$this->checkCodeId = $checkCodeId;
		$this->apiParas["check_code_id"] = $checkCodeId;
	}

	public function getCheckCodeId()
	{
		return $this->checkCodeId;
	}

	public function setClientPostion($clientPostion)
	{
		$this->clientPostion = $clientPostion;
		$this->apiParas["client_postion"] = $clientPostion;
	}

	public function getClientPostion()
	{
		return $this->clientPostion;
	}

	public function setClientType($clientType)
	{
		$this->clientType = $clientType;
		$this->apiParas["client_type"] = $clientType;
	}

	public function getClientType()
	{
		return $this->clientType;
	}

	public function setExternParams($externParams)
	{
		$this->externParams = $externParams;
		$this->apiParas["extern_params"] = $externParams;
	}

	public function getExternParams()
	{
		return $this->externParams;
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

	public function setImsi($imsi)
	{
		$this->imsi = $imsi;
		$this->apiParas["imsi"] = $imsi;
	}

	public function getImsi()
	{
		return $this->imsi;
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

	public function setLoginId($loginId)
	{
		$this->loginId = $loginId;
		$this->apiParas["login_id"] = $loginId;
	}

	public function getLoginId()
	{
		return $this->loginId;
	}

	public function setLoginPwd($loginPwd)
	{
		$this->loginPwd = $loginPwd;
		$this->apiParas["login_pwd"] = $loginPwd;
	}

	public function getLoginPwd()
	{
		return $this->loginPwd;
	}

	public function setLoginType($loginType)
	{
		$this->loginType = $loginType;
		$this->apiParas["login_type"] = $loginType;
	}

	public function getLoginType()
	{
		return $this->loginType;
	}

	public function setMobileBrand($mobileBrand)
	{
		$this->mobileBrand = $mobileBrand;
		$this->apiParas["mobile_brand"] = $mobileBrand;
	}

	public function getMobileBrand()
	{
		return $this->mobileBrand;
	}

	public function setMobileModel($mobileModel)
	{
		$this->mobileModel = $mobileModel;
		$this->apiParas["mobile_model"] = $mobileModel;
	}

	public function getMobileModel()
	{
		return $this->mobileModel;
	}

	public function setPrisonBreak($prisonBreak)
	{
		$this->prisonBreak = $prisonBreak;
		$this->apiParas["prison_break"] = $prisonBreak;
	}

	public function getPrisonBreak()
	{
		return $this->prisonBreak;
	}

	public function setScreenHigh($screenHigh)
	{
		$this->screenHigh = $screenHigh;
		$this->apiParas["screen_high"] = $screenHigh;
	}

	public function getScreenHigh()
	{
		return $this->screenHigh;
	}

	public function setScreenWidth($screenWidth)
	{
		$this->screenWidth = $screenWidth;
		$this->apiParas["screen_width"] = $screenWidth;
	}

	public function getScreenWidth()
	{
		return $this->screenWidth;
	}

	public function setSystemType($systemType)
	{
		$this->systemType = $systemType;
		$this->apiParas["system_type"] = $systemType;
	}

	public function getSystemType()
	{
		return $this->systemType;
	}

	public function setSystemVersion($systemVersion)
	{
		$this->systemVersion = $systemVersion;
		$this->apiParas["system_version"] = $systemVersion;
	}

	public function getSystemVersion()
	{
		return $this->systemVersion;
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

	public function setUserAgent($userAgent)
	{
		$this->userAgent = $userAgent;
		$this->apiParas["user_agent"] = $userAgent;
	}

	public function getUserAgent()
	{
		return $this->userAgent;
	}

	public function setWifiMac($wifiMac)
	{
		$this->wifiMac = $wifiMac;
		$this->apiParas["wifi_mac"] = $wifiMac;
	}

	public function getWifiMac()
	{
		return $this->wifiMac;
	}

	public function setWifiNodeName($wifiNodeName)
	{
		$this->wifiNodeName = $wifiNodeName;
		$this->apiParas["wifi_node_name"] = $wifiNodeName;
	}

	public function getWifiNodeName()
	{
		return $this->wifiNodeName;
	}

	public function getApiMethodName()
	{
		return "alipay.mobile.login.unifyalipay.login";
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
