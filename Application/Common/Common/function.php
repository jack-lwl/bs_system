<?php
header ( "Content-type: text/html; charset=utf-8" );
/**
 * 获取状态码
 * @param nCode 状态码
 */
function getCodeModel($nCode) {
	
	/**
	 * 通信Code
	 */
	$aryCodeModel = array (
			"0" => "成功",
			"100" => "账号或密码错误",
			"101" => "用户已被删除",
			"102" => "其他错误",
			"103" => "用户未登录",
			"104" => "未查到任何信息",
			"105" => "您未拥有此权限!",
			"106" => "修改失败",
			"107" => "您未获得登录权限",
			"108" => "上传失败",
			"109" => "短信发送失败",
			"110" => "手机号格式错误",
			"111" => "验证码以过期",
			"112" => "验证码错误",
			"113" => "APP无法关闭物料单！",
			"114" => "物料单已意外关闭,不可操作!",
			"115" => "无法在此关闭物料单",
			"116" => "通过状态失败",
			"117" => "无法再此关闭物料单！",
			"118" => "您已不存在项目中!",
	);
	
	$strValue = $aryCodeModel [$nCode];
	
	return array (
			'Code' => $nCode,
			'Msg' => $strValue,
			'Response' => array () 
	);
}

/**
 * 数组键值替换
 * 
 * @param array $aryData
 *        	数组
 * @param string $strKey
 *        	原Key值
 * @param string $strNewKey
 *        	新Key值
 * @return array $aryNewData 新数组
 * @author zhangwenqiang
 */
function ReplaceArray($aryData, $strKey, $strNewKey) {
	$str = $aryData [$strKey];
	
	$aryData [$strNewKey] = $str;
	
	unset ( $aryData [$strKey] );
	
	return $aryData;
}
/**
 * 自动校验字符集并转码
 * 
 * @param unknown $string        	
 * @param string $outEncoding        	
 * @return unknown string
 */
function safeEncoding($string, $outEncoding = 'UTF-8') {
	$encoding = "UTF-8";
	for($i = 0; $i < strlen ( $string ); $i ++) {
		if (ord ( $string {$i} ) < 128)
			continue;
		
		if ((ord ( $string {$i} ) & 224) == 224) {
			// 第一个字节判断通过
			$char = $string {++ $i};
			if ((ord ( $char ) & 128) == 128) {
				// 第二个字节判断通过
				$char = $string {++ $i};
				if ((ord ( $char ) & 128) == 128) {
					$encoding = "UTF-8";
					break;
				}
			}
		}
		
		if ((ord ( $string {$i} ) & 192) == 192) {
			// 第一个字节判断通过
			$char = $string {++ $i};
			if ((ord ( $char ) & 128) == 128) {
				// 第二个字节判断通过
				$encoding = "GB2312";
				break;
			}
		}
	}
	
	if (strtoupper ( $encoding ) == strtoupper ( $outEncoding ))
		return $string;
	else
		return iconv ( $encoding, $outEncoding, $string );
}

/**
 * 校验图片是否存在
 * 
 * @param
 *        	strUrl
 * @author zhangwenqiang
 */
function CheckImgExit($strUrlName) {
	$strdir = "upload/img/" . $strUrlName;
	
	/**
	 * 检查文件是否存在*
	 */
	if (is_file ( $strdir )) {
		Log::write ( "文件存在" );
		return true;
	} else {
		Log::write ( "文件不存在" );
		return false;
	}
}

/**
 * 生成uuid
 * 
 * @return string
 */
function guid() {
	if (function_exists ( 'com_create_guid' )) {
		return com_create_guid ();
	} else {
		mt_srand ( ( double ) microtime () * 10000 ); // optional for php 4.2.0 and up.
		$charid = strtoupper ( md5 ( uniqid ( rand (), true ) ) );
		$hyphen = chr ( 45 ); // "-"
		$uuid = chr ( 123 ) . 		// "{"
		substr ( $charid, 0, 8 ) . $hyphen . substr ( $charid, 8, 4 ) . $hyphen . substr ( $charid, 12, 4 ) . $hyphen . substr ( $charid, 16, 4 ) . $hyphen . substr ( $charid, 20, 12 ) . chr ( 125 ); // "}"
		return $uuid;
	}
}

/**
 * 获得当前时间
 */
function this_time() {
	return date ( 'y-m-d H:i:s', time () );
}

/**
 * 获取POST请求
 */
function getPost() {
	if (IS_POST) {
		$Json_POST = file_get_contents ( "php://input" );
		// Log::write("输出流信息:".json_encode($Json_POST));
		if (! $Json_POST) {
			// Log::write("走Post");
			$Json_POST = $_POST;
			$aryPost = $_POST;
		} else {
			$aryPost = json_decode ( stripslashes ( $Json_POST ), true );
		}
		if ($aryPost) {
			return $aryPost;
		} else {
			return false;
		}
	} else {
		echo '请求错误!';
		exit ();
	}
}

/**
 * 校验结果集 true false
 */
function CheckLogicBool($Obj, $strNumber, $aryResponse = "") {
	if ($Obj) {
		
		$aryData = getCodeModel ( '0' );
		
		$aryData ['Response'] = $aryResponse;
		
		return $aryData;
	} else {
		
		return getCodeModel ( $strNumber );
		
	}
}

/**
 * 图片上传
 */
function saveTaskImg($file, $UploadUrl) {
	$strdir = "upload/img/" . $UploadUrl;
	
	/**
	 * 校验图片是否存在若存在则删除*
	 */
	if (is_file ( $strdir . '/' . $file ['name'] )) {
		// Log::write ( "文件存在" );
		@unlink ( $strdir . '/' . $file ['name'] );
	}
	
	if (is_dir ( $strdir )) {
		
		// Log::record ( '目录存在' );
		
		move_uploaded_file ( $file ['tmp_name'], $strdir . '/' . $file ['name'] );
	} else {
		// Log::record ( '目录不存在' );
		
		mkdir ( $strdir );
		
		move_uploaded_file ( $file ['tmp_name'], $strdir . '/' . $file ['name'] );
	}
}

/**
 * 物料单当前状态该被哪种权限处理
 */
function MPostion($m) {
	switch ($m) {
		/**
		 * 库管审批*
		 */
		case 1 :
			return 6;
		/**
		 * 商务询价*
		 */
		case 2 :
			return 7;
		/**
		 * 商务报批*
		 */
		case 3 :
			return 15;
		/**
		 * 发货确认*
		 */
		case 4 :
			return 8;
		/**
		 * 到货确认*
		 */
		case 5 :
			return 9;
		/**
		 * 关闭物料单*
		 */
		case 6 :
			return 10;
	}
}

/**
 * 返回物料单的后一个状态
 * 
 * @param $ms 物料单状态        	
 */
function ReturnMBackStatus($ms) {
	switch ($ms) {
		
		case 1 :
			return 2;
		
		/**
		 * 库管审批*
		 */
		case 2 :
			return 3;
		/**
		 * 商务询价*
		 */
		case 3 :
			return 4;
		/**
		 * 商务报批*
		 */
		case 4 :
			return 5;
		/**
		 * 发货确认*
		 */
		case 5 :
			return 6;
		/**
		 * 到货确认*
		 */
		case 6 :
			return 7;
	}
}

/**
 * 系统非常规MD5加密方法
 * 
 * @param string $str
 *        	要加密的字符串
 * @return string
 */
function think_ucenter_md5($str, $key = 'ThinkUCenter') {
	return '' === $str ? '' : md5 ( sha1 ( $str ) . $key );
}

/**
 * 获取日期目录
 */
function getDateCatalog() {
	$strTime = this_time ();
	$strTime = substr ( $strTime, 0, 8 );
	$strTime = explode ( '-', $strTime );
	$strNewTime;
	foreach ( $strTime as $key => $value ) {
		$strNewTime = $strNewTime . $strTime [$key];
	}
	return $strNewTime;
}

/**
 * 处理uuid
 */
function handleUuid($struuid) {
	$strUuid = substr ( $struuid, 1, strlen ( $struuid ) - 2 );
	$aryUuid = explode ( '-', $strUuid );
	$strNewTime;
	foreach ( $aryUuid as $key => $value ) {
		$strNewTime = $strNewTime . $aryUuid [$key];
	}
	return $strNewTime;
}

/**
 * 将文件名按.分开
 */
function SplitFileName($strFileName) {
	$aryName = explode ( ".", $strFileName );
	
	$strName = '.' . $aryName [count ( $aryName ) - 1];
	
	return handleUuid ( guid () ) . $strName;
}

/**
 * 日期插分年月月日及时与分
 */
function dateInsert($time) {
	$birth = explode ( ' ', $time );
	
	$Front = explode ( '-', $birth [0] );
	
	$top = $Front [2] . '/' . $Front [1] . '/' . substr ( $Front [0], 2, 2 );
	
	$down = substr ( $birth [1], 0, 5 );
	
	return array (
			'top' => $top,
			'down' => $down 
	);
}

/**
 * 根据物料单目前状态返回物料单相应文字
 */
function ReturnMaterChinese($status) {
	switch ($status) {
		
		case '1' :
			return '等待库管审批';
		
		case '2' :
			return '等待商务寻价';
		
		case '3' :
			return '等待商务报批';
		
		case '4' :
			return '等待发货确认';
		
		case '5' :
			return '等待到货确认';
		
		case '6' :
			return '物料单已关闭';
	}
}

/**
 * 根据项目编码计算项目类型
 */
function sumCodeProType($code) {
	$code = substr ( $code, 0, 7 );
	
	$c1 = substr ( $code, 0, 2 );
	
	$c2 = substr ( $code, 2, 2 );
	
	$c3 = substr ( $code, 4, 3 );
	
	$str = '';
	
	switch ($c1) {
		
		case '01' :
			$str .= '施工';
			break;
		
		case '02' :
			$str .= '销售';
			break;
		
		case '03' :
			$str .= '2014前项目';
			break;
		
		case '04' :
			$str .= '售后';
			break;
		
		case '05' :
			$str .= '前期';
			break;
	}
	
	// echo $c2;
	
	switch ($c2) {
		
		case '01' :
			$str .= ' 客运';
			break;
		
		case '02' :
			$str .= ' 货运';
			break;
		
		case '03' :
			$str .= ' 建设';
			break;
		
		case '04' :
			$str .= ' 公安';
			break;
		
		case '05' :
			$str .= ' 机务';
			break;
		
		case '06' :
			$str .= ' 地方';
			break;
		
		case '99' :
			$str .= ' 其他';
			break;
	}
	
	return $str;
}

/**
 * 项目百分比统计计算
 * status 任务状态
 */
function sumProPercent($status) {
	switch ($status) {
		
		case '2' :
			return '20%';
			break;
		
		case '3' :
			return '40%';
			break;
		
		case '4' :
			return '60%';
			break;
		
		case '5' :
			return '80%';
			break;
		
		case '6' :
			return '90%';
			break;
		
		case '7' :
			return '100%';
			break;
			
		default:
			return '0%';
			break;	
	}
}
/**
 * 随即生成编号。
 *
 * @param 编号头  $strHead
 * @param 长度      $length
 *
 * @return 编号
 *
 * 根据输入参数，动态根据长度参数生成编号，在返回时，将编号头同步组成。
 *
 */
function createCodeNo($strHead,$length){
	//根据长度生成最大值
	$maxLeng = pow(10,$length);
	//随即生成数字
	$randf = rand(0,$maxLeng-1);
	$randf = str_pad($randf,$length,'0',STR_PAD_LEFT);;
	//加入头，并且将补位值，补充道结果中
	$randf = $strHead.$randf;
	return $randf;
}

/**
 *  计算时间差
 */
function CountTime($StartTime,$EndTime){
	$strTime = $StartTime-$EndTime;
	return $strTime;
}

/**
 *
 * 发送get请求
 *
 */
function getSMS($str){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $str);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$output = curl_exec($ch);
	curl_close($ch);
	return $output;
}

/**
 *  计算分页篇数
 */
function CountPage($ary){
	
	$count = count($ary);
	
	$c = ceil($count/5);
	
	$page = "";
	
	for ($i=0;$i<$c;$i++){
		if($i==0){
			$page .= "<li class='active'><a onclick='savePag(this)' id=page_".($i+1)." href='#'>".($i+1)."</a></li>";
		}else{
			$page .= "<li ><a onclick='savePag(this)' id=page_".($i+1)." href='#'>".($i+1)."</a></li>";
		}
	}
	
	return $page;
}




	