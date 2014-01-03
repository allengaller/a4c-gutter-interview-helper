<?php
/**
 * TOP API: taobao.hanoi.datatemplate.query request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class HanoiDatatemplateQueryRequest
{
	/** 
	 * AppName
	 **/
	private $appName;
	
	/** 
	 * templateName:String 根据模板的名字查找
isNeedDetail：Boolean 是否返回模板详情
opened:int 开放策略
owner:创建者，填入appkey
	 **/
	private $parameter;
	
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

	public function setParameter($parameter)
	{
		$this->parameter = $parameter;
		$this->apiParas["parameter"] = $parameter;
	}

	public function getParameter()
	{
		return $this->parameter;
	}

	public function getApiMethodName()
	{
		return "taobao.hanoi.datatemplate.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appName,"appName");
		RequestCheckUtil::checkNotNull($this->parameter,"parameter");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
