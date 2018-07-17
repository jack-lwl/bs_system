<?php
namespace Common\Model;
use Think\Model;
use Think\Log;

class MysqlProbudgetModel extends Model {

    protected $trueTableName = 'pro_budget';

    
    	/**
   	 *  查出某项目费用明细
   	 *  @author:liweilong
   	 */
   	public function select_pro_budget($p_id){
        $where['c_pid']=array('EQ',$p_id);
        return $this->where($where)->select();
        //->order('p_time desc')
    }
    
    /**
     *  添加项目预算
     *  @author:liweilong
     */
    public function add_pro_budget($data){
        return $this->data($data)->add();
    }
    
    /**
     *  查出某项的预算费用
     *  @author:liweilong
     */
    public function select_budget($data){
        $where['c_pid']=array('EQ',$data['c_pid']);
        $where['c_type']=array('EQ',$data['c_type']);
	    return $this->field('f_money')->where($where)->select();
    }
    
    
    /**
     *  修改项目概算
     *  @author:liweilong
     */
    public function updata_pro_budget($data){
        $where['c_pid']=array('EQ',$data['c_pid']);
        $where['c_type']=array('EQ',$data['c_type']);
	    
	    $map['f_money']=$data['f_money'];
	    $map['c_uid']=$data['c_uid'];
	    $map['dt_time']=$data['dt_time'];
	  	    
	    return $this->where($where)->save($map);
    }
    
    
}