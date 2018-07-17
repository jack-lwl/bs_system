<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\UserModel;
use Home\API\OracleApi;
use Common\API\MysqlApi;
use Think\Log;

class BaseController extends Controller {
		
	protected $data;
	
	/**
	 *  构造函数
	 */
	function __construct(){
		
		parent::__construct();
		
		if(!session('uid')){
			
			Log::write('用户未登录!');

			$this->redirect("Admin/Public/log");
			
		}
		$this->data = I("post.");
	}
	
	
	
	
}