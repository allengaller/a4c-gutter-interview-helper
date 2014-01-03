<?php
/**
 * TOP API: taobao.simba.creative.add request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class SimbaCreativeAddRequest
{
	/** 
	 * 推广组Id
	 **/
	private $adgroupId;
	
	/** 
	 * 创意图片地址，必须是推广组对应商品的图片之一
	 **/
	private $imgUrl;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 创意标题，最多20个汉字
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setAdgroupId($adgroupId)
	{
		$this->adgroupId = $adgroupId;
		$this->apiParas["adgroup_id"] = $adgroupId;
	}

	public function getAdgroupId()
	{
		return $this->adgroupId;
	}

	public function setImgUrl($imgUrl)
	{
		$this->imgUrl = $imgUrl;
		$this->apiParas["img_url"] = $imgUrl;
	}

	public function getImgUrl()
	{
		return $this->imgUrl;
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

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.creative.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->imgUrl,"imgUrl");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,40,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
