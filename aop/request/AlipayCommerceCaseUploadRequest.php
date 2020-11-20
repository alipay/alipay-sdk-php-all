<?php
/**
 * ALIPAY API: alipay.commerce.case.upload request
 *
 * @author auto create
 * @since 1.0, 2020-03-03 12:01:11
 */
class AlipayCommerceCaseUploadRequest
{
	/** 
	 * 文件体
	 **/
	private $fileContent;
	
	/** 
	 * 节点id
	 **/
	private $nodeId;
	
	/** 
	 * 其他参数
	 **/
	private $otherParam;

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

	public function setNodeId($nodeId)
	{
		$this->nodeId = $nodeId;
		$this->apiParas["node_id"] = $nodeId;
	}

	public function getNodeId()
	{
		return $this->nodeId;
	}

	public function setOtherParam($otherParam)
	{
		$this->otherParam = $otherParam;
		$this->apiParas["other_param"] = $otherParam;
	}

	public function getOtherParam()
	{
		return $this->otherParam;
	}

	public function getApiMethodName()
	{
		return "alipay.commerce.case.upload";
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
