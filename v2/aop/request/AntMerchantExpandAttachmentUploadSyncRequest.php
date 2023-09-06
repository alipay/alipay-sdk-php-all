<?php
/**
 * ALIPAY API: ant.merchant.expand.attachment.upload.sync request
 *
 * @author auto create
 * @since 1.0, 2023-08-24 21:31:11
 */
class AntMerchantExpandAttachmentUploadSyncRequest
{
	/** 
	 * 附件的业务类型
	 **/
	private $bizType;
	
	/** 
	 * 附属信息，JSON格式
	 **/
	private $extInfo;
	
	/** 
	 * 文件字节流
	 **/
	private $fileContent;
	
	/** 
	 * 文档静态格式
	 **/
	private $fileFormat;
	
	/** 
	 * 文件链接
	 **/
	private $fileUrl;
	
	/** 
	 * 备注
	 **/
	private $memo;
	
	/** 
	 * 附件单据号
	 **/
	private $outBizNo;
	
	/** 
	 * 分区
	 **/
	private $partNo;
	
	/** 
	 * 附件的业务子类型
	 **/
	private $subBizType;
	
	/** 
	 * 附件子单据号
	 **/
	private $subOutBizNo;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setExtInfo($extInfo)
	{
		$this->extInfo = $extInfo;
		$this->apiParas["ext_info"] = $extInfo;
	}

	public function getExtInfo()
	{
		return $this->extInfo;
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

	public function setFileFormat($fileFormat)
	{
		$this->fileFormat = $fileFormat;
		$this->apiParas["file_format"] = $fileFormat;
	}

	public function getFileFormat()
	{
		return $this->fileFormat;
	}

	public function setFileUrl($fileUrl)
	{
		$this->fileUrl = $fileUrl;
		$this->apiParas["file_url"] = $fileUrl;
	}

	public function getFileUrl()
	{
		return $this->fileUrl;
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

	public function setOutBizNo($outBizNo)
	{
		$this->outBizNo = $outBizNo;
		$this->apiParas["out_biz_no"] = $outBizNo;
	}

	public function getOutBizNo()
	{
		return $this->outBizNo;
	}

	public function setPartNo($partNo)
	{
		$this->partNo = $partNo;
		$this->apiParas["part_no"] = $partNo;
	}

	public function getPartNo()
	{
		return $this->partNo;
	}

	public function setSubBizType($subBizType)
	{
		$this->subBizType = $subBizType;
		$this->apiParas["sub_biz_type"] = $subBizType;
	}

	public function getSubBizType()
	{
		return $this->subBizType;
	}

	public function setSubOutBizNo($subOutBizNo)
	{
		$this->subOutBizNo = $subOutBizNo;
		$this->apiParas["sub_out_biz_no"] = $subOutBizNo;
	}

	public function getSubOutBizNo()
	{
		return $this->subOutBizNo;
	}

	public function getApiMethodName()
	{
		return "ant.merchant.expand.attachment.upload.sync";
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
