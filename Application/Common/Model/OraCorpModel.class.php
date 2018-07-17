<?php
namespace Common\Model;
use Think\Model;
use Think\Log;

/**
 * 公司目录表
 * @author liweilong
 */

class OraCorpModel extends Model {
    
    protected $trueTableName = 'bd_corp';
    
   public $connection = 'Oracle://QHZS:qhzs@58.83.244.40:1521/(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 58.83.244.40)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))';
    
    //查出所有公司id
    public function select_com(){
        return $this->field('PK_CORP')->select();     
    }
    
    //根据公司id查出公司名
    public function select_com_name($uid){
        $where['PK_CORP']=array('EQ',$uid);
        return $this->field('UNITSHORTNAME')->where($where)->select();
    }
    
    
    
}