<?php
/**
 * ALIPAY API: alipay.ebpp.prodmode.agreement.upload request
 *
 * @author auto create
 * @since 1.0, 2023-08-21 02:23:57
 */
class AlipayEbppProdmodeAgreementUploadRequest
{
	/** 
	 * 操作者名称
	 **/
	private $operatorName;
	
	/** 
	 * 创建批次任务ID，生成结果需要外部商户邦道提交批次水燃入驻信息，调用alipay.ebpp.isv.prodmode.create入驻信息开放接口，缴费端接收请求，创建批次任务，生成任务ID，通过创建任务接口返回给邦道。
	 **/
	private $taskId;
	
	/** 
	 * byte[]数组类型值，提供邦道授权函协议上传，上传文件格式必须是.rar或.zip压缩文件。
	 **/
	private $uploadFile;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setOperatorName($operatorName)
	{
		$this->operatorName = $operatorName;
		$this->apiParas["operator_name"] = $operatorName;
	}

	public function getOperatorName()
	{
		return $this->operatorName;
	}

	public function setTaskId($taskId)
	{
		$this->taskId = $taskId;
		$this->apiParas["task_id"] = $taskId;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function setUploadFile($uploadFile)
	{
		$this->uploadFile = $uploadFile;
		$this->apiParas["upload_file"] = $uploadFile;
	}

	public function getUploadFile()
	{
		return $this->uploadFile;
	}

	public function getApiMethodName()
	{
		return "alipay.ebpp.prodmode.agreement.upload";
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
