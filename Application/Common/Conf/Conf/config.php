<?php


define('DB_ORACLE','(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.0.211)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))');

return array(
	//'配置项'=>'配置值'
	'DB_TYPE' => 'Oracle', // 数据库类型
	'DB_HOST' => '192.168.0.211', // 服务器地址
	'DB_NAME' => '(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.0.211)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))', // 数据库名
	'DB_USER' => 'QHDZ', // 用户名
	'DB_PWD' => 'qhdz', // 密码
	'DB_PORT' => '1521', // 端口
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
	//
);