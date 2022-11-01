<?php
/**
 * ALIPAY API: alipay.ebpp.industry.job.contract.create request
 *
 * @author auto create
 * @since 1.0, 2022-10-10 14:26:49
 */
class AlipayEbppIndustryJobContractCreateRequest
{
	/** 
	 * 用户身份证号码
	 **/
	private $certNo;
	
	/** 
	 * 企业信用代码或者营业执照注册号
	 **/
	private $companyCertNo;
	
	/** 
	 * 企业名称
	 **/
	private $companyName;
	
	/** 
	 * 上传文件的二进制流
	 **/
	private $fileContent;
	
	/** 
	 * 企业法人身份证号码
	 **/
	private $legalPersonCertNo;
	
	/** 
	 * 企业法人名称
	 **/
	private $legalPersonName;
	
	/** 
	 * 蚂蚁统一会员ID
	 **/
	private $openId;
	
	/** 
	 * 外部订单号
	 **/
	private $outerBizNo;
	
	/** 
	 * 电子合同签署区配置，必须包含个人和企业两部分信息
	 **/
	private $signArea;
	
	/** 
	 * 签署平台: H5 或者 ALIPAY
	 **/
	private $signPlatform;
	
	/** 
	 * 蚂蚁统一会员ID
	 **/
	private $userId;
	
	/** 
	 * 用户名称
	 **/
	private $userName;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCertNo($certNo)
	{
		$this->certNo = $certNo;
		$this->apiParas["cert_no"] = $certNo;
	}

	public function getCertNo()
	{
		return $this->certNo;
	}

	public function setCompanyCertNo($companyCertNo)
	{
		$this->companyCertNo = $companyCertNo;
		$this->apiParas["company_cert_no"] = $companyCertNo;
	}

	public function getCompanyCertNo()
	{
		return $this->companyCertNo;
	}

	public function setCompanyName($companyName)
	{
		$this->companyName = $companyName;
		$this->apiParas["company_name"] = $companyName;
	}

	public function getCompanyName()
	{
		return $this->companyName;
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

	public function setLegalPersonCertNo($legalPersonCertNo)
	{
		$this->legalPersonCertNo = $legalPersonCertNo;
		$this->apiParas["legal_person_cert_no"] = $legalPersonCertNo;
	}

	public function getLegalPersonCertNo()
	{
		return $this->legalPersonCertNo;
	}

	public function setLegalPersonName($legalPersonName)
	{
		$this->legalPersonName = $legalPersonName;
		$this->apiParas["legal_person_name"] = $legalPersonName;
	}

	public function getLegalPersonName()
	{
		return $this->legalPersonName;
	}

	public function setOpenId($openId)
	{
		$this->openId = $openId;
		$this->apiParas["open_id"] = $openId;
	}

	public function getOpenId()
	{
		return $this->openId;
	}

	public function setOuterBizNo($outerBizNo)
	{
		$this->outerBizNo = $outerBizNo;
		$this->apiParas["outer_biz_no"] = $outerBizNo;
	}

	public function getOuterBizNo()
	{
		return $this->outerBizNo;
	}

	public function setSignArea($signArea)
	{
		$this->signArea = $signArea;
		$this->apiParas["sign_area"] = $signArea;
	}

	public function getSignArea()
	{
		return $this->signArea;
	}

	public function setSignPlatform($signPlatform)
	{
		$this->signPlatform = $signPlatform;
		$this->apiParas["sign_platform"] = $signPlatform;
	}

	public function getSignPlatform()
	{
		return $this->signPlatform;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function setUserName($userName)
	{
		$this->userName = $userName;
		$this->apiParas["user_name"] = $userName;
	}

	public function getUserName()
	{
		return $this->userName;
	}

	public function getApiMethodName()
	{
		return "alipay.ebpp.industry.job.contract.create";
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
