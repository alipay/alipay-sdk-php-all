<?php
/**
 * ALIPAY API: alipay.terminal.edgecloud.simcard.netflowmonitor.sync request
 *
 * @author auto create
 * @since 1.0, 2026-06-24 11:02:55
 */
class AlipayTerminalEdgecloudSimcardNetflowmonitorSyncRequest
{
	/** 
	 * 当upload_monitor_scene为SIM_CARD_NETFLOW_DAY或SIM_CARD_POOL_NETFLOW_DAY时，biz_date格式为yyyymmdd。当upload_monitor_scene为SIM_CARD_NETFLOW_MONTH时，biz_date格式为yyyymm
	 **/
	private $bizDate;
	
	/** 
	 * 文件序列号从1开始递增，且必须连续递增
	 **/
	private $bizDateFileSeqId;
	
	/** 
	 * 同步文件二进制字节流，必须是CSV文件，大小必须小于50M
	 **/
	private $fileContent;
	
	/** 
	 * SIM_CARD_NETFLOW_DAY(sim卡流量天级别监控)
SIM_CARD_NETFLOW_MONTH(sim卡流量月级别监控)
SIM_CARD_POOL_NETFLOW_DAY(sim流量池天级别监控)
	 **/
	private $uploadMonitorScene;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizDate($bizDate)
	{
		$this->bizDate = $bizDate;
		$this->apiParas["biz_date"] = $bizDate;
	}

	public function getBizDate()
	{
		return $this->bizDate;
	}

	public function setBizDateFileSeqId($bizDateFileSeqId)
	{
		$this->bizDateFileSeqId = $bizDateFileSeqId;
		$this->apiParas["biz_date_file_seq_id"] = $bizDateFileSeqId;
	}

	public function getBizDateFileSeqId()
	{
		return $this->bizDateFileSeqId;
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

	public function setUploadMonitorScene($uploadMonitorScene)
	{
		$this->uploadMonitorScene = $uploadMonitorScene;
		$this->apiParas["upload_monitor_scene"] = $uploadMonitorScene;
	}

	public function getUploadMonitorScene()
	{
		return $this->uploadMonitorScene;
	}

	public function getApiMethodName()
	{
		return "alipay.terminal.edgecloud.simcard.netflowmonitor.sync";
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
