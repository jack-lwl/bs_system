<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: huajie <banhuajie@163.com>
// +----------------------------------------------------------------------

namespace Wap\Model;
use Think\Model;
use Think\Log;

/**
 *  项目人员模型 
 *  @author huajie <banhuajie@163.com>
 */

class ProUserModel extends Model {
	
	protected $trueTableName = 'p_user';
	
	
	/**
	 *  获取当前登录用户所参与的所有项目信息
	 *  return 项目名称,项目id
	 */
	public function getUserTheProAll($type = 1,$like = ''){
		
		$uid = session('uid');
		
		if($type == 1){
			
			$proinfo = M("p_user pu")->field('p.p_id,p.Jobname')->join("p_projectinfo p on p.p_id = pu.p_id")->where("p_user_id = '%s' and pu.p_status = 0",array($uid))->select();
			
		}
		
		if($type == 2){
			
			$where['p_user_id'] = $uid;
			$where['Jobname'] = array('like','%'.$like.'%');
			
			$proinfo = M("p_user pu")->field('p.p_id,p.Jobname')->join("p_projectinfo p on p.p_id = pu.p_id and pu.p_status = 0")->where($where)->select();
		}
	
		return CheckLogicBool($proinfo,'104',$proinfo);
		
	}
	
	/**
	 *  增减当前项目人员
	 */
	public function saveLocProUser($pid,$aryUser,$ProUserHave){
		
		$new = array ();
		
		foreach ( $ProUserHave as $key => $value ) {
			
			if (! in_array ( $ProUserHave [$key] ['Cuserid'], $aryUser )) {
		
				// 不存在,已删除此用户
				$save ['p_status'] = 1;
				$save ['p_handle_user'] = session ( 'uid' );
				$save ['P_handle_time'] = this_time ();
		
				$where ['p_user_id'] = $ProUserHave [$key] ['Cuserid'];
				$where ['p_id'] = $pid;
					
				$this->where ( $where )->save ( $save );
			}
			$new [] = $ProUserHave [$key] ['Cuserid'];
		}
		
		foreach ( $aryUser as $k => $v ) {
			if (! in_array ( $aryUser [$k], $new )) {
		
				// 新添加用户
				$add ['p_status'] = 0;
				$add ['p_handle_user'] = session ( 'uid' );
				$add ['P_handle_time'] = this_time ();
				$add ['p_user_id'] = $aryUser [$k];
				$add ['p_id'] = $pid;
		
				$this->add ( $add );
			}
		}
		
	}
	
	/**
	 *  用户是否存在项目中
	 */
	public function checkUserExitPro($pid,$uid){
		return $this->where("p_id = '{$pid}' and p_user_id = '{$uid}' and p_status = 0")->find();
	}
	
}
