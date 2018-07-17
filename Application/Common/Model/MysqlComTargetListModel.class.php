<?php
namespace Common\Model;

use Think\Model;
use Think\Log;

/**
 * 
 * @author huajie <banhuajie@163.com>
 */
class MysqlComTargetListModel extends Model {
    
	protected $trueTableName = 'com_target_list';
	
	
	
	/**
	 *  com_target_list
	 *  获取所有公司业绩目标总和
	 */
	public function select_target_sum($cid,$year){
	    if($cid!=''){
	        $map['c_id']=array('EQ',$cid);
	    }
	    if($year!=''){
	       
			if($year!='year'){
				$m=explode('-', $year);
	        
				$year=$m[0];
	          
				$map['c_year']=array('EQ',$year);
			}

	        
	    }else{
	        $year=date("Y",time());  //今年

			//print_r($year);
			//exit;

	        $map['c_year']=array('EQ',$year);
	    }
	     return $this->where($map)->sum('d_money');	
		
		//print_r($this->getLastSql());

	}
	
	
	
    
   	/**
   	 *  获取公司指定年份目标与业绩
   	 *  @param $cid 公司id
   	 *  @param $year 年
   	 *  @author zhangwenqiang
   	 *  @time 2016年6月14日15:23:24
   	 */
	public function getComAppInfo($cid,$year){
		return $this->where(array('c_id'=>$cid,'c_year'=>$year))->find();	
	}
	
	
	
	/**
	 *  添加公司业绩目标前查重
	 *  @author:liweilong
	 */
	public function checktarget($info){
	    $where['c_id']=array('EQ',$info['c_id']);
	    $where['c_year']=array('EQ',$info['c_year']);
	    return $this->where($where)->count();
	}
	
	
	/**
	 *  添加公司目标
	 */
	public function addComTatgetInfo($info){
		return $this->add($info);
	}
	
	/**
	 *  设置公司业绩
	 */
	public function setComEment($id,$money){
		return $this->where(array('n_id'=>$id))->save(array('d_complete_money'=>$money));
	}



}