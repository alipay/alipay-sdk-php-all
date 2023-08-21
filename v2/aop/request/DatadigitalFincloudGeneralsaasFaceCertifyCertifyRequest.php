<?php
/**
 * ALIPAY API: datadigital.fincloud.generalsaas.face.certify.certify request
 *
 * @author auto create
 * @since 1.0, 2023-08-21 01:51:21
 */
class DatadigitalFincloudGeneralsaasFaceCertifyCertifyRequest
{
	/** 
	 * 业务方流水号
	 **/
	private $bizId;
	
	/** 
	 * 姓名
	 **/
	private $certName;
	
	/** 
	 * 证件号
	 **/
	private $certNo;
	
	/** 
	 * 人脸图像二进制流，大小限制30k
	 **/
	private $fileContent;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setCertName($certName)
	{
		$this->certName = $certName;
		$this->apiParas["cert_name"] = $certName;
	}

	public function getCertName()
	{
		return $this->certName;
	}

	public function setCertNo($certNo)
	{
		$this->certNo = $certNo;
		$this->apiParas["cert_no"] = $certNo;
	}

	public function getCertNo()
	{
		return $this->certNo;
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

	public function getApiMethodName()
	{
		return "datadigital.fincloud.generalsaas.face.certify.certify";
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
