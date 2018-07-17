<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: huajie <banhuajie@163.com>
// +----------------------------------------------------------------------

namespace Common\Model;
use Think\Model;
use Think\Log;

/**
 * 项目模型
 * @author huajie <banhuajie@163.com>
 */

class MysqlProjectModel extends Model {
	
	protected $trueTableName = 'p_projectinfo';
	
	/**
	 *  根据项目id获取项目信息
	 */
	public function getProInfo($pid){
		return $this->where("p_id = '%s'",array($pid))->find();
	}
	
	/**
	 *  重新添加项目
	 */
	public function addProject($data){
		return $this->add($data);
	}
	
	/**
	 *  修改项目信息
	 */
	public function saveProInfo($pid,$data){
		return $this->where("p_id = '%s'",array($pid))->save($data);
	}
	
	/**
	 *  获取所有项目
	 */
	public function getProjectAll(){
		return $this->select();
	}
	
	
	/**
	 *  增加项目执行人员
	 */
	public function addProUserinfo($data){
		return M('p_user')->add($data);
	}
	
	/**
	 *  获取项目执行人员,也可制定获取项目执行人员
	 */
	public function getProUserlist($pid,$type = 1,$uid = ''){
	
		if($type == 1){
			
			return M('p_user u')->field('m.Cuserid,m.user_name')->join("u_member m on u.p_user_id = m.Cuserid")->where("u.p_id = '%s' and u.p_status = 0 ",array($pid))->select();
			
		}else if($type == 2){

			return M('p_user u')->field('m.Cuserid,m.user_name')->join("u_member m on u.p_user_id = m.Cuserid")->where("u.p_id = '%s' and u.p_status = 0 and u.p_user_id = '%s'",array($pid,$uid))->select();
			
		}else if($type == 3){
			
			//删除该项目所有执行人员
			
			return M('p_user')->where("p_id = '%s'",array($pid))->delete();
			
		}
		
	}
	
	/**
	 *  项目名称搜索项目(模糊查询)
	 */
	public function getLikeProNameSearch($like){
		
		return $this->where("Jobname like '%{$like}%'")->select();
		
	}
	
	/**
   	 *  p_projectinfo
   	 *  从 项目主表表中查询数据
   	 *  得到数据总数
   	 *  @author:liweilong
   	 */
	public function select_project_total($Camount,$Begindate,$Pamount,$Jobname,$Com_id){
	if($Camount!=''){
	        $str=strpos($Camount,'~');
	        if ($str){
	            $m=explode('~', $Camount);
	            $min_money=$m[0];
	            $max_money=$m[1];
	            $map['Camount']=array('between',array($min_money,$max_money));
	        }else {
	            if(strpos($Camount,'x')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('LT',$Camount);
	            }
	            if(strpos($Camount,'d')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('GT',$Camount);
	            }
	        }
	    }
	
	    if($Begindate!=''){
	        
	        
	        if($Begindate=="year"){
	            $year=date("Y",time());  //今年
	             
	            $begin=$year . '-00-00';
	            $stop=($year+1) . '-00-00';
	            
	            $map['Begindate']=array('between',array($begin,$stop));
	        }else{
	            $str=strpos($Begindate,'~');
	            if ($str){
	                $m=explode('~', $Begindate);
	                $min_ok_time=$m[0];
	                $max_ok_time=$m[1];
	                $map['Begindate']=array('between',array($min_ok_time,$max_ok_time));
	            }else {
	                if(strpos( $Begindate,'x')){
	                    $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                    $map['Begindate']=array('LT',$Begindate);
	                }
	                if(strpos( $Begindate,'d')){
	                    $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                    $map['Begindate']=array('GT',$Begindate);
	                }
	            }
	            
	            
	        }
	        
	        
	       
	        
	    }
	
	    if($Pamount!=''){

	        $str=strpos($Pamount,'~');
	        if ($str){
	            $m=explode('~', $Pamount);
	            $min_p_money=$m[0];
	            $max_p_money=$m[1];
	            
	            $map['Pamount']=array('between',array($min_p_money,$max_p_money));
	        }else {
	            if(strpos($Pamount,'x')){
	                $Camount=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('LT',$Pamount);
	            }
	            if(strpos($Pamount,'d')){
	                $money=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('GT',$Pamount);
	            }
	        }
	
	    }
	
	    if($Jobname!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['Jobname']=array('like',"%{$Jobname}%");  //项目名称
	    }
	    
	    if($Com_id!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['ComId']=array('EQ',$Com_id);  //公司
	    }
	    
	
	    return $this->where($map)->count();  //->join("LEFT JOIN quickhigh_tpc.pro_payment_info on p_projectinfo.p_id = pro_payment_info.c_pid")
	}
	
	/**
   	 *   p_projectinfo
   	 *  从 项目主表表中查询数据
   	 *  @author:liweilong
   	 */
	public function select_project($Camount,$Begindate,$Pamount,$Jobname,$Com_id,$order){
	
	if($Camount!=''){
	        $str=strpos($Camount,'~');
	        if ($str){
	            $m=explode('~', $Camount);
	            $min_money=$m[0];
	            $max_money=$m[1];
	            $map['Camount']=array('between',array($min_money,$max_money));
	        }else {
	            if(strpos($Camount,'x')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('LT',$Camount);
	            }
	            if(strpos($Camount,'d')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('GT',$Camount);
	            }
	        }
	    }
	
	    if($Begindate!=''){
	        
	        if($Begindate=="year"){
	            $year=date("Y",time());  //今年
	        
	            $begin=$year . '-00-00';
	            $stop=($year+1) . '-00-00';
	             
	            $map['Begindate']=array('between',array($begin,$stop));
	        }else{
	            $str=strpos($Begindate,'~');
	            if ($str){
	                $m=explode('~', $Begindate);
	                $min_ok_time=$m[0];
	                $max_ok_time=$m[1];
	                $map['Begindate']=array('between',array($min_ok_time,$max_ok_time));
	            }else {
	                if(strpos( $Begindate,'x')){
	                    $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                    $map['Begindate']=array('LT',$Begindate);
	                }
	                if(strpos( $Begindate,'d')){
	                    $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                    $map['Begindate']=array('GT',$Begindate);
	                }
	            }
	        }
	        
	        
	    }
	
	    if($Pamount!=''){
	        
	        $str=strpos($Pamount,'~');
	        if ($str){
	            $m=explode('~', $Pamount);
	            $min_p_money=$m[0];
	            $max_p_money=$m[1];
	            $map['Pamount']=array('between',array($min_p_money,$max_p_money));
	        }else {
	            if(strpos($Pamount,'x')){
	                $Camount=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('LT',$Pamount);
	            }
	            if(strpos($Pamount,'d')){
	                $money=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('GT',$Pamount);
	            }
	        }
	
	    }
	
	    if($Jobname!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['Jobname']=array('like',"%{$Jobname}%");  //项目名称
	    }
	    
	    if($Com_id!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['ComId']=array('EQ',$Com_id);  //公司
	    }
	    if($order=='money'){
	        //合同额降序排列
	        return $this->where($map)->order('Camount desc')->select();
	    }else{
	        //默认时间降序
	        return $this->where($map)->order('Begindate desc')->select();
	    }
	      //->join("LEFT JOIN quickhigh_tpc.pro_payment_info on p_projectinfo.p_id = pro_payment_info.c_pid")
	
	}
	
	
	/**
	 *  p_projectinfo
	 *  得到产值总额（算入应收款的项目的合同总额）
	 *  @author:liweilong
	 */
	public function select_chanzhi_sum($Camount,$Begindate,$Pamount,$Jobname,$Com_id){
	
	    if($Camount!=''){
	        $str=strpos($Camount,'~');
	        if ($str){
	            $m=explode('~', $Camount);
	            $min_money=$m[0];
	            $max_money=$m[1];
	            $map['Camount']=array('between',array($min_money,$max_money));
	        }else {
	            if(strpos($Camount,'x')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('LT',$Camount);
	            }
	            if(strpos($Camount,'d')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('GT',$Camount);
	            }
	        }
	    }
	     
	    if($Begindate!=''){
	        $str=strpos($Begindate,'~');
	        if ($str){
	            $m=explode('~', $Begindate);
	            $min_ok_time=$m[0];
	            $max_ok_time=$m[1];
	            $map['Begindate']=array('between',array($min_ok_time,$max_ok_time));
	        }else {
	            if(strpos( $Begindate,'x')){
	                $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                $map['Begindate']=array('LT',$Begindate);
	            }
	            if(strpos( $Begindate,'d')){
	                $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                $map['Begindate']=array('GT',$Begindate);
	            }
	        }
	    }else{
	         
	        $year=date("Y",time());  //今年
	         
	        $begin=$year . '-00-00';
	        $stop=($year+1) . '-00-00';
	
	        $map['Begindate']=array('between',array($begin,$stop));
	    }
	     
	    if($Pamount!=''){
	
	        $str=strpos($Pamount,'~');
	        if ($str){
	            $m=explode('~', $Pamount);
	            $min_p_money=$m[0];
	            $max_p_money=$m[1];
	            $map['Pamount']=array('between',array($min_p_money,$max_p_money));
	        }else {
	            if(strpos($Pamount,'x')){
	                $Camount=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('LT',$Pamount);
	            }
	            if(strpos($Pamount,'d')){
	                $money=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('GT',$Pamount);
	            }
	        }
	         
	    }
	     
	    if($Jobname!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['Jobname']=array('like',"%{$Jobname}%");  //项目名称
	    }
	     
	    if($Com_id!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['ComId']=array('EQ',$Com_id);  //公司
	    }
	    
	    $map['is_rece']=array('EQ',1);  //项目进度100%
	    
	    return $this->where($map)->sum('Camount');  //->join("LEFT JOIN quickhigh_tpc.pro_payment_info on p_projectinfo.p_id = pro_payment_info.c_pid")
	    //echo $this->getLastSql();
	}
	
	
	
	
	
	/**
   	 *  p_projectinfo
   	 *  从 项目主表表中查询数据
   	 *  统计合同金额总和
   	 *  @author:liweilong
   	 */
	public function select_Camount_sum($Camount,$Begindate,$Pamount,$Jobname,$Com_id){
	
	    if($Camount!=''){
	        $str=strpos($Camount,'~');
	        if ($str){
	            $m=explode('~', $Camount);
	            $min_money=$m[0];
	            $max_money=$m[1];
	            $map['Camount']=array('between',array($min_money,$max_money));
	        }else {
	            if(strpos($Camount,'x')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('LT',$Camount);
	            }
	            if(strpos($Camount,'d')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('GT',$Camount);
	            }
	        }
	    }
	    
	    if($Begindate!=''){
	        
	        if($Begindate=="year"){

	            $year=date("Y",time());  //今年
	             
	            $begin=$year . '-00-00';
	            $stop=($year+1) . '-00-00';
	            
	            $map['Begindate']=array('between',array($begin,$stop));
	        }else{
	            $str=strpos($Begindate,'~');
	            if ($str){
	                $m=explode('~', $Begindate);
	                $min_ok_time=$m[0];
	                $max_ok_time=$m[1];
	                $map['Begindate']=array('between',array($min_ok_time,$max_ok_time));
	            }else {
	                if(strpos( $Begindate,'x')){
	                    $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                    $map['Begindate']=array('LT',$Begindate);
	                }
	                if(strpos( $Begindate,'d')){
	                    $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                    $map['Begindate']=array('GT',$Begindate);
	                }
	            }
	        }
       
	    }
	    
	    if($Pamount!=''){
	         
	        $str=strpos($Pamount,'~');
	        if ($str){
	            $m=explode('~', $Pamount);
	            $min_p_money=$m[0];
	            $max_p_money=$m[1];
	            $map['Pamount']=array('between',array($min_p_money,$max_p_money));
	        }else {
	            if(strpos($Pamount,'x')){
	                $Camount=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('LT',$Pamount);
	            }
	            if(strpos($Pamount,'d')){
	                $money=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('GT',$Pamount);
	            }
	        }
	    
	    }
	    
	    if($Jobname!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['Jobname']=array('like',"%{$Jobname}%");  //项目名称
	    }
	    
	    if($Com_id!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['ComId']=array('EQ',$Com_id);  //公司
	    }
	    
	    return $this->where($map)->sum('c_money');  //->join("LEFT JOIN quickhigh_tpc.pro_payment_info on p_projectinfo.p_id = pro_payment_info.c_pid")
	    //echo $this->getLastSql();
	}
	
	
	
	/**
	 *  p_projectinfo
	 *  从 项目主表表中查询数据
	 *  统计合同金额总和(默认取出所有数据)
	 *  @author:liweilong
	 */
	public function select_Camount_sum_all($Camount,$Begindate,$Pamount,$Jobname,$Com_id){
	
	    if($Camount!=''){
	        $str=strpos($Camount,'~');
	        if ($str){
	            $m=explode('~', $Camount);
	            $min_money=$m[0];
	            $max_money=$m[1];
	            $map['Camount']=array('between',array($min_money,$max_money));
	        }else {
	            if(strpos($Camount,'x')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('LT',$Camount);
	            }
	            if(strpos($Camount,'d')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('GT',$Camount);
	            }
	        }
	    }
	     
	    if($Begindate!=''){
	        $str=strpos($Begindate,'~');
	        if ($str){
	            $m=explode('~', $Begindate);
	            $min_ok_time=$m[0];
	            $max_ok_time=$m[1];
	            $map['Begindate']=array('between',array($min_ok_time,$max_ok_time));
	        }else {
	            if(strpos( $Begindate,'x')){
	                $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                $map['Begindate']=array('LT',$Begindate);
	            }
	            if(strpos( $Begindate,'d')){
	                $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                $map['Begindate']=array('GT',$Begindate);
	            }
	        }
	    }
	    
	    if($Pamount!=''){
	
	        $str=strpos($Pamount,'~');
	        if ($str){
	            $m=explode('~', $Pamount);
	            $min_p_money=$m[0];
	            $max_p_money=$m[1];
	            $map['Pamount']=array('between',array($min_p_money,$max_p_money));
	        }else {
	            if(strpos($Pamount,'x')){
	                $Camount=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('LT',$Pamount);
	            }
	            if(strpos($Pamount,'d')){
	                $money=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('GT',$Pamount);
	            }
	        }
	         
	    }
	     
	    if($Jobname!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['Jobname']=array('like',"%{$Jobname}%");  //项目名称
	    }
	     
	    if($Com_id!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['ComId']=array('EQ',$Com_id);  //公司
	    }
	     
	    return $this->where($map)->sum('Camount');  //->join("LEFT JOIN quickhigh_tpc.pro_payment_info on p_projectinfo.p_id = pro_payment_info.c_pid")
	    //echo $this->getLastSql();
	}
	
	
	
	/**
   	 *   p_projectinfo
   	 *  从 项目主表表中查询数据
   	 *  统计回款金额总和(默认取出当年数据)
   	 *  @author:liweilong
   	 */
	public function select_payment_sum($Camount,$Begindate,$Pamount,$Jobname,$Com_id){
	
	    if($Camount!=''){
	        $str=strpos($Camount,'~');
	        if ($str){
	            $m=explode('~', $Camount);
	            $min_money=$m[0];
	            $max_money=$m[1];
	            $map['Camount']=array('between',array($min_money,$max_money));
	        }else {
	            if(strpos($Camount,'x')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('LT',$Camount);
	            }
	            if(strpos($Camount,'d')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('GT',$Camount);
	            }
	        }
	    }
	    
	    if($Begindate!=''){
	        
	        if($Begindate){
	            $year=date("Y",time());  //今年
	             
	            $begin=$year . '-00-00';
	            $stop=($year+1) . '-00-00';
	            
	            $map['Begindate']=array('between',array($begin,$stop));
	        }else{

	            $str=strpos($Begindate,'~');
	            if ($str){
	                $m=explode('~', $Begindate);
	                $min_ok_time=$m[0];
	                $max_ok_time=$m[1];
	                $map['Begindate']=array('between',array($min_ok_time,$max_ok_time));
	            }else {
	                if(strpos( $Begindate,'x')){
	                    $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                    $map['Begindate']=array('LT',$Begindate);
	                }
	                if(strpos( $Begindate,'d')){
	                    $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                    $map['Begindate']=array('GT',$Begindate);
	                }
	            }
	       
	        }
	        
	       
	    }
	    
	    if($Pamount!=''){
	         
	        $str=strpos($Pamount,'~');
	        if ($str){
	            $m=explode('~', $Pamount);
	            $min_p_money=$m[0];
	            $max_p_money=$m[1];
	            $map['Pamount']=array('between',array($min_p_money,$max_p_money));
	        }else {
	            if(strpos($Pamount,'x')){
	                $Camount=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('LT',$Pamount);
	            }
	            if(strpos($Pamount,'d')){
	                $money=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('GT',$Pamount);
	            }
	        }
	    
	    }
	    
	    if($Jobname!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['Jobname']=array('like',"%{$Jobname}%");  //项目名称
	    }
	
	    if($Com_id!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['ComId']=array('EQ',$Com_id);  //公司
	    }
	    
	    return $this->where($map)->sum('Pamount');  //->join("LEFT JOIN quickhigh_tpc.pro_payment_info on p_projectinfo.p_id = pro_payment_info.c_pid")
	    //echo $this->getLastSql();
	}
	
	
	
	/**
	 *   p_projectinfo
	 *  从 项目主表表中查询数据
	 *  统计回款金额总和(默认取出所有数据)
	 *  @author:liweilong
	 */
	public function select_payment_sum_all($Camount,$Begindate,$Pamount,$Jobname,$Com_id){
	
	    if($Camount!=''){
	        $str=strpos($Camount,'~');
	        if ($str){
	            $m=explode('~', $Camount);
	            $min_money=$m[0];
	            $max_money=$m[1];
	            $map['Camount']=array('between',array($min_money,$max_money));
	        }else {
	            if(strpos($Camount,'x')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('LT',$Camount);
	            }
	            if(strpos($Camount,'d')){
	                $Camount=substr($Camount, 0, -1); //去掉最后一个字符
	                $map['Camount']=array('GT',$Camount);
	            }
	        }
	    }
	     
	    if($Begindate!=''){
	        $str=strpos($Begindate,'~');
	        if ($str){
	            $m=explode('~', $Begindate);
	            $min_ok_time=$m[0];
	            $max_ok_time=$m[1];
	            $map['Begindate']=array('between',array($min_ok_time,$max_ok_time));
	        }else {
	            if(strpos( $Begindate,'x')){
	                $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                $map['Begindate']=array('LT',$Begindate);
	            }
	            if(strpos( $Begindate,'d')){
	                $Camount=substr($Begindate, 0, -1); //去掉最后一个字符
	                $map['Begindate']=array('GT',$Begindate);
	            }
	        }
	    }
	    
	    if($Pamount!=''){
	
	        $str=strpos($Pamount,'~');
	        if ($str){
	            $m=explode('~', $Pamount);
	            $min_p_money=$m[0];
	            $max_p_money=$m[1];
	            $map['Pamount']=array('between',array($min_p_money,$max_p_money));
	        }else {
	            if(strpos($Pamount,'x')){
	                $Camount=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('LT',$Pamount);
	            }
	            if(strpos($Pamount,'d')){
	                $money=substr($Pamount, 0, -1); //去掉最后一个字符
	                $map['Pamount']=array('GT',$Pamount);
	            }
	        }
	         
	    }
	     
	    if($Jobname!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['Jobname']=array('like',"%{$Jobname}%");  //项目名称
	    }
	
	    if($Com_id!=''){
	        //$map['$Jobname']=array('ET',$Jobname);
	        $map['ComId']=array('EQ',$Com_id);  //公司
	    }
	     
	    return $this->where($map)->sum('Pamount');  //->join("LEFT JOIN quickhigh_tpc.pro_payment_info on p_projectinfo.p_id = pro_payment_info.c_pid")
	    //echo $this->getLastSql();
	}
	
	
	/**
	 *  p_projectinfo
	 *  从 项目主表记录表中查询数据
	 * 并导入Excel表
	 *  @author:liweilong
	 */
	public function project_excel($ary){
	    //->join("LEFT JOIN quickhigh_tpc.pro_payment_info on p_projectinfo.p_id = pro_payment_info.c_pid")
	    $where['Jobname']=array('EQ',$ary['Jobname']);
	    //$data['Jobname']=$ary['Jobname'];
	    //$data['Camount']=$ary['Camount'];
	    return $this->where($where)->save($ary);
	}
	
	
	
	/**
	 *  p_projectinfo
	 *  向项目主表记录表中导入数据（项目基本信息）
	 *  @author:liweilong
	 */
	public function impro_project($ary){
	    
	    return $this->data($ary)->add();
	}
	
	/**
	 *  p_projectinfo
	 *  向项目主表记录表中导入数据（项目基本信息）,项目已存在，“改”
	 *  @author:liweilong
	 */
	public function impro_project_save($ary){
	    
	    $where['jobcode']=array('EQ',$ary['jobcode']);
	    
	    return $this->where($where)->save($ary);
	}




	/**
	 *  p_projectinfo
	 *  向项目主表记录表中(补充)导入数据（项目基本信息）
	 *  @author:liweilong
	 */
	public function impro_project_add($ary){
	     
	   $where['jobcode']=array('EQ',$ary['jobcode']);
	   
	    return $this->where($where)->save($ary);
	}
	
	
	
	
	
	/**
	 *  p_projectinfo
	 *  根据项目名查出项目id
	 *  @author:liweilong
	 */
	public function select_project_id($name){
	    $where['Jobname']=array('EQ',$name);
	    return $this->field('p_id')->where($where)->select();
	}
	
	
	/**
   	 *  修改项目进度（项目主表）
   	 *  @author:liweilong
   	 */
   	public function updata_project_progress($ary){
	    $where['p_id']=array('EQ',$ary['c_pid']);
	    
	    $data['ProSpeed']=$ary['p_speed'];  //项目进度
	  	    
	    return $this->where($where)->save($data);
	}
	
	/**
	 *  根据项目id查出项目进度
	 *  @author:liweilong
	 */
	public function select_speed($id){
	   $where['p_id']=array('EQ',$id);
	   return $this->field('ProSpeed')->where($where)->select();
	}
	
	/**
	 * 向项目表中导入项目名，公司名（id）
	 * 导入Excel表数据
	 *  @author:liweilong
	 */
	public function projectinfo_excel($ary){
	    $where['Jobname']=array('EQ',$ary['Jobname']);
	    //$data['Jobname']=$ary['Jobname'];
	    $data['ComId']=$ary['ComId'];
	    return $this->where($where)->save($data);
	}
	
	/**
	 * 向项目表中导入项目名，项目经理
	 * 导入Excel表数据
	 *  @author:liweilong
	 */
	public function promanager_excel($ary){
	    $where['Jobname']=array('EQ',$ary['Jobname']);
	    //$data['Jobname']=$ary['Jobname'];
	    $data['pro_manager']=$ary['pro_manager'];
	    return $this->where($where)->save($data);
	}




	/**
	 *  将项目算入应收款
	 *  @author:liweilong
	 */
	public function update_rece($c_pid){
	     $where['p_id']=array('EQ',$c_pid);
	    $data['is_rece']=1;
	    return $this->where($where)->save($data);
	}
	
	
	
	/**
	 *  为项目添加“里程碑中”计划部分的时间及项目要求
	 *  @author:liweilong
	 */
	public function add_JH_lcb($c_pid,$data){
	    
	     $where['p_id']=array('EQ',$c_pid);
	    
	    return $this->where($where)->save($data);
	}
	
	
	
	/**
	 *  查出某项目合同额
	 *  @author:liweilong
	 */
	public function select_HT_money($c_pid){
	    $where['p_id']=array('EQ',$c_pid);
	    return $this->field('Camount')->where($where)->select();
	}
	

	/**
	 *  根据项目编号查出该项目是否已经存在
	 */
	public function select_pro_is($jobcode){
	    $where['jobcode']=array('EQ',$jobcode);
	    
	    return $this->where($where)->count();
	}


	/**
	 * 查询某项目信息
	 * @author:liweilong
	 */
	public function select_one_pro($p_id){
	    $where['p_id']=array('EQ',$p_id);
	    return $this->where($where)->find();
	}
	




}
