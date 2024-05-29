<?php
/**
 * ALIPAY API: alipay.open.mini.icp.media.upload request
 *
 * @author auto create
 * @since 1.0, 2024-04-23 21:50:59
 */
class AlipayOpenMiniIcpMediaUploadRequest
{
	/** 
	 * 文件材料信息，不同的文件类型的材料文件对应的格式要求不一致。具体如下：
● 图片格式仅支持，jpg、jpeg、png
● 营业执照要求：图片大小不低于100K不超过2M，分辨率不低于1100*1500或者1500*1100，必须为彩色，需要在有效期内;
● 身份证照片要求：图片大小不低于100K不超过2M，分辨率不低于720*1280或者1280*720，必须为彩色，需要在有效期内
● 其他附件类型的图片要求不大于2M即可
	 **/
	private $fileContent;
	
	/** 
	 * 文件材料的文件类型，身份证，营业执照，其他附件等
	 **/
	private $fileType;

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

	public function setFileType($fileType)
	{
		$this->fileType = $fileType;
		$this->apiParas["file_type"] = $fileType;
	}

	public function getFileType()
	{
		return $this->fileType;
	}

	public function getApiMethodName()
	{
		return "alipay.open.mini.icp.media.upload";
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
