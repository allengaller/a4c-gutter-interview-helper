<?php
/**
 * TOP API: taobao.hanoi.datatemplate.detail.delete request
 * 
 * @author auto create
 * @since 1.0, 2013-12-10 16:57:25
 */
class HanoiDatatemplateDetailDeleteRequest
{
	/** 
	 * appName
	 **/
	private $appName;
	
	/** 
	 * Long类型数组的JSON格式
	 **/
	private $dataTemplateDetailIds;
	
	/** 
	 * id:数据模板唯一标识
	 **/
	private $dataTemplateVo;
	
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

	public function setDataTemplateDetailIds($dataTemplateDetailIds)
	{
		$this->dataTemplateDetailIds = $dataTemplateDetailIds;
		$this->apiParas["data_template_detail_ids"] = $dataTemplateDetailIds;
	}

	public function getDataTemplateDetailIds()
	{
		return $this->dataTemplateDetailIds;
	}

	public function setDataTemplateVo($dataTemplateVo)
	{
		$this->dataTemplateVo = $dataTemplateVo;
		$this->apiParas["data_template_vo"] = $dataTemplateVo;
	}

	public function getDataTemplateVo()
	{
		return $this->dataTemplateVo;
	}

	public function getApiMethodName()
	{
		return "taobao.hanoi.datatemplate.detail.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appName,"appName");
		RequestCheckUtil::checkNotNull($this->dataTemplateDetailIds,"dataTemplateDetailIds");
		RequestCheckUtil::checkNotNull($this->dataTemplateVo,"dataTemplateVo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
