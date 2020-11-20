<?php
/**
 * ALIPAY API: alipay.open.mini.songxian.upload.use request
 *
 * @author auto create
 * @since 1.0, 2019-01-07 20:51:15
 */
class AlipayOpenMiniSongxianUploadUseRequest
{
	/** 
	 * 123
	 **/
	private $parkingId;
	
	/** 
	 * xx1
	 **/
	private $xxxx;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setParkingId($parkingId)
	{
		$this->parkingId = $parkingId;
		$this->apiParas["parking_id"] = $parkingId;
	}

	public function getParkingId()
	{
		return $this->parkingId;
	}

	public function setXxxx($xxxx)
	{
		$this->xxxx = $xxxx;
		$this->apiParas["xxxx"] = $xxxx;
	}

	public function getXxxx()
	{
		return $this->xxxx;
	}

	public function getApiMethodName()
	{
		return "alipay.open.mini.songxian.upload.use";
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
