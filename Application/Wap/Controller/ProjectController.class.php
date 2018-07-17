<?php
namespace Wap\Controller;
use Think\Controller;
use Wap\Model\ProUserModel;
class ProjectController extends BaseController {
   
	/**
	 *  获取当前登录用户所参与的所有项目信息
	 *  return 项目名称,项目id
	 */
	public function getUserTheProAll(){
		
	//	session('uid','000116100000000001JP');
		
		$proinfo = new ProUserModel();
		
		$this->ajaxReturn($proinfo->getUserTheProAll());
		
	}
	
	/**
	 *  根据名称搜索项目
	 */
	public function getSearchProName(){
		
		$post = $this->data;
		
		//session('uid','000116100000000007FN');
		
		//$post['like'] = '上海';
		
		$proinfo = new ProUserModel();
		
		$this->ajaxReturn($proinfo->getUserTheProAll(2,$post['like']));
		
	}
	
	
}