<?php
/**
 * ALIPAY API: alipay.oversea.atp.order.address.create request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayOverseaAtpOrderAddressCreateRequest
{
	/** 
	 * 详细地址
	 **/
	private $address;
	
	/** 
	 * 地区
	 **/
	private $area;
	
	/** 
	 * 证件号码
	 **/
	private $certNo;
	
	/** 
	 * 证件类型
	 **/
	private $certType;
	
	/** 
	 * 城市
	 **/
	private $city;
	
	/** 
	 * email
	 **/
	private $email;
	
	/** 
	 * 创建时间
	 **/
	private $gmtCreate;
	
	/** 
	 * 修改时间
	 **/
	private $gmtModified;
	
	/** 
	 * 标志来源
	 **/
	private $markFrom;
	
	/** 
	 * 支付宝绑定的手机号码
	 **/
	private $mobile;
	
	/** 
	 * 转运订单号
	 **/
	private $orderId;
	
	/** 
	 * 省份
	 **/
	private $province;
	
	/** 
	 * 用户ID
	 **/
	private $userId;
	
	/** 
	 * 用户名称
	 **/
	private $userName;
	
	/** 
	 * 邮政编码
	 **/
	private $zipCode;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setArea($area)
	{
		$this->area = $area;
		$this->apiParas["area"] = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function setCertNo($certNo)
	{
		$this->certNo = $certNo;
		$this->apiParas["cert_no"] = $certNo;
	}

	public function getCertNo()
	{
		return $this->certNo;
	}

	public function setCertType($certType)
	{
		$this->certType = $certType;
		$this->apiParas["cert_type"] = $certType;
	}

	public function getCertType()
	{
		return $this->certType;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		$this->apiParas["email"] = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setGmtCreate($gmtCreate)
	{
		$this->gmtCreate = $gmtCreate;
		$this->apiParas["gmt_create"] = $gmtCreate;
	}

	public function getGmtCreate()
	{
		return $this->gmtCreate;
	}

	public function setGmtModified($gmtModified)
	{
		$this->gmtModified = $gmtModified;
		$this->apiParas["gmt_modified"] = $gmtModified;
	}

	public function getGmtModified()
	{
		return $this->gmtModified;
	}

	public function setMarkFrom($markFrom)
	{
		$this->markFrom = $markFrom;
		$this->apiParas["mark_from"] = $markFrom;
	}

	public function getMarkFrom()
	{
		return $this->markFrom;
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

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setProvince($province)
	{
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getProvince()
	{
		return $this->province;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function setUserName($userName)
	{
		$this->userName = $userName;
		$this->apiParas["user_name"] = $userName;
	}

	public function getUserName()
	{
		return $this->userName;
	}

	public function setZipCode($zipCode)
	{
		$this->zipCode = $zipCode;
		$this->apiParas["zip_code"] = $zipCode;
	}

	public function getZipCode()
	{
		return $this->zipCode;
	}

	public function getApiMethodName()
	{
		return "alipay.oversea.atp.order.address.create";
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
