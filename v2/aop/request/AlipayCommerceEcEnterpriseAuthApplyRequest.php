<?php
/**
 * ALIPAY API: alipay.commerce.ec.enterprise.auth.apply request
 *
 * @author auto create
 * @since 1.0, 2023-08-23 21:01:41
 */
class AlipayCommerceEcEnterpriseAuthApplyRequest
{
	/** 
	 * 统一社会信用代码
	 **/
	private $enterpriseCode;
	
	/** 
	 * 企业ID
	 **/
	private $enterpriseId;
	
	/** 
	 * 企业名称
	 **/
	private $enterpriseName;
	
	/** 
	 * 营业执照文件ID
	 **/
	private $fileId;
	
	/** 
	 * 法人身份证号：
快速创建，小二代入驻非必填。
普通创建，企业自入驻必填。
	 **/
	private $legalIdNumber;
	
	/** 
	 * 法人姓名
	 **/
	private $legalName;
	
	/** 
	 * 营业执照截止日期，时间格式：yyyy-MM-dd
	 **/
	private $licenseEndDate;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setEnterpriseCode($enterpriseCode)
	{
		$this->enterpriseCode = $enterpriseCode;
		$this->apiParas["enterprise_code"] = $enterpriseCode;
	}

	public function getEnterpriseCode()
	{
		return $this->enterpriseCode;
	}

	public function setEnterpriseId($enterpriseId)
	{
		$this->enterpriseId = $enterpriseId;
		$this->apiParas["enterprise_id"] = $enterpriseId;
	}

	public function getEnterpriseId()
	{
		return $this->enterpriseId;
	}

	public function setEnterpriseName($enterpriseName)
	{
		$this->enterpriseName = $enterpriseName;
		$this->apiParas["enterprise_name"] = $enterpriseName;
	}

	public function getEnterpriseName()
	{
		return $this->enterpriseName;
	}

	public function setFileId($fileId)
	{
		$this->fileId = $fileId;
		$this->apiParas["file_id"] = $fileId;
	}

	public function getFileId()
	{
		return $this->fileId;
	}

	public function setLegalIdNumber($legalIdNumber)
	{
		$this->legalIdNumber = $legalIdNumber;
		$this->apiParas["legal_id_number"] = $legalIdNumber;
	}

	public function getLegalIdNumber()
	{
		return $this->legalIdNumber;
	}

	public function setLegalName($legalName)
	{
		$this->legalName = $legalName;
		$this->apiParas["legal_name"] = $legalName;
	}

	public function getLegalName()
	{
		return $this->legalName;
	}

	public function setLicenseEndDate($licenseEndDate)
	{
		$this->licenseEndDate = $licenseEndDate;
		$this->apiParas["license_end_date"] = $licenseEndDate;
	}

	public function getLicenseEndDate()
	{
		return $this->licenseEndDate;
	}

	public function getApiMethodName()
	{
		return "alipay.commerce.ec.enterprise.auth.apply";
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
