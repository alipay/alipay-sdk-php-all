<?php
/**
 * ALIPAY API: alipay.open.mini.cloud.file.upload request
 *
 * @author auto create
 * @since 1.0, 2023-09-20 14:16:44
 */
class AlipayOpenMiniCloudFileUploadRequest
{
	/** 
	 * 云环境ID,在云托管平台获取
	 **/
	private $cloudId;
	
	/** 
	 * 文件信息，文件二进制字节流，最大为100M。WIDGET应用上传的图片最大为200K
	 **/
	private $fileContent;
	
	/** 
	 * 文件名称，type为File时，填写文件名称。type为Directory时，填写目录名称
	 **/
	private $fileName;
	
	/** 
	 * 文件路径,必须以/开头，根目录/
	 **/
	private $path;
	
	/** 
	 * 类型，File:文件类型,Directory:目录类型
	 **/
	private $type;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCloudId($cloudId)
	{
		$this->cloudId = $cloudId;
		$this->apiParas["cloud_id"] = $cloudId;
	}

	public function getCloudId()
	{
		return $this->cloudId;
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

	public function setPath($path)
	{
		$this->path = $path;
		$this->apiParas["path"] = $path;
	}

	public function getPath()
	{
		return $this->path;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "alipay.open.mini.cloud.file.upload";
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
