<?php
namespace Common\Model;
use Think\Model;
use Think\Log;

/**
 * 项目移交表
 *  @author:liweilong
 */

class MysqlProtransModel extends Model {

    protected $trueTableName = 'pro_transfer_doc';

    /**
     *  向 项目移交表中添加数据
     *  @author:liweilong
     */
    public function add_projecttrans($data){
        // print_r($this->TableName);
        return $this->add($data);
        //echo $this->getLastSql();
    }
    
    /**
     *  查看项目移交
     *  @author:liweilong
     */
    public function select_protrans($id){
        $map['c_pid']=array('EQ',$id);
        return $this->where($map)->select();
    }

}