<?php
/**
 * ALIPAY API: alipay.fund.transfer.batch.createbatch request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayFundTransferBatchCreatebatchRequest
{
	/** 
	 * batch_memo
	 **/
	private $batchMemo;
	
	/** 
	 * 总金额，单位为元：
       AA为收款总金额
            活动收款为份数和单笔金额的积
            江湖救急为目标金额
	 **/
	private $bizType;
	
	/** 
	 * aaa
	 **/
	private $createUserId;
	
	/** 
	 * ext_param
	 **/
	private $extParam;
	
	/** 
	 * pay_amount_single
	 **/
	private $payAmountSingle;
	
	/** 
	 * pay_amount_total
	 **/
	private $payAmountTotal;
	
	/** 
	 * real_items_total
	 **/
	private $realItemsTotal;
	
	/** 
	 * show_items_total
	 **/
	private $showItemsTotal;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBatchMemo($batchMemo)
	{
		$this->batchMemo = $batchMemo;
		$this->apiParas["batch_memo"] = $batchMemo;
	}

	public function getBatchMemo()
	{
		return $this->batchMemo;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setCreateUserId($createUserId)
	{
		$this->createUserId = $createUserId;
		$this->apiParas["create_user_id"] = $createUserId;
	}

	public function getCreateUserId()
	{
		return $this->createUserId;
	}

	public function setExtParam($extParam)
	{
		$this->extParam = $extParam;
		$this->apiParas["ext_param"] = $extParam;
	}

	public function getExtParam()
	{
		return $this->extParam;
	}

	public function setPayAmountSingle($payAmountSingle)
	{
		$this->payAmountSingle = $payAmountSingle;
		$this->apiParas["pay_amount_single"] = $payAmountSingle;
	}

	public function getPayAmountSingle()
	{
		return $this->payAmountSingle;
	}

	public function setPayAmountTotal($payAmountTotal)
	{
		$this->payAmountTotal = $payAmountTotal;
		$this->apiParas["pay_amount_total"] = $payAmountTotal;
	}

	public function getPayAmountTotal()
	{
		return $this->payAmountTotal;
	}

	public function setRealItemsTotal($realItemsTotal)
	{
		$this->realItemsTotal = $realItemsTotal;
		$this->apiParas["real_items_total"] = $realItemsTotal;
	}

	public function getRealItemsTotal()
	{
		return $this->realItemsTotal;
	}

	public function setShowItemsTotal($showItemsTotal)
	{
		$this->showItemsTotal = $showItemsTotal;
		$this->apiParas["show_items_total"] = $showItemsTotal;
	}

	public function getShowItemsTotal()
	{
		return $this->showItemsTotal;
	}

	public function getApiMethodName()
	{
		return "alipay.fund.transfer.batch.createbatch";
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
