<?php


namespace Wap\Model;
use Think\Model;
use Think\Log;

/**
 * b_sale_record
 * 业务售前记录表 
 *  @author:liweilong
 */

class SaleRecordModel extends Model {
    
    protected $trueTableName = 'b_sale_record';
   
    /**
     *  b_sale_record
     *  从 业务售前记录表中查询数据
     *  @author:liweilong
     */
    public function select_sale_record($c_id,$c_type,$str){

            $data['b_sale_record.c_source']=array('like',"%{$str}%");  //款源
            $data['b_sale_record.p_name']=array('like',"%{$str}%");  //项目名称
            $data['b_sale_record.f_money']=array('like',"%{$str}%");  //金额
            $data['b_sale_record.c_success']=array('like',"%{$str}%"); //成功率
             
            $data['_logic']='or';  //tp中where条件默认为and，此处声明or
            $map['_complex'] = $data;  //or之后再and
            $map['b_sale_record.c_corp']=array('EQ',$c_id);
      
        
        return $this->field('n_id,p_name,c_success,s_success_money,c_time,c_corp,str_user,c_source')->where($map)->order('c_time asc')->select();
        
       // field ( 'str_user_id,str_user_name,str_tel,str_email,str_password,dt_create,n_user_right' )
        //echo $this->getLastSql(); ->join("LEFT JOIN quickhigh_tpc.u_member on b_sale_record.c_uid = u_member.Cuserid")
    }
    
    
   
    
}