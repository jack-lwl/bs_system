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
class CRecordModel extends Model {

	protected $trueTableName = 'c_record';
	
	
	
	//根据手机号生成验证码函数
	public function CreateCodefun($strTel){
	
		// 随机生成验证码6位
		$strCode = createCodeNo ( "", "6" );
	
		//删短信记录表中存在手机号
		
		$this->where("t_tel = '{$strTel}'")->delete();
		
		//插入短信记录表
		$aryCodeInfo['c_time'] = this_time();
	
		$aryCodeInfo['t_tel'] = $strTel;
	
		$aryCodeInfo['n_code'] = $strCode;
	
		$aryCodeInfo['n_type'] = 1;
		
		if($this->add($aryCodeInfo)) return $strCode;
		
	}
	
	
	//校验验证码函数
	public function CheckCodefun($strTel,$strCode){
		Log::record ( "用户uid:" . $strTel );
		Log::record ( "用户验证码:" . $strCode );
	
		// 检查时间是否在两分钟之内,如果大于一分钟,则返回客户端验证码以过期
		
		$aryData = $this->where("t_tel = '{$strTel}'")->find();
		
		Log::record ( "查出验证表数据:" . json_encode ( $aryData ) );
	
		// 将时间转为时间戳
		$nUserTime = strtotime ( $aryData ["c_time"] );
		// 相差秒数
		$nSecs = CountTime ( time (), $nUserTime );
		// 若时间符合则检查验证码是否正确,若验证码正确则返回客户端成功,进入下一模块
		if ($nSecs >= 180) {
			Log::record ( "验证码以过期" );
			return '111';
		}
		if ($aryData ["n_code"] != $strCode) {
			Log::record ( "验证码错误" );
			return '112';
		} else {
			Log::record ( "验证码正确！" );
			return 0;
		}
	}
	
	
	
	
}
