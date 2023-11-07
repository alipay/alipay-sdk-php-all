<?php
/**
 * ALIPAY API: datadigital.fincloud.generalsaas.face.source.certify request
 *
 * @author auto create
 * @since 1.0, 2023-10-31 16:56:48
 */
class DatadigitalFincloudGeneralsaasFaceSourceCertifyRequest
{
	/** 
	 * 用户姓名，与身份证上的姓名相匹配
	 **/
	private $certName;
	
	/** 
	 * 证件号码，如大陆身份证号码
	 **/
	private $certNo;
	
	/** 
	 * 证件信息类型，大陆身份证：IDENTITY_CARD
	 **/
	private $certType;
	
	/** 
	 * 二进制流图片，大小限制1M
	 **/
	private $fileContent;
	
	/** 
	 * 活体检测类型，当前枚举支持：
OFF：关闭活体检测；
CHECK：正常活体检测。
不传默认CHECK。
	 **/
	private $livenessStrategy;
	
	/** 
	 * 客户业务单据号
	 **/
	private $outerBizNo;
	
	/** 
	 * 手机号，特殊场景下，在验证过程中需用户输入手机来接受系统发送的安全验证短信。默认不传即可。
	 **/
	private $phone;
	
	/** 
	 * true：需要留底；false：无需留底。默认留底
	 **/
	private $reserved;
	
	/** 
	 * ON：开启安全拦截。OFF：关闭安全拦截。默认取值为ON。
	 **/
	private $securityStrategy;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=true;

	
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

	public function setCertType($certType)
	{
		$this->certType = $certType;
		$this->apiParas["cert_type"] = $certType;
	}

	public function getCertType()
	{
		return $this->certType;
	}

	public function setFileContent($fileContent)
	{
		$this->fileContent = $fileContent;
		$this->apiParas["file_content"] = $fileContent;
	}

	public function getFileContent()
	{
		return $this->fileContent;
	}

	public function setLivenessStrategy($livenessStrategy)
	{
		$this->livenessStrategy = $livenessStrategy;
		$this->apiParas["liveness_strategy"] = $livenessStrategy;
	}

	public function getLivenessStrategy()
	{
		return $this->livenessStrategy;
	}

	public function setOuterBizNo($outerBizNo)
	{
		$this->outerBizNo = $outerBizNo;
		$this->apiParas["outer_biz_no"] = $outerBizNo;
	}

	public function getOuterBizNo()
	{
		return $this->outerBizNo;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function setReserved($reserved)
	{
		$this->reserved = $reserved;
		$this->apiParas["reserved"] = $reserved;
	}

	public function getReserved()
	{
		return $this->reserved;
	}

	public function setSecurityStrategy($securityStrategy)
	{
		$this->securityStrategy = $securityStrategy;
		$this->apiParas["security_strategy"] = $securityStrategy;
	}

	public function getSecurityStrategy()
	{
		return $this->securityStrategy;
	}

	public function getApiMethodName()
	{
		return "datadigital.fincloud.generalsaas.face.source.certify";
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
