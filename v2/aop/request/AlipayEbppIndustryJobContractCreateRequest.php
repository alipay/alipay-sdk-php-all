<?php
/**
 * ALIPAY API: alipay.ebpp.industry.job.contract.create request
 *
 * @author auto create
 * @since 1.0, 2023-08-23 21:51:43
 */
class AlipayEbppIndustryJobContractCreateRequest
{
	/** 
	 * 企业列表
	 **/
	private $companyList;
	
	/** 
	 * 合同签署失败时的跳转地址，如果不做单独配置，默认与redirect_url一致
	 **/
	private $failureRedirectUrl;
	
	/** 
	 * 上传文件的二进制流
	 **/
	private $fileContent;
	
	/** 
	 * 签署状态变更时的通知地址
	 **/
	private $noticeUrl;
	
	/** 
	 * 外部订单号
	 **/
	private $outerBizNo;
	
	/** 
	 * 签署成功后的重定向跳转地址
	 **/
	private $redirectUrl;
	
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

	public function setFailureRedirectUrl($failureRedirectUrl)
	{
		$this->failureRedirectUrl = $failureRedirectUrl;
		$this->apiParas["failure_redirect_url"] = $failureRedirectUrl;
	}

	public function getFailureRedirectUrl()
	{
		return $this->failureRedirectUrl;
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

	public function setNoticeUrl($noticeUrl)
	{
		$this->noticeUrl = $noticeUrl;
		$this->apiParas["notice_url"] = $noticeUrl;
	}

	public function getNoticeUrl()
	{
		return $this->noticeUrl;
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

	public function setRedirectUrl($redirectUrl)
	{
		$this->redirectUrl = $redirectUrl;
		$this->apiParas["redirect_url"] = $redirectUrl;
	}

	public function getRedirectUrl()
	{
		return $this->redirectUrl;
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
