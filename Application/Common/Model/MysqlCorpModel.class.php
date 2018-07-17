<?php
namespace Common\Model;
use Think\Model;
use Think\Log;

/**
 * 公司目录表
 * @author liweilong
 */

class MysqlCorpModel extends Model {
    
    protected $trueTableName = 'com_list';
    
    //public $connection = 'Oracle://QHZS:qhzs@192.168.0.211:1521/(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.0.211)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))';
    
    //查出所有公司id
    public function select_com(){
        return $this->field('c_id')->select();
         
    }
    
    
    //根据公司id查出公司名
    public function select_com_name($uid){
        $where['c_id']=array('EQ',$uid);
        return $this->field('c_name')->where($where)->select();
         
    }
    
    
    //得到公司总数
    public function select_com_total($str){
        
        $data['c_name']=array('like',"%{$str}%");  //公司名搜索
        return $this->where($data)->count();
         
    }
    
    
    //查出所有公司id和公司名
    public function select_company($page,$str,$per,$c_id){
        $start=($page-1)*$per;
        $data['c_name']=array('like',"%{$str}%");  //公司名搜索
        if($c_id==''){
            return $this->field('c_id,c_name')->where($data)->limit("$start, $per")->select();
        }else{
            $data['c_id']=array('EQ',$c_id);  
            return $this->field('c_id,c_name')->where($data)->limit("$start, $per")->select();
        }
            
    
    }
    
    //根据公司名查出公司id
    public function select_com_id($com_name){
        $where['c_name']=array('EQ',$com_name);
        return $this->field('c_id')->where($where)->select();
         
    }
    
    
}