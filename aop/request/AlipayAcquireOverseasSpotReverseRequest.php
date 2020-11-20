<?php
/**
 * ALIPAY API: alipay.acquire.overseas.spot.reverse request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayAcquireOverseasSpotReverseRequest
{
	/** 
	 * The original partner transaction id given in the payment request
	 **/
	private $partnerTransId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setPartnerTransId($partnerTransId)
	{
		$this->partnerTransId = $partnerTransId;
		$this->apiParas["partner_trans_id"] = $partnerTransId;
	}

	public function getPartnerTransId()
	{
		return $this->partnerTransId;
	}

	public function getApiMethodName()
	{
		return "alipay.acquire.overseas.spot.reverse";
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
