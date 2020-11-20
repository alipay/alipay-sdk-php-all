<?php
/**
 * ALIPAY API: alipay.baitiaoprod.seller.query request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayBaitiaoprodSellerQueryRequest
{
	/** 
	 * 卖家账号id
	 **/
	private $sellerId;
	
	/** 
	 * 对应接口参数seller_id(卖家账号)类型，TAOBAO/ALIPAY
	 **/
	private $sellerIdType;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setSellerIdType($sellerIdType)
	{
		$this->sellerIdType = $sellerIdType;
		$this->apiParas["seller_id_type"] = $sellerIdType;
	}

	public function getSellerIdType()
	{
		return $this->sellerIdType;
	}

	public function getApiMethodName()
	{
		return "alipay.baitiaoprod.seller.query";
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
