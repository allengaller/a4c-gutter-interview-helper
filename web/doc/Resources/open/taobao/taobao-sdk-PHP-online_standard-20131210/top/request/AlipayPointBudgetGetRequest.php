<?php
/**
 * TOP API: alipay.point.budget.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class AlipayPointBudgetGetRequest
{
	/** 
	 * 支付宝给用户的授权。如果没有top的授权，这个字段是必填项
	 **/
	private $authToken;
	
	private $apiParas = array();
	
	public function setAuthToken($authToken)
	{
		$this->authToken = $authToken;
		$this->apiParas["auth_token"] = $authToken;
	}

	public function getAuthToken()
	{
		return $this->authToken;
	}

	public function getApiMethodName()
	{
		return "alipay.point.budget.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
