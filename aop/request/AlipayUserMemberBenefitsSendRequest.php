<?php
/**
 * ALIPAY API: alipay.user.member.benefits.send request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayUserMemberBenefitsSendRequest
{
	/** 
	 * 会员卡卡号
	 **/
	private $bizCardNo;
	
	/** 
	 * 特权详情
	 **/
	private $desc;
	
	/** 
	 * 失效日期。 格式：yyyy-mm-dd。
	 **/
	private $endDate;
	
	/** 
	 * 优惠券发放张数
	 **/
	private $sendNum;
	
	/** 
	 * 流水号。 用于控制权益发放的幂等性。
	 **/
	private $serialNo;
	
	/** 
	 * 生效日期。 格式：yyyy-mm-d
	 **/
	private $startDate;
	
	/** 
	 * 特权名称
	 **/
	private $title;
	
	/** 
	 * 自定义核销码，如果为空则由支付宝自动生成
	 **/
	private $verifyCode;
	
	/** 
	 * 核销方式，可多选。 支持：test-纯文本，barcode-条码，qucode-二维码，wave-...
	 **/
	private $verifyTypes;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBizCardNo($bizCardNo)
	{
		$this->bizCardNo = $bizCardNo;
		$this->apiParas["biz_card_no"] = $bizCardNo;
	}

	public function getBizCardNo()
	{
		return $this->bizCardNo;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setSendNum($sendNum)
	{
		$this->sendNum = $sendNum;
		$this->apiParas["send_num"] = $sendNum;
	}

	public function getSendNum()
	{
		return $this->sendNum;
	}

	public function setSerialNo($serialNo)
	{
		$this->serialNo = $serialNo;
		$this->apiParas["serial_no"] = $serialNo;
	}

	public function getSerialNo()
	{
		return $this->serialNo;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setVerifyCode($verifyCode)
	{
		$this->verifyCode = $verifyCode;
		$this->apiParas["verify_code"] = $verifyCode;
	}

	public function getVerifyCode()
	{
		return $this->verifyCode;
	}

	public function setVerifyTypes($verifyTypes)
	{
		$this->verifyTypes = $verifyTypes;
		$this->apiParas["verify_types"] = $verifyTypes;
	}

	public function getVerifyTypes()
	{
		return $this->verifyTypes;
	}

	public function getApiMethodName()
	{
		return "alipay.user.member.benefits.send";
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
