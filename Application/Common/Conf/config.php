<?php


define('DB_ORACLE','(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.0.211)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))');

/**网站登录权限id**/
define('WebLogin',11);
/**APP登录权限id**/
define('AppLogin',14);
/**创建物料单权限id**/
define('createM',5);
/**默认进入项目权限id**/
define('defaultPro',2);
/**库管审批权限id**/
define('LMA',6);
/**商务询价权限id**/
define('BI',7);
/**发货确认权限id**/
define('DC',8);
/**到货确认权限id**/
define('AC',9);
/**商务报批权限id**/
define('BA',15);
/**关闭物料单权限id**/
define('CTML',10);
/**创建职位权限(包括修改职位)**/
define('CreateP',12);
/**为用户赋予职位**/
define('UGJ',13);
/**挪动项目人员权限**/
define('SProUser',3);
/**默认密码(网站修改密码默认返回密码)**/
define('WebDefaultPassword','0192MRMM');
/**短信**/
define(CorpID,'124793');
define(LoginName,'SDK');
/**系统id**/
define('XT','xt001');

/**查看本公司售前权限**/
define('ComPS',16);
/**查看全部公司权限**/
define('ComAllPS',17);
/**发布售前权限**/
define('addComPs',18);
/**业务员所具有的权限**/
define('Yiewu',19);
/**设置公司目标权限**/
define('ComTarget', 20);
/**设置公司已完成业绩权限**/
define('CompleteMent', 21);
/**上传合同权限**/
define('addContract', 22);
/**修改项目进度权限**/
define('ProSpeed', 23);
/**添加公司业绩目标权限**/
define('addtarget', 24);
/**项目启动上传文件权限**/
define('ProjectStart', 25);



return array(
	//'配置项'=>'配置值'
	'DB_TYPE' => 'Oracle', // 数据库类型
	'DB_HOST' => '192.168.0.211', // 服务器地址
	'DB_NAME' => '(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.0.211)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))', // 数据库名
	'DB_USER' => 'QHZS', // 用户名
	'DB_PWD' => 'qhzs', // 密码
	'DB_PORT' => '1521', // 端口
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
	//
);