<?php
/**
 * ALIPAY API: alipay.ins.scene.claim.attachment.upload request
 *
 * @author auto create
 * @since 1.0, 2019-01-07 20:51:15
 */
class AlipayInsSceneClaimAttachmentUploadRequest
{
	/** 
	 * 案件材料名称
	 **/
	private $attachmentName;
	
	/** 
	 * 附件材料类型
现场照片：SCENE_PHOTO
身份证影印件： ID_COPY
发票： INVOICE
医疗凭证： MEDICAL_CERTIFICATE
	 **/
	private $attachmentType;
	
	/** 
	 * 理赔申请报案号，通过理赔申请【alipay.ins.scene.claim.apply】接口的返回字段claim_report_no获取
	 **/
	private $claimReportNo;
	
	/** 
	 * 报案材料描述
	 **/
	private $description;
	
	/** 
	 * 报案材料内容
	 **/
	private $fileContent;
	
	/** 
	 * 案件材料文件类型
例如一下值
 .jpg .png .csv .docx
	 **/
	private $fileType;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAttachmentName($attachmentName)
	{
		$this->attachmentName = $attachmentName;
		$this->apiParas["attachment_name"] = $attachmentName;
	}

	public function getAttachmentName()
	{
		return $this->attachmentName;
	}

	public function setAttachmentType($attachmentType)
	{
		$this->attachmentType = $attachmentType;
		$this->apiParas["attachment_type"] = $attachmentType;
	}

	public function getAttachmentType()
	{
		return $this->attachmentType;
	}

	public function setClaimReportNo($claimReportNo)
	{
		$this->claimReportNo = $claimReportNo;
		$this->apiParas["claim_report_no"] = $claimReportNo;
	}

	public function getClaimReportNo()
	{
		return $this->claimReportNo;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
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

	public function setFileType($fileType)
	{
		$this->fileType = $fileType;
		$this->apiParas["file_type"] = $fileType;
	}

	public function getFileType()
	{
		return $this->fileType;
	}

	public function getApiMethodName()
	{
		return "alipay.ins.scene.claim.attachment.upload";
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
