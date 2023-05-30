<?php
/**
 * ALIPAY API: alipay.ebpp.merchant.meterial.upload request
 *
 * @author auto create
 * @since 1.0, 2023-05-29 22:28:58
 */
class AlipayEbppMerchantMeterialUploadRequest
{
	/** 
	 * 文件二进制
	 **/
	private $content;
	
	/** 
	 * 实体创建时对应的code，如小区或物业的shortName。当entity_type=RELATIONSHIP时，entity_code=关系id
	 **/
	private $entityCode;
	
	/** 
	 * 实体类型：
COMMUNITY_COMPANY("COMMUNITY_COMPANY", "物业"),
OMMUNITY_INFO("COMMUNITY_INFO", "小区"),
COMMUNITY_ISV("COMMUNITY_ISV", "ISV"),
RELATIONSHIP("RELATIONSHIP", "物业小区绑定关系"),
EXTERNAL_BILL_INFO("EXTERNAL_BILL_INFO", "账单"),;
	 **/
	private $entityType;
	
	/** 
	 * 文件描述
	 **/
	private $fileDesc;
	
	/** 
	 * 文件名
	 **/
	private $fileName;
	
	/** 
	 * 备注
	 **/
	private $memo;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setEntityCode($entityCode)
	{
		$this->entityCode = $entityCode;
		$this->apiParas["entity_code"] = $entityCode;
	}

	public function getEntityCode()
	{
		return $this->entityCode;
	}

	public function setEntityType($entityType)
	{
		$this->entityType = $entityType;
		$this->apiParas["entity_type"] = $entityType;
	}

	public function getEntityType()
	{
		return $this->entityType;
	}

	public function setFileDesc($fileDesc)
	{
		$this->fileDesc = $fileDesc;
		$this->apiParas["file_desc"] = $fileDesc;
	}

	public function getFileDesc()
	{
		return $this->fileDesc;
	}

	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		$this->apiParas["file_name"] = $fileName;
	}

	public function getFileName()
	{
		return $this->fileName;
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

	public function getApiMethodName()
	{
		return "alipay.ebpp.merchant.meterial.upload";
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
