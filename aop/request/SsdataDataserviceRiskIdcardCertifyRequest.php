<?php
/**
 * ALIPAY API: ssdata.dataservice.risk.idcard.certify request
 *
 * @author auto create
 * @since 1.0, 2020-02-10 16:15:00
 */
class SsdataDataserviceRiskIdcardCertifyRequest
{
	/** 
	 * 业务唯一识别码  ，手动修改配置，验证用户信息时(即：当上传的图片为空时）biz_no需要设置为第一次调用接口放回的bis_token值
	 **/
	private $bizNo;
	
	/** 
	 * 身份证名字
	 **/
	private $certName;
	
	/** 
	 * 身份证号码
	 **/
	private $certNo;
	
	/** 
	 * 身份证反面图片
	 **/
	private $idcardConsPic;
	
	/** 
	 * 身份证正面图片
	 **/
	private $idcardProsPic;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizNo($bizNo)
	{
		$this->bizNo = $bizNo;
		$this->apiParas["biz_no"] = $bizNo;
	}

	public function getBizNo()
	{
		return $this->bizNo;
	}

	public function setCertName($certName)
	{
		$this->certName = $certName;
		$this->apiParas["cert_name"] = $certName;
	}

	public function getCertName()
	{
		return $this->certName;
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

	public function setIdcardConsPic($idcardConsPic)
	{
		$this->idcardConsPic = $idcardConsPic;
		$this->apiParas["idcard_cons_pic"] = $idcardConsPic;
	}

	public function getIdcardConsPic()
	{
		return $this->idcardConsPic;
	}

	public function setIdcardProsPic($idcardProsPic)
	{
		$this->idcardProsPic = $idcardProsPic;
		$this->apiParas["idcard_pros_pic"] = $idcardProsPic;
	}

	public function getIdcardProsPic()
	{
		return $this->idcardProsPic;
	}

	public function getApiMethodName()
	{
		return "ssdata.dataservice.risk.idcard.certify";
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
