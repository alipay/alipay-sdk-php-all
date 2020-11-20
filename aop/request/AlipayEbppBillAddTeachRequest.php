<?php
/**
 * ALIPAY API: alipay.ebpp.bill.add.teach request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayEbppBillAddTeachRequest
{
	/** 
	 * bank_bill_no
	 **/
	private $bankBillNo;
	
	/** 
	 * 201203
	 **/
	private $billDate;
	
	/** 
	 * 3388102012376451
	 **/
	private $billKey;
	
	/** 
	 * BJCEB
	 **/
	private $chargeInst;
	
	/** 
	 * extend_field
	 **/
	private $extendField;
	
	/** 
	 * 出机构的业务流水号，需要保证唯一性
	 **/
	private $merchantOrderNo;
	
	/** 
	 * 15987838584
	 **/
	private $mobile;
	
	/** 
	 * 支付宝订单类型。公共事业缴纳JF,信用卡还款HK
	 **/
	private $orderType;
	
	/** 
	 * owner_name
	 **/
	private $ownerName;
	
	/** 
	 * 23.45
	 **/
	private $payAmount;
	
	/** 
	 * 8
	 **/
	private $serviceAmount;
	
	/** 
	 * eee
	 **/
	private $subOrderType;
	
	/** 
	 * 浙江,杭徽高速
	 **/
	private $trafficLocation;
	
	/** 
	 * traffic_regulations
	 **/
	private $trafficRegulations;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBankBillNo($bankBillNo)
	{
		$this->bankBillNo = $bankBillNo;
		$this->apiParas["bank_bill_no"] = $bankBillNo;
	}

	public function getBankBillNo()
	{
		return $this->bankBillNo;
	}

	public function setBillDate($billDate)
	{
		$this->billDate = $billDate;
		$this->apiParas["bill_date"] = $billDate;
	}

	public function getBillDate()
	{
		return $this->billDate;
	}

	public function setBillKey($billKey)
	{
		$this->billKey = $billKey;
		$this->apiParas["bill_key"] = $billKey;
	}

	public function getBillKey()
	{
		return $this->billKey;
	}

	public function setChargeInst($chargeInst)
	{
		$this->chargeInst = $chargeInst;
		$this->apiParas["charge_inst"] = $chargeInst;
	}

	public function getChargeInst()
	{
		return $this->chargeInst;
	}

	public function setExtendField($extendField)
	{
		$this->extendField = $extendField;
		$this->apiParas["extend_field"] = $extendField;
	}

	public function getExtendField()
	{
		return $this->extendField;
	}

	public function setMerchantOrderNo($merchantOrderNo)
	{
		$this->merchantOrderNo = $merchantOrderNo;
		$this->apiParas["merchant_order_no"] = $merchantOrderNo;
	}

	public function getMerchantOrderNo()
	{
		return $this->merchantOrderNo;
	}

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
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

	public function setOwnerName($ownerName)
	{
		$this->ownerName = $ownerName;
		$this->apiParas["owner_name"] = $ownerName;
	}

	public function getOwnerName()
	{
		return $this->ownerName;
	}

	public function setPayAmount($payAmount)
	{
		$this->payAmount = $payAmount;
		$this->apiParas["pay_amount"] = $payAmount;
	}

	public function getPayAmount()
	{
		return $this->payAmount;
	}

	public function setServiceAmount($serviceAmount)
	{
		$this->serviceAmount = $serviceAmount;
		$this->apiParas["service_amount"] = $serviceAmount;
	}

	public function getServiceAmount()
	{
		return $this->serviceAmount;
	}

	public function setSubOrderType($subOrderType)
	{
		$this->subOrderType = $subOrderType;
		$this->apiParas["sub_order_type"] = $subOrderType;
	}

	public function getSubOrderType()
	{
		return $this->subOrderType;
	}

	public function setTrafficLocation($trafficLocation)
	{
		$this->trafficLocation = $trafficLocation;
		$this->apiParas["traffic_location"] = $trafficLocation;
	}

	public function getTrafficLocation()
	{
		return $this->trafficLocation;
	}

	public function setTrafficRegulations($trafficRegulations)
	{
		$this->trafficRegulations = $trafficRegulations;
		$this->apiParas["traffic_regulations"] = $trafficRegulations;
	}

	public function getTrafficRegulations()
	{
		return $this->trafficRegulations;
	}

	public function getApiMethodName()
	{
		return "alipay.ebpp.bill.add.teach";
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
