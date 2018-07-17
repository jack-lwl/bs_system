<?php
namespace Common\Model;
use Think\Model;
use Think\Log;

class MysqlPaymentModel extends Model {
    
    protected $trueTableName = 'pro_payment_info';
    
    /**
     *  导入回款额
     *  @author:liweilong
     */
    public function save_moeny($p_id,$money){
         $where['c_pid']=array('EQ',$p_id);
         $data['p_money']=$money;
	     return $this->where($where)->save($data);
    }
    
/**
     *  
     *  导入数据到回款记录表中
     * 
     *  @author:liweilong
     */
    public function payment_excel($ary,$c_uid,$d_time){
         
        // $where['Jobname']=array('EQ',$ary['Jobname']);
         $data['p_money']=$ary['p_money'];
         $data['p_time']=$ary['p_time'];
         $data['c_pid']=$ary['c_pid'];
         $data['p_remark']=$ary['p_remark'];
         $data['c_uid']=$c_uid;
         $data['d_time']=$d_time;
        return $this->data($data)->add();
    }
    
    /**
     *  根据项目id查汇款记录
     *  @author:liweilong
     */
    public function select_payment($c_pid){
        $where['c_pid']=array('EQ',$c_pid);
        $where['state']=array('EQ',2);
        return $this->where($where)->order('p_time desc')->select();
    }
    
    /**
     *  向回款记录表记录表
     * 中添加数据
     *  @author:liweilong
     */
    public function add_payment($data){
        return $this->data($data)->add();
    }
    
    /**
     *  回款记录表记录表
     *  根据时间段查出金额
     *  @author:liweilong
     */
    public function select_payment_all($StartTime,$EndTime){
        if($StartTime!='' && $EndTime!=''){
            $where['p_time']=array('between',array($StartTime,$EndTime));
        }
        
        $where['state']=array('EQ',2);
        return $this->field('p_money')->where($where)->select();
    }
    
    
    /**
     *  回款记录表记录表
     *  查出项目下的回款记录
     *  @author:liweilong
     */
    public function select_payment_JL($c_pid){
        $where['c_pid']=$c_pid;
        $where['state']=array('EQ',2);
        return $this->where($where)->select();
    }
    
    
    /**
     *  回款记录表记录表
     *  查出项目下的回款计划
     *  @author:liweilong
     */
    public function select_payment_JH($c_pid){
        $where['c_pid']=$c_pid;
        $where['state']=array('EQ',1);
        return $this->where($where)->select();
    }
    
    /**
     *  回款记录表记录表
     *  计划回款总额
     *  @author:liweilong
     */
    public function select_payment_JH_sum($c_pid){
        $where['c_pid']=$c_pid;
        $where['state']=array('EQ',1);
        return $this->where($where)->sum('p_money');
    }
    
    /**
     *  回款记录表记录表
     *  计划实际总额
     *  @author:liweilong
     */
    public function select_payment_SJ_sum($c_pid){
        $where['c_pid']=$c_pid;
        $where['state']=array('EQ',2);
        return $this->where($where)->sum('p_money');
    }
    
}