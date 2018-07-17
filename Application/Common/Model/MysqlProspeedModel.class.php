<?php
namespace Common\Model;
use Think\Model;
use Think\Log;

class MysqlProspeedModel extends Model {

    protected $trueTableName = 'pro_speed_record';
    
    /**
   	 *  向项目进度表添加项目进度记录
   	 *  @author:liweilong
   	 */
    public function add_progress($data){
      
        return $this->data($data)->add();
    }

    
    /**
     *  项目进度列表
     *  @author:liweilong
     */
    public function select_project_progress($c_pid){
        $where['c_pid']=array('EQ',$c_pid);
        return $this->where($where)->order('p_time desc')->select();
    }
    
    
    /**
     *  查询实际开工状态是否设置
     *  @author:liweilong
     */
    public function select_start_type($c_pid){
        $where['c_pid']=array('EQ',$c_pid);
        $where['p_type']=array('EQ',1);
        return $this->field('p_time')->where($where)->find();
    }
    
    
    
    /**
     *  查询实际实施状态是否设置
     *  @author:liweilong
     */
    public function select_imple_type($c_pid){
        $where['c_pid']=array('EQ',$c_pid);
        $where['p_type']=array('EQ',2);
        return $this->field('p_time')->where($where)->find();
    }
    
    /**
     *  查询实际收尾状态是否设置
     *  @author:liweilong
     */
    public function select_closeout_type($c_pid){
        $where['c_pid']=array('EQ',$c_pid);
        $where['p_type']=array('EQ',3);
        return $this->field('p_time')->where($where)->find();
    }
    
    /**
     *  查询实际验收状态是否设置
     *  @author:liweilong
     */
    public function select_check_type($c_pid){
        $where['c_pid']=array('EQ',$c_pid);
        $where['p_type']=array('EQ',4);
        return $this->field('p_time')->where($where)->find();
    }
    
    
}