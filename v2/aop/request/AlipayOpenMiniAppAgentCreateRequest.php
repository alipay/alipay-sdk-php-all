<?php
/**
 * ALIPAY API: alipay.open.mini.app.agent.create request
 *
 * @author auto create
 * @since 1.0, 2021-07-14 10:10:17
 */
class AlipayOpenMiniAppAgentCreateRequest
{
	/** 
	 * 商家小程序描述信息，简要描述小程序主要功能（20-200个字），例：xx小程序提供了xx功能，主要解决了XX问题。
	 **/
	private $appDesc;
	
	/** 
	 * 小程序logo图片文件，最大256KB，长宽比1:1, 不允许涉及政治敏感与色情；图片格式必须为：png、jpeg、jpg，建议上传像素为180*180
	 **/
	private $appLogo;
	
	/** 
	 * 小程序的中文名称，3-40个字符，一个中文对应两个字符，必须全局唯一，详细规则可参见名称审核规范：https://opendocs.alipay.com/mini/operation/standard/auditing/name
	 **/
	private $appName;
	
	/** 
	 * 小程序的简介，用于简短描述小程序提供的功能，10-32个字符，一个中文两个字符，详细的审核规范请参见：https://opendocs.alipay.com/mini/operation/standard/auditing/cvdkep
	 **/
	private $appSlogan;
	
	/** 
	 * 联系人姓名，仅仅在开发者从未入驻过开放平台的情况下需要提供该字段
	 **/
	private $contactName;
	
	/** 
	 * 开发者联系人信息，仅在开发者从未入驻过开放平台的情况下需要提供；如果开发者已经入驻过开放平台，那么该字段无需提供。
	 **/
	private $contactPhone;
	
	/** 
	 * 支付宝会员用户登录号，如果是企业账户，应该使用企业的支付宝登录号，
	 **/
	private $loginId;
	
	/** 
	 * 新小程序前台类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目_第二个三级类目，详细类目可以通过 https://docs.open.alipay.com/api_49/alipay.open.mini.category.query接口查询mini_category_list，需要注意个人账户类目是受限的，不能使用企业类目，但是企业可以使用个人类目。
	 **/
	private $miniCategoryIds;
	
	/** 
	 * 外部业务号
	 **/
	private $outBizNo;
	
	/** 
	 * 商家小程序的客服电话，用于向用户展示客服信息
	 **/
	private $servicePhone;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAppDesc($appDesc)
	{
		$this->appDesc = $appDesc;
		$this->apiParas["app_desc"] = $appDesc;
	}

	public function getAppDesc()
	{
		return $this->appDesc;
	}

	public function setAppLogo($appLogo)
	{
		$this->appLogo = $appLogo;
		$this->apiParas["app_logo"] = $appLogo;
	}

	public function getAppLogo()
	{
		return $this->appLogo;
	}

	public function setAppName($appName)
	{
		$this->appName = $appName;
		$this->apiParas["app_name"] = $appName;
	}

	public function getAppName()
	{
		return $this->appName;
	}

	public function setAppSlogan($appSlogan)
	{
		$this->appSlogan = $appSlogan;
		$this->apiParas["app_slogan"] = $appSlogan;
	}

	public function getAppSlogan()
	{
		return $this->appSlogan;
	}

	public function setContactName($contactName)
	{
		$this->contactName = $contactName;
		$this->apiParas["contact_name"] = $contactName;
	}

	public function getContactName()
	{
		return $this->contactName;
	}

	public function setContactPhone($contactPhone)
	{
		$this->contactPhone = $contactPhone;
		$this->apiParas["contact_phone"] = $contactPhone;
	}

	public function getContactPhone()
	{
		return $this->contactPhone;
	}

	public function setLoginId($loginId)
	{
		$this->loginId = $loginId;
		$this->apiParas["login_id"] = $loginId;
	}

	public function getLoginId()
	{
		return $this->loginId;
	}

	public function setMiniCategoryIds($miniCategoryIds)
	{
		$this->miniCategoryIds = $miniCategoryIds;
		$this->apiParas["mini_category_ids"] = $miniCategoryIds;
	}

	public function getMiniCategoryIds()
	{
		return $this->miniCategoryIds;
	}

	public function setOutBizNo($outBizNo)
	{
		$this->outBizNo = $outBizNo;
		$this->apiParas["out_biz_no"] = $outBizNo;
	}

	public function getOutBizNo()
	{
		return $this->outBizNo;
	}

	public function setServicePhone($servicePhone)
	{
		$this->servicePhone = $servicePhone;
		$this->apiParas["service_phone"] = $servicePhone;
	}

	public function getServicePhone()
	{
		return $this->servicePhone;
	}

	public function getApiMethodName()
	{
		return "alipay.open.mini.app.agent.create";
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
