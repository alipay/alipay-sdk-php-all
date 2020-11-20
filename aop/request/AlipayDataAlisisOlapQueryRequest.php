<?php
/**
 * ALIPAY API: alipay.data.alisis.olap.query request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayDataAlisisOlapQueryRequest
{
	/** 
	 * 过滤条件
	 **/
	private $filterJson;
	
	/** 
	 * 度量过滤条件
	 **/
	private $havingFilterJson;
	
	/** 
	 * 工作表id
	 **/
	private $id;
	
	/** 
	 * 最大值5000，返回结果集数量
	 **/
	private $limit;
	
	/** 
	 * 排序
	 **/
	private $orderJson;
	
	/** 
	 * 类型：cube/worksheet
	 **/
	private $type;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setFilterJson($filterJson)
	{
		$this->filterJson = $filterJson;
		$this->apiParas["filter_json"] = $filterJson;
	}

	public function getFilterJson()
	{
		return $this->filterJson;
	}

	public function setHavingFilterJson($havingFilterJson)
	{
		$this->havingFilterJson = $havingFilterJson;
		$this->apiParas["having_filter_json"] = $havingFilterJson;
	}

	public function getHavingFilterJson()
	{
		return $this->havingFilterJson;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
		$this->apiParas["limit"] = $limit;
	}

	public function getLimit()
	{
		return $this->limit;
	}

	public function setOrderJson($orderJson)
	{
		$this->orderJson = $orderJson;
		$this->apiParas["order_json"] = $orderJson;
	}

	public function getOrderJson()
	{
		return $this->orderJson;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "alipay.data.alisis.olap.query";
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
