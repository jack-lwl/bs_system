<?php
namespace Common\Model;
use Think\Model;
use Think\Log;

class MysqlProcostModel extends Model {

    protected $trueTableName = 'pro_cost_info';

    
    	/**
   	 *  查出某项目费用明细
   	 *  @author:liweilong
   	 */
   	public function select_pro_cost($p_id){
        $where['c_pid']=array('EQ',$p_id);
        return $this->where($where)->select();
        //->order('p_time desc')
    }
    
}