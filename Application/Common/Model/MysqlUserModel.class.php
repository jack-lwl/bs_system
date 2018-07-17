<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: huajie <banhuajie@163.com>
// +----------------------------------------------------------------------
namespace Common\Model;

use Think\Model;
use Think\Log;

/**
 * 行为模型
 * 
 * @author huajie <banhuajie@163.com>
 */
class MysqlUserModel extends Model {
	protected $trueTableName = 'u_member';
	
	/**
	 * 根据用户id获取用户信息
	 */
	public function getUserInfo($uid) {
		return $this->where ( "Cuserid = '%s'", array (
				$uid 
		) )->find ();
	}
	
	/**
	 *  获取所有用户
	 */
	public function getUserAll(){
		return $this->select();
	}
	
	/**
	 * 重新添加用户
	 */
	public function addUser($data) {
		return $this->add ( $data );
	}
	
	/**
	 * 修改用户信息
	 */
	public function saveUserInfo($uid, $data) {
		return $this->where ( "Cuserid = '%s'", array (
				$uid 
		) )->save ( $data );
	}
	
	/**
	 * 用户登录验证
	 */
	public function getUserCodeLogin($code, $password = '',$loginAuth) {
		$user = $this->where ( "user_code = '%s'", array (
				$code 
		) )->field ( true )->find ();
		
		if (! $user)
			return getCodeModel('100'); // 用户不存在
		if (md5($password) != $user ['user_password'])
			return getCodeModel('100'); // 账号或密码错误
		if ($user ['dr'] == 1)
			return getCodeModel('101'); // 用户已被删除
		
		session_start();
		
		$user['openid'] = session_id();
		
	//	if(!$this->CheckUserHaveAuth($user['Cuserid'],$loginAuth)) return CheckLogicBool(false,'107');
		
		session('uid',$user['Cuserid']);
		session('name',$user['user_name']);
		session('cid',$user['pk_corp']);
		
		Log::write("user信息:".json_encode($user));
		Log::write('uid:'.json_encode(session('uid')));
		
		return CheckLogicBool($user,'102',$user);  // 成功
	}
	
	/**
	 *  校验该用户是否拥有某权限
	 *  @param uid 用户id
	 *  @param auid 权限id
	 */
	public function CheckUserHaveAuth($uid,$auid){
		
		$postionid = M('u_postion')->field('postionId')->where("FIND_IN_SET({$auid},p_auth)")->select();
		
		//var_dump($postionid);
		
		foreach ($postionid as $key => $value){
		
			if($this->field('Cuserid')->where("FIND_IN_SET(".$postionid[$key]['postionId'].",user_position) and Cuserid = '%s'",array($uid))->find()){
				
			    return true;
			}
		
		}
		
	}
	
	
	/**
	 *  查看是否具有个人特殊权限
	 *  @param uid 用户id
	 *  @author:liweilong
	 */
	public function Check_User_special($uid,$auid){
	    
	    
	    //var_dump($postionid);
	
	    if($this->field('Cuserid')->where("FIND_IN_SET(".$auid.",special_authorit) and Cuserid = '%s'",array($uid))->find()){
	            return true;
	    }
	    
	    
	
	}
	
	/**
	 * 
	 *  查出所有具业务员，及具有业务员权限的人
	 *  @author:liweilong
	 */
	public function select_yewu($c_id){
	   // $where['user_position']=array('IN',19);
	   // $where['user_position']=array('IN',19);
	    return $this->field('u_member.Cuserid,u_member.user_name,u_postion.p_name')->join("LEFT JOIN quickhigh_tpc.u_postion on u_member.user_position = u_postion.postionId")->where("u_member.pk_corp=$c_id and (FIND_IN_SET('19',u_member.special_authorit) or FIND_IN_SET('17',u_member.user_position))")->select();
	}
	
	/**
	 *
	 *  根据人员id查出人员名
	 *  @author:liweilong
	 */
	public function select_name($Cuserid){
	    $where['Cuserid']=array('EQ',$Cuserid);
	    return $this->field('user_name')->where($where)->select();
	}
	
	
	
	  /**
     *  u_member
     *  从 人员表中查询数据
     *  得到数据总数
     *  @author:liweilong
     */
	public function select_user_total($str){
	   
	        $data['user_name']=array('like',"%{$str}%");  //用户名
	        $data['str_tel']=array('like',"%{$str}%");  //电话
	        $data['_logic']='or';  //tp中where条件默认为and，此处声明or
	       /*
	        $data['_logic']='or';  //tp中where条件默认为and，此处声明or
	        $map['_complex'] = $data;  //or之后再and

	        $map['c_type']=array('EQ',$c_type);
	        $map['c_time']=array('between',array($start_time,$stop_time));
	       */
	   	
	    return $this->where($data)->count();
	}
	
	 /**
     *  u_member
     *  从 人员表中查询数据
     *  得到数据
     *  @author:liweilong
     */
	public function select_user($page,$str,$per){
	
	    $start=($page-1)*$per;
	    $data['u_member.user_name']=array('like',"%{$str}%");  //用户名
	    $data['u_member.str_tel']=array('like',"%{$str}%");  //电话
	    $data['_logic']='or';  //tp中where条件默认为and，此处声明or
	
	
	    return $this->join("LEFT JOIN quickhigh_tpc.u_postion on u_member.user_position = u_postion.postionId")->where($data)->limit("$start, $per")->select();
	    //echo $this->getLastSql();
	}
	
}
