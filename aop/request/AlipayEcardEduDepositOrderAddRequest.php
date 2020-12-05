<?php
/**
 * ALIPAY API: alipay.ecard.edu.deposit.order.add request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayEcardEduDepositOrderAddRequest
{
	/** 
	 * 校园一卡通机构
	 **/
	private $agentCode;
	
	/** 
	 * 公众账号协议Id
	 **/
	private $agreementId;
	
	/** 
	 * 支付宝userId
	 **/
	private $alipayUserId;
	
	/** 
	 * 校园一卡通帐户姓名
	 **/
	private $cardName;
	
	/** 
	 * 校园一卡通号码
	 **/
	private $cardNo;
	
	/** 
	 * 校园一卡通充值金额
	 **/
	private $depositAmount;
	
	/** 
	 * 成功充值通知手机号码
	 **/
	private $mobileNo;
	
	/** 
	 * 公众平台ID
	 **/
	private $publicId;
	
	/** 
	 * 是否分享手机号码
	 **/
	private $shareMobileNo;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAgentCode($agentCode)
	{
		$this->agentCode = $agentCode;
		$this->apiParas["agent_code"] = $agentCode;
	}

	public function getAgentCode()
	{
		return $this->agentCode;
	}

	public function setAgreementId($agreementId)
	{
		$this->agreementId = $agreementId;
		$this->apiParas["agreement_id"] = $agreementId;
	}

	public function getAgreementId()
	{
		return $this->agreementId;
	}

	public function setAlipayUserId($alipayUserId)
	{
		$this->alipayUserId = $alipayUserId;
		$this->apiParas["alipay_user_id"] = $alipayUserId;
	}

	public function getAlipayUserId()
	{
		return $this->alipayUserId;
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

	public function setCardNo($cardNo)
	{
		$this->cardNo = $cardNo;
		$this->apiParas["card_no"] = $cardNo;
	}

	public function getCardNo()
	{
		return $this->cardNo;
	}

	public function setDepositAmount($depositAmount)
	{
		$this->depositAmount = $depositAmount;
		$this->apiParas["deposit_amount"] = $depositAmount;
	}

	public function getDepositAmount()
	{
		return $this->depositAmount;
	}

	public function setMobileNo($mobileNo)
	{
		$this->mobileNo = $mobileNo;
		$this->apiParas["mobile_no"] = $mobileNo;
	}

	public function getMobileNo()
	{
		return $this->mobileNo;
	}

	public function setPublicId($publicId)
	{
		$this->publicId = $publicId;
		$this->apiParas["public_id"] = $publicId;
	}

	public function getPublicId()
	{
		return $this->publicId;
	}

	public function setShareMobileNo($shareMobileNo)
	{
		$this->shareMobileNo = $shareMobileNo;
		$this->apiParas["share_mobile_no"] = $shareMobileNo;
	}

	public function getShareMobileNo()
	{
		return $this->shareMobileNo;
	}

	public function getApiMethodName()
	{
		return "alipay.ecard.edu.deposit.order.add";
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
