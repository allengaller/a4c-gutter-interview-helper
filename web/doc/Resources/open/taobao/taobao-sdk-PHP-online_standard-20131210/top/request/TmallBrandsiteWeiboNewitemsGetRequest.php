<?php
/**
 * TOP API: tmall.brandsite.weibo.newitems.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class TmallBrandsiteWeiboNewitemsGetRequest
{
	/** 
	 * 新浪的userId
	 **/
	private $sinaUserId;
	
	private $apiParas = array();
	
	public function setSinaUserId($sinaUserId)
	{
		$this->sinaUserId = $sinaUserId;
		$this->apiParas["sina_user_id"] = $sinaUserId;
	}

	public function getSinaUserId()
	{
		return $this->sinaUserId;
	}

	public function getApiMethodName()
	{
		return "tmall.brandsite.weibo.newitems.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sinaUserId,"sinaUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
