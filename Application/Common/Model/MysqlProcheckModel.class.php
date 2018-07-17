<?php
namespace Common\Model;
use Think\Model;
use Think\Log;

/**
 * pro_contract_info
 * 项目验收表
 *  @author:liweilong
 */

class MysqlProcheckModel extends Model {

    protected $trueTableName = 'pro_check_doc';

    /**
     *  向 项目启动表中添加数据
     *  @author:liweilong
     */
    public function add_projectcheck($data){
        // print_r($this->TableName);
        return $this->add($data);
        //echo $this->getLastSql();
    }
    
    /**
     *  项目启动，列表
     *  @author:liweilong
     */
    public function select_procheck($id){
        $map['c_pid']=array('EQ',$id);
        return $this->where($map)->select();
    }

}