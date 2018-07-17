<?php
namespace Admin\Controller;
use Think\Controller;

class PublicController extends Controller {

	
	/**
	 *  用户登录
	 */
	public function log(){
	    if(IS_POST){
	       //  print_r($_POST);
	       // exit;
	        
	        $username=$_POST['username'];
	        $password=$_POST['password'];
	        $password=md5($password);
	        
	        //管理员
	        $U=M('db_exam.db_admin');
	        $data['username']=array('EQ',$username);
	        $data['password']=array('EQ',$password);
	       // $data['states']=array('EQ',1);
	        
	        
	        //分行账号
	        $V=M('db_exam.db_bank');
	        $data2['username']=array('EQ',$username);
	        $data2['password']=array('EQ',$password);
	        $data2['status']=array('EQ',1);
	        $res2=$V->where($data2)->count();
	        $temp=$V->field('id')->where($data2)->find();
	        $id_fen=$temp['id'];
	        
	        $res=$U->where($data)->count();
	        
	        if($res){
	            session('uid',$username); //账号存入session
	            
	            $this->redirect('Admin/index/branchlist');
	        }else if($res2){
	            session('uid',$username); //账号存入session
	            
	            $this->redirect('Admin/index/branchmain',array('id'=>$id_fen));
	        }else{
	            $this->error('用户名或密码错误');
	        }
	        
    
        }else{
	        $this->display();
	    }
	    
	}
	
	
	
	/**
	 *
	 *  清除session
	 *
	 *  @author:liweilong
	 */
	public function del_session(){
	
	    if (session_destroy()){
	        $this->ajaxReturn(1);
	    }
	     
	}
	
	
	
	
	/**
	 *  用户退出
	 */
	public function out(){
		
	}
	
	
	
	
}