<?php
namespace Common\Model;
use Think\Model;
use Think\Log;

/**
 * pro_contract_info
 * 项目合同表
 *  @author:liweilong
 */

class MysqlContractModel extends Model {

    protected $trueTableName = 'pro_contract_info';

    /**
     *  向 项目合同表中添加数据
     *  @author:liweilong
     */
    public function add_contract($data){
        // print_r($this->TableName);
        return $this->add($data);
        //echo $this->getLastSql();
    }
    
    /**
     *  查看项目合同
     *  @author:liweilong
     */
    public function select_contract($id){
        $map['c_pid']=array('EQ',$id);
        return $this->where($map)->select();
    }

}