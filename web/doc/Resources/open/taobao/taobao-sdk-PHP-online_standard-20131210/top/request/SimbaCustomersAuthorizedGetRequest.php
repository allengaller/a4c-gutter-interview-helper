<?php
/**
 * TOP API: taobao.simba.customers.authorized.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class SimbaCustomersAuthorizedGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.simba.customers.authorized.get";
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
