<?php
/**
 * ALIPAY API: alipay.offline.provider.npassporter.face.verify request
 *
 * @author auto create
 * @since 1.0, 2026-06-03 10:18:49
 */
class AlipayOfflineProviderNpassporterFaceVerifyRequest
{
	/** 
	 * 用户在支付宝uid
	 **/
	private $alipayId;
	
	/** 
	 * 文件内容
	 **/
	private $fileContent;
	
	/** 
	 * 用户在支付宝uid
	 **/
	private $openId;
	
	/** 
	 * 照片URL
	 **/
	private $photoUrl;
	
	/** 
	 * true: photoUrl字段为RSA加密后Base64编码的密文，false或不传: photoUrl字段为明文URL（向后兼容）
	 **/
	private $photoUrlEncrypted;
	
	/** 
	 * 项目ID
	 **/
	private $projectId;
	
	/** 
	 * 解决方案
	 **/
	private $solutionType;
	
	/** 
	 * 接入方传入具体活动场次唯一ID即可，此字段作为密算证件号的关键信息，即同一场次下的人群传统一ID即可，若不填写默认以“projectID”字段作为密算计算信息。接入方调用支付宝传入的场次ID，需跟自己按密算规则传入的ID保持一致，否则会出现两侧密算后信息无法匹配。
	 **/
	private $subProjectId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAlipayId($alipayId)
	{
		$this->alipayId = $alipayId;
		$this->apiParas["alipay_id"] = $alipayId;
	}

	public function getAlipayId()
	{
		return $this->alipayId;
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

	public function setOpenId($openId)
	{
		$this->openId = $openId;
		$this->apiParas["open_id"] = $openId;
	}

	public function getOpenId()
	{
		return $this->openId;
	}

	public function setPhotoUrl($photoUrl)
	{
		$this->photoUrl = $photoUrl;
		$this->apiParas["photo_url"] = $photoUrl;
	}

	public function getPhotoUrl()
	{
		return $this->photoUrl;
	}

	public function setPhotoUrlEncrypted($photoUrlEncrypted)
	{
		$this->photoUrlEncrypted = $photoUrlEncrypted;
		$this->apiParas["photo_url_encrypted"] = $photoUrlEncrypted;
	}

	public function getPhotoUrlEncrypted()
	{
		return $this->photoUrlEncrypted;
	}

	public function setProjectId($projectId)
	{
		$this->projectId = $projectId;
		$this->apiParas["project_id"] = $projectId;
	}

	public function getProjectId()
	{
		return $this->projectId;
	}

	public function setSolutionType($solutionType)
	{
		$this->solutionType = $solutionType;
		$this->apiParas["solution_type"] = $solutionType;
	}

	public function getSolutionType()
	{
		return $this->solutionType;
	}

	public function setSubProjectId($subProjectId)
	{
		$this->subProjectId = $subProjectId;
		$this->apiParas["sub_project_id"] = $subProjectId;
	}

	public function getSubProjectId()
	{
		return $this->subProjectId;
	}

	public function getApiMethodName()
	{
		return "alipay.offline.provider.npassporter.face.verify";
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
