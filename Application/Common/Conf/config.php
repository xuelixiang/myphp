<?php
return array(
	//'配置项'=>'配置值'
	/*
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'myphp', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => '3306', // 端口
	'DB_PREFIX' => 'think_', // 数据库表前缀 
	*/
	'DB_TYPE'   => 'pdo', // 数据库类型
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PREFIX' => 'think_', // 数据库表前缀 
	'DB_DSN'=>'mysql:host=localhost;dbname=myphp;charset=UTF8',
    
    
    // 允许访问的模块列表
    'MODULE_ALLOW_LIST'=>  array('Home'),
    'DEFAULT_MODULE'   =>  'Home',  // 默认模块
    // 设置禁止访问的模块列表 
    'MODULE_DENY_LIST' =>  array('Common','Runtime','User'),
    
    'URL_ROUTER_ON' => true, //URL路由
    'URL_MODEL' => '2', // URL模式
    
    // 开启语言包功能相关配置
    'LANG_SWITCH_ON' => true,   // 开启语言包功能
    'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
    'LANG_LIST'        => 'zh-cn,zh-tw,en-us', // 允许切换的语言列表 用逗号分隔
    'VAR_LANGUAGE'     => 'hl', // 默认语言切换变量
    
    /* 'DEFAULT_V_LAYER'       =>  'Template', // 设置默认的视图层名称
    //结果：Template/User/add.html
     
    'TMPL_TEMPLATE_SUFFIX'=>'.tpl', //设置默认后缀
    //结果：View/User/add.tpl
     
    'TMPL_FILE_DEPR'=>'_', //配置模板的目录层次
    //结果：View/User_add.html
     
    'DEFAULT_THEME'    =>    'default', // 设置默认的模板主题
    // 没有启用模板主题之前 View/User/add.html
    // 启用模板主题之后 View/default/User/add.html */
    
    //配置smarty模板引擎
/*     'TMPL_ENGINE_TYPE'		=> 'Smarty',
    'TMPL_ENGINE_CONFIG'	=> array(
        'caching' => TRUE,
        'template_dir' => TMPL_PATH,
        'compile_dir' => TEMP_PATH,
        'cache_dir' => CACHE_PATH,
        'left_delimiter' => '{',
        'right_delimiter' => '}',
    ),
 */    
    
    
);