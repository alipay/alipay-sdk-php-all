<?php
/**
 * ALIPAY API: alipay.acquire.overseas.spot.refund request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayAcquireOverseasSpotRefundRequest
{
	/** 
	 * refund currency
	 **/
	private $currency;
	
	/** 
	 * The refund order id on partner system.

partner_refund_id together with partner identify a refund transaction
	 **/
	private $partnerRefundId;
	
	/** 
	 * The original partner transaction id given in the payment request
	 **/
	private $partnerTransId;
	
	/** 
	 * Less than or equal to the original transaction amont and the left transaction amount if ever refunded.
	 **/
	private $refundAmount;
	
	/** 
	 * The reason of refund
	 **/
	private $refundReason;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCurrency($currency)
	{
		$this->currency = $currency;
		$this->apiParas["currency"] = $currency;
	}

	public function getCurrency()
	{
		return $this->currency;
	}

	public function setPartnerRefundId($partnerRefundId)
	{
		$this->partnerRefundId = $partnerRefundId;
		$this->apiParas["partner_refund_id"] = $partnerRefundId;
	}

	public function getPartnerRefundId()
	{
		return $this->partnerRefundId;
	}

	public function setPartnerTransId($partnerTransId)
	{
		$this->partnerTransId = $partnerTransId;
		$this->apiParas["partner_trans_id"] = $partnerTransId;
	}

	public function getPartnerTransId()
	{
		return $this->partnerTransId;
	}

	public function setRefundAmount($refundAmount)
	{
		$this->refundAmount = $refundAmount;
		$this->apiParas["refund_amount"] = $refundAmount;
	}

	public function getRefundAmount()
	{
		return $this->refundAmount;
	}

	public function setRefundReason($refundReason)
	{
		$this->refundReason = $refundReason;
		$this->apiParas["refund_reason"] = $refundReason;
	}

	public function getRefundReason()
	{
		return $this->refundReason;
	}

	public function getApiMethodName()
	{
		return "alipay.acquire.overseas.spot.refund";
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
