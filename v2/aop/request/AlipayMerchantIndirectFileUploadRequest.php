<?php
/**
 * ALIPAY API: alipay.merchant.indirect.file.upload request
 *
 * @author auto create
 * @since 1.0, 2023-08-21 03:46:43
 */
class AlipayMerchantIndirectFileUploadRequest
{
	/** 
	 * 文件二进制流
	 **/
	private $fileContent;
	
	/** 
	 * 文件名(用于幂等),构造字段时，可使用年月日_报告类型来处理。
	 **/
	private $fileName;
	
	/** 
	 * 文件类型，目前仅支持txt
	 **/
	private $fileType;
	
	/** 
	 * 间联小程序ID
	 **/
	private $mrchindAppId;
	
	/** 
	 * 当前文件的记录总数(校验用)
	 **/
	private $recordCount;
	
	/** 
	 * 报告类型，(DAILY/WEEK/MONTH)
	 **/
	private $reportType;
	
	/** 
	 * 报告周期的结束时间，时间格式为yyyy-MM-dd，默认为当天0点
	 **/
	private $timePeriodEnd;
	
	/** 
	 * 报告周期的起始时间，时间格式为yyyy-MM-dd，默认为当天0点
	 **/
	private $timePeriodStart;

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

	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		$this->apiParas["file_name"] = $fileName;
	}

	public function getFileName()
	{
		return $this->fileName;
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

	public function setMrchindAppId($mrchindAppId)
	{
		$this->mrchindAppId = $mrchindAppId;
		$this->apiParas["mrchind_app_id"] = $mrchindAppId;
	}

	public function getMrchindAppId()
	{
		return $this->mrchindAppId;
	}

	public function setRecordCount($recordCount)
	{
		$this->recordCount = $recordCount;
		$this->apiParas["record_count"] = $recordCount;
	}

	public function getRecordCount()
	{
		return $this->recordCount;
	}

	public function setReportType($reportType)
	{
		$this->reportType = $reportType;
		$this->apiParas["report_type"] = $reportType;
	}

	public function getReportType()
	{
		return $this->reportType;
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

	public function getApiMethodName()
	{
		return "alipay.merchant.indirect.file.upload";
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
