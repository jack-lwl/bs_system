<?php
namespace Common\Model;
use Think\Model;
use Think\Log;

class MysqlUptimeModel extends Model {

    protected $trueTableName = 'up_time';
    
    /**
     * 根据远程Oracle更新本地Mysql项目数据
     * 查出上次更新时间
     * @author:liweilong
     */
    public function select_update_time(){
        return $this->order('id desc')->limit(0)->select();
    }
    
    /**
     * 根据远程Oracle更新本地Mysql项目数据
     * 更新成功后记录更新时间
     * @author:liweilong
     */
    public function add_update_time($now){
        $data['up_time']=$now;
        return $this->data($data)->add();
    }
    
    
    
    
}