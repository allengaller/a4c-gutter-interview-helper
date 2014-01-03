<?php
/**
 * TOP API: taobao.hanoi.group.label.add.pap request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class HanoiGroupLabelAddPapRequest
{
	/** 
	 * 认证信息
	 **/
	private $appName;
	
	/** 
	 * 分组的id
	 **/
	private $groupId;
	
	/** 
	 * 标签的id
	 **/
	private $labelId;
	
	/** 
	 * 标签的优先级。对于互斥分组必须填
	 **/
	private $level;
	
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

	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
	}

	public function setLabelId($labelId)
	{
		$this->labelId = $labelId;
		$this->apiParas["label_id"] = $labelId;
	}

	public function getLabelId()
	{
		return $this->labelId;
	}

	public function setLevel($level)
	{
		$this->level = $level;
		$this->apiParas["level"] = $level;
	}

	public function getLevel()
	{
		return $this->level;
	}

	public function getApiMethodName()
	{
		return "taobao.hanoi.group.label.add.pap";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appName,"appName");
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
		RequestCheckUtil::checkNotNull($this->labelId,"labelId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
