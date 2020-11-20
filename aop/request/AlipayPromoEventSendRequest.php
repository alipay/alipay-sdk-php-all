<?php
/**
 * ALIPAY API: alipay.promo.event.send request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayPromoEventSendRequest
{
	/** 
	 * 动作子类型，二级动作
	 **/
	private $actionSubType;
	
	/** 
	 * 同步的动作
	 **/
	private $actionType;
	
	/** 
	 * 扩展字段,以逗号分隔的属性列表如bizOrderNo,number,nick
	 **/
	private $ext;
	
	/** 
	 * 商户当前用户登录名
	 **/
	private $loginId;
	
	/** 
	 * 设备类型如：pc,phone,pad,other
	 **/
	private $termType;
	
	/** 
	 * 创建时间，动作发生的时间，
	 **/
	private $time;
	
	/** 
	 * 支付宝的userId
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

	
	public function setActionSubType($actionSubType)
	{
		$this->actionSubType = $actionSubType;
		$this->apiParas["action_sub_type"] = $actionSubType;
	}

	public function getActionSubType()
	{
		return $this->actionSubType;
	}

	public function setActionType($actionType)
	{
		$this->actionType = $actionType;
		$this->apiParas["action_type"] = $actionType;
	}

	public function getActionType()
	{
		return $this->actionType;
	}

	public function setExt($ext)
	{
		$this->ext = $ext;
		$this->apiParas["ext"] = $ext;
	}

	public function getExt()
	{
		return $this->ext;
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

	public function setTermType($termType)
	{
		$this->termType = $termType;
		$this->apiParas["term_type"] = $termType;
	}

	public function getTermType()
	{
		return $this->termType;
	}

	public function setTime($time)
	{
		$this->time = $time;
		$this->apiParas["time"] = $time;
	}

	public function getTime()
	{
		return $this->time;
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
		return "alipay.promo.event.send";
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
