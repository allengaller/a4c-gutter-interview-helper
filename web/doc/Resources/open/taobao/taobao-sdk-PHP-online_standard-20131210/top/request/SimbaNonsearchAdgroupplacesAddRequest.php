<?php
/**
 * TOP API: taobao.simba.nonsearch.adgroupplaces.add request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class SimbaNonsearchAdgroupplacesAddRequest
{
	/** 
	 * 宝贝id投放位置id json数组字符串，数组个数最多200个。其中json数组中的key必须和对应实体AdGroupPlace中的属性字段保持一致，否则对应的实体对象属性获取不到相应的值
	 **/
	private $adgroupPlacesJson;
	
	/** 
	 * 12345
	 **/
	private $campaignId;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setAdgroupPlacesJson($adgroupPlacesJson)
	{
		$this->adgroupPlacesJson = $adgroupPlacesJson;
		$this->apiParas["adgroup_places_json"] = $adgroupPlacesJson;
	}

	public function getAdgroupPlacesJson()
	{
		return $this->adgroupPlacesJson;
	}

	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.nonsearch.adgroupplaces.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupPlacesJson,"adgroupPlacesJson");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
