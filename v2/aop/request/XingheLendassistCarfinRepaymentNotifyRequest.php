<?php
/**
 * ALIPAY API: xinghe.lendassist.carfin.repayment.notify request
 *
 * @author auto create
 * @since 1.0, 2026-09-10 14:32:52
 */
class XingheLendassistCarfinRepaymentNotifyRequest
{
	/** 
	 * 机构在还款处理完成后(还款成功或失败),主动调用该接口将还款结果通知星河车金融,包含还款方式、 还款状态、是否退款、还款失败原因等信息。星河侧受理后返回成功与否,无业务出参。本接口同时支持增量地在机构侧还款记录同步:通过 notify_type 区分通知类型。当 notify_type为「机构侧还款通知」时,机构需在还款计划同步报文中通知实还的借据号及各项实还金额(实还本金、实还利息、实还罚息等),星河侧据此增量更新还款记录。
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
		return "xinghe.lendassist.carfin.repayment.notify";
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
