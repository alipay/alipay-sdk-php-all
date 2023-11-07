<?php
/**
 * ALIPAY API: alipay.open.operation.daniel.test.use request
 *
 * @author auto create
 * @since 1.0, 2023-11-01 15:43:05
 */
class AlipayOpenOperationDanielTestUseRequest
{
	/** 
	 * 123
	 **/
	private $fileTest;
	
	/** 
	 * 32
	 **/
	private $stringTest;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setFileTest($fileTest)
	{
		$this->fileTest = $fileTest;
		$this->apiParas["file_test"] = $fileTest;
	}

	public function getFileTest()
	{
		return $this->fileTest;
	}

	public function setStringTest($stringTest)
	{
		$this->stringTest = $stringTest;
		$this->apiParas["string_test"] = $stringTest;
	}

	public function getStringTest()
	{
		return $this->stringTest;
	}

	public function getApiMethodName()
	{
		return "alipay.open.operation.daniel.test.use";
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
