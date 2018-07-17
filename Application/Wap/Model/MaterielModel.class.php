<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: huajie <banhuajie@163.com>
// +----------------------------------------------------------------------

namespace Wap\Model;
use Think\Model;
use Think\Log;
use Common\API\MysqlApi;
use Common\Model\UpInfoModel;

/**
 *  物料单模型
 *  @author huajie <banhuajie@163.com>
 */

class MaterielModel extends Model {
	
	protected $trueTableName = 'p_materiel';
	
	public function getProDownMlist($proid,$number = '0 = 0'){
		
		/**
		 *  校验是否存在于项目中
		 */
	 	$p = new ProUserModel();
		if(!$p->checkUserExitPro($proid,session('uid'))){
			return getCodeModel('118');
		}
		
		
		Log::write('LogNumber:'.$number);

		$minfo = $this->where("p_proid = '%s' and ".$number,array($proid))->field('p_mid,m_status,m_number')->select();
		
		return CheckLogicBool($minfo,'104',$minfo);
	}
	
	/**
	 *  根据物料单名称搜索物料单
	 */
	public function soreachMName($proid,$like){
		
		
		/**
		 *  校验是否存在于项目中
		 */
		$p = new ProUserModel();
		if(!$p->checkUserExitPro($proid,session('uid'))){
			return getCodeModel('118');
		}
		
		
		$where['p_proid'] = $proid;

		$where['m_number'] = array('like','%'.$like.'%');
		
		$minfo = $this->where($where)->field('p_mid,m_status,m_number')->select();
		
		return CheckLogicBool($minfo,'104',$minfo);
		
	}
	
	/**
	 *   获取物料单详细信息
	 */
	public function getMaterielInfo($mid){
		
		$mary = M('p_materiel m')->field('m.m_number,m.m_last_time,m.m_status,p.Jobname m_name')->join("p_projectinfo p on m.p_proid = p.p_id")->where("p_mid = {$mid}")->find();
		
		//获取当前状态可以处理的权限
		$status = MPostion($mary['m_status']);
		
		$p = new PostionModel();
		
		$userlist = $p->getHavePostionUserList($status);
		
		//获取所有当前操作人
		
		$api = new MysqlApi();
		
		$operalist = array();
		
		foreach ($userlist as $k => $value){
			
			$ary = $api->getUserInfo($userlist[$k]['Cuserid']);
			
			$operalist[$k]['user_name'] = $ary['user_name'];
			
		}
		
		$upinfo = M('m_upinfo m')->field('m.u_time,m.u_content,u.user_name,u_userid')->join("u_member u on m.u_userid= u.Cuserid")->where("m.m_id = {$mid}")->select();
		
		foreach ($upinfo as $key => $value){
			
			Log::write('content:'.json_encode($upinfo[$key]['u_content']));
			$upinfo[$key]['u_content'] = unserialize($upinfo[$key]['u_content']);
			
			Log::write('uncontent:'.json_encode($upinfo[$key]['u_content']));
			
		}
		return CheckLogicBool($mary,'104',array('head'=>$mary,'info'=>$upinfo,'opearList'=>$operalist));
	}
	
	/**
	 * 描述物料单详情(默认文字)
	 */
	public function remarkMaterielInfo($mid, $msg, $uid,$type = 0) {
		$ary = array (
				'type' => $type,
				'str_msg' => $msg 
		);
		
		$data ['m_id'] = $mid;
		
		$data ['u_time'] = this_time ();
		
		$data ['u_content'] = serialize ( $ary );
		
		$data ['u_userid'] = $uid;
		
		return M ( 'm_upinfo' )->add ( $data );
	}
	
	
	/**
	 *  选择通过物料单
	 *  @param mid 物料单id
	 */
	public function ChoiceThroughMateriel($mid){
		
		//获取物料单当前状态
		$mstatus = $this->field('m_status,p_proid,m_close')->where("p_mid = {$mid}")->find();
		
		/**
		 *  校验是否存在于项目中
		 */
		$p = new ProUserModel();
		if(!$p->checkUserExitPro($mstatus['p_proid'],session('uid'))){
			return getCodeModel('118');
		}
		
		if($mstatus['m_close'] == 1) return getCodeModel('114');
		
		$auid = MPostion($mstatus['m_status']);
		//校验物料单是否完结
		
		if($auid == 10 || $auid == 10) return getCodeModel('113');
		
		$api = new MysqlApi();
		
		if($api->CheckUserHaveAuth(session('uid'),$auid)){
		
			//拥有此权限,校验物料单当前状态的后一个状态
			
			$ms = ReturnMBackStatus($mstatus['m_status']);
			//开启事务
			$this->startTrans();
			
			$mr = new MaterielRecordModel();
			 
			$info = new UpInfoModel();
			
			//修改物料单状态
			if($this->where("p_mid = {$mid}")->save(array("m_status"=>$ms)) && $mr->recordMStatus($mid,$mstatus['p_proid'],$mstatus['m_status'],session('uid'))){
				
				/**
				 *  插入任务树
				 */
				$str = "";
				
				if($mstatus['m_status'] == 1){
					$str = "库管审批已通过-操作人[".session('name')."].";
				}
				if($mstatus['m_status'] == 2){
					$str = "商务询价已通过-操作人[".session('name')."].";
				}
				if($mstatus['m_status'] == 3){
					$str = "商务报批已通过-操作人[".session('name')."].";
				}
				
				if($mstatus['m_status'] == 4){
					$str = "发货已通过-操作人[".session('name')."].";
				}
				if($mstatus['m_status'] == 5){
					$str = "到货确认已通过-操作人[".session('name')."].";
				}
				
				$info->upMaterielInfo($mid,$str,XT);
				
				$this->commit();
				
				return CheckLogicBool(true,'106');
				
			}else{
				
				$this->rollback();
				
				return CheckLogicBool(false,'106');
			}
			
		}
		
		return CheckLogicBool(false,'105');		
	}
	

}
