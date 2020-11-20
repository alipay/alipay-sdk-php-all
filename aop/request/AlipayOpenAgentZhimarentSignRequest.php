<?php
/**
 * ALIPAY API: alipay.open.agent.zhimarent.sign request
 *
 * @author auto create
 * @since 1.0, 2020-07-22 20:03:05
 */
class AlipayOpenAgentZhimarentSignRequest
{
	/** 
	 * APP demo，格式为.apk；或者应用说明文档, 格式为.doc .docx .pdf格式
	 **/
	private $appDemo;
	
	/** 
	 * 商户的APP应用名称
	 **/
	private $appName;
	
	/** 
	 * 代商户操作事务编号，通过alipay.open.isv.agent.create接口进行创建。
	 **/
	private $batchNo;
	
	/** 
	 * 自定义使用场景描述，usage_scene选项中无符合描述，填写自定义使用场景描述(usage_scene不填写，则custom_usage_scene必填)
	 **/
	private $customUsageScene;
	
	/** 
	 * 数据反馈接口人
	 **/
	private $drContact;
	
	/** 
	 * 例如：浙江飞猪网络技术有限公司，企业别称请填写【飞猪】。
	 **/
	private $enterpriseAlias;
	
	/** 
	 * 企业LOGO-图片，最小1KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $enterpriseLogo;
	
	/** 
	 * 所属MCCCode，详情可参考
<a href="https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.59bgD2&treeId=222&articleId=105364&docType=1#s1
">商家经营类目</a> 中的“经营类目编码”
	 **/
	private $mccCode;
	
	/** 
	 * 异议处理接口人
	 **/
	private $ohContact;
	
	/** 
	 * 用户服务联动机制接口人
	 **/
	private $prContact;
	
	/** 
	 * 企业特殊资质图片，可参考
<a href="https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.59bgD2&treeId=222&articleId=105364&docType=1#s1
">商家经营类目</a> 中的“需要的特殊资质证书”，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $specialLicensePic;
	
	/** 
	 * 使用场景描述，签约芝麻信用产品的用途，可选值："信用回收","信用组物", "信用长租", "永不停服"
	 **/
	private $usageScene;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAppDemo($appDemo)
	{
		$this->appDemo = $appDemo;
		$this->apiParas["app_demo"] = $appDemo;
	}

	public function getAppDemo()
	{
		return $this->appDemo;
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

	public function setBatchNo($batchNo)
	{
		$this->batchNo = $batchNo;
		$this->apiParas["batch_no"] = $batchNo;
	}

	public function getBatchNo()
	{
		return $this->batchNo;
	}

	public function setCustomUsageScene($customUsageScene)
	{
		$this->customUsageScene = $customUsageScene;
		$this->apiParas["custom_usage_scene"] = $customUsageScene;
	}

	public function getCustomUsageScene()
	{
		return $this->customUsageScene;
	}

	public function setDrContact($drContact)
	{
		$this->drContact = $drContact;
		$this->apiParas["dr_contact"] = $drContact;
	}

	public function getDrContact()
	{
		return $this->drContact;
	}

	public function setEnterpriseAlias($enterpriseAlias)
	{
		$this->enterpriseAlias = $enterpriseAlias;
		$this->apiParas["enterprise_alias"] = $enterpriseAlias;
	}

	public function getEnterpriseAlias()
	{
		return $this->enterpriseAlias;
	}

	public function setEnterpriseLogo($enterpriseLogo)
	{
		$this->enterpriseLogo = $enterpriseLogo;
		$this->apiParas["enterprise_logo"] = $enterpriseLogo;
	}

	public function getEnterpriseLogo()
	{
		return $this->enterpriseLogo;
	}

	public function setMccCode($mccCode)
	{
		$this->mccCode = $mccCode;
		$this->apiParas["mcc_code"] = $mccCode;
	}

	public function getMccCode()
	{
		return $this->mccCode;
	}

	public function setOhContact($ohContact)
	{
		$this->ohContact = $ohContact;
		$this->apiParas["oh_contact"] = $ohContact;
	}

	public function getOhContact()
	{
		return $this->ohContact;
	}

	public function setPrContact($prContact)
	{
		$this->prContact = $prContact;
		$this->apiParas["pr_contact"] = $prContact;
	}

	public function getPrContact()
	{
		return $this->prContact;
	}

	public function setSpecialLicensePic($specialLicensePic)
	{
		$this->specialLicensePic = $specialLicensePic;
		$this->apiParas["special_license_pic"] = $specialLicensePic;
	}

	public function getSpecialLicensePic()
	{
		return $this->specialLicensePic;
	}

	public function setUsageScene($usageScene)
	{
		$this->usageScene = $usageScene;
		$this->apiParas["usage_scene"] = $usageScene;
	}

	public function getUsageScene()
	{
		return $this->usageScene;
	}

	public function getApiMethodName()
	{
		return "alipay.open.agent.zhimarent.sign";
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
