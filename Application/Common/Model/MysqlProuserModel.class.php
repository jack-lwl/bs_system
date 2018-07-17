<?php
namespace Common\Model;
use Think\Model;
use Think\Log;

class MysqlProuserModel extends Model {

    protected $trueTableName = 'p_user';

    /**
     *  查出某人员所参与的项目
     *  @author:liweilong
     */
    public function select_user_pro($user_id){
        $where['p_user.p_user_id']=array('EQ',$user_id);
        $where['p_user.p_status']=array('EQ',0);
        return $this->join("LEFT JOIN quickhigh_tpc.p_projectinfo on p_user.p_id = p_projectinfo.p_id")->where($where)->select();
    }

    /**
     *  查出某项目下的人员
     *  @author:liweilong
     */
    public function select_pro_user($p_id){
        $where['p_user.p_id']=array('EQ',$p_id);
        $where['p_user.p_status']=array('EQ',0);
        return $this->join("LEFT JOIN quickhigh_tpc.u_member on p_user.p_user_id = u_member.Cuserid")->where($where)->select();
    }

}