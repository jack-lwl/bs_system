<?php
namespace Common\Model;

use Think\Model;
use Think\Log;

/**
 * 二级标签模型
 *
 * @author liweilong
 */
class MysqlSectagModel extends Model {
    protected $trueTableName = ' pro_second_tag';
    
    /**
     * 查询所有二级标签
     * @author:liweilong
     */
    public function select_second_tag(){
        $where['c_states']=array('EQ',1);  //未被删除
        return $this->where($where)->select();
    }
    
    /**
     * 新建二级标签
     * @author:liweilong
     */
    public function add_second_tag($data){
    
        return $this->data($data)->add();
    
    }
    
    /**
     * 删除二级标签
     * @author:liweilong
     */
    public function del_second_tag($id){
        $where['n_id']=array('EQ',$id);
        $data['c_states']=0;
        return $this->where($where)->data($data)->save();
    }
    
    /**
     * 查询某个二级标签（用于修改前赋值）
     * @author:liweilong
     */
    public function select_one_second_tag($id){
        $where['n_id']=array('EQ',$id);
        return $this->where($where)->find();
    }
    
    /**
     * 修改二级标签
     * @author:liweilong
     */
    public function update_second_tag($id,$data){
        $where['n_id']=array('EQ',$id);
        return $this->where($where)->data($data)->save();
    }
    
    
    /**
     * 查询某个一级标签下的所有二级标签（未删除的）
     * @author:liweilong
     */
    public function select_last_second_tag($id){
        $where['high_level_id']=array('EQ',$id);
        $where['c_states']=array('EQ',1);  //未被删除
        return $this->where($where)->select();
    }
    
}