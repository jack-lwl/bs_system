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
 * 用户模型
 * @author huajie <banhuajie@163.com>
 */

class OraProjectModel extends Model {
	
	protected $trueTableName = 'bd_jobbasfil';
	
	public $connection = 'Oracle://QHZS:qhzs@58.83.244.40:1521/(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 58.83.244.40)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))';
	
	public function getJobbasfil(){
		
		//return M('')->query("select * from bd_jobbasfil");
		
		return $this->field('pk_jobbasfil,jobcode,jobname,ts')->select();
	
	}
	
	//根据项目编码查出项目id
	public function select_pro_id($jobcode){
	    
		 return $this->field('PK_JOBBASFIL')->where("JOBCODE='{$jobcode}'")->find();
	}
	
	
	
	
	
}
