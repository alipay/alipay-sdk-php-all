<?php
/**
 * ALIPAY API: alipay.commerce.iot.dapply.order.batchcreate request
 *
 * @author auto create
 * @since 1.0, 2026-08-11 14:31:17
 */
class AlipayCommerceIotDapplyOrderBatchcreateRequest
{
	/** 
	 * 申请人的手机号
	 **/
	private $applicantMobile;
	
	/** 
	 * 自定义申请人名称，不作业务校验
	 **/
	private $applicantName;
	
	/** 
	 * 如果是商户需要传MERCHANTPORTAL，如果是服务商需要传ISV
	 **/
	private $channelCode;
	
	/** 
	 * 批量申请时excel文件内容，将文件内容转成字节流传入
	 **/
	private $fileContent;
	
	/** 
	 * 设备ItemId（物料ID），首次接入时需要咨询业务经理进行获取
	 **/
	private $itemId;
	
	/** 
	 * 商品ID，首次接入时请咨询业务经理进行获取
	 **/
	private $mallItemId;
	
	/** 
	 * 订单备注，业务根据自己的场景进行备注信息，可通过订单详情返回
	 **/
	private $memo;
	
	/** 
	 * 外部业务流水号(作为请求幂等号)
	 **/
	private $outBizNo;
	
	/** 
	 * 人工操作对应平台为商家中心(b.alipay.com)时填MERCHANTPORTAL，服务商平台(p.alipay.com)时填ISV
	 **/
	private $sourceCode;
	
	/** 
	 * 支架配件商品ID，首次接入时需要咨询业务经理进行获取
	 **/
	private $supportMallItemId;
	
	/** 
	 * 批量申请总的设备数量，必须和文件里面的申请数量总和一致
	 **/
	private $totalApplyAmount;
	
	/** 
	 * 批量申请的条目数，必须和文件对应的条目数(去除表头）一致。
	 **/
	private $totalApplyCount;
	
	/** 
	 * USB配件商品对应的MallItemId(MI),首次接入时需咨询业务经理进行获取
	 **/
	private $usbMallItemId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setApplicantMobile($applicantMobile)
	{
		$this->applicantMobile = $applicantMobile;
		$this->apiParas["applicant_mobile"] = $applicantMobile;
	}

	public function getApplicantMobile()
	{
		return $this->applicantMobile;
	}

	public function setApplicantName($applicantName)
	{
		$this->applicantName = $applicantName;
		$this->apiParas["applicant_name"] = $applicantName;
	}

	public function getApplicantName()
	{
		return $this->applicantName;
	}

	public function setChannelCode($channelCode)
	{
		$this->channelCode = $channelCode;
		$this->apiParas["channel_code"] = $channelCode;
	}

	public function getChannelCode()
	{
		return $this->channelCode;
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

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setMallItemId($mallItemId)
	{
		$this->mallItemId = $mallItemId;
		$this->apiParas["mall_item_id"] = $mallItemId;
	}

	public function getMallItemId()
	{
		return $this->mallItemId;
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

	public function setSourceCode($sourceCode)
	{
		$this->sourceCode = $sourceCode;
		$this->apiParas["source_code"] = $sourceCode;
	}

	public function getSourceCode()
	{
		return $this->sourceCode;
	}

	public function setSupportMallItemId($supportMallItemId)
	{
		$this->supportMallItemId = $supportMallItemId;
		$this->apiParas["support_mall_item_id"] = $supportMallItemId;
	}

	public function getSupportMallItemId()
	{
		return $this->supportMallItemId;
	}

	public function setTotalApplyAmount($totalApplyAmount)
	{
		$this->totalApplyAmount = $totalApplyAmount;
		$this->apiParas["total_apply_amount"] = $totalApplyAmount;
	}

	public function getTotalApplyAmount()
	{
		return $this->totalApplyAmount;
	}

	public function setTotalApplyCount($totalApplyCount)
	{
		$this->totalApplyCount = $totalApplyCount;
		$this->apiParas["total_apply_count"] = $totalApplyCount;
	}

	public function getTotalApplyCount()
	{
		return $this->totalApplyCount;
	}

	public function setUsbMallItemId($usbMallItemId)
	{
		$this->usbMallItemId = $usbMallItemId;
		$this->apiParas["usb_mall_item_id"] = $usbMallItemId;
	}

	public function getUsbMallItemId()
	{
		return $this->usbMallItemId;
	}

	public function getApiMethodName()
	{
		return "alipay.commerce.iot.dapply.order.batchcreate";
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
