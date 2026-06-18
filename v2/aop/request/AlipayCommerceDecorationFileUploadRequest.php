<?php
/**
 * ALIPAY API: alipay.commerce.decoration.file.upload request
 *
 * @author auto create
 * @since 1.0, 2026-05-08 14:07:45
 */
class AlipayCommerceDecorationFileUploadRequest
{
	/** 
	 * 文件所在业务场景，枚举值：
● DECORATION_CONTRACT：家装合同
	 **/
	private $bizScene;
	
	/** 
	 * 二进制字节流，最大为20M。
	 **/
	private $fileContent;
	
	/** 
	 * 当该字段为空时，系统会尝试获取上传文件的原始文件名
	 **/
	private $fileName;
	
	/** 
	 * 文件所在业务场景下关联的外部业务ID，与bizScene字段配合使用
	 **/
	private $outBizFileId;

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

	public function setFileContent($fileContent)
	{
		$this->fileContent = $fileContent;
		$this->apiParas["file_content"] = $fileContent;
	}

	public function getFileContent()
	{
		return $this->fileContent;
	}

	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		$this->apiParas["file_name"] = $fileName;
	}

	public function getFileName()
	{
		return $this->fileName;
	}

	public function setOutBizFileId($outBizFileId)
	{
		$this->outBizFileId = $outBizFileId;
		$this->apiParas["out_biz_file_id"] = $outBizFileId;
	}

	public function getOutBizFileId()
	{
		return $this->outBizFileId;
	}

	public function getApiMethodName()
	{
		return "alipay.commerce.decoration.file.upload";
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
