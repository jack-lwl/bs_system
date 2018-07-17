<?php

namespace Common\Model;
use Think\Model;
use Think\Log;

/**
 * b_sale_save_record
 * 业务售前修改记录表
 *  @author:liweilong
 */

class MysqlSaleSaveRecordModel extends Model {
    
    protected $trueTableName = 'b_sale_save_record';
    
    /**
     *   b_sale_save_record
     *  向业务售前更改记录表中记录成功率和备注
     *  @author:liweilong
     */
    public function add_sale_save_record($c_success,$f_money,$str_remarks,$c_uid,$s_id){
        $data['s_id']=$s_id;
        if($c_success!=''){
            $data['c_success']=$c_success;
        }
        if($f_money!=''){
            $data['f_money']=$f_money;
        }
        $data['str_remarks']=$str_remarks;
        $data['s_user']=$c_uid;
        $data['s_time']=date("Y-m-d H:i:s",time());
        return $this->add($data);
    }
    
    
    /**
     *   b_sale_save_record
     *  从 业务售前更改记录表中查询某数据
     *  @author:liweilong
     */
    public function select_sale_save_record($s_id){
        $where['s_id']=array('EQ',$s_id);
        return $this->where($where)->order('s_time desc')->select();
    }
    
}