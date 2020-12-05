<?php
/**
 * ALIPAY API: alipay.data.service.open.analyze request
 *
 * @author auto create
 * @since 1.0, 2019-08-15 12:27:11
 */
class AlipayDataServiceOpenAnalyzeRequest
{
	/** 
	 * 传入biz_no等信息
	 **/
	private $extraInfos;
	
	/** 
	 * 服务入参，多个入参json格式
	 **/
	private $params;
	
	/** 
	 * 调用者信息，必须传入app_id和app_name;可选pid
	 **/
	private $partnerInfo;
	
	/** 
	 * 服务名
	 **/
	private $serviceName;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setExtraInfos($extraInfos)
	{
		$this->extraInfos = $extraInfos;
		$this->apiParas["extra_infos"] = $extraInfos;
	}

	public function getExtraInfos()
	{
		return $this->extraInfos;
	}

	public function setParams($params)
	{
		$this->params = $params;
		$this->apiParas["params"] = $params;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function setPartnerInfo($partnerInfo)
	{
		$this->partnerInfo = $partnerInfo;
		$this->apiParas["partner_info"] = $partnerInfo;
	}

	public function getPartnerInfo()
	{
		return $this->partnerInfo;
	}

	public function setServiceName($serviceName)
	{
		$this->serviceName = $serviceName;
		$this->apiParas["service_name"] = $serviceName;
	}

	public function getServiceName()
	{
		return $this->serviceName;
	}

	public function getApiMethodName()
	{
		return "alipay.data.service.open.analyze";
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
