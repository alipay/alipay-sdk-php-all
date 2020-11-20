<?php
/**
 * ALIPAY API: alipay.discovery.taxi.order.confirm request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayDiscoveryTaxiOrderConfirmRequest
{
	/** 
	 * 司机纬度
	 **/
	private $driverLat;
	
	/** 
	 * 司机车牌
	 **/
	private $driverLicense;
	
	/** 
	 * 司机经度
	 **/
	private $driverLng;
	
	/** 
	 * 司机姓名
	 **/
	private $driverName;
	
	/** 
	 * 司机手机号
	 **/
	private $driverPhone;
	
	/** 
	 * 是否支持支付宝付款
	 **/
	private $isAlipaySupport;
	
	/** 
	 * 打车订单ID
	 **/
	private $outBizNo;
	
	/** 
	 * 商户ID
	 **/
	private $partnerId;
	
	/** 
	 * 收款账号
	 **/
	private $seller;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setDriverLat($driverLat)
	{
		$this->driverLat = $driverLat;
		$this->apiParas["driver_lat"] = $driverLat;
	}

	public function getDriverLat()
	{
		return $this->driverLat;
	}

	public function setDriverLicense($driverLicense)
	{
		$this->driverLicense = $driverLicense;
		$this->apiParas["driver_license"] = $driverLicense;
	}

	public function getDriverLicense()
	{
		return $this->driverLicense;
	}

	public function setDriverLng($driverLng)
	{
		$this->driverLng = $driverLng;
		$this->apiParas["driver_lng"] = $driverLng;
	}

	public function getDriverLng()
	{
		return $this->driverLng;
	}

	public function setDriverName($driverName)
	{
		$this->driverName = $driverName;
		$this->apiParas["driver_name"] = $driverName;
	}

	public function getDriverName()
	{
		return $this->driverName;
	}

	public function setDriverPhone($driverPhone)
	{
		$this->driverPhone = $driverPhone;
		$this->apiParas["driver_phone"] = $driverPhone;
	}

	public function getDriverPhone()
	{
		return $this->driverPhone;
	}

	public function setIsAlipaySupport($isAlipaySupport)
	{
		$this->isAlipaySupport = $isAlipaySupport;
		$this->apiParas["is_alipay_support"] = $isAlipaySupport;
	}

	public function getIsAlipaySupport()
	{
		return $this->isAlipaySupport;
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

	public function setPartnerId($partnerId)
	{
		$this->partnerId = $partnerId;
		$this->apiParas["partner_id"] = $partnerId;
	}

	public function getPartnerId()
	{
		return $this->partnerId;
	}

	public function setSeller($seller)
	{
		$this->seller = $seller;
		$this->apiParas["seller"] = $seller;
	}

	public function getSeller()
	{
		return $this->seller;
	}

	public function getApiMethodName()
	{
		return "alipay.discovery.taxi.order.confirm";
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
