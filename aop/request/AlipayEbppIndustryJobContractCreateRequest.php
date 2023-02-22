<?php
/**
 * ALIPAY API: alipay.ebpp.industry.job.contract.create request
 *
 * @author auto create
 * @since 1.0, 2023-02-06 14:36:37
 */
class AlipayEbppIndustryJobContractCreateRequest
{
	/** 
	 * 企业列表
	 **/
	private $companyList;
	
	/** 
	 * 上传文件的二进制流
	 **/
	private $fileContent;
	
	/** 
	 * 外部订单号
	 **/
	private $outerBizNo;
	
	/** 
	 * 签署平台: H5 或者 ALIPAY
	 **/
	private $signPlatform;
	
	/** 
	 * 合同用户列表
	 **/
	private $userList;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCompanyList($companyList)
	{
		$this->companyList = $companyList;
		$this->apiParas["company_list"] = $companyList;
	}

	public function getCompanyList()
	{
		return $this->companyList;
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

	public function setOuterBizNo($outerBizNo)
	{
		$this->outerBizNo = $outerBizNo;
		$this->apiParas["outer_biz_no"] = $outerBizNo;
	}

	public function getOuterBizNo()
	{
		return $this->outerBizNo;
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

	public function setUserList($userList)
	{
		$this->userList = $userList;
		$this->apiParas["user_list"] = $userList;
	}

	public function getUserList()
	{
		return $this->userList;
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
