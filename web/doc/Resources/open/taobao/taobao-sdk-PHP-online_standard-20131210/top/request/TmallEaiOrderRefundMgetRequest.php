<?php
/**
 * TOP API: tmall.eai.order.refund.mget request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class TmallEaiOrderRefundMgetRequest
{
	/** 
	 * 批量查询结束时间
	 **/
	private $endTime;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数; 默认值:10;最大值:40
	 **/
	private $pageSize;
	
	/** 
	 * 批量查询开始时间
	 **/
	private $startTime;
	
	/** 
	 * 退货单 退款单状态
	 **/
	private $status;
	
	/** 
	 * 是否启用has_next的分页方式，如果指定true,则返回的结果中不包含总记录数，但是会新增一个是否存在下一页的的字段，通过此种方式获取增量退款，接口调用成功率在原有的基础上有所提升。
	 **/
	private $useHasNext;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
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

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setUseHasNext($useHasNext)
	{
		$this->useHasNext = $useHasNext;
		$this->apiParas["use_has_next"] = $useHasNext;
	}

	public function getUseHasNext()
	{
		return $this->useHasNext;
	}

	public function getApiMethodName()
	{
		return "tmall.eai.order.refund.mget";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
