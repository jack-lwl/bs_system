<?php
namespace Wap\Controller;
use Think\Controller;
use Wap\Model\ProUserModel;
use Common\Model\CRecordModel;
use Common\Model\SmessageModel;
use Common\API\MysqlApi;
class UserController extends BaseController {
   
	
	/**
	 *  获取验证码
	 */
	public function getTelCode(){
		
		$post = $this->data;
		
		//$post['str_tel'] = '15640364285';
		
		if(!$post['str_tel']) $this->ajaxReturn(CheckLogicBool(false,'110'));
		
		session('savePasswordTel',$post['str_tel']);
		
	    $cr = new CRecordModel();
		
		$code = $cr->CreateCodefun($post['str_tel']);
		
		$sm = new SmessageModel();
	    
		$this->ajaxReturn(CheckLogicBool($sm->PostMessage($post['str_tel'],"您的验证码为:{$code}"),'109'));
		
	}
	
	/**
	 *  提交修改密码
	 */
	public function setPassword(){
		
		$post = $this->data;
		
		$password = $post['password'];
		
		$code = $post['code'];
		
		$cr = new CRecordModel();
		
		$nr = $cr->CheckCodefun(session('savePasswordTel'),$code);
		
		if($nr){
			//验证码错误
			$this->ajaxReturn(getCodeModel($nr));
		}else{
			//验证成功
		 	$api = new MysqlApi();
			
		 	$this->ajaxReturn(CheckLogicBool($api->saveUserInfo(session('uid'),array('user_password'=>md5($password))),'106'));
		}
	}
	
}