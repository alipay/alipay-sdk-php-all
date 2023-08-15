<?php
/**
 * ALIPAY API: alipay.cloud.cloudbase.saas.max.query request
 *
 * @author auto create
 * @since 1.0, 2023-08-01 11:06:52
 */
class AlipayCloudCloudbaseSaasMaxQueryRequest
{
	/** 
	 * appid
	 **/
	private $bizAppId;
	
	/** 
	 * 默认值RAW
	 **/
	private $imageType;
	
	/** 
	 * 图片值，根据图片image_type填写
	 **/
	private $imageValue;
	
	/** 
	 * 默认可不填，具体版本值咨询模型服务提供者
	 **/
	private $modelVersion;
	
	/** 
	 * 模型路由规则，默认值UA
	 **/
	private $route;
	
	/** 
	 * 模型服务编码，具体值咨询模型服务提供者
	 **/
	private $serviceCode;
	
	/** 
	 * 默认值auto，即不区分正反面
	 **/
	private $side;
	
	/** 
	 * 模型服务uri，具体值咨询模型服务提供者
	 **/
	private $uri;
	
	/** 
	 * 是否开启iot，默认false
	 **/
	private $useIot;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizAppId($bizAppId)
	{
		$this->bizAppId = $bizAppId;
		$this->apiParas["biz_app_id"] = $bizAppId;
	}

	public function getBizAppId()
	{
		return $this->bizAppId;
	}

	public function setImageType($imageType)
	{
		$this->imageType = $imageType;
		$this->apiParas["image_type"] = $imageType;
	}

	public function getImageType()
	{
		return $this->imageType;
	}

	public function setImageValue($imageValue)
	{
		$this->imageValue = $imageValue;
		$this->apiParas["image_value"] = $imageValue;
	}

	public function getImageValue()
	{
		return $this->imageValue;
	}

	public function setModelVersion($modelVersion)
	{
		$this->modelVersion = $modelVersion;
		$this->apiParas["model_version"] = $modelVersion;
	}

	public function getModelVersion()
	{
		return $this->modelVersion;
	}

	public function setRoute($route)
	{
		$this->route = $route;
		$this->apiParas["route"] = $route;
	}

	public function getRoute()
	{
		return $this->route;
	}

	public function setServiceCode($serviceCode)
	{
		$this->serviceCode = $serviceCode;
		$this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode()
	{
		return $this->serviceCode;
	}

	public function setSide($side)
	{
		$this->side = $side;
		$this->apiParas["side"] = $side;
	}

	public function getSide()
	{
		return $this->side;
	}

	public function setUri($uri)
	{
		$this->uri = $uri;
		$this->apiParas["uri"] = $uri;
	}

	public function getUri()
	{
		return $this->uri;
	}

	public function setUseIot($useIot)
	{
		$this->useIot = $useIot;
		$this->apiParas["use_iot"] = $useIot;
	}

	public function getUseIot()
	{
		return $this->useIot;
	}

	public function getApiMethodName()
	{
		return "alipay.cloud.cloudbase.saas.max.query";
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
