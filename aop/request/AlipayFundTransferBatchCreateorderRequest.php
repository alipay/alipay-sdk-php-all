<?php
/**
 * ALIPAY API: alipay.fund.transfer.batch.createorder request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayFundTransferBatchCreateorderRequest
{
	/** 
	 * 批次号
	 **/
	private $batchNo;
	
	/** 
	 * 扩展数据
	 **/
	private $extParam;
	
	/** 
	 * 金额
	 **/
	private $payAmount;
	
	/** 
	 * 收款方userId
	 **/
	private $payeeId;
	
	/** 
	 * 付款方userId
	 **/
	private $payerId;
	
	/** 
	 * token
	 **/
	private $token;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBatchNo($batchNo)
	{
		$this->batchNo = $batchNo;
		$this->apiParas["batch_no"] = $batchNo;
	}

	public function getBatchNo()
	{
		return $this->batchNo;
	}

	public function setExtParam($extParam)
	{
		$this->extParam = $extParam;
		$this->apiParas["ext_param"] = $extParam;
	}

	public function getExtParam()
	{
		return $this->extParam;
	}

	public function setPayAmount($payAmount)
	{
		$this->payAmount = $payAmount;
		$this->apiParas["pay_amount"] = $payAmount;
	}

	public function getPayAmount()
	{
		return $this->payAmount;
	}

	public function setPayeeId($payeeId)
	{
		$this->payeeId = $payeeId;
		$this->apiParas["payee_id"] = $payeeId;
	}

	public function getPayeeId()
	{
		return $this->payeeId;
	}

	public function setPayerId($payerId)
	{
		$this->payerId = $payerId;
		$this->apiParas["payer_id"] = $payerId;
	}

	public function getPayerId()
	{
		return $this->payerId;
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

	public function getApiMethodName()
	{
		return "alipay.fund.transfer.batch.createorder";
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
