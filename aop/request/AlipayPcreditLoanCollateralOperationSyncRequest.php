<?php
/**
 * ALIPAY API: alipay.pcredit.loan.collateral.operation.sync request
 *
 * @author auto create
 * @since 1.0, 2019-01-07 20:51:15
 */
class AlipayPcreditLoanCollateralOperationSyncRequest
{
	/** 
	 * 业务流水号，即用户授信申请的单号，每次授信申请由借呗平台生成的唯一编号，通知估值时给到机构
	 **/
	private $applyNo;
	
	/** 
	 * 上传附件的二进制流，最大限10M，以下操作类型时必填写：
UPLOAD_REC：上传抵押回执照片
UPLOAD_REG：上传抵押登记证照片
	 **/
	private $attachment;
	
	/** 
	 * JSON格式的业务扩展信息，具体操作和机构约定具体的扩展信息
	 **/
	private $bizExtInfo;
	
	/** 
	 * 操作备注，备注信息越详实越好
	 **/
	private $memo;
	
	/** 
	 * 操作时间，格式：yyyy-MM-dd HH:mm:ss
	 **/
	private $operatedTime;
	
	/** 
	 * 操作类型，目前对押品约定的操作有：
PLEDGED：已入押
UNPLEDGED：已出押；
DISPOSING：处置中；
DISPOSED：已处置；
VERIFIED：已核实；
REJECTED：核实拒绝；
UPLOAD_REC：上传抵押回执（receipt）照片
UPLOAD_REG：上传抵押登记证（registration certificate）照片
	 **/
	private $operatedType;
	
	/** 
	 * 操作人姓名
	 **/
	private $operator;
	
	/** 
	 * 机构请求流水号，请求的幂等字段，作为业务幂等性控制
	 **/
	private $outRequestNo;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setApplyNo($applyNo)
	{
		$this->applyNo = $applyNo;
		$this->apiParas["apply_no"] = $applyNo;
	}

	public function getApplyNo()
	{
		return $this->applyNo;
	}

	public function setAttachment($attachment)
	{
		$this->attachment = $attachment;
		$this->apiParas["attachment"] = $attachment;
	}

	public function getAttachment()
	{
		return $this->attachment;
	}

	public function setBizExtInfo($bizExtInfo)
	{
		$this->bizExtInfo = $bizExtInfo;
		$this->apiParas["biz_ext_info"] = $bizExtInfo;
	}

	public function getBizExtInfo()
	{
		return $this->bizExtInfo;
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

	public function setOperatedTime($operatedTime)
	{
		$this->operatedTime = $operatedTime;
		$this->apiParas["operated_time"] = $operatedTime;
	}

	public function getOperatedTime()
	{
		return $this->operatedTime;
	}

	public function setOperatedType($operatedType)
	{
		$this->operatedType = $operatedType;
		$this->apiParas["operated_type"] = $operatedType;
	}

	public function getOperatedType()
	{
		return $this->operatedType;
	}

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function setOutRequestNo($outRequestNo)
	{
		$this->outRequestNo = $outRequestNo;
		$this->apiParas["out_request_no"] = $outRequestNo;
	}

	public function getOutRequestNo()
	{
		return $this->outRequestNo;
	}

	public function getApiMethodName()
	{
		return "alipay.pcredit.loan.collateral.operation.sync";
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
