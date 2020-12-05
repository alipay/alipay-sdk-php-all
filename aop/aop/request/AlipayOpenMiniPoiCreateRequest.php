<?php
/**
 * ALIPAY API: alipay.open.mini.poi.create request
 *
 * @author auto create
 * @since 1.0, 2019-01-07 20:51:15
 */
class AlipayOpenMiniPoiCreateRequest
{
	/** 
	 * 经营资质号
	 **/
	private $certificate;
	
	/** 
	 * 营业执照，同主体可以不传,最多5张，单张不能超过2M
	 **/
	private $fifthRelatedMaterial;
	
	/** 
	 * 营业执照，同主体可以不传,最多5张，单张不能超过2M
	 **/
	private $firstRelatedMaterial;
	
	/** 
	 * 营业执照，同主体可以不传,最多5张，单张不能超过2M
	 **/
	private $fourthRelatedMaterial;
	
	/** 
	 * POI的具体地址信息，建议按照：省市区县街道门牌号的顺序精确描述地址
	 **/
	private $poiAddress;
	
	/** 
	 * 相关主体名称，需要与经营材料上的名称保持一致.若地点的相关资质与小程序账号主体一致，则不用填写
	 **/
	private $relatedName;
	
	/** 
	 * 营业执照，同主体可以不传,最多5张，单张不能超过2M
	 **/
	private $secondRelatedMaterial;
	
	/** 
	 * 营业执照，同主体可以不传,最多5张，单张不能超过2M
	 **/
	private $thirdRelatedMaterial;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCertificate($certificate)
	{
		$this->certificate = $certificate;
		$this->apiParas["certificate"] = $certificate;
	}

	public function getCertificate()
	{
		return $this->certificate;
	}

	public function setFifthRelatedMaterial($fifthRelatedMaterial)
	{
		$this->fifthRelatedMaterial = $fifthRelatedMaterial;
		$this->apiParas["fifth_related_material"] = $fifthRelatedMaterial;
	}

	public function getFifthRelatedMaterial()
	{
		return $this->fifthRelatedMaterial;
	}

	public function setFirstRelatedMaterial($firstRelatedMaterial)
	{
		$this->firstRelatedMaterial = $firstRelatedMaterial;
		$this->apiParas["first_related_material"] = $firstRelatedMaterial;
	}

	public function getFirstRelatedMaterial()
	{
		return $this->firstRelatedMaterial;
	}

	public function setFourthRelatedMaterial($fourthRelatedMaterial)
	{
		$this->fourthRelatedMaterial = $fourthRelatedMaterial;
		$this->apiParas["fourth_related_material"] = $fourthRelatedMaterial;
	}

	public function getFourthRelatedMaterial()
	{
		return $this->fourthRelatedMaterial;
	}

	public function setPoiAddress($poiAddress)
	{
		$this->poiAddress = $poiAddress;
		$this->apiParas["poi_address"] = $poiAddress;
	}

	public function getPoiAddress()
	{
		return $this->poiAddress;
	}

	public function setRelatedName($relatedName)
	{
		$this->relatedName = $relatedName;
		$this->apiParas["related_name"] = $relatedName;
	}

	public function getRelatedName()
	{
		return $this->relatedName;
	}

	public function setSecondRelatedMaterial($secondRelatedMaterial)
	{
		$this->secondRelatedMaterial = $secondRelatedMaterial;
		$this->apiParas["second_related_material"] = $secondRelatedMaterial;
	}

	public function getSecondRelatedMaterial()
	{
		return $this->secondRelatedMaterial;
	}

	public function setThirdRelatedMaterial($thirdRelatedMaterial)
	{
		$this->thirdRelatedMaterial = $thirdRelatedMaterial;
		$this->apiParas["third_related_material"] = $thirdRelatedMaterial;
	}

	public function getThirdRelatedMaterial()
	{
		return $this->thirdRelatedMaterial;
	}

	public function getApiMethodName()
	{
		return "alipay.open.mini.poi.create";
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
