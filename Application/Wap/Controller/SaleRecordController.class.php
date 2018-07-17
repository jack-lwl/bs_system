<?php

namespace Wap\Controller;
use Think\Controller;
use Common\API\OracleApi;
use Common\API\MysqlApi;
use Wap\Model\ProUserModel;
use Wap\Model\SaleRecordModel;
use Wap\Model\CorpModel;
use Wap\Model\UserModel;
use Think\Log;
use Think\Crypt\Driver\Base64;

class SaleRecordController extends BaseController {
    
    /*
     * session:
     * Array
            (
                [quickhigh_admin] => Array
                    (
                        [uid] => 1001R81000000000012K
                        [name] => 鞠国
                        [cid] => 3 
                    )
            
            )
     */
	
    
    
  
    /**
     *  b_sale_record
     *  从 业务售前记录表中查询数据
     *  查出某个公司的业务
     *  @author:liweilong
     */
    public function select_sale_record(){
     
        $post = $this->data;
        
        $str=$post['searchPhrase'];  //前台post过来搜索所需字符串str
        if(empty($str)){
            $str='';
        }
       
        $c_id=$post['cid']; //公司id
        $c_type=1;  //状态
        
        
        $api = new MysqlApi();
        $r=new SaleRecordModel();
        //校验当前用户是否拥有 业务售前记录表中查看本公司数据的权限
        $uid=$_SESSION['uid']; //当前登录用户id='1001R81000000000012K'
        
        if(!$api->CheckUserHaveAuth($uid,ComPS)){
            //查看是否具有个人特殊权限
            if(!$api->Check_User_special($uid,ComPS)){
                //$this->error('您未拥有此权限');
              print_r(CheckLogicBool(false,'105'));  
              $this->ajaxReturn(CheckLogicBool(false,'105'));
            }
        
        }
  
        $res=$r->select_sale_record($c_id,$c_type,$str);  //得到数据
        
    
        //循环加编号，公司名
        foreach($res as $k=>$v){
    
            $str = $v['c_success'];
            $res[$k]['c_success'] = substr($str,0,strlen($str)-1);
 
             //根据公司id查出所有公司名
            $c=new CorpModel();
           
            $com=$c->select_com_name($v['c_corp']);
            $res[$k]['c_name']=$com[0]['c_name'];
            
            
            //取出跟踪负责人id，将其拆开，并查出对应名称
            $s=new UserModel();
            $temp = explode(',',$res[$k]['str_user']);
            // print_r($temp);
           
            foreach($temp as $n=>$m){
                //根据人员id查出人名
                $r=$s->select_name($m);
                //print_r($r);
                $res[$k]['salesman'][$n]['salesman_name']=$r[0]['user_name'];
                $res[$k]['salesman'][$n]['salesman_id']=$m;
                $res[$k]['salesman'][$n]['salesman_head']='';
            }
           
        }
        
        $data=$res;
        
       $this->ajaxReturn(CheckLogicBool($res,'104', $data));
        
    }
    
    //查出所有公司id和公司名
    public function select_company(){
         
       $res = new CorpModel();
       $data=$res->select_company();
       //print_r(CheckLogicBool($data,'104', $data));
       $this->ajaxReturn(CheckLogicBool($data,'104', $data));
    
    }
    
    
}