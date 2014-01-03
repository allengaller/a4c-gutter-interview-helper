<?php
/**
 * TOP API: taobao.ump.range.delete request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class UmpRangeDeleteRequest
{
	/** 
	 * 活动id
	 **/
	private $actId;
	
	/** 
	 * id列表，当范围类型为商品时，该id为商品id；当范围类型为类目时，该id为类目id
	 **/
	private $ids;
	
	/** 
	 * 范围的类型，比如是全店，商品，类目见：MarketingConstants.PARTICIPATE_TYPE_*
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setActId($actId)
	{
		$this->actId = $actId;
		$this->apiParas["act_id"] = $actId;
	}

	public function getActId()
	{
		return $this->actId;
	}

	public function setIds($ids)
	{
		$this->ids = $ids;
		$this->apiParas["ids"] = $ids;
	}

	public function getIds()
	{
		return $this->ids;
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
		return "taobao.ump.range.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actId,"actId");
		RequestCheckUtil::checkNotNull($this->ids,"ids");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
