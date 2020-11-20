<?php
/**
 * ALIPAY API: alipay.mobile.securities.info.update request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayMobileSecuritiesInfoUpdateRequest
{
	/** 
	 * 作者
	 **/
	private $author;
	
	/** 
	 * 文本正文
	 **/
	private $content;
	
	/** 
	 * Html格式正文
	 **/
	private $html;
	
	/** 
	 * 唯一标识
	 **/
	private $identify;
	
	/** 
	 * 原文链接
	 **/
	private $link;
	
	/** 
	 * 配图原图
	 **/
	private $originalPicture;
	
	/** 
	 * 配图图注
	 **/
	private $pictureComment;
	
	/** 
	 * Html格式正文中配图图片位置标识
	 **/
	private $pictureLocation;
	
	/** 
	 * publish_time
	 **/
	private $publishTime;
	
	/** 
	 * 相关股票
	 **/
	private $relevantStock;
	
	/** 
	 * 新闻来源
	 **/
	private $source;
	
	/** 
	 * summary
	 **/
	private $summary;
	
	/** 
	 * title
	 **/
	private $title;
	
	/** 
	 * 更新时间
	 **/
	private $updateTime;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAuthor($author)
	{
		$this->author = $author;
		$this->apiParas["author"] = $author;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setHtml($html)
	{
		$this->html = $html;
		$this->apiParas["html"] = $html;
	}

	public function getHtml()
	{
		return $this->html;
	}

	public function setIdentify($identify)
	{
		$this->identify = $identify;
		$this->apiParas["identify"] = $identify;
	}

	public function getIdentify()
	{
		return $this->identify;
	}

	public function setLink($link)
	{
		$this->link = $link;
		$this->apiParas["link"] = $link;
	}

	public function getLink()
	{
		return $this->link;
	}

	public function setOriginalPicture($originalPicture)
	{
		$this->originalPicture = $originalPicture;
		$this->apiParas["original_picture"] = $originalPicture;
	}

	public function getOriginalPicture()
	{
		return $this->originalPicture;
	}

	public function setPictureComment($pictureComment)
	{
		$this->pictureComment = $pictureComment;
		$this->apiParas["picture_comment"] = $pictureComment;
	}

	public function getPictureComment()
	{
		return $this->pictureComment;
	}

	public function setPictureLocation($pictureLocation)
	{
		$this->pictureLocation = $pictureLocation;
		$this->apiParas["picture_location"] = $pictureLocation;
	}

	public function getPictureLocation()
	{
		return $this->pictureLocation;
	}

	public function setPublishTime($publishTime)
	{
		$this->publishTime = $publishTime;
		$this->apiParas["publish_time"] = $publishTime;
	}

	public function getPublishTime()
	{
		return $this->publishTime;
	}

	public function setRelevantStock($relevantStock)
	{
		$this->relevantStock = $relevantStock;
		$this->apiParas["relevant_stock"] = $relevantStock;
	}

	public function getRelevantStock()
	{
		return $this->relevantStock;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function setSummary($summary)
	{
		$this->summary = $summary;
		$this->apiParas["summary"] = $summary;
	}

	public function getSummary()
	{
		return $this->summary;
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

	public function setUpdateTime($updateTime)
	{
		$this->updateTime = $updateTime;
		$this->apiParas["update_time"] = $updateTime;
	}

	public function getUpdateTime()
	{
		return $this->updateTime;
	}

	public function getApiMethodName()
	{
		return "alipay.mobile.securities.info.update";
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
