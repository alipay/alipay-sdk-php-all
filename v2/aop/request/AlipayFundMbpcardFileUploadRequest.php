<?php
/**
 * ALIPAY API: alipay.fund.mbpcard.file.upload request
 *
 * @author auto create
 * @since 1.0, 2024-02-01 16:31:58
 */
class AlipayFundMbpcardFileUploadRequest
{
	/** 
	 * 业务场景，对应不同配置
	 **/
	private $bizScene;
	
	/** 
	 * 二进制字节流，最大为10M
	 **/
	private $imageContent;
	
	/** 
	 * 待识别的图片标签，不传不做OCR识别
ELEC_ADD_TAX_SIMPLE : 增值税普票-电子版
PAPER_ADD_TAX_SIMPLE：增值税普票-纸质版
PAPER_QUOTA：手撕定额发票
	 **/
	private $imageOcrTag;
	
	/** 
	 * 文件类型，支持格式：bmp、jpg、jpeg、png、gif、pdf
	 **/
	private $imageType;
	
	/** 
	 * 产品码，业务特征属性
	 **/
	private $productCode;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizScene($bizScene)
	{
		$this->bizScene = $bizScene;
		$this->apiParas["biz_scene"] = $bizScene;
	}

	public function getBizScene()
	{
		return $this->bizScene;
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

	public function setImageOcrTag($imageOcrTag)
	{
		$this->imageOcrTag = $imageOcrTag;
		$this->apiParas["image_ocr_tag"] = $imageOcrTag;
	}

	public function getImageOcrTag()
	{
		return $this->imageOcrTag;
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

	public function setProductCode($productCode)
	{
		$this->productCode = $productCode;
		$this->apiParas["product_code"] = $productCode;
	}

	public function getProductCode()
	{
		return $this->productCode;
	}

	public function getApiMethodName()
	{
		return "alipay.fund.mbpcard.file.upload";
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
