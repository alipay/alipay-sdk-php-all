<?php
/**
 * ALIPAY API: alipay.marketing.tool.task.receive request
 *
 * @author auto create
 * @since 1.0, 2020-05-06 17:57:24
 */
class AlipayMarketingToolTaskReceiveRequest
{
	/** 
	 * 当完成任务（send）或者主动领奖（receive）且奖品决策方式为指定奖品决策时，需要传入的奖品ID。
	 **/
	private $specificPrizeId;
	
	/** 
	 * 阶段码，signup任务报名，send任务完成，receive主动领取。stagecode需要根据具体任务的不同类型（是否需要主动报名/用户触发还是事件触发）来传参。
	 **/
	private $stageCode;
	
	/** 
	 * 任务ID。
	 **/
	private $taskId;
	
	/** 
	 * 蚂蚁统一会员ID
	 **/
	private $userId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setSpecificPrizeId($specificPrizeId)
	{
		$this->specificPrizeId = $specificPrizeId;
		$this->apiParas["specific_prize_id"] = $specificPrizeId;
	}

	public function getSpecificPrizeId()
	{
		return $this->specificPrizeId;
	}

	public function setStageCode($stageCode)
	{
		$this->stageCode = $stageCode;
		$this->apiParas["stage_code"] = $stageCode;
	}

	public function getStageCode()
	{
		return $this->stageCode;
	}

	public function setTaskId($taskId)
	{
		$this->taskId = $taskId;
		$this->apiParas["task_id"] = $taskId;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "alipay.marketing.tool.task.receive";
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
