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
 *  职位模型
 *  @author huajie <banhuajie@163.com>
 */

class PostionModel extends Model {
	
	protected $trueTableName = 'u_postion';
	
	/**
	 *  获取拥有某权限的用户集合
	 */
	public function getHavePostionUserList($auth){
		
		$postionid = $this->field('postionId')->where("FIND_IN_SET({$auth},p_auth)")->select();
		
		$user = array();
		
		foreach ($postionid as $key => $value){
				
			$user[] = M('u_member')->field('Cuserid')->where("FIND_IN_SET(".$postionid[$key]['postionId'].",user_position)")->select();
				
		}

		return $user;
		
	}
	
	
}
