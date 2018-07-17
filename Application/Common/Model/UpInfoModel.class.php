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
 * 
 * 物料单上传记录
 * @author huajie <banhuajie@163.com>
 */
class UpInfoModel extends Model {

	protected $trueTableName = 'm_upInfo';
	

	/**
	 *  物料单上传信息
	 */
	public function upMaterielInfo($mid,$content,$uid){
		
		$data['m_id'] = $mid;
		
		$data['u_time'] = this_time();
		
		$data['u_content'] = serialize(array('type'=>0,'str_msg'=>$content));
		
		$data['u_userid'] = $uid;
		
		return $this->add($data);
		
	}
	
	
	
}
