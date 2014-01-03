<?php
/**
 * TOP API: taobao.hanoi.group.list.query request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class HanoiGroupListQueryRequest
{
	/** 
	 * 认证信息
	 **/
	private $appName;
	
	/** 
	 * 模板业务状态 1 审核 0 创建
	 **/
	private $bizStatus;
	
	/** 
	 * 当前页、默认为1
	 **/
	private $currentPage;
	
	/** 
	 * 根据时间查询 创建时间结束点
	 **/
	private $gmtCreateEnd;
	
	/** 
	 * 根据时间查询 创建时间截止点
	 **/
	private $gmtCreateStart;
	
	/** 
	 * 根据时间查询，最近修改时间截止
	 **/
	private $gmtModifiedEnd;
	
	/** 
	 * 根据时间查询，最近修改时间起点
	 **/
	private $gmtModifiedStart;
	
	/** 
	 * 分组的编码
	 **/
	private $groupCode;
	
	/** 
	 * 分组id
	 **/
	private $id;
	
	/** 
	 * 是否查询总数，默认false
	 **/
	private $isTotal;
	
	/** 
	 * 分组名称
	 **/
	private $name;
	
	/** 
	 * 开放策略(true 开放)
	 **/
	private $open;
	
	/** 
	 * 分页查询，默认20
	 **/
	private $pageSize;
	
	/** 
	 * 使用场景
	 **/
	private $scene;
	
	/** 
	 * 分组类型 0互斥 1 共存
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setAppName($appName)
	{
		$this->appName = $appName;
		$this->apiParas["app_name"] = $appName;
	}

	public function getAppName()
	{
		return $this->appName;
	}

	public function setBizStatus($bizStatus)
	{
		$this->bizStatus = $bizStatus;
		$this->apiParas["biz_status"] = $bizStatus;
	}

	public function getBizStatus()
	{
		return $this->bizStatus;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setGmtCreateEnd($gmtCreateEnd)
	{
		$this->gmtCreateEnd = $gmtCreateEnd;
		$this->apiParas["gmt_create_end"] = $gmtCreateEnd;
	}

	public function getGmtCreateEnd()
	{
		return $this->gmtCreateEnd;
	}

	public function setGmtCreateStart($gmtCreateStart)
	{
		$this->gmtCreateStart = $gmtCreateStart;
		$this->apiParas["gmt_create_start"] = $gmtCreateStart;
	}

	public function getGmtCreateStart()
	{
		return $this->gmtCreateStart;
	}

	public function setGmtModifiedEnd($gmtModifiedEnd)
	{
		$this->gmtModifiedEnd = $gmtModifiedEnd;
		$this->apiParas["gmt_modified_end"] = $gmtModifiedEnd;
	}

	public function getGmtModifiedEnd()
	{
		return $this->gmtModifiedEnd;
	}

	public function setGmtModifiedStart($gmtModifiedStart)
	{
		$this->gmtModifiedStart = $gmtModifiedStart;
		$this->apiParas["gmt_modified_start"] = $gmtModifiedStart;
	}

	public function getGmtModifiedStart()
	{
		return $this->gmtModifiedStart;
	}

	public function setGroupCode($groupCode)
	{
		$this->groupCode = $groupCode;
		$this->apiParas["group_code"] = $groupCode;
	}

	public function getGroupCode()
	{
		return $this->groupCode;
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

	public function setIsTotal($isTotal)
	{
		$this->isTotal = $isTotal;
		$this->apiParas["is_total"] = $isTotal;
	}

	public function getIsTotal()
	{
		return $this->isTotal;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOpen($open)
	{
		$this->open = $open;
		$this->apiParas["open"] = $open;
	}

	public function getOpen()
	{
		return $this->open;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setScene($scene)
	{
		$this->scene = $scene;
		$this->apiParas["scene"] = $scene;
	}

	public function getScene()
	{
		return $this->scene;
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
		return "taobao.hanoi.group.list.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appName,"appName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
