<?php
/**
 * ALIPAY API: alipay.ebpp.invoice.merchant.apply.upload request
 *
 * @author auto create
 * @since 1.0, 2023-08-24 22:11:42
 */
class AlipayEbppInvoiceMerchantApplyUploadRequest
{
	/** 
	 * 发票申请ID
	 **/
	private $applyId;
	
	/** 
	 * 批次ID
	 **/
	private $batchId;
	
	/** 
	 * 合计含税金额（开票金额）
	 **/
	private $invoiceAmount;
	
	/** 
	 * 发票代码
	 **/
	private $invoiceCode;
	
	/** 
	 * 开票日期
	 **/
	private $invoiceDate;
	
	/** 
	 * 发票板式文件数据
	 **/
	private $invoiceFileData;
	
	/** 
	 * 发票板式文件类型
	 **/
	private $invoiceFileType;
	
	/** 
	 * 开票发票类型
	 **/
	private $invoiceKind;
	
	/** 
	 * 发票号码
	 **/
	private $invoiceNo;
	
	/** 
	 * 发票(开票)类型
	 **/
	private $invoiceType;
	
	/** 
	 * 原发票代码
	 **/
	private $normalInvoiceCode;
	
	/** 
	 * 原发票号码
	 **/
	private $normalInvoiceNo;
	
	/** 
	 * 销方地址
	 **/
	private $payeeAddress;
	
	/** 
	 * 销方银行账号
	 **/
	private $payeeBankAccountId;
	
	/** 
	 * 销方开户行名称
	 **/
	private $payeeBankName;
	
	/** 
	 * 销方名称
	 **/
	private $payeeName;
	
	/** 
	 * 销方联系电话
	 **/
	private $payeePhone;
	
	/** 
	 * 销方税务登记证号
	 **/
	private $payeeRegisterNo;
	
	/** 
	 * 购方名称
	 **/
	private $payerName;
	
	/** 
	 * 购方税号
	 **/
	private $payerRegisterNo;
	
	/** 
	 * 合计金额（不含税）
	 **/
	private $sumPrice;
	
	/** 
	 * 税额
	 **/
	private $sumTax;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setApplyId($applyId)
	{
		$this->applyId = $applyId;
		$this->apiParas["apply_id"] = $applyId;
	}

	public function getApplyId()
	{
		return $this->applyId;
	}

	public function setBatchId($batchId)
	{
		$this->batchId = $batchId;
		$this->apiParas["batch_id"] = $batchId;
	}

	public function getBatchId()
	{
		return $this->batchId;
	}

	public function setInvoiceAmount($invoiceAmount)
	{
		$this->invoiceAmount = $invoiceAmount;
		$this->apiParas["invoice_amount"] = $invoiceAmount;
	}

	public function getInvoiceAmount()
	{
		return $this->invoiceAmount;
	}

	public function setInvoiceCode($invoiceCode)
	{
		$this->invoiceCode = $invoiceCode;
		$this->apiParas["invoice_code"] = $invoiceCode;
	}

	public function getInvoiceCode()
	{
		return $this->invoiceCode;
	}

	public function setInvoiceDate($invoiceDate)
	{
		$this->invoiceDate = $invoiceDate;
		$this->apiParas["invoice_date"] = $invoiceDate;
	}

	public function getInvoiceDate()
	{
		return $this->invoiceDate;
	}

	public function setInvoiceFileData($invoiceFileData)
	{
		$this->invoiceFileData = $invoiceFileData;
		$this->apiParas["invoice_file_data"] = $invoiceFileData;
	}

	public function getInvoiceFileData()
	{
		return $this->invoiceFileData;
	}

	public function setInvoiceFileType($invoiceFileType)
	{
		$this->invoiceFileType = $invoiceFileType;
		$this->apiParas["invoice_file_type"] = $invoiceFileType;
	}

	public function getInvoiceFileType()
	{
		return $this->invoiceFileType;
	}

	public function setInvoiceKind($invoiceKind)
	{
		$this->invoiceKind = $invoiceKind;
		$this->apiParas["invoice_kind"] = $invoiceKind;
	}

	public function getInvoiceKind()
	{
		return $this->invoiceKind;
	}

	public function setInvoiceNo($invoiceNo)
	{
		$this->invoiceNo = $invoiceNo;
		$this->apiParas["invoice_no"] = $invoiceNo;
	}

	public function getInvoiceNo()
	{
		return $this->invoiceNo;
	}

	public function setInvoiceType($invoiceType)
	{
		$this->invoiceType = $invoiceType;
		$this->apiParas["invoice_type"] = $invoiceType;
	}

	public function getInvoiceType()
	{
		return $this->invoiceType;
	}

	public function setNormalInvoiceCode($normalInvoiceCode)
	{
		$this->normalInvoiceCode = $normalInvoiceCode;
		$this->apiParas["normal_invoice_code"] = $normalInvoiceCode;
	}

	public function getNormalInvoiceCode()
	{
		return $this->normalInvoiceCode;
	}

	public function setNormalInvoiceNo($normalInvoiceNo)
	{
		$this->normalInvoiceNo = $normalInvoiceNo;
		$this->apiParas["normal_invoice_no"] = $normalInvoiceNo;
	}

	public function getNormalInvoiceNo()
	{
		return $this->normalInvoiceNo;
	}

	public function setPayeeAddress($payeeAddress)
	{
		$this->payeeAddress = $payeeAddress;
		$this->apiParas["payee_address"] = $payeeAddress;
	}

	public function getPayeeAddress()
	{
		return $this->payeeAddress;
	}

	public function setPayeeBankAccountId($payeeBankAccountId)
	{
		$this->payeeBankAccountId = $payeeBankAccountId;
		$this->apiParas["payee_bank_account_id"] = $payeeBankAccountId;
	}

	public function getPayeeBankAccountId()
	{
		return $this->payeeBankAccountId;
	}

	public function setPayeeBankName($payeeBankName)
	{
		$this->payeeBankName = $payeeBankName;
		$this->apiParas["payee_bank_name"] = $payeeBankName;
	}

	public function getPayeeBankName()
	{
		return $this->payeeBankName;
	}

	public function setPayeeName($payeeName)
	{
		$this->payeeName = $payeeName;
		$this->apiParas["payee_name"] = $payeeName;
	}

	public function getPayeeName()
	{
		return $this->payeeName;
	}

	public function setPayeePhone($payeePhone)
	{
		$this->payeePhone = $payeePhone;
		$this->apiParas["payee_phone"] = $payeePhone;
	}

	public function getPayeePhone()
	{
		return $this->payeePhone;
	}

	public function setPayeeRegisterNo($payeeRegisterNo)
	{
		$this->payeeRegisterNo = $payeeRegisterNo;
		$this->apiParas["payee_register_no"] = $payeeRegisterNo;
	}

	public function getPayeeRegisterNo()
	{
		return $this->payeeRegisterNo;
	}

	public function setPayerName($payerName)
	{
		$this->payerName = $payerName;
		$this->apiParas["payer_name"] = $payerName;
	}

	public function getPayerName()
	{
		return $this->payerName;
	}

	public function setPayerRegisterNo($payerRegisterNo)
	{
		$this->payerRegisterNo = $payerRegisterNo;
		$this->apiParas["payer_register_no"] = $payerRegisterNo;
	}

	public function getPayerRegisterNo()
	{
		return $this->payerRegisterNo;
	}

	public function setSumPrice($sumPrice)
	{
		$this->sumPrice = $sumPrice;
		$this->apiParas["sum_price"] = $sumPrice;
	}

	public function getSumPrice()
	{
		return $this->sumPrice;
	}

	public function setSumTax($sumTax)
	{
		$this->sumTax = $sumTax;
		$this->apiParas["sum_tax"] = $sumTax;
	}

	public function getSumTax()
	{
		return $this->sumTax;
	}

	public function getApiMethodName()
	{
		return "alipay.ebpp.invoice.merchant.apply.upload";
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
