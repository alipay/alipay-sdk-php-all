<?php
/**
 * ALIPAY API: zhima.credit.ep.codec.create request
 *
 * @author auto create
 * @since 1.0, 2019-01-07 20:51:15
 */
class ZhimaCreditEpCodecCreateRequest
{
	/** 
	 * 商户端保持自有渠道id所对应商户的唯一性
	 **/
	private $channelId;
	
	/** 
	 * 支持中文名，最长50个字符
	 **/
	private $channelName;
	
	/** 
	 * 主图背景图二进制数据
	 **/
	private $contentImg;
	
	/** 
	 * 跳转页URL
	 **/
	private $gotoUrl;
	
	/** 
	 * logo图片二进制数据
	 **/
	private $logoImg;
	
	/** 
	 * 推广子文案
	 **/
	private $subtitle;
	
	/** 
	 * 推广主文案，限20个中文字符以内
	 **/
	private $title;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setChannelId($channelId)
	{
		$this->channelId = $channelId;
		$this->apiParas["channel_id"] = $channelId;
	}

	public function getChannelId()
	{
		return $this->channelId;
	}

	public function setChannelName($channelName)
	{
		$this->channelName = $channelName;
		$this->apiParas["channel_name"] = $channelName;
	}

	public function getChannelName()
	{
		return $this->channelName;
	}

	public function setContentImg($contentImg)
	{
		$this->contentImg = $contentImg;
		$this->apiParas["content_img"] = $contentImg;
	}

	public function getContentImg()
	{
		return $this->contentImg;
	}

	public function setGotoUrl($gotoUrl)
	{
		$this->gotoUrl = $gotoUrl;
		$this->apiParas["goto_url"] = $gotoUrl;
	}

	public function getGotoUrl()
	{
		return $this->gotoUrl;
	}

	public function setLogoImg($logoImg)
	{
		$this->logoImg = $logoImg;
		$this->apiParas["logo_img"] = $logoImg;
	}

	public function getLogoImg()
	{
		return $this->logoImg;
	}

	public function setSubtitle($subtitle)
	{
		$this->subtitle = $subtitle;
		$this->apiParas["subtitle"] = $subtitle;
	}

	public function getSubtitle()
	{
		return $this->subtitle;
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

	public function getApiMethodName()
	{
		return "zhima.credit.ep.codec.create";
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
