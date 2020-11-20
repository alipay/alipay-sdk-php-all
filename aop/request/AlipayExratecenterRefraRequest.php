<?php
/**
 * ALIPAY API: alipay.exratecenter.refra request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayExratecenterRefraRequest
{
	/** 
	 * 货币对
	 **/
	private $currencyPair;
	
	/** 
	 * 报价产品码
	 **/
	private $rateCode;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCurrencyPair($currencyPair)
	{
		$this->currencyPair = $currencyPair;
		$this->apiParas["currency_pair"] = $currencyPair;
	}

	public function getCurrencyPair()
	{
		return $this->currencyPair;
	}

	public function setRateCode($rateCode)
	{
		$this->rateCode = $rateCode;
		$this->apiParas["rate_code"] = $rateCode;
	}

	public function getRateCode()
	{
		return $this->rateCode;
	}

	public function getApiMethodName()
	{
		return "alipay.exratecenter.refra";
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
