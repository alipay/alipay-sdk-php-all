<?php
/**
 * ALIPAY API: alipay.open.mini.shop.activity.create request
 *
 * @author auto create
 * @since 1.0, 2019-01-07 20:51:15
 */
class AlipayOpenMiniShopActivityCreateRequest
{
	/** 
	 * 活动资源图片
	 **/
	private $bannerImage;
	
	/** 
	 * 活动结束时间
	 **/
	private $endTime;
	
	/** 
	 * 跳转插件appId
	 **/
	private $pluginId;
	
	/** 
	 * 活动开始时间
	 **/
	private $startTime;
	
	/** 
	 * 实际跳转相对路径
	 **/
	private $targetUrl;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setBannerImage($bannerImage)
	{
		$this->bannerImage = $bannerImage;
		$this->apiParas["banner_image"] = $bannerImage;
	}

	public function getBannerImage()
	{
		return $this->bannerImage;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setPluginId($pluginId)
	{
		$this->pluginId = $pluginId;
		$this->apiParas["plugin_id"] = $pluginId;
	}

	public function getPluginId()
	{
		return $this->pluginId;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setTargetUrl($targetUrl)
	{
		$this->targetUrl = $targetUrl;
		$this->apiParas["target_url"] = $targetUrl;
	}

	public function getTargetUrl()
	{
		return $this->targetUrl;
	}

	public function getApiMethodName()
	{
		return "alipay.open.mini.shop.activity.create";
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
