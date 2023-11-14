<?php
/**
 * ALIPAY API: alipay.ins.scene.insserviceprod.serattachment.upload request
 *
 * @author auto create
 * @since 1.0, 2023-11-08 10:33:28
 */
class AlipayInsSceneInsserviceprodSerattachmentUploadRequest
{
	/** 
	 * 扩展信息，JSON字符串格式。该接口为通用接口，需要和增值服务中台的开发同学根据不同的业务约定不同的字段。
	 **/
	private $bizData;
	
	/** 
	 * 文件业务码(业务方自定义)
	 **/
	private $fileBizCode;
	
	/** 
	 * 文件内容
	 **/
	private $fileContent;
	
	/** 
	 * 文件描述
	 **/
	private $fileDesc;
	
	/** 
	 * 文件名称
	 **/
	private $fileName;
	
	/** 
	 * 文件路径
	 **/
	private $filePath;
	
	/** 
	 * 文件大小，对应java里面File的length
	 **/
	private $fileSize;
	
	/** 
	 * 文件类型
	 **/
	private $fileType;
	
	/** 
	 * 外部业务号
	 **/
	private $outBizNo;
	
	/** 
	 * 业务单据号
	 **/
	private $serBizNo;
	
	/** 
	 * 服务业务类型
	 **/
	private $serBizType;
	
	/** 
	 * 上传时间
	 **/
	private $uploadTime;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizData($bizData)
	{
		$this->bizData = $bizData;
		$this->apiParas["biz_data"] = $bizData;
	}

	public function getBizData()
	{
		return $this->bizData;
	}

	public function setFileBizCode($fileBizCode)
	{
		$this->fileBizCode = $fileBizCode;
		$this->apiParas["file_biz_code"] = $fileBizCode;
	}

	public function getFileBizCode()
	{
		return $this->fileBizCode;
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

	public function setFileDesc($fileDesc)
	{
		$this->fileDesc = $fileDesc;
		$this->apiParas["file_desc"] = $fileDesc;
	}

	public function getFileDesc()
	{
		return $this->fileDesc;
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

	public function setFilePath($filePath)
	{
		$this->filePath = $filePath;
		$this->apiParas["file_path"] = $filePath;
	}

	public function getFilePath()
	{
		return $this->filePath;
	}

	public function setFileSize($fileSize)
	{
		$this->fileSize = $fileSize;
		$this->apiParas["file_size"] = $fileSize;
	}

	public function getFileSize()
	{
		return $this->fileSize;
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

	public function setOutBizNo($outBizNo)
	{
		$this->outBizNo = $outBizNo;
		$this->apiParas["out_biz_no"] = $outBizNo;
	}

	public function getOutBizNo()
	{
		return $this->outBizNo;
	}

	public function setSerBizNo($serBizNo)
	{
		$this->serBizNo = $serBizNo;
		$this->apiParas["ser_biz_no"] = $serBizNo;
	}

	public function getSerBizNo()
	{
		return $this->serBizNo;
	}

	public function setSerBizType($serBizType)
	{
		$this->serBizType = $serBizType;
		$this->apiParas["ser_biz_type"] = $serBizType;
	}

	public function getSerBizType()
	{
		return $this->serBizType;
	}

	public function setUploadTime($uploadTime)
	{
		$this->uploadTime = $uploadTime;
		$this->apiParas["upload_time"] = $uploadTime;
	}

	public function getUploadTime()
	{
		return $this->uploadTime;
	}

	public function getApiMethodName()
	{
		return "alipay.ins.scene.insserviceprod.serattachment.upload";
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
