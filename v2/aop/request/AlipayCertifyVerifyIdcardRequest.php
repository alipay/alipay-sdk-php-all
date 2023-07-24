<?php
/**
 * ALIPAY API: alipay.certify.verify.idcard request
 *
 * @author auto create
 * @since 1.0, 2023-07-13 15:31:02
 */
class AlipayCertifyVerifyIdcardRequest
{
	/** 
	 * 访问来源，业务系统 用于结算
	 **/
	private $bizFrom;
	
	/** 
	 * 业务主体ID 如userId
	 **/
	private $bizId;
	
	/** 
	 * 证件姓名
	 **/
	private $certName;
	
	/** 
	 * 身份证号码
	 **/
	private $certNo;
	
	/** 
	 * 认证来源 : 业务BU,如网商银行
	 **/
	private $certifyFrom;
	
	/** 
	 * Y强制查官网，N缺省，先查本地后官网
	 **/
	private $forcePublic;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizFrom($bizFrom)
	{
		$this->bizFrom = $bizFrom;
		$this->apiParas["biz_from"] = $bizFrom;
	}

	public function getBizFrom()
	{
		return $this->bizFrom;
	}

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

	public function setCertifyFrom($certifyFrom)
	{
		$this->certifyFrom = $certifyFrom;
		$this->apiParas["certify_from"] = $certifyFrom;
	}

	public function getCertifyFrom()
	{
		return $this->certifyFrom;
	}

	public function setForcePublic($forcePublic)
	{
		$this->forcePublic = $forcePublic;
		$this->apiParas["force_public"] = $forcePublic;
	}

	public function getForcePublic()
	{
		return $this->forcePublic;
	}

	public function getApiMethodName()
	{
		return "alipay.certify.verify.idcard";
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
