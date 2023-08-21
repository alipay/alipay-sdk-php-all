<?php
/**
 * ALIPAY API: alipay.digitalmgmt.hrcampuscore.niukeexamreport.result.upload request
 *
 * @author auto create
 * @since 1.0, 2023-08-20 16:59:41
 */
class AlipayDigitalmgmtHrcampuscoreNiukeexamreportResultUploadRequest
{
	/** 
	 * 牛客笔试报告变更回调请求体
	 **/
	private $niukeExamReportCallbackRequest;
	
	/** 
	 * 成绩报告二进制字节流
	 **/
	private $reportFile;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setNiukeExamReportCallbackRequest($niukeExamReportCallbackRequest)
	{
		$this->niukeExamReportCallbackRequest = $niukeExamReportCallbackRequest;
		$this->apiParas["niuke_exam_report_callback_request"] = $niukeExamReportCallbackRequest;
	}

	public function getNiukeExamReportCallbackRequest()
	{
		return $this->niukeExamReportCallbackRequest;
	}

	public function setReportFile($reportFile)
	{
		$this->reportFile = $reportFile;
		$this->apiParas["report_file"] = $reportFile;
	}

	public function getReportFile()
	{
		return $this->reportFile;
	}

	public function getApiMethodName()
	{
		return "alipay.digitalmgmt.hrcampuscore.niukeexamreport.result.upload";
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
