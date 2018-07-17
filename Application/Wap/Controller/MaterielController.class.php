<?php
namespace Wap\Controller;
use Think\Controller;
use Wap\Model\MaterielModel;
use Think\Log;
use Common\API\MysqlApi;
use Wap\Model\ProUserModel;
class MaterielController extends BaseController {
    
	/**
	 *  上传物料单图片(张文强)
	 */
	public function uploadMaterielImg(){
		Log::write('接到的DATA:'.json_encode($this->data));
		Log::record("图片保存：".json_encode($_FILES['file']));
		Log::record("文件名称：".json_encode($_FILES['file']));
		Log::record("文件路径：".json_encode($this->data['url']));
		saveTaskImg($_FILES['file'],$this->data['url']);
	//	Log::record("图片保存成功：".json_encode($aryData));
	}
	
	/**
	 *  获取项目下所有物料单列表
	 */
	public function getProDownMlist(){
		
		$post = $this->data;
		
//		$post['pid'] = '10011610000000001J1E';
		
		$m = new MaterielModel();
		
		$this->ajaxReturn($m->getProDownMlist($post['pid']));
		
	}
	
	/**
	 *  搜索物料单列表
	 */
	public function searchProDownMlist(){
		
		$post = $this->data;
		
// 		$post['pid'] = '10011610000000001J1E';
		
// 		$post['m_number'] = 'f';
		
		$m = new MaterielModel();
		
		$number = $post['m_number'];
		
		$this->ajaxReturn($m->soreachMName($post['pid'],$number));
		
	}
	
	/**
	 *  获取物料单详细信息
	 */
	public function getMaterielInfo(){
		
		$post = $this->data;
		
		$m = new MaterielModel();
		
	//	$post['mid'] = 4;
		
		$this->ajaxReturn($m->getMaterielInfo($post['mid']));
	}
	
	/**
	 *  描述物料单详情(文字)
	 */
	public function remarkMaterielInfo(){
		
		$post = $this->data;
		
		$m = new MaterielModel();
		
 	//	$post['mid'] = '4';
		
 	//	$post['str_msg'] = '漂亮';
		
		$this->ajaxReturn(CheckLogicBool($m->remarkMaterielInfo($post['mid'],$post['str_msg'],session('uid')),'104'));
		
	}
	
	/**
	 *  描述物料单详情(图片)
	 */
	public function remarkMaterielImg(){
		
		$post = $this->data;
		
		Log::write('接收到数据:'.json_encode($post));
		
		$m = new MaterielModel();
		
		$picMsg = $post['pic_msg'];
		
		$strMsg = SplitFileName($picMsg);
		
		$row = getDateCatalog();
		
		$url = $row.'/'.$strMsg;
		
		$ary = CheckLogicBool($m->remarkMaterielInfo($post['mid'],$url,session('uid'),1),'108',array('url'=>$row,'OldName'=>$post['pic_msg'],'NewName'=>$strMsg));
		
		Log::write('返回信息:'.json_encode($ary));
		
		$this->ajaxReturn($ary);
	}
	

	/**
	 *   选择 '通过'  物料单
	 */
	public function ChoiceThroughMateriel(){
		
		$post = $this->data;
		
		$m = new MaterielModel();
				
		$this->ajaxReturn($m->ChoiceThroughMateriel($post['mid']));
	}
	
	/**
	 *   获取已存在项目中人员,与未存在项目人员
	 */
	public function getWapProUser(){
		
		$post = $this->data;
		
		$type = $post['n_type'];
		
		$pid = $post['pid'];
		
		/**校验是否拥有修改项目人员权限**/
		$api = new MysqlApi();
		
		$p = new \Admin\Model\ProUserModel();
	
		/**
		 *  校验是否存在于项目中
		 */
		$ps= new ProUserModel();
		if(!$ps->checkUserExitPro($pid,session('uid'))){
			 $this->ajaxReturn(getCodeModel('118'));
		}
		
		
		if($type == 0){
			
			//获取所有项目人员id及姓名
			$puser = $p->getProHaveUserInfo($pid);
			
			//获取不存在项目中的人员id及姓名
		//	$npuser = $p->getProHaveNotUserInfo($puser);
			
			session('ProUserHave',$puser);
			
			if($puser || $npuser) $this->ajaxReturn(CheckLogicBool(true,'0',array('have'=>$puser,'nothave'=>array())));
			
		}else if($type == 1){
			
			if(!$api->CheckUserHaveAuth(session('uid'),SProUser)) $this->ajaxReturn(getCodeModel('105'));
			
			//获取所有项目人员id及姓名
			$puser = $p->getProHaveUserInfo($pid);
			
			//获取不存在项目中的人员id及姓名
			$npuser = $p->getProHaveNotUserInfo($puser);
			
			session('ProUserHave',$puser);
			
			if($puser || $npuser){
				$this->ajaxReturn(CheckLogicBool(true,'0',array('have'=>$puser,'nothave'=>$npuser)));
			}
		}
		
	}
	
	
	/**
	 *   APP提交修改项目人员
	 */
	public function WapSubSaveProUser(){
		
		$post = $this->data;
		
		$pid = $post['pid'];
		
		$aryUser = $post['aryUser'];
		
		$ProUserHave = session('ProUserHave');
		
		$p = new ProUserModel();
		
		$p->saveLocProUser($pid,$aryUser,$ProUserHave);
		
		$this->ajaxReturn(getCodeModel('0'));
		
	}

	
	
	
	
	
}