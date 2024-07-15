<?php
/**
 * ALIPAY API: alipay.cloud.cloudpromo.aichat.file.upload request
 *
 * @author auto create
 * @since 1.0, 2024-07-04 16:52:05
 */
class AlipayCloudCloudpromoAichatFileUploadRequest
{
	/** 
	 * 用户唯一标识，由客户生成
	 **/
	private $customerId;
	
	/** 
	 * 文件内容的二进制流
	 **/
	private $fileContent;
	
	/** 
	 * 文件后缀名
	 **/
	private $fileExtension;
	
	/** 
	 * 文件名称
	 **/
	private $fileName;
	
	/** 
	 * 文件用途
	 **/
	private $fileUsage;
	
	/** 
	 * 场景唯一标识，由客户提供
	 **/
	private $sceneId;
	
	/** 
	 * 会话ID，由客户生成
	 **/
	private $sessionId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCustomerId($customerId)
	{
		$this->customerId = $customerId;
		$this->apiParas["customer_id"] = $customerId;
	}

	public function getCustomerId()
	{
		return $this->customerId;
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

	public function setFileExtension($fileExtension)
	{
		$this->fileExtension = $fileExtension;
		$this->apiParas["file_extension"] = $fileExtension;
	}

	public function getFileExtension()
	{
		return $this->fileExtension;
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

	public function setFileUsage($fileUsage)
	{
		$this->fileUsage = $fileUsage;
		$this->apiParas["file_usage"] = $fileUsage;
	}

	public function getFileUsage()
	{
		return $this->fileUsage;
	}

	public function setSceneId($sceneId)
	{
		$this->sceneId = $sceneId;
		$this->apiParas["scene_id"] = $sceneId;
	}

	public function getSceneId()
	{
		return $this->sceneId;
	}

	public function setSessionId($sessionId)
	{
		$this->sessionId = $sessionId;
		$this->apiParas["session_id"] = $sessionId;
	}

	public function getSessionId()
	{
		return $this->sessionId;
	}

	public function getApiMethodName()
	{
		return "alipay.cloud.cloudpromo.aichat.file.upload";
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
