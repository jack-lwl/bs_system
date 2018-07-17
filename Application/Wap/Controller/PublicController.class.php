<?php
namespace Wap\Controller;
use Think\Controller;
use Common\API\MysqlApi;
use Think\Log;
class PublicController extends Controller {
   
	/**
	 *  手机端登录
	 */
	public function AppLogin(){
		
		$post = getPost();
		
	//	$post['code'] = 'juguo';
		
	//	$post['password'] = 'xxx';
		
		Log::write('post:'.json_encode($post));
		
		if(empty($post)) ;// post参数为空
		
		$api = new MysqlApi();
		
		$this->ajaxReturn($api->getUserCodeLogin($post['code'],$post['password'],AppLogin));
		
	}
	
	public function test(){
		
		sumCodeProType('0501001SH15008');
		
	}
	
	
	
}