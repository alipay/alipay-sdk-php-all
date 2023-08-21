<?php
/**
 * ALIPAY API: anttech.blockchain.finance.fund.image.upload request
 *
 * @author auto create
 * @since 1.0, 2023-08-17 15:56:41
 */
class AnttechBlockchainFinanceFundImageUploadRequest
{
	/** 
	 * 请求对应功能
	 **/
	private $function;
	
	/** 
	 * 图片二进制字节流，最大为5M
	 **/
	private $imageContent;
	
	/** 
	 * 图片格式，支持格式：jpg、jpeg、png
	 **/
	private $imageType;
	
	/** 
	 * 请求ID
	 **/
	private $requestId;
	
	/** 
	 * 业务场景码
	 **/
	private $subSceneCode;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setFunction($function)
	{
		$this->function = $function;
		$this->apiParas["function"] = $function;
	}

	public function getFunction()
	{
		return $this->function;
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

	public function setImageType($imageType)
	{
		$this->imageType = $imageType;
		$this->apiParas["image_type"] = $imageType;
	}

	public function getImageType()
	{
		return $this->imageType;
	}

	public function setRequestId($requestId)
	{
		$this->requestId = $requestId;
		$this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId()
	{
		return $this->requestId;
	}

	public function setSubSceneCode($subSceneCode)
	{
		$this->subSceneCode = $subSceneCode;
		$this->apiParas["sub_scene_code"] = $subSceneCode;
	}

	public function getSubSceneCode()
	{
		return $this->subSceneCode;
	}

	public function getApiMethodName()
	{
		return "anttech.blockchain.finance.fund.image.upload";
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
