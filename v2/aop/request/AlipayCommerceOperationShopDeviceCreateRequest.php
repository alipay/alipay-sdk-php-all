<?php
/**
 * ALIPAY API: alipay.commerce.operation.shop.device.create request
 *
 * @author auto create
 * @since 1.0, 2026-08-21 13:57:52
 */
class AlipayCommerceOperationShopDeviceCreateRequest
{
	/** 
	 * 支付宝行业 MCC 一级编码
	 **/
	private $categoryL1;
	
	/** 
	 * 支付宝行业 MCC 二级编码
	 **/
	private $categoryL2;
	
	/** 
	 * 地址版本：2022Q2
	 **/
	private $cityCode;
	
	/** 
	 * 城市名称
	 **/
	private $cityName;
	
	/** 
	 * 与营业执照一致
	 **/
	private $companyName;
	
	/** 
	 * 设备SN/序列号
	 **/
	private $deviceId;
	
	/** 
	 * 设备类型以及机型
	 **/
	private $deviceType;
	
	/** 
	 * 地址版本：2022Q2
	 **/
	private $districtCode;
	
	/** 
	 * 区县名称
	 **/
	private $districtName;
	
	/** 
	 * 使用流量币业务时建议传；未传或不正确时，可能影响流量币在闪购门店投放
	 **/
	private $elemeDdShopId;
	
	/** 
	 * 使用流量币业务时建议传；未传或不正确时，可能影响流量币在闪购门店投放
	 **/
	private $elemeDdShopName;
	
	/** 
	 * 例如 30.687181
	 **/
	private $latitude;
	
	/** 
	 * 法人身份证反面
	 **/
	private $legalIdentityBack;
	
	/** 
	 * 格式：yyyy-MM-dd
	 **/
	private $legalIdentityFromDate;
	
	/** 
	 * 法人身份证正面
	 **/
	private $legalIdentityFront;
	
	/** 
	 * 店铺法人身份证号
	 **/
	private $legalIdentityNo;
	
	/** 
	 * 格式：yyyy-MM-dd
	 **/
	private $legalIdentityToDate;
	
	/** 
	 * 法人名称
	 **/
	private $legalName;
	
	/** 
	 * 营业执照图片
	 **/
	private $licenseImg;
	
	/** 
	 * 统一社会信用代码/注册号
	 **/
	private $licenseNo;
	
	/** 
	 * 例如 104.104887
	 **/
	private $longitude;
	
	/** 
	 * 门店在服务商系统里的商户名称
	 **/
	private $merchantName;
	
	/** 
	 * 门店在服务商系统里的唯一ID
	 **/
	private $outShopId;
	
	/** 
	 * 地址版本：2022Q2
	 **/
	private $provinceCode;
	
	/** 
	 * 省份名称
	 **/
	private $provinceName;
	
	/** 
	 * 详细地址
	 **/
	private $shopAddress;
	
	/** 
	 * 门店形象照，图片二进制流，10M内
	 **/
	private $shopLogo;
	
	/** 
	 * 门店在服务商系统里的门店名称
	 **/
	private $shopName;
	
	/** 
	 * 门店联系电话
	 **/
	private $shopPhone;
	
	/** 
	 * 门头照，图片二进制流，10M内
	 **/
	private $shopPhoto;
	
	/** 
	 * 默认传 physical_store
	 **/
	private $shopType;
	
	/** 
	 * 设备对应的 SMID，多个时按英文逗号隔开
	 **/
	private $smids;
	
	/** 
	 * 格式：yyyy-MM-dd
	 **/
	private $validToDate;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCategoryL1($categoryL1)
	{
		$this->categoryL1 = $categoryL1;
		$this->apiParas["category_l_1"] = $categoryL1;
	}

	public function getCategoryL1()
	{
		return $this->categoryL1;
	}

	public function setCategoryL2($categoryL2)
	{
		$this->categoryL2 = $categoryL2;
		$this->apiParas["category_l_2"] = $categoryL2;
	}

	public function getCategoryL2()
	{
		return $this->categoryL2;
	}

	public function setCityCode($cityCode)
	{
		$this->cityCode = $cityCode;
		$this->apiParas["city_code"] = $cityCode;
	}

	public function getCityCode()
	{
		return $this->cityCode;
	}

	public function setCityName($cityName)
	{
		$this->cityName = $cityName;
		$this->apiParas["city_name"] = $cityName;
	}

	public function getCityName()
	{
		return $this->cityName;
	}

	public function setCompanyName($companyName)
	{
		$this->companyName = $companyName;
		$this->apiParas["company_name"] = $companyName;
	}

	public function getCompanyName()
	{
		return $this->companyName;
	}

	public function setDeviceId($deviceId)
	{
		$this->deviceId = $deviceId;
		$this->apiParas["device_id"] = $deviceId;
	}

	public function getDeviceId()
	{
		return $this->deviceId;
	}

	public function setDeviceType($deviceType)
	{
		$this->deviceType = $deviceType;
		$this->apiParas["device_type"] = $deviceType;
	}

	public function getDeviceType()
	{
		return $this->deviceType;
	}

	public function setDistrictCode($districtCode)
	{
		$this->districtCode = $districtCode;
		$this->apiParas["district_code"] = $districtCode;
	}

	public function getDistrictCode()
	{
		return $this->districtCode;
	}

	public function setDistrictName($districtName)
	{
		$this->districtName = $districtName;
		$this->apiParas["district_name"] = $districtName;
	}

	public function getDistrictName()
	{
		return $this->districtName;
	}

	public function setElemeDdShopId($elemeDdShopId)
	{
		$this->elemeDdShopId = $elemeDdShopId;
		$this->apiParas["eleme_dd_shop_id"] = $elemeDdShopId;
	}

	public function getElemeDdShopId()
	{
		return $this->elemeDdShopId;
	}

	public function setElemeDdShopName($elemeDdShopName)
	{
		$this->elemeDdShopName = $elemeDdShopName;
		$this->apiParas["eleme_dd_shop_name"] = $elemeDdShopName;
	}

	public function getElemeDdShopName()
	{
		return $this->elemeDdShopName;
	}

	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;
		$this->apiParas["latitude"] = $latitude;
	}

	public function getLatitude()
	{
		return $this->latitude;
	}

	public function setLegalIdentityBack($legalIdentityBack)
	{
		$this->legalIdentityBack = $legalIdentityBack;
		$this->apiParas["legal_identity_back"] = $legalIdentityBack;
	}

	public function getLegalIdentityBack()
	{
		return $this->legalIdentityBack;
	}

	public function setLegalIdentityFromDate($legalIdentityFromDate)
	{
		$this->legalIdentityFromDate = $legalIdentityFromDate;
		$this->apiParas["legal_identity_from_date"] = $legalIdentityFromDate;
	}

	public function getLegalIdentityFromDate()
	{
		return $this->legalIdentityFromDate;
	}

	public function setLegalIdentityFront($legalIdentityFront)
	{
		$this->legalIdentityFront = $legalIdentityFront;
		$this->apiParas["legal_identity_front"] = $legalIdentityFront;
	}

	public function getLegalIdentityFront()
	{
		return $this->legalIdentityFront;
	}

	public function setLegalIdentityNo($legalIdentityNo)
	{
		$this->legalIdentityNo = $legalIdentityNo;
		$this->apiParas["legal_identity_no"] = $legalIdentityNo;
	}

	public function getLegalIdentityNo()
	{
		return $this->legalIdentityNo;
	}

	public function setLegalIdentityToDate($legalIdentityToDate)
	{
		$this->legalIdentityToDate = $legalIdentityToDate;
		$this->apiParas["legal_identity_to_date"] = $legalIdentityToDate;
	}

	public function getLegalIdentityToDate()
	{
		return $this->legalIdentityToDate;
	}

	public function setLegalName($legalName)
	{
		$this->legalName = $legalName;
		$this->apiParas["legal_name"] = $legalName;
	}

	public function getLegalName()
	{
		return $this->legalName;
	}

	public function setLicenseImg($licenseImg)
	{
		$this->licenseImg = $licenseImg;
		$this->apiParas["license_img"] = $licenseImg;
	}

	public function getLicenseImg()
	{
		return $this->licenseImg;
	}

	public function setLicenseNo($licenseNo)
	{
		$this->licenseNo = $licenseNo;
		$this->apiParas["license_no"] = $licenseNo;
	}

	public function getLicenseNo()
	{
		return $this->licenseNo;
	}

	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;
		$this->apiParas["longitude"] = $longitude;
	}

	public function getLongitude()
	{
		return $this->longitude;
	}

	public function setMerchantName($merchantName)
	{
		$this->merchantName = $merchantName;
		$this->apiParas["merchant_name"] = $merchantName;
	}

	public function getMerchantName()
	{
		return $this->merchantName;
	}

	public function setOutShopId($outShopId)
	{
		$this->outShopId = $outShopId;
		$this->apiParas["out_shop_id"] = $outShopId;
	}

	public function getOutShopId()
	{
		return $this->outShopId;
	}

	public function setProvinceCode($provinceCode)
	{
		$this->provinceCode = $provinceCode;
		$this->apiParas["province_code"] = $provinceCode;
	}

	public function getProvinceCode()
	{
		return $this->provinceCode;
	}

	public function setProvinceName($provinceName)
	{
		$this->provinceName = $provinceName;
		$this->apiParas["province_name"] = $provinceName;
	}

	public function getProvinceName()
	{
		return $this->provinceName;
	}

	public function setShopAddress($shopAddress)
	{
		$this->shopAddress = $shopAddress;
		$this->apiParas["shop_address"] = $shopAddress;
	}

	public function getShopAddress()
	{
		return $this->shopAddress;
	}

	public function setShopLogo($shopLogo)
	{
		$this->shopLogo = $shopLogo;
		$this->apiParas["shop_logo"] = $shopLogo;
	}

	public function getShopLogo()
	{
		return $this->shopLogo;
	}

	public function setShopName($shopName)
	{
		$this->shopName = $shopName;
		$this->apiParas["shop_name"] = $shopName;
	}

	public function getShopName()
	{
		return $this->shopName;
	}

	public function setShopPhone($shopPhone)
	{
		$this->shopPhone = $shopPhone;
		$this->apiParas["shop_phone"] = $shopPhone;
	}

	public function getShopPhone()
	{
		return $this->shopPhone;
	}

	public function setShopPhoto($shopPhoto)
	{
		$this->shopPhoto = $shopPhoto;
		$this->apiParas["shop_photo"] = $shopPhoto;
	}

	public function getShopPhoto()
	{
		return $this->shopPhoto;
	}

	public function setShopType($shopType)
	{
		$this->shopType = $shopType;
		$this->apiParas["shop_type"] = $shopType;
	}

	public function getShopType()
	{
		return $this->shopType;
	}

	public function setSmids($smids)
	{
		$this->smids = $smids;
		$this->apiParas["smids"] = $smids;
	}

	public function getSmids()
	{
		return $this->smids;
	}

	public function setValidToDate($validToDate)
	{
		$this->validToDate = $validToDate;
		$this->apiParas["valid_to_date"] = $validToDate;
	}

	public function getValidToDate()
	{
		return $this->validToDate;
	}

	public function getApiMethodName()
	{
		return "alipay.commerce.operation.shop.device.create";
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
