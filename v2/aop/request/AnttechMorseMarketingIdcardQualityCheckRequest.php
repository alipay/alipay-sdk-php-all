<?php
/**
 * ALIPAY API: anttech.morse.marketing.idcard.quality.check request
 *
 * @author auto create
 * @since 1.0, 2026-08-17 09:17:49
 */
class AnttechMorseMarketingIdcardQualityCheckRequest
{
	/** 
	 * 上传的文件流
	 **/
	private $fileContent;
	
	/** 
	 * 质检策略，控制校验哪些维度
	 **/
	private $qualityStrategy;
	
	/** 
	 * 调用方生成的请求唯一标识；实现采用时间戳，作为幂等键
	 **/
	private $requestId;
	
	/** 
	 * 证件面：emblem=正面（国徽面）/ portrait=背面（人像面），大小写容错
	 **/
	private $side;

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

	public function setQualityStrategy($qualityStrategy)
	{
		$this->qualityStrategy = $qualityStrategy;
		$this->apiParas["quality_strategy"] = $qualityStrategy;
	}

	public function getQualityStrategy()
	{
		return $this->qualityStrategy;
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

	public function setSide($side)
	{
		$this->side = $side;
		$this->apiParas["side"] = $side;
	}

	public function getSide()
	{
		return $this->side;
	}

	public function getApiMethodName()
	{
		return "anttech.morse.marketing.idcard.quality.check";
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
