<?php
/**
 * ALIPAY API: alipay.ebpp.recharge.item.get request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayEbppRechargeItemGetRequest
{
	/** 
	 * 支付宝id
	 **/
	private $cardNo;
	
	/** 
	 * 商品上架、下架状态  1/0
	 **/
	private $isForSale;
	
	/** 
	 * 1000|2000|3000 可以传递多个以|线分开
	 **/
	private $itemCode;
	
	/** 
	 * 0001：手机话费充值;0002 Q币充值；0003公交卡充值;0004流量充值
	 **/
	private $itemCodeType;
	
	/** 
	 * 业务类型例如：TX
	 **/
	private $orderType;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCardNo($cardNo)
	{
		$this->cardNo = $cardNo;
		$this->apiParas["card_no"] = $cardNo;
	}

	public function getCardNo()
	{
		return $this->cardNo;
	}

	public function setIsForSale($isForSale)
	{
		$this->isForSale = $isForSale;
		$this->apiParas["is_for_sale"] = $isForSale;
	}

	public function getIsForSale()
	{
		return $this->isForSale;
	}

	public function setItemCode($itemCode)
	{
		$this->itemCode = $itemCode;
		$this->apiParas["item_code"] = $itemCode;
	}

	public function getItemCode()
	{
		return $this->itemCode;
	}

	public function setItemCodeType($itemCodeType)
	{
		$this->itemCodeType = $itemCodeType;
		$this->apiParas["item_code_type"] = $itemCodeType;
	}

	public function getItemCodeType()
	{
		return $this->itemCodeType;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function getApiMethodName()
	{
		return "alipay.ebpp.recharge.item.get";
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
