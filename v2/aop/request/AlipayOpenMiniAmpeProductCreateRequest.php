<?php
/**
 * ALIPAY API: alipay.open.mini.ampe.product.create request
 *
 * @author auto create
 * @since 1.0, 2023-05-30 23:59:58
 */
class AlipayOpenMiniAmpeProductCreateRequest
{
	/** 
	 * 行业类目
	 **/
	private $categoryId;
	
	/** 
	 * 设备类型
	 **/
	private $deviceType;
	
	/** 
	 * 设备产品名称, 必填，最大长度32，单oid下唯一
	 **/
	private $productName;
	
	/** 
	 * 产品图片二进制流，必填，最小为1k，最大不能超过5MB，图片格式只支持jpg，png
	 **/
	private $productPic;
	
	/** 
	 * 场景码，申请后平台分配
	 **/
	private $sceneCode;
	
	/** 
	 * 出货量
	 **/
	private $shipQuantity;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
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

	public function setProductName($productName)
	{
		$this->productName = $productName;
		$this->apiParas["product_name"] = $productName;
	}

	public function getProductName()
	{
		return $this->productName;
	}

	public function setProductPic($productPic)
	{
		$this->productPic = $productPic;
		$this->apiParas["product_pic"] = $productPic;
	}

	public function getProductPic()
	{
		return $this->productPic;
	}

	public function setSceneCode($sceneCode)
	{
		$this->sceneCode = $sceneCode;
		$this->apiParas["scene_code"] = $sceneCode;
	}

	public function getSceneCode()
	{
		return $this->sceneCode;
	}

	public function setShipQuantity($shipQuantity)
	{
		$this->shipQuantity = $shipQuantity;
		$this->apiParas["ship_quantity"] = $shipQuantity;
	}

	public function getShipQuantity()
	{
		return $this->shipQuantity;
	}

	public function getApiMethodName()
	{
		return "alipay.open.mini.ampe.product.create";
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
