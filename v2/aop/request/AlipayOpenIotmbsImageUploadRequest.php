<?php
/**
 * ALIPAY API: alipay.open.iotmbs.image.upload request
 *
 * @author auto create
 * @since 1.0, 2023-11-23 10:51:52
 */
class AlipayOpenIotmbsImageUploadRequest
{
	/** 
	 * 请联系业务接入方获取biz_code用于选定图片上传业务
	 **/
	private $bizCode;
	
	/** 
	 * 业务具体配置
	 **/
	private $bizConfig;
	
	/** 
	 * 上传的图片，最大10M
	 **/
	private $imageContent;
	
	/** 
	 * 用户隐私相关信息
	 **/
	private $privateInfo;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setBizConfig($bizConfig)
	{
		$this->bizConfig = $bizConfig;
		$this->apiParas["biz_config"] = $bizConfig;
	}

	public function getBizConfig()
	{
		return $this->bizConfig;
	}

	public function setImageContent($imageContent)
	{
		$this->imageContent = $imageContent;
		$this->apiParas["image_content"] = $imageContent;
	}

	public function getImageContent()
	{
		return $this->imageContent;
	}

	public function setPrivateInfo($privateInfo)
	{
		$this->privateInfo = $privateInfo;
		$this->apiParas["private_info"] = $privateInfo;
	}

	public function getPrivateInfo()
	{
		return $this->privateInfo;
	}

	public function getApiMethodName()
	{
		return "alipay.open.iotmbs.image.upload";
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
