<?php
/**
 * ALIPAY API: alipay.baitiaoprod.account.query request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayBaitiaoprodAccountQueryRequest
{
	/** 
	 * 用户账号id，可以是淘宝账号ID，或者支付宝账号ID
	 **/
	private $userId;
	
	/** 
	 * 用户账号类型，可以是淘宝账号=taobao，或者是支付宝账号=alipay，不区分大小写
	 **/
	private $userIdType;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function setUserIdType($userIdType)
	{
		$this->userIdType = $userIdType;
		$this->apiParas["user_id_type"] = $userIdType;
	}

	public function getUserIdType()
	{
		return $this->userIdType;
	}

	public function getApiMethodName()
	{
		return "alipay.baitiaoprod.account.query";
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
