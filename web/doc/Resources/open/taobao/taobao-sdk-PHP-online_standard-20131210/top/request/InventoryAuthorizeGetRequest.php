<?php
/**
 * TOP API: taobao.inventory.authorize.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class InventoryAuthorizeGetRequest
{
	/** 
	 * 库存分配授权结果码
	 **/
	private $authorizeCode;
	
	/** 
	 * sc_item_id商品后端id
	 **/
	private $scItemId;
	
	/** 
	 * 分配用户列表，多个用户使用“,“分割开
	 **/
	private $userNickList;
	
	private $apiParas = array();
	
	public function setAuthorizeCode($authorizeCode)
	{
		$this->authorizeCode = $authorizeCode;
		$this->apiParas["authorize_code"] = $authorizeCode;
	}

	public function getAuthorizeCode()
	{
		return $this->authorizeCode;
	}

	public function setScItemId($scItemId)
	{
		$this->scItemId = $scItemId;
		$this->apiParas["sc_item_id"] = $scItemId;
	}

	public function getScItemId()
	{
		return $this->scItemId;
	}

	public function setUserNickList($userNickList)
	{
		$this->userNickList = $userNickList;
		$this->apiParas["user_nick_list"] = $userNickList;
	}

	public function getUserNickList()
	{
		return $this->userNickList;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.authorize.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->authorizeCode,"authorizeCode");
		RequestCheckUtil::checkNotNull($this->scItemId,"scItemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
