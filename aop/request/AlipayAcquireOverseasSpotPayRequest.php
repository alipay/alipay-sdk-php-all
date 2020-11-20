<?php
/**
 * ALIPAY API: alipay.acquire.overseas.spot.pay request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayAcquireOverseasSpotPayRequest
{
	/** 
	 * Used as identification of a Alipay user.
The format of the Buyer_identity_code varies depending on the identity_code_type
	 **/
	private $buyerIdentityCode;
	
	/** 
	 * The currency used for labeling the price of the transaction;Refer to the acronym of currency table
	 **/
	private $currency;
	
	/** 
	 * Containing the extended parameters of the request, it’s in JSON format.

For now it contains the following parameters：
merchant_name;
merchant_no;
business_no;
terminal_id;
mcc;
region_code
	 **/
	private $extendInfo;
	
	/** 
	 * he identity code type could be qrcode, barcode or soundwave;

only barcode is supported for now
	 **/
	private $identityCodeType;
	
	/** 
	 * Transaction notes
	 **/
	private $memo;
	
	/** 
	 * The transaction Id on the partner system which could be a sale order id and payment order id. 
Alipay system uses the partner_trans_id and the partner to identity a transaction on partner side
	 **/
	private $partnerTransId;
	
	/** 
	 * There are three kinds of password: login password, payment password and mobile password.
In the barcode payment scenario, the mobile password is used;

3DES is used for encryption/ decryption.
	 **/
	private $password;
	
	/** 
	 * the transaction amount in the currency given above;
Range: 0.01-100000000.00. Two digits after decimal point
	 **/
	private $transAmount;
	
	/** 
	 * The name of the transaction which will be shown in the transaction records list
	 **/
	private $transName;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBuyerIdentityCode($buyerIdentityCode)
	{
		$this->buyerIdentityCode = $buyerIdentityCode;
		$this->apiParas["buyer_identity_code"] = $buyerIdentityCode;
	}

	public function getBuyerIdentityCode()
	{
		return $this->buyerIdentityCode;
	}

	public function setCurrency($currency)
	{
		$this->currency = $currency;
		$this->apiParas["currency"] = $currency;
	}

	public function getCurrency()
	{
		return $this->currency;
	}

	public function setExtendInfo($extendInfo)
	{
		$this->extendInfo = $extendInfo;
		$this->apiParas["extend_info"] = $extendInfo;
	}

	public function getExtendInfo()
	{
		return $this->extendInfo;
	}

	public function setIdentityCodeType($identityCodeType)
	{
		$this->identityCodeType = $identityCodeType;
		$this->apiParas["identity_code_type"] = $identityCodeType;
	}

	public function getIdentityCodeType()
	{
		return $this->identityCodeType;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setPartnerTransId($partnerTransId)
	{
		$this->partnerTransId = $partnerTransId;
		$this->apiParas["partner_trans_id"] = $partnerTransId;
	}

	public function getPartnerTransId()
	{
		return $this->partnerTransId;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		$this->apiParas["password"] = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setTransAmount($transAmount)
	{
		$this->transAmount = $transAmount;
		$this->apiParas["trans_amount"] = $transAmount;
	}

	public function getTransAmount()
	{
		return $this->transAmount;
	}

	public function setTransName($transName)
	{
		$this->transName = $transName;
		$this->apiParas["trans_name"] = $transName;
	}

	public function getTransName()
	{
		return $this->transName;
	}

	public function getApiMethodName()
	{
		return "alipay.acquire.overseas.spot.pay";
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
