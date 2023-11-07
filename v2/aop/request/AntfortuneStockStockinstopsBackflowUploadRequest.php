<?php
/**
 * ALIPAY API: antfortune.stock.stockinstops.backflow.upload request
 *
 * @author auto create
 * @since 1.0, 2023-11-06 21:39:01
 */
class AntfortuneStockStockinstopsBackflowUploadRequest
{
	/** 
	 * 上传数据的压缩算法
	 **/
	private $compressType;
	
	/** 
	 * 上传文件的二进制流
	 **/
	private $fileContent;
	
	/** 
	 * forward服务器的域名信息
	 **/
	private $forwardHost;
	
	/** 
	 * forward所在机房信息
	 **/
	private $forwardRoom;
	
	/** 
	 * forward发送的时间
	 **/
	private $forwardTime;
	
	/** 
	 * forward链路追踪Id
	 **/
	private $forwardTrace;
	
	/** 
	 * forward所在环境信息
	 **/
	private $forwardZone;
	
	/** 
	 * 机构名称
	 **/
	private $instId;
	
	/** 
	 * 业务数据类型
	 **/
	private $msgType;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCompressType($compressType)
	{
		$this->compressType = $compressType;
		$this->apiParas["compress_type"] = $compressType;
	}

	public function getCompressType()
	{
		return $this->compressType;
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

	public function setForwardHost($forwardHost)
	{
		$this->forwardHost = $forwardHost;
		$this->apiParas["forward_host"] = $forwardHost;
	}

	public function getForwardHost()
	{
		return $this->forwardHost;
	}

	public function setForwardRoom($forwardRoom)
	{
		$this->forwardRoom = $forwardRoom;
		$this->apiParas["forward_room"] = $forwardRoom;
	}

	public function getForwardRoom()
	{
		return $this->forwardRoom;
	}

	public function setForwardTime($forwardTime)
	{
		$this->forwardTime = $forwardTime;
		$this->apiParas["forward_time"] = $forwardTime;
	}

	public function getForwardTime()
	{
		return $this->forwardTime;
	}

	public function setForwardTrace($forwardTrace)
	{
		$this->forwardTrace = $forwardTrace;
		$this->apiParas["forward_trace"] = $forwardTrace;
	}

	public function getForwardTrace()
	{
		return $this->forwardTrace;
	}

	public function setForwardZone($forwardZone)
	{
		$this->forwardZone = $forwardZone;
		$this->apiParas["forward_zone"] = $forwardZone;
	}

	public function getForwardZone()
	{
		return $this->forwardZone;
	}

	public function setInstId($instId)
	{
		$this->instId = $instId;
		$this->apiParas["inst_id"] = $instId;
	}

	public function getInstId()
	{
		return $this->instId;
	}

	public function setMsgType($msgType)
	{
		$this->msgType = $msgType;
		$this->apiParas["msg_type"] = $msgType;
	}

	public function getMsgType()
	{
		return $this->msgType;
	}

	public function getApiMethodName()
	{
		return "antfortune.stock.stockinstops.backflow.upload";
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
