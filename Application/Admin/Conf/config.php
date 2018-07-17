<?php






return array(
	/* 数据缓存设置 */
    'DATA_CACHE_PREFIX'    => 'quickhigh_', // 缓存前缀
    'DATA_CACHE_TYPE'      => 'File', // 数据缓存类型
	
	'LOG_RECORD'=>true,  // 进行日志记录
	
	/**开启日志级别**/
	'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR,WARN,NOTICE,INFO,DEBUG,SQL',
	
	/* SESSION 和 COOKIE 配置 */
	'SESSION_PREFIX' => 'quickhigh_admin', //session前缀
	'COOKIE_PREFIX'  => 'quickhigh_admin_', // Cookie前缀 避免冲突
	'VAR_SESSION_ID' => 'session_id',	//修复uploadify插件无法传递session_id的bug
		
	'DB_TYPE' => 'mysql', // 数据库类型

	'DB_HOST' => 'localhost', // 服务器地址
	//'DB_HOST' => '127.0.0.1', // 服务器地址

	//'DB_HOST' => '121.42.193.84', // 服务器地址(外网用的地址)

	'DB_NAME' => 'db_exam', // 数据库名
	'DB_USER' => 'root', // 用户名

	'DB_PWD' => 'root', // 密码
	//'DB_PWD' => 'uBttXgNVhdH2', // 密码(服务器密码)

	'DB_PORT' => 3306, // 端口
	'DB_PARAMS'=>array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),
	//自动开启session
	'SESSION_AUTO_START' => true,
	/**模板路径**/
	'TMPL_PARSE_STRING'  =>array(
			'__PUBLIC__' => 'bs_system/Public/admin', // 更改默认的/Public 替换规则
	),
	'TMPL_L_DELIM'   		=>'{W',			//模板引擎普通标签开始标记
	'TMPL_R_DELIM'			=>'}',				//模板引擎普通标签结束标记
	
);
	
	

	
