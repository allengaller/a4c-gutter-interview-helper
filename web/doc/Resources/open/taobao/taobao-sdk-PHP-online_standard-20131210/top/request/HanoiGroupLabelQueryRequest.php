<?php
/**
 * TOP API: taobao.hanoi.group.label.query request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class HanoiGroupLabelQueryRequest
{
	/** 
	 * 认证信息
	 **/
	private $appName;
	
	/** 
	 * 要查询的分组id
	 **/
	private $id;
	
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

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getApiMethodName()
	{
		return "taobao.hanoi.group.label.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appName,"appName");
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
