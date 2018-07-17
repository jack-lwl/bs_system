<?php
namespace Common\Model;

use Think\Model;
use Think\Log;

/**
 * 项目计划模型
 *
 * @author liweilong
 */
class MysqlProplanModel extends Model {
    protected $trueTableName = 'pro_plan';
    
    /**
     * 查询项目计划
     * @author:liweilong
     */
    public function select_pro_plan($id){
        
        $where['c_pid']=array('EQ',$id);
        $where['c_states']=1;
        
        return $this->where($where)->select();
    }
    
    
    
    /**
     * 新建项目计划
     * @author:liweilong
     */
    public function add_pro_plan($data){
         return $this->data($data)->add();
    }
    
    /**
     * 查出某条项目计划（用于修改前赋值）
     * @author:liweilong
     */
    public function select_one_proplan($id){
         $where['n_id']=array('EQ',$id);
         return $this->where($where)->find();
    }
    
    /**
     * 修改项目计划
     * @author:liweilong
     */
    public function update_proplan($id,$data){
         $where['n_id']=array('EQ',$id);
        return $this->where($where)->data($data)->save();
    }
    
    /**
     * 删除项目计划
     * @author:liweilong
     */
    public function del_pro_plan($id){
        $where['n_id']=array('EQ',$id);
        $data['c_states']=1;
        return $this->where($where)->data($data)->save();
    }
    
}