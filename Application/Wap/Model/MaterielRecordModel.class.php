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
 *  物料单记录模型
 *  @author huajie <banhuajie@163.com>
 */

class MaterielRecordModel extends Model {
	
	protected $trueTableName = 'm_record';
	
	/**
	 *  记录物料但操作状态
	 */
	public function recordMStatus($m_mid,$m_proid,$m_status,$uid){
		
		$data['m_mid'] = $m_mid;
		
		$data['m_proid'] = $m_proid;
		
		$data['m_status'] = $m_status;
		
		$data['m_user'] = $uid;
		
		$data['m_time'] = this_time();
		
		return $this->add($data);
		
	}
	
	
	
}
