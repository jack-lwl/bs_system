<?php


namespace Common\Model;
use Think\Model;
use Think\Log;

/**
 * b_sale_record
 * 业务售前记录表 
 *  @author:liweilong
 */

class MysqlSaleRecordModel extends Model {
    
    protected $trueTableName = 'b_sale_record';
    /**
     *  b_sale_record
     *  向 业务售前记录表中添加数据
     *  @author:liweilong
     */
    public function add_sale_record($data){
       // print_r($this->TableName);
        return $this->add($data);
        //echo $this->getLastSql();
    }
    
    
    /**
     *  b_sale_record
     *  向 业务售前记录表中添加数据
     *  前进行姓名验重
     *  @author:liweilong
     */
    public function check_sale_record_name($p_name){
        $map['p_name']=array('EQ',$p_name);
        return $this->where($map)->count();
    }
    
    /**
     *  b_sale_record
     *  从 业务售前记录表中查询数据
     *  获取数据总数
     *  @author:liweilong
     */
    public function select_sale_record_total($c_id,$c_type,$money,$c_ok_time,$c_rm_time,$c_success){
        
        if($c_type!=''){
            $map['c_type']=array('EQ',$c_type);
        }
        
      
        if($money!=''){
            $str=strpos($money,'~');
            if ($str){
                $m=explode('~', $money);
                $min_money=$m[0];
                $max_money=$m[1];
                $map['f_money']=array('between',array($min_money,$max_money));
            }else{
                if(strpos($money,'x')){
                    $money=substr($money, 0, -1); //去掉最后一个字符
                    $map['f_money']=array('LT',$money);
                }
                if(strpos($money,'d')){
                    $money=substr($money, 0, -1); //去掉最后一个字符
                    $map['f_money']=array('GT',$money);
                }
            }
        }
            
            if($c_ok_time!=''){
                $str=strpos($c_ok_time,'~');
                if ($str){
                    $m=explode('~', $c_ok_time);
                    $min_ok_time=$m[0] . '-00';
                    $max_ok_time=$m[1] . '-00'; 
                    $map['c_ok_time']=array('between',array($min_ok_time,$max_ok_time));
                }else {
                    if(strpos( $c_ok_time,'x')){
                        $money=substr($c_ok_time, 0, -1); //去掉最后一个字符
                        $map['c_ok_time']=array('ELT',$c_ok_time);
                    }
                    if(strpos( $c_ok_time,'d')){
                        $money=substr($c_ok_time, 0, -1); //去掉最后一个字符
                        $map['c_ok_time']=array('EGT',$c_ok_time);
                    }
                }
            } 
                
                if($c_rm_time!=''){
                                       
                    if($c_rm_time=="year"){
                        $year=date("Y",time());  //今年
                    
                        $begin=$year . '-00-00';
                        $stop=($year+1) . '-00-00';
                         
                        $map['c_time']=array('between',array($begin,$stop));
                    }else{
                        $str=strpos($c_rm_time,'~');
                        if ($str){
                            $m=explode('~', $c_rm_time);
                            $min_rm_time=$m[0] . '-00';
                            $max_rm_time=$m[1] . '-00';
                            $map['c_time']=array('between',array($min_rm_time,$max_rm_time));
                        }else {
                            if(strpos($c_rm_time,'x')){
                                $money=substr($c_rm_time, 0, -1); //去掉最后一个字符
                                $map['c_time']=array('ELT',$c_rm_time);
                            }
                            if(strpos($c_rm_time,'d')){
                                $money=substr($c_rm_time, 0, -1); //去掉最后一个字符
                                $map['c_time']=array('EGT',$c_rm_time);
                            }
                        }
                    }
        
                }
              
                if($c_success!=''){
                    //$map['c_success']=array('EQ',$c_success);
                    $str=strpos($c_success,'~');
                    if ($str){
                        $m=explode('~', $c_success);
                        $min_ok_time=$m[0];
                        $max_ok_time=$m[1];
                        $map['c_success']=array('between',array($min_ok_time,$max_ok_time));
                    }else {
                        if(strpos( $c_success,'x')){
                            $money=substr($c_success, 0, -1); //去掉最后一个字符
                            $map['c_success']=array('LT',$c_success);
                        }
                        if(strpos( $c_success,'d')){
                            $money=substr($c_success, 0, -1); //去掉最后一个字符
                            $map['c_success']=array('GT',$c_success);
                        }
                    }
                  }
                  
                if($c_id!=''){
                    $map['c_corp']=array('EQ',$c_id);
                  } 
     
               
        return $this->where($map)->count();
    }
    
    /**
     *  b_sale_record
     *  从 业务售前记录表中查询数据
     *  @author:liweilong
     */
    /*
    public function select_sale_record($c_id,$c_type,$page,$str,$per,$start_time,$stop_time){
        
        $start=($page-1)*$per;
        
        if($start_time!='' && $stop_time!=''){
            $data['c_source']=array('like',"%{$str}%");  //款源
            $data['p_name']=array('like',"%{$str}%");  //项目名称
            $data['f_money']=array('like',"%{$str}%");  //金额
            $data['c_success']=array('like',"%{$str}%"); //成功率
             
            $data['_logic']='or';  //tp中where条件默认为and，此处声明or
            $map['_complex'] = $data;  //or之后再and
            
            //$map['c_corp']=array('EQ',$c_id);
            $map['c_type']=array('EQ',$c_type);
            $map['c_time']=array('between',array($start_time,$stop_time));
            
            if($c_id!==''){
                $map['c_corp']=array('EQ',$c_id);
               // return $this->where($map)->limit("$start, $per")->group('c_corp')->select();
            }
            
           // return $this->where($map)->limit("$start, $per")->select();
        }else{
            
            $data['c_source']=array('like',"%{$str}%");  //款源
            $data['p_name']=array('like',"%{$str}%");  //项目名称
            $data['f_money']=array('like',"%{$str}%");  //金额
            $data['c_success']=array('like',"%{$str}%"); //成功率
             
            $data['_logic']='or';  //tp中where条件默认为and，此处声明or
            $map['_complex'] = $data;  //or之后再and
            //$map['c_corp']=array('EQ',$c_id);
            $map['c_type']=array('EQ',$c_type);
            
            if($c_id!==''){
                $map['c_corp']=array('EQ',$c_id);
              //  return $this->where($map)->limit("$start, $per")->group('c_corp')->select();
            }
            
          //  return $this->where($map)->limit("$start, $per")->select();
        }
        
        return $this->join("LEFT JOIN quickhigh_tpc.u_member on b_sale_record.c_uid = u_member.Cuserid")->where($map)->limit("$start, $per")->select();
        //echo $this->getLastSql();
    }
  */  
    
    /**
     *  b_sale_record
     *  从 业务售前记录表中查询数据
     *  @author:liweilong
     */
    public function select_sale_record($c_id,$c_type,$money,$c_ok_time,$c_rm_time,$c_success){
    
        //$start=($page-1)*$per;
        if($c_type!=''){
            $map['c_type']=array('EQ',$c_type);
        }
                
        if($money!=''){
            $str=strpos($money,'~');
            if ($str){
                $m=explode('~', $money);
                $min_money=$m[0];
                $max_money=$m[1];
                $map['f_money']=array('between',array($min_money,$max_money));
            }else{
                if(strpos($money,'x')){
                    $money=substr($money, 0, -1); //去掉最后一个字符
                    $map['f_money']=array('LT',$money);
                }
                if(strpos($money,'d')){
                    $money=substr($money, 0, -1); //去掉最后一个字符
                    $map['f_money']=array('GT',$money);
                }
            }
        }
            
            if($c_ok_time!=''){
                $str=strpos($c_ok_time,'~');
                if ($str){
                    $m=explode('~', $c_ok_time);
                    $min_ok_time=$m[0] . '-00';
                    $max_ok_time=$m[1] . '-00';
                    $map['c_ok_time']=array('between',array($min_ok_time,$max_ok_time));
                }else {
                    if(strpos( $c_ok_time,'x')){
                        $money=substr($c_ok_time, 0, -1); //去掉最后一个字符
                        $map['c_ok_time']=array('ELT',$c_ok_time);
                    }
                    if(strpos( $c_ok_time,'d')){
                        $money=substr($c_ok_time, 0, -1); //去掉最后一个字符
                        $map['c_ok_time']=array('EGT',$c_ok_time);
                    }
                }
            } 
                
     if($c_rm_time!=''){
                                       
                    if($c_rm_time=="year"){
                        $year=date("Y",time());  //今年
                    
                        $begin=$year . '-00-00';
                        $stop=($year+1) . '-00-00';
                         
                        $map['c_time']=array('between',array($begin,$stop));
                    }else{
                        $str=strpos($c_rm_time,'~');
                        if ($str){
                            $m=explode('~', $c_rm_time);
                            $min_rm_time=$m[0] . '-00';
                            $max_rm_time=$m[1] . '-00';
                            $map['c_time']=array('between',array($min_rm_time,$max_rm_time));
                        }else {
                            if(strpos($c_rm_time,'x')){
                                $money=substr($c_rm_time, 0, -1); //去掉最后一个字符
                                $map['c_time']=array('ELT',$c_rm_time);
                            }
                            if(strpos($c_rm_time,'d')){
                                $money=substr($c_rm_time, 0, -1); //去掉最后一个字符
                                $map['c_time']=array('EGT',$c_rm_time);
                            }
                        }
                    }
        
                }
                
                if($c_success!=''){
                    
                    
                    $str=strpos($c_success,'~');
                    if ($str){
                        $m=explode('~', $c_success);
                        $min_ok_time=$m[0];
                        $max_ok_time=$m[1];
                        $map['c_success']=array('between',array($min_ok_time,$max_ok_time));
                    }else {
                        if(strpos( $c_success,'x')){
                            $money=substr($c_success, 0, -1); //去掉最后一个字符
                            $map['c_success']=array('LT',$c_success);
                        }
                        if(strpos( $c_success,'d')){
                            $money=substr($c_success, 0, -1); //去掉最后一个字符
                            $map['c_success']=array('GT',$c_success);
                        }
                    }
                    
                    
                    
                  }
                  
                if($c_id!=''){
                    $map['c_corp']=array('EQ',$c_id);
                  } 
               return $this->join("LEFT JOIN quickhigh_tpc.u_member on b_sale_record.c_uid = u_member.Cuserid")->where($map)->select();
                              
    }
    
    
    /**
     *  b_sale_record
     *  从 业务售前记录表中查询数据
     *  统计金额总和
     *  @author:liweilong
     */
    public function select_money_sum($c_id,$c_type,$money,$c_ok_time,$c_rm_time,$c_success){
    
      if($c_type!=''){
          $map['c_type']=array('EQ',$c_type);
      }
     
        
        if($money!=''){
            $str=strpos($money,'~');
            if ($str){
                $m=explode('~', $money);
                $min_money=$m[0];
                $max_money=$m[1];
                $map['f_money']=array('between',array($min_money,$max_money));
            }else {
                if(strpos($money,'x')){
                    $money=substr($money, 0, -1); //去掉最后一个字符
                    $map['f_money']=array('LT',$money);
                }
                if(strpos($money,'d')){
                    $money=substr($money, 0, -1); //去掉最后一个字符
                    $map['f_money']=array('GT',$money);
                }
            }
        }
            
            if($c_ok_time!=''){
                $str=strpos($c_ok_time,'~');
                if ($str){
                    $m=explode('~', $c_ok_time);
                    $min_ok_time=$m[0] .'-00';
                    $max_ok_time=$m[1] .'-00';
                    $map['c_ok_time']=array('between',array($min_ok_time,$max_ok_time));
                }else {
                    if(strpos( $c_ok_time,'x')){
                        $money=substr($c_ok_time, 0, -1); //去掉最后一个字符
                        $map['c_ok_time']=array('LT',$c_ok_time);
                    }
                    if(strpos( $c_ok_time,'d')){
                        $money=substr($c_ok_time, 0, -1); //去掉最后一个字符
                        $map['c_ok_time']=array('GT',$c_ok_time);
                    }
                }
            } 
                
    if($c_rm_time!=''){
                                       
                    if($c_rm_time=="year"){
                        $year=date("Y",time());  //今年
                    
                        $begin=$year . '-00-00';
                        $stop=($year+1) . '-00-00';
                         
                        $map['c_rm_time']=array('between',array($begin,$stop));
                    }else{
                        $str=strpos($c_rm_time,'~');
                        if ($str){
                            $m=explode('~', $c_rm_time);
                            $min_rm_time=$m[0] .'-00';
                            $max_rm_time=$m[1] .'-00';
                            $map['c_rm_time']=array('between',array($min_rm_time,$max_rm_time));
                        }else {
                            if(strpos($c_rm_time,'x')){
                                $money=substr($c_rm_time, 0, -1); //去掉最后一个字符
                                $map['c_rm_time']=array('LT',$c_rm_time);
                            }
                            if(strpos($c_rm_time,'d')){
                                $money=substr($c_rm_time, 0, -1); //去掉最后一个字符
                                $map['c_rm_time']=array('GT',$c_rm_time);
                            }
                        }
                    }
        
                }
                
                if($c_success!=''){
                    $str=strpos($c_success,'~');
                    if ($str){
                        $m=explode('~', $c_success);
                        $min_ok_time=$m[0];
                        $max_ok_time=$m[1];
                        $map['c_success']=array('between',array($min_ok_time,$max_ok_time));
                    }else {
                        if(strpos( $c_success,'x')){
                            $money=substr($c_success, 0, -1); //去掉最后一个字符
                            $map['c_success']=array('LT',$c_success);
                        }
                        if(strpos( $c_success,'d')){
                            $money=substr($c_success, 0, -1); //去掉最后一个字符
                            $map['c_success']=array('GT',$c_success);
                        }
                    }                    
                  }
                  
                if($c_id!=''){
                    $map['c_corp']=array('EQ',$c_id);
                  } 
                  
        return $this->where($map)->sum('f_money');
        //echo $this->getLastSql();
    }
    
    
    /**
     *  b_sale_record
     *  从 业务售前记录表中查询数据
     *  统计金额总和
     *  @author:liweilong
     */
    public function select_money_succe_sum($c_id,$c_type,$money,$c_ok_time,$c_rm_time,$c_success){
    
        if($c_type!=''){
            $map['c_type']=array('EQ',$c_type);
        }
        
    
        if($money!=''){
            $str=strpos($money,'~');
            if ($str){
                $m=explode('~', $money);
                $min_money=$m[0];
                $max_money=$m[1];
                $map['f_money']=array('between',array($min_money,$max_money));
            }else {
                if(strpos($money,'x')){
                    $money=substr($money, 0, -1); //去掉最后一个字符
                    $map['f_money']=array('LT',$money);
                }
                if(strpos($money,'d')){
                    $money=substr($money, 0, -1); //去掉最后一个字符
                    $map['f_money']=array('GT',$money);
                }
            }
        }
    
        if($c_ok_time!=''){
            $str=strpos($c_ok_time,'~');
            if ($str){
                $m=explode('~', $c_ok_time);
                $min_ok_time=$m[0] .'-00';
                $max_ok_time=$m[1] .'-00';
                $map['c_ok_time']=array('between',array($min_ok_time,$max_ok_time));
            }else {
                if(strpos( $c_ok_time,'x')){
                    $money=substr($c_ok_time, 0, -1); //去掉最后一个字符
                    $map['c_ok_time']=array('LT',$c_ok_time);
                }
                if(strpos( $c_ok_time,'d')){
                    $money=substr($c_ok_time, 0, -1); //去掉最后一个字符
                    $map['c_ok_time']=array('GT',$c_ok_time);
                }
            }
        }
    
                if($c_rm_time!=''){
                                       
                    if($c_rm_time=="year"){
                        $year=date("Y",time());  //今年
                    
                        $begin=$year . '-00-00';
                        $stop=($year+1) . '-00-00';
                         
                        $map['c_rm_time']=array('between',array($begin,$stop));
                    }else{
                        $str=strpos($c_rm_time,'~');
                        if ($str){
                            $m=explode('~', $c_rm_time);
                            $min_rm_time=$m[0] .'-00';
                            $max_rm_time=$m[1] .'-00';
                            $map['c_rm_time']=array('between',array($min_rm_time,$max_rm_time));
                        }else {
                            if(strpos($c_rm_time,'x')){
                                $money=substr($c_rm_time, 0, -1); //去掉最后一个字符
                                $map['c_rm_time']=array('LT',$c_rm_time);
                            }
                            if(strpos($c_rm_time,'d')){
                                $money=substr($c_rm_time, 0, -1); //去掉最后一个字符
                                $map['c_rm_time']=array('GT',$c_rm_time);
                            }
                        }
                    }
        
                }
    
        if($c_success!=''){
            $str=strpos($c_success,'~');
                    if ($str){
                        $m=explode('~', $c_success);
                        $min_ok_time=$m[0];
                        $max_ok_time=$m[1];
                        $map['c_success']=array('between',array($min_ok_time,$max_ok_time));
                    }else {
                        if(strpos( $c_success,'x')){
                            $money=substr($c_success, 0, -1); //去掉最后一个字符
                            $map['c_success']=array('LT',$c_success);
                        }
                        if(strpos( $c_success,'d')){
                            $money=substr($c_success, 0, -1); //去掉最后一个字符
                            $map['c_success']=array('GT',$c_success);
                        }
                    }
        }
    
        if($c_id!=''){
            $map['c_corp']=array('EQ',$c_id);
        }
    
        return $this->where($map)->sum('s_success_money');
        //echo $this->getLastSql();
    }
    
    
    
    
    /**
     *  b_sale_record
     *  从 业务售前记录表中查询数据
     *  统计金额总和
     *  @author:liweilong
     */
    public function select_success_money_sum($com_id){
       
        $map['c_corp']=array('EQ',$com_id);
              
        return $this->where($map)->sum('s_success_money');
        //echo $this->getLastSql();
    }
    
    
    /**
     *  b_sale_record
     *  修改 业务售前记录表中的数据
     *  @author:liweilong
     */
    public function updata_sale_record($n_id,$data){
        $map['n_id']=array('EQ',$n_id);
        //$data['c_type']=array('EQ',1);
        return $this->where($map)->save($data);
    }
    
    /**
     *  b_sale_record
     *  检查项目名是否为自身
     *  @author:liweilong
     */
    
    public function check_name_success($n_id){
        $map['n_id']=array('EQ',$n_id);
         return $this->field('p_name,c_success,f_money')->where($map)->select();
    
    }
    

    /**
     *  b_sale_record
     *  从 业务售前记录表中查询某一条数据，供修改前取出原始值用
     *  @author:liweilong
     */
    public function select_one_sale_record($n_id){
        $map['n_id']=array('EQ',$n_id);
        return $this->where($map)->select();
    }
    
    
    /**
     *  b_sale_record
     *  校验待修改业务是否是本公司的业务
     *  @author:liweilong
     */
    
    public function Check_com_sale_record($n_id,$c_corp){
         $map['n_id']=array('EQ',$n_id);
         $map['c_corp']=array('EQ',$c_corp);
         return $this->where($map)->count();
    }
    
}