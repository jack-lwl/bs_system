<?php
namespace Common\Model;

use Think\Model;
use Think\Log;

/**
 * 
 * @author huajie <banhuajie@163.com>
 */
class MysqlPostionModel extends Model {
    protected $trueTableName = 'u_postion';
    
    
    /**
     *  u_postion
     *  从 职位表中查询数据
     *  得到数据总数
     *  @author:liweilong
     */
    public function select_postion_total($str){
    
        $data['p_name']=array('like',"%{$str}%");  //职位名
        
        
         $data['_logic']='or';  //tp中where条件默认为and，此处声明or
         $map['_complex'] = $data;  //or之后再and
    
         $map['p_del']=array('EQ',0);  //未删除
         /*
         $map['c_time']=array('between',array($start_time,$stop_time));
        */
         
        return $this->where($map)->count();
    }
    
    /**
     *  u_member
     *  从 职位表中查询数据
     *  得到数据
     *  @author:liweilong
     */
    public function select_postion($page,$str,$per){
    
        $start=($page-1)*$per;
         $data['p_name']=array('like',"%{$str}%");  //职位名
         
         $data['_logic']='or';  //tp中where条件默认为and，此处声明or
         $map['_complex'] = $data;  //or之后再and
         
         $map['p_del']=array('EQ',0);  //未删除
    
    
        return $this->where($map)->limit("$start, $per")->select();
        //echo $this->getLastSql();
    }







}