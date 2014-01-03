<?php
/**
 * TOP API: taobao.crm.membergrade.set request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class CrmMembergradeSetRequest
{
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 买家会员级别有四种1：普通会员。2：高级会员。 3VIP会员。 4：至尊VIP
	 **/
	private $grade;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setGrade($grade)
	{
		$this->grade = $grade;
		$this->apiParas["grade"] = $grade;
	}

	public function getGrade()
	{
		return $this->grade;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.membergrade.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->grade,"grade");
		RequestCheckUtil::checkMaxValue($this->grade,4,"grade");
		RequestCheckUtil::checkMinValue($this->grade,1,"grade");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
