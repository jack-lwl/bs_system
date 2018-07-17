<?php
namespace Wap\Controller;
use Think\Controller;
use Think\Log;
class BaseController extends Controller {
   
	protected $data;
	
	/**
	 *  构造函数
	 */
	function __construct(){
		
		$post = getPost();
		
		Log::write('post:'.json_encode($post['openid']));
		
		session_destroy();
		
		session_id($post['openid']);
		
		session_start();
		
		Log::write('uid:'.session('uid'));
		
		if(!session('uid')){
			
			Log::write('用户登录错误!');
			
			$this->ajaxReturn(getCodeModel('103'));
		}
		
		unset($post['openid']);
		
		$this->data = $post;
		
	}
	
}