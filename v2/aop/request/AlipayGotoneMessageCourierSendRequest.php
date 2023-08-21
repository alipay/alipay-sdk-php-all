<?php
/**
 * ALIPAY API: alipay.gotone.message.courier.send request
 *
 * @author auto create
 * @since 1.0, 2023-08-21 01:41:48
 */
class AlipayGotoneMessageCourierSendRequest
{
	/** 
	 * 模板参数,键值对，以竖线分割
	 **/
	private $arguments;
	
	/** 
	 * 扩展信息。IMEI表示钱包客户端IMEI号；CURRENT_STEP表示消息进度节点,必须为数字； IS_CORRECT表示当前节点是正常还是异常分支，必须为Y或者N; todoPublicId表示钱包公众号id。注意：上诉key值必须严格匹配，大小写敏感
	 **/
	private $extInfo;
	
	/** 
	 * 支付宝openId
	 **/
	private $openId;
	
	/** 
	 * 业务配置码serviceCode
	 **/
	private $serviceCode;
	
	/** 
	 * 用户的支付宝ID
	 **/
	private $userId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setArguments($arguments)
	{
		$this->arguments = $arguments;
		$this->apiParas["arguments"] = $arguments;
	}

	public function getArguments()
	{
		return $this->arguments;
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

	public function setOpenId($openId)
	{
		$this->openId = $openId;
		$this->apiParas["open_id"] = $openId;
	}

	public function getOpenId()
	{
		return $this->openId;
	}

	public function setServiceCode($serviceCode)
	{
		$this->serviceCode = $serviceCode;
		$this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode()
	{
		return $this->serviceCode;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "alipay.gotone.message.courier.send";
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
