<?php
/**
 * TOP API: taobao.hanoi.function.update request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class HanoiFunctionUpdateRequest
{
	/** 
	 * 分配给调用方的名称信息，内部统计使用
	 **/
	private $appName;
	
	/** 
	 * 函数配置ID
	 **/
	private $functionId;
	
	/** 
	 * 函数配置名称
	 **/
	private $name;
	
	/** 
	 * 函数规则类型 0：JSON 1：条件表达式
	 **/
	private $parseType;
	
	/** 
	 * 函数规则定义。支持JSON格式，条件表达式等等。groupId：要匹配人群的标签Id。actionId：需要执行动作的动作Id。filterType：匹配类型。0代表动态标签 1代表标签组 .doAction:true代表执行动作 getData:true 或者false true代表要匹配结果
	 **/
	private $rule;
	
	/** 
	 * 规则开放策略 0：user_id私有 1：所有user_id可以使用 2：同一创建者下的user_id拥有
	 **/
	private $strategy;
	
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

	public function setFunctionId($functionId)
	{
		$this->functionId = $functionId;
		$this->apiParas["function_id"] = $functionId;
	}

	public function getFunctionId()
	{
		return $this->functionId;
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

	public function setParseType($parseType)
	{
		$this->parseType = $parseType;
		$this->apiParas["parse_type"] = $parseType;
	}

	public function getParseType()
	{
		return $this->parseType;
	}

	public function setRule($rule)
	{
		$this->rule = $rule;
		$this->apiParas["rule"] = $rule;
	}

	public function getRule()
	{
		return $this->rule;
	}

	public function setStrategy($strategy)
	{
		$this->strategy = $strategy;
		$this->apiParas["strategy"] = $strategy;
	}

	public function getStrategy()
	{
		return $this->strategy;
	}

	public function getApiMethodName()
	{
		return "taobao.hanoi.function.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appName,"appName");
		RequestCheckUtil::checkNotNull($this->functionId,"functionId");
		RequestCheckUtil::checkMaxLength($this->rule,1000,"rule");
		RequestCheckUtil::checkNotNull($this->strategy,"strategy");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
