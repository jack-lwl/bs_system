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
 * @author huajie <banhuajie@163.com>
 */

class OraUserModel extends Model {
	
	protected $trueTableName = 'bd_psnbasdoc';
	
	public $connection = 'Oracle://QHZS:qhzs@58.83.244.40:1521/(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 58.83.244.40)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))';
	
	public function getUserAll(){
		return $this->field('pk_psnbasdoc,mobile,psnname')->select();
	}
    
}