<?php
/**
 * ALIPAY API: alipay.boss.prod.manjiangdstest.stop request
 *
 * @author auto create
 * @since 1.0, 2023-08-23 20:19:39
 */
class AlipayBossProdManjiangdstestStopRequest
{
	/** 
	 * 1
	 **/
	private $sss;
	
	/** 
	 * 1
	 **/
	private $sssOpenid;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setSss($sss)
	{
		$this->sss = $sss;
		$this->apiParas["sss"] = $sss;
	}

	public function getSss()
	{
		return $this->sss;
	}

	public function setSssOpenid($sssOpenid)
	{
		$this->sssOpenid = $sssOpenid;
		$this->apiParas["sss_openid"] = $sssOpenid;
	}

	public function getSssOpenid()
	{
		return $this->sssOpenid;
	}

	public function getApiMethodName()
	{
		return "alipay.boss.prod.manjiangdstest.stop";
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
