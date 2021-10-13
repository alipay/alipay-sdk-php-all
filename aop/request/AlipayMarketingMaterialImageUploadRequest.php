<?php
/**
 * ALIPAY API: alipay.marketing.material.image.upload request
 *
 * @author auto create
 * @since 1.0, 2021-09-13 20:55:28
 */
class AlipayMarketingMaterialImageUploadRequest
{
	/** 
	 * 图片的byte字节数组。图片大小限制为2M
	 **/
	private $fileContent;
	
	/** 
	 * 文件业务标识.

该字段某些场景下必选.
具体该字段在哪些场景下需要传入，会在不同的接口处进行描述。

例如：alipay.marketing.activity.ordervoucher.create接口的voucher_image字段.就清楚描述了.需要使用该接口上传图片，同时指定file_key为PROMO_VOUCHER_IMAGE
	 **/
	private $fileKey;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setFileContent($fileContent)
	{
		$this->fileContent = $fileContent;
		$this->apiParas["file_content"] = $fileContent;
	}

	public function getFileContent()
	{
		return $this->fileContent;
	}

	public function setFileKey($fileKey)
	{
		$this->fileKey = $fileKey;
		$this->apiParas["file_key"] = $fileKey;
	}

	public function getFileKey()
	{
		return $this->fileKey;
	}

	public function getApiMethodName()
	{
		return "alipay.marketing.material.image.upload";
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
