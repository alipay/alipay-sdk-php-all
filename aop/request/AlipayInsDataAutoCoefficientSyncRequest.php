<?php
/**
 * ALIPAY API: alipay.ins.data.auto.coefficient.sync request
 *
 * @author auto create
 * @since 1.0, 2019-01-07 20:51:15
 */
class AlipayInsDataAutoCoefficientSyncRequest
{
	/** 
	 * csv文件
	 **/
	private $coeffecientTableContent;
	
	/** 
	 * 同步表id，每次同步的系数表应有唯一可辨认的id
	 **/
	private $coeffecientTableId;
	
	/** 
	 * 同步系数表的条目数量
	 **/
	private $coeffecientTableSize;
	
	/** 
	 * 请求id，每次请求唯一
	 **/
	private $requestId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCoeffecientTableContent($coeffecientTableContent)
	{
		$this->coeffecientTableContent = $coeffecientTableContent;
		$this->apiParas["coeffecient_table_content"] = $coeffecientTableContent;
	}

	public function getCoeffecientTableContent()
	{
		return $this->coeffecientTableContent;
	}

	public function setCoeffecientTableId($coeffecientTableId)
	{
		$this->coeffecientTableId = $coeffecientTableId;
		$this->apiParas["coeffecient_table_id"] = $coeffecientTableId;
	}

	public function getCoeffecientTableId()
	{
		return $this->coeffecientTableId;
	}

	public function setCoeffecientTableSize($coeffecientTableSize)
	{
		$this->coeffecientTableSize = $coeffecientTableSize;
		$this->apiParas["coeffecient_table_size"] = $coeffecientTableSize;
	}

	public function getCoeffecientTableSize()
	{
		return $this->coeffecientTableSize;
	}

	public function setRequestId($requestId)
	{
		$this->requestId = $requestId;
		$this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId()
	{
		return $this->requestId;
	}

	public function getApiMethodName()
	{
		return "alipay.ins.data.auto.coefficient.sync";
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
