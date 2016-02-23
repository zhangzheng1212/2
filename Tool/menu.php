<?php
@header('Content-type: text/html;charset=UTF-8');
include_once "logger.php";
class menu{
	
	private $appid = "wxb391f9c7df494517";//填写appid
	private $secret = "49e7715615a18f1a050c793609f48622";//填写secret
	private $log;
	private $token ="FmrWkK8xVcdj6VT9YFE4UmHhSot-x3UGEi1MQFYFo0Cj57KhjTzjKYeYV45JeS_VS3FFUg0jq5GK7N-UyAbg6iueG-v01GeNxyN7DqAKEBoHLOaADAZDG";
	
	
	public function menu(){
		$this->log = new logger();
	}
	
	public function getmenu() {
		//$this->getToken();
		$url = "https://api.weixin.qq.com/cgi-bin/menu/get?access_token={$this->token}";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$a = curl_exec($ch);
		echo $a;
		$this->log->log1($a);
		//$strjson=json_decode($a);
		//$this->token = $strjson->access_token;
		curl_close($ch); 
	}
	
	public function getToken(){
		
		$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$this->appid}&secret={$this->secret}";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$a = curl_exec($ch);
		$strjson=json_decode($a);
		$this->token = $strjson->access_token;
		$this->log->log1($this->token);
		curl_close($ch); 
	}
	
	public function setMenu(){
			//$this->getToken();
			$post='{
					 "button":[
					  {
						   "name":"服务中心",
						   "sub_button":[
						   {	
							   "type":"view",
							   "name":"选择服务",
							   "url":"http://201215909.sinaapp.com/SaleService/index.php"
							},
							{
							   "type":"click",
							   "name":"一键呼叫",
							   "key":"V1001_One_click"
							},
							{
							   "type":"click",
							   "name":"功能待定",
							   "key":"V1001_More"
							}]
					   },
					  {
						   "name":"旭恒店铺",
						   "sub_button":[
						   {	
							   "type":"view",
							   "name":"进入店铺",
							   "url":"http://www.baidu.com/"
							},
							{
							   "type":"view",
							   "name":"店铺动态",
							   "url":"http://www.baidu.com/"
							},
							{
							   "type":"view",
							   "name":"店铺活动",
							   "url":"http://www.baidu.com/"
							}]
					   },
					   {
						   "name":"个人中心",
						   "sub_button":[
						   {	
							   "type":"view",
							   "name":"我的订单",
							   "url":"http://www.baidu.com/"
							},
							{
							   "type":"view",
							   "name":"了解旭恒",
							   "url":"http://www.baidu.com/"
							},
							{
							   "type":"view",
							   "name":"个人资料",
							   "url":"http://www.baidu.com/"
							}]
					   }]
				 }';  //提交内容
			 
			$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token={$this->token}"; //查询地址 
			$ch = curl_init();//新建curl
			curl_setopt($ch, CURLOPT_URL, $url);//url  
			curl_setopt($ch, CURLOPT_POST, 1);  //post
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);//post内容  
			$res = curl_exec($ch); //输出 
			echo $res;
			$this->log->log1($res); 
			curl_close($ch);
	}
} 

?>