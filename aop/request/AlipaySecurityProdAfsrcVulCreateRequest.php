<?php
/**
 * ALIPAY API: alipay.security.prod.afsrc.vul.create request
 *
 * @author auto create
 * @since 1.0, 2019-01-07 20:51:15
 */
class AlipaySecurityProdAfsrcVulCreateRequest
{
	/** 
	 * 漏洞附件
	 **/
	private $attachment;
	
	/** 
	 * 漏洞所属业务
	 **/
	private $business;
	
	/** 
	 * 漏洞所属公司
	 **/
	private $company;
	
	/** 
	 * 漏洞详情
	 **/
	private $detail;
	
	/** 
	 * HavanaId(淘宝uid)
	 **/
	private $hid;
	
	/** 
	 * 用户上报漏洞等级
	 **/
	private $level;
	
	/** 
	 * 白帽子提交漏洞时填写的手机号
	 **/
	private $mobilePhone;
	
	/** 
	 * 漏洞名称
	 **/
	private $name;
	
	/** 
	 * 用户昵称
	 **/
	private $nick;
	
	/** 
	 * 漏洞状态
	 **/
	private $status;
	
	/** 
	 * 漏洞提交时间
	 **/
	private $submitTime;
	
	/** 
	 * 子平台漏洞一级类型 ID
	 **/
	private $typeSubFirstId;
	
	/** 
	 * 一级漏洞类型名称
	 **/
	private $typeSubFirstName;
	
	/** 
	 * 子平台漏洞二级类型 ID
	 **/
	private $typeSubSecondId;
	
	/** 
	 * 二级漏洞类型名称
	 **/
	private $typeSubSecondName;
	
	/** 
	 * 统一平台漏洞一级类型 ID
	 **/
	private $typeUnionFirstId;
	
	/** 
	 * 统一平台漏洞二级类型 ID
	 **/
	private $typeUnionSecondId;
	
	/** 
	 * 漏洞 URL
	 **/
	private $url;
	
	/** 
	 * 支付宝 ID
	 **/
	private $userId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAttachment($attachment)
	{
		$this->attachment = $attachment;
		$this->apiParas["attachment"] = $attachment;
	}

	public function getAttachment()
	{
		return $this->attachment;
	}

	public function setBusiness($business)
	{
		$this->business = $business;
		$this->apiParas["business"] = $business;
	}

	public function getBusiness()
	{
		return $this->business;
	}

	public function setCompany($company)
	{
		$this->company = $company;
		$this->apiParas["company"] = $company;
	}

	public function getCompany()
	{
		return $this->company;
	}

	public function setDetail($detail)
	{
		$this->detail = $detail;
		$this->apiParas["detail"] = $detail;
	}

	public function getDetail()
	{
		return $this->detail;
	}

	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
	}

	public function setLevel($level)
	{
		$this->level = $level;
		$this->apiParas["level"] = $level;
	}

	public function getLevel()
	{
		return $this->level;
	}

	public function setMobilePhone($mobilePhone)
	{
		$this->mobilePhone = $mobilePhone;
		$this->apiParas["mobile_phone"] = $mobilePhone;
	}

	public function getMobilePhone()
	{
		return $this->mobilePhone;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setSubmitTime($submitTime)
	{
		$this->submitTime = $submitTime;
		$this->apiParas["submit_time"] = $submitTime;
	}

	public function getSubmitTime()
	{
		return $this->submitTime;
	}

	public function setTypeSubFirstId($typeSubFirstId)
	{
		$this->typeSubFirstId = $typeSubFirstId;
		$this->apiParas["type_sub_first_id"] = $typeSubFirstId;
	}

	public function getTypeSubFirstId()
	{
		return $this->typeSubFirstId;
	}

	public function setTypeSubFirstName($typeSubFirstName)
	{
		$this->typeSubFirstName = $typeSubFirstName;
		$this->apiParas["type_sub_first_name"] = $typeSubFirstName;
	}

	public function getTypeSubFirstName()
	{
		return $this->typeSubFirstName;
	}

	public function setTypeSubSecondId($typeSubSecondId)
	{
		$this->typeSubSecondId = $typeSubSecondId;
		$this->apiParas["type_sub_second_id"] = $typeSubSecondId;
	}

	public function getTypeSubSecondId()
	{
		return $this->typeSubSecondId;
	}

	public function setTypeSubSecondName($typeSubSecondName)
	{
		$this->typeSubSecondName = $typeSubSecondName;
		$this->apiParas["type_sub_second_name"] = $typeSubSecondName;
	}

	public function getTypeSubSecondName()
	{
		return $this->typeSubSecondName;
	}

	public function setTypeUnionFirstId($typeUnionFirstId)
	{
		$this->typeUnionFirstId = $typeUnionFirstId;
		$this->apiParas["type_union_first_id"] = $typeUnionFirstId;
	}

	public function getTypeUnionFirstId()
	{
		return $this->typeUnionFirstId;
	}

	public function setTypeUnionSecondId($typeUnionSecondId)
	{
		$this->typeUnionSecondId = $typeUnionSecondId;
		$this->apiParas["type_union_second_id"] = $typeUnionSecondId;
	}

	public function getTypeUnionSecondId()
	{
		return $this->typeUnionSecondId;
	}

	public function setUrl($url)
	{
		$this->url = $url;
		$this->apiParas["url"] = $url;
	}

	public function getUrl()
	{
		return $this->url;
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

	public function getApiMethodName()
	{
		return "alipay.security.prod.afsrc.vul.create";
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
