<?php
/**
 * ALIPAY API: alipay.security.data.info.ipaddrinfo.query request
 *
 * @author auto create
 * @since 1.0, 2019-01-07 20:51:15
 */
class AlipaySecurityDataInfoIpaddrinfoQueryRequest
{
	/** 
	 * 根据IP地址查询省、市相关信息
	 **/
	private $bizContent;
	
	/** 
	 * 根据IP地址查询省、市相关信息
	 **/
	private $ipAddr;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizContent($bizContent)
	{
		$this->bizContent = $bizContent;
		$this->apiParas["biz_content"] = $bizContent;
	}

	public function getBizContent()
	{
		return $this->bizContent;
	}

	public function setIpAddr($ipAddr)
	{
		$this->ipAddr = $ipAddr;
		$this->apiParas["ip_addr"] = $ipAddr;
	}

	public function getIpAddr()
	{
		return $this->ipAddr;
	}

	public function getApiMethodName()
	{
		return "alipay.security.data.info.ipaddrinfo.query";
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
