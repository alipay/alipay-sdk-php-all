<?php
/**
 * ALIPAY API: alipay.marketing.campaign.rule.tag.create request
 *
 * @author auto create
 * @since 1.0, 2021-06-23 15:40:24
 */
class AlipayMarketingCampaignRuleTagCreateRequest
{
	/** 
	 * 每行格式如下的csv文件，以,隔开，文件最大50M
2088004384251514,2088102344258114,13888888888,aaa@bbb.com,34032198407138000,北京市海淀区
分别意义：16位随机数字,userid,手机号码,邮件地址,身份证号,地区
	 **/
	private $customerdata;
	
	/** 
	 * 签约商户下属子机构唯一编号
	 **/
	private $mpid;
	
	/** 
	 * 针对自定义人群的操作，可以创建或者删除，当创建时，自定义标签可为空
	 **/
	private $operatetype;
	
	/** 
	 * 自定义标签id，创建时可为空
	 **/
	private $selftag;
	
	/** 
	 * 自定义人群标签的描述信息（操作为CREATE时使用）
	 **/
	private $tagdesc;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCustomerdata($customerdata)
	{
		$this->customerdata = $customerdata;
		$this->apiParas["customerdata"] = $customerdata;
	}

	public function getCustomerdata()
	{
		return $this->customerdata;
	}

	public function setMpid($mpid)
	{
		$this->mpid = $mpid;
		$this->apiParas["mpid"] = $mpid;
	}

	public function getMpid()
	{
		return $this->mpid;
	}

	public function setOperatetype($operatetype)
	{
		$this->operatetype = $operatetype;
		$this->apiParas["operatetype"] = $operatetype;
	}

	public function getOperatetype()
	{
		return $this->operatetype;
	}

	public function setSelftag($selftag)
	{
		$this->selftag = $selftag;
		$this->apiParas["selftag"] = $selftag;
	}

	public function getSelftag()
	{
		return $this->selftag;
	}

	public function setTagdesc($tagdesc)
	{
		$this->tagdesc = $tagdesc;
		$this->apiParas["tagdesc"] = $tagdesc;
	}

	public function getTagdesc()
	{
		return $this->tagdesc;
	}

	public function getApiMethodName()
	{
		return "alipay.marketing.campaign.rule.tag.create";
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
