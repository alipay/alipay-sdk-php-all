<?php
/**
 * ALIPAY API: alipay.open.servicemarket.order.create request
 *
 * @author auto create
 * @since 1.0, 2023-09-11 19:25:31
 */
class AlipayOpenServicemarketOrderCreateRequest
{
	/** 
	 * 11_12;12_13。小程序类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目，详细类目可以参考https://docs.alipay.com/isv/10325
	 **/
	private $appCategoryIds;
	
	/** 
	 * 小程序官方示例Demo，展示已支持的接口能力及组件。
	 **/
	private $appDesc;
	
	/** 
	 * 小程序应用英文名称
	 **/
	private $appEnglishName;
	
	/** 
	 * 小程序应用logo图标，图片格式必须为：png、jpeg、jpg，建议上传像素为180*180
	 **/
	private $appLogo;
	
	/** 
	 * 小程序应用名称
	 **/
	private $appName;
	
	/** 
	 * 来源的业务方，需要申请
	 **/
	private $appOrigin;
	
	/** 
	 * 小程序应用简介，一句话描述小程序功能
	 **/
	private $appSlogan;
	
	/** 
	 * 订购的服务商品ID所在的市场编码。新接入场景必须传递，具体值请联系产品分配。
	 **/
	private $marketCode;
	
	/** 
	 * 订购的服务商品ID
	 **/
	private $merchandiseId;
	
	/** 
	 * 商户PID
	 **/
	private $merchantPid;
	
	/** 
	 * 一二方支持传入appId
	 **/
	private $miniAppId;
	
	/** 
	 * 新小程序前台类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目_第二个三级类目，详细类目可以通过 https://docs.open.alipay.com/api_49/alipay.open.mini.category.query接口查询mini_category_list，如果不填默认采用当前小程序应用类目。使用默认应用类目后不需要再次上传营业执照号、营业执照名、营业执照截图、营业执照有效期。使用后不再读取app_category_ids值，老前台类目将废弃
	 **/
	private $miniCategoryIds;
	
	/** 
	 * 比如某种业务标准外部订单号,比如交易外部订单号，代表商户端自己订单号
	 **/
	private $outBizNo;
	
	/** 
	 * 小程序客服邮箱
	 **/
	private $serviceEmail;
	
	/** 
	 * 小程序客服电话
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

	
	public function setAppCategoryIds($appCategoryIds)
	{
		$this->appCategoryIds = $appCategoryIds;
		$this->apiParas["app_category_ids"] = $appCategoryIds;
	}

	public function getAppCategoryIds()
	{
		return $this->appCategoryIds;
	}

	public function setAppDesc($appDesc)
	{
		$this->appDesc = $appDesc;
		$this->apiParas["app_desc"] = $appDesc;
	}

	public function getAppDesc()
	{
		return $this->appDesc;
	}

	public function setAppEnglishName($appEnglishName)
	{
		$this->appEnglishName = $appEnglishName;
		$this->apiParas["app_english_name"] = $appEnglishName;
	}

	public function getAppEnglishName()
	{
		return $this->appEnglishName;
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

	public function setAppOrigin($appOrigin)
	{
		$this->appOrigin = $appOrigin;
		$this->apiParas["app_origin"] = $appOrigin;
	}

	public function getAppOrigin()
	{
		return $this->appOrigin;
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

	public function setMarketCode($marketCode)
	{
		$this->marketCode = $marketCode;
		$this->apiParas["market_code"] = $marketCode;
	}

	public function getMarketCode()
	{
		return $this->marketCode;
	}

	public function setMerchandiseId($merchandiseId)
	{
		$this->merchandiseId = $merchandiseId;
		$this->apiParas["merchandise_id"] = $merchandiseId;
	}

	public function getMerchandiseId()
	{
		return $this->merchandiseId;
	}

	public function setMerchantPid($merchantPid)
	{
		$this->merchantPid = $merchantPid;
		$this->apiParas["merchant_pid"] = $merchantPid;
	}

	public function getMerchantPid()
	{
		return $this->merchantPid;
	}

	public function setMiniAppId($miniAppId)
	{
		$this->miniAppId = $miniAppId;
		$this->apiParas["mini_app_id"] = $miniAppId;
	}

	public function getMiniAppId()
	{
		return $this->miniAppId;
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

	public function setServiceEmail($serviceEmail)
	{
		$this->serviceEmail = $serviceEmail;
		$this->apiParas["service_email"] = $serviceEmail;
	}

	public function getServiceEmail()
	{
		return $this->serviceEmail;
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
		return "alipay.open.servicemarket.order.create";
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
