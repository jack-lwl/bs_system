<?php
namespace Common\Model;

use Think\Model;
use Think\Log;

/**
 * 一级标签模型
 *
 * @author liweilong
 */
class MysqlFirtagModel extends Model {
    protected $trueTableName = ' pro_first_tag';
    
    /**
     * 查询所有一级标签
     * @author:liweilong
     */
    public function select_first_tag(){
        $where['c_states']=array('EQ',1);  //未被删除
        return $this->where($where)->select();
    }
    
    /**
     * 新建一级标签
     * @author:liweilong
     */
    public function add_first_tag($data){
        
        return $this->data($data)->add();
        
    }
    
    /**
     * 删除一级标签
     * @author:liweilong
     */
    public function del_first_tag($id){
        $where['n_id']=array('EQ',$id);
        $data['c_states']=0;
        return $this->where($where)->data($data)->save();
    }
    
    
    /**
     * 查询某个一级标签（用于修改前赋值）
     * @author:liweilong
     */
    public function select_one_first_tag($id){
        $where['n_id']=array('EQ',$id);
        return $this->where($where)->find();
    }
    
    
}