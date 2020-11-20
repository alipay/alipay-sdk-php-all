<?php
/**
 * ALIPAY API: alipay.overseas.acquire.customs.query.depre request
 *
 * @author auto create
 * @since 1.0, 2019-01-07 20:51:15
 */
class AlipayOverseasAcquireCustomsQueryDepreRequest
{
	/** 
	 * 在与海关系统的对接中，支付单推送失败或支付单在海关系统中丢失的情况时常发生。原因可能是海关系统的不稳定、商户信息填写错误、支付单或订单格式不符合海关新增的校验逻辑等等。商户从海关处得到“支付信息不存在”的反馈后，请求支付宝技术支持查询支付单推送状态、重推支付单、或者修改备案号、备案名称或者需要推送的海关并且重推。占用技术支持大量时间，也降低了商户处理的效率。需要提供一个查询推送状态的接口，使商户能
	 **/
	private $bizContent;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizContent($bizContent)
	{
		$this->bizContent = $bizContent;
		$this->apiParas["biz_content"] = $bizContent;
	}

	public function getBizContent()
	{
		return $this->bizContent;
	}

	public function getApiMethodName()
	{
		return "alipay.overseas.acquire.customs.query.depre";
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
