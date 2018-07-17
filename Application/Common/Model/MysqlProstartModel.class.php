<?php
namespace Common\Model;
use Think\Model;
use Think\Log;

/**
 * pro_contract_info
 * 项目启动表
 *  @author:liweilong
 */

class MysqlProstartModel extends Model {

    protected $trueTableName = 'pro_start_doc';

    /**
     *  向 项目启动表中添加数据
     *  @author:liweilong
     */
    public function add_projectstart($data){
        // print_r($this->TableName);
        return $this->add($data);
        //echo $this->getLastSql();
    }
    
    /**
     *  项目启动，列表
     *  @author:liweilong
     */
    public function select_prostart($id){
        $map['c_pid']=array('EQ',$id);
        return $this->where($map)->select();
    }

}