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
 * 行为模型
 * 
 * @author huajie <banhuajie@163.com>
 */
class SmessageModel extends Model {

	protected $trueTableName = 's_message';
	
	/**
	 *  发送短信
	 *  @param string send_no 发送目标号码(必选)
	 *  @param string msg 发送内容(必选)
	 *  @param time Timer 选定时间发送(可选)
	 *  @author zhangwenqiang
	 *
	 */
	function PostMessage($strSendNo,$strMsg,$timeTimer = ''){
	
		$url = 'http://211.147.238.86:81/SDK/Sms_Send.asp?CorpID='
				.CorpID.'&LoginName='.LoginName.'&send_no='.
				$strSendNo.'&msg='.$strMsg;
	
		$url = iconv('UTF-8', 'GB2312', $url);
	
		$strResult = getSMS($url);	//POST方式提交
	
		//分割字符串
	
		$aryRet = explode(',', $strResult);
	
		$iRet=intval($aryRet[0]);
	
		$aryInfo = array(
				's_tel'=>$strSendNo,
				'd_time'=>this_time(),
				'n_status'=>$iRet,
				's_content'=>$strMsg,
				'f_content'=>$aryRet[1],
		);
	
	
		if($iRet>0){
	
			//记录短信发送成功与失败
				
			$aryInfo['n_status'] = 1;
				
			$this->add($aryInfo);
	
			return true;
	
		}else{
	
			//记录短信发送失败原因及时间
				
			$aryInfo['n_status'] = 0;
				
			switch ($iRet){
				case -1:
					break;
				case -1:
					$aryInfo['f_content'] = '输入参数不完整';
					break;
				case -2:
					$aryInfo['f_content'] = '非法来源IP地址或帐号密码有误';
					break;
				case -3:
					$aryInfo['f_content'] = '目标号码有误';
					break;
				case -4:
					$aryInfo['f_content'] = '企业帐号余额不足，后跟已发送的数量及SmsID';
					break;
				case -5:
					$aryInfo['f_content'] = '用户帐号余额不足，后跟已发送的数量及SmsID';
					break;
				case -6:
					$aryInfo['f_content'] = '输入参数不完整';
					break;
				case -7:
					$aryInfo['f_content'] = '连接数据库失败';
					break;
				case -8:
					$aryInfo['f_content'] = '企业帐号已被禁用';
					break;
				case -9:
					$aryInfo['f_content'] = '短信内容含有过滤关键字';
					break;
			}
	
			$this->add($aryInfo);
			
			return false;
	
		}
	}
	
	
	
}
