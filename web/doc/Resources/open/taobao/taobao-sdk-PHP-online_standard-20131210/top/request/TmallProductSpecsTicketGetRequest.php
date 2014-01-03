<?php
/**
 * TOP API: tmall.product.specs.ticket.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class TmallProductSpecsTicketGetRequest
{
	/** 
	 * 产品规格ID，多个用逗号分隔
	 **/
	private $specIds;
	
	private $apiParas = array();
	
	public function setSpecIds($specIds)
	{
		$this->specIds = $specIds;
		$this->apiParas["spec_ids"] = $specIds;
	}

	public function getSpecIds()
	{
		return $this->specIds;
	}

	public function getApiMethodName()
	{
		return "tmall.product.specs.ticket.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->specIds,"specIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
