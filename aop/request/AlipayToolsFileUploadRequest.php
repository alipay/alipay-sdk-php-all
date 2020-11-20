<?php
/**
 * ALIPAY API: alipay.tools.file.upload request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayToolsFileUploadRequest
{
	/** 
	 * 要上传的文件内容
	 **/
	private $file;
	
	/** 
	 * file1
	 **/
	private $file2;
	
	/** 
	 * file2
	 **/
	private $file3;
	
	/** 
	 * 234234
	 **/
	private $sadsa;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setFile($file)
	{
		$this->file = $file;
		$this->apiParas["file"] = $file;
	}

	public function getFile()
	{
		return $this->file;
	}

	public function setFile2($file2)
	{
		$this->file2 = $file2;
		$this->apiParas["file2"] = $file2;
	}

	public function getFile2()
	{
		return $this->file2;
	}

	public function setFile3($file3)
	{
		$this->file3 = $file3;
		$this->apiParas["file3"] = $file3;
	}

	public function getFile3()
	{
		return $this->file3;
	}

	public function setSadsa($sadsa)
	{
		$this->sadsa = $sadsa;
		$this->apiParas["sadsa"] = $sadsa;
	}

	public function getSadsa()
	{
		return $this->sadsa;
	}

	public function getApiMethodName()
	{
		return "alipay.tools.file.upload";
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
