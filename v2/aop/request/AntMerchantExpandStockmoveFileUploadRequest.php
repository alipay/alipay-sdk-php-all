<?php
/**
 * ALIPAY API: ant.merchant.expand.stockmove.file.upload request
 *
 * @author auto create
 * @since 1.0, 2024-01-04 20:01:58
 */
class AntMerchantExpandStockmoveFileUploadRequest
{
	/** 
	 * 文件字节流
	 **/
	private $fileContent;
	
	/** 
	 * 上传文件的格式：XLSX,TXT等
	 **/
	private $fileFormat;
	
	/** 
	 * 文件名称
	 **/
	private $fileName;
	
	/** 
	 * 文件url
	 **/
	private $fileUrl;
	
	/** 
	 * 库存变动周期结束时间，一般是前一天的23点59分59秒
	 **/
	private $timePeriodEnd;
	
	/** 
	 * 库存变动周期开始时间，一般是前一天的0点
	 **/
	private $timePeriodStart;
	
	/** 
	 * 上传的excel文件中的行数
	 **/
	private $totalCount;
	
	/** 
	 * 文件上传批次号，每天的批次号是唯一的
	 **/
	private $uploadBatchNo;
	
	/** 
	 * 上传的类型：分为文件上传和连接上传
	 **/
	private $uploadFormat;

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

	public function setFileFormat($fileFormat)
	{
		$this->fileFormat = $fileFormat;
		$this->apiParas["file_format"] = $fileFormat;
	}

	public function getFileFormat()
	{
		return $this->fileFormat;
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

	public function setFileUrl($fileUrl)
	{
		$this->fileUrl = $fileUrl;
		$this->apiParas["file_url"] = $fileUrl;
	}

	public function getFileUrl()
	{
		return $this->fileUrl;
	}

	public function setTimePeriodEnd($timePeriodEnd)
	{
		$this->timePeriodEnd = $timePeriodEnd;
		$this->apiParas["time_period_end"] = $timePeriodEnd;
	}

	public function getTimePeriodEnd()
	{
		return $this->timePeriodEnd;
	}

	public function setTimePeriodStart($timePeriodStart)
	{
		$this->timePeriodStart = $timePeriodStart;
		$this->apiParas["time_period_start"] = $timePeriodStart;
	}

	public function getTimePeriodStart()
	{
		return $this->timePeriodStart;
	}

	public function setTotalCount($totalCount)
	{
		$this->totalCount = $totalCount;
		$this->apiParas["total_count"] = $totalCount;
	}

	public function getTotalCount()
	{
		return $this->totalCount;
	}

	public function setUploadBatchNo($uploadBatchNo)
	{
		$this->uploadBatchNo = $uploadBatchNo;
		$this->apiParas["upload_batch_no"] = $uploadBatchNo;
	}

	public function getUploadBatchNo()
	{
		return $this->uploadBatchNo;
	}

	public function setUploadFormat($uploadFormat)
	{
		$this->uploadFormat = $uploadFormat;
		$this->apiParas["upload_format"] = $uploadFormat;
	}

	public function getUploadFormat()
	{
		return $this->uploadFormat;
	}

	public function getApiMethodName()
	{
		return "ant.merchant.expand.stockmove.file.upload";
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
