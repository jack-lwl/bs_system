<?php
namespace Wap\Model;
use Think\Model;
use Think\Log;

/**
 * 公司目录表
 * @author liweilong
 */

class CorpModel extends Model {
    
    protected $trueTableName = 'com_list';
    
    
    //查出所有公司id
    public function select_com(){
        return $this->field('c_id')->select();
         
    }
    
    
    //根据公司id查出公司名
    public function select_com_name($uid){
        $where['c_id']=array('EQ',$uid);
        return $this->field('c_name')->where($where)->select();
         
    }
    
    
    
    
    //查出所有公司id和公司名
    public function select_company(){
             
          return $this->field('c_id,c_name')->select();
                  
    }
    
    
}