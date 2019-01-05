<?php
if(!defined('HOST'))die('not access');
//[管理员]在2018-06-26 10:47:41通过[系统→系统工具→系统设置]，保存修改了配置文件
return array(
	'title'	=> '金瑞迪协同办公系统',	//系统默认标题
	'apptitle'	=> '金瑞迪OA',	//APP上和手机网页版上的标题
	'url'	=> 'http://oa.jrd.cn/',	//系统URL
	'db_drive'	=> 'mysqli',	//操作数据库驱动有mysql,mysqli,pdo三种
	'db_host'	=> '127.0.0.1',	//数据库地址
	'db_user'	=> 'root',	//数据库用户名
	'db_pass'	=> '',	//数据库密码
	'db_base'	=> 'rockxinhu',	//数据库名称
	'randkey'	=> 'gmtafulesjdnbrcxiqvkpyhzwo',	//系统随机字符串密钥
	'perfix'	=> 'xinhu_',	//数据库表名前缀
	'localurl'	=> 'http://192.168.0.42/',	//本地系统URL，用于服务器上浏览地址
	'updir'	=> 'upload',
	'xinhukey'	=> 'c40e5364b98e85721954324ce3f8e818',	//信呼官网key，用于在线升级使用
	'phppath'	=> '',
	'qom'	=> 'xinhu_',	//session、cookie前缀
	'highpass'	=> '',	//超级管理员密码，可用于登录任何帐号
	'asynkey'	=> 'asynkey23sss',	//这是异步任务key
	'openkey'	=> 'openkey23se',	//对外接口openkey
	'asynsend'	=> '0',	//是否异步发送提醒消息，0同步，1自己服务端异步，2官网VIP用户异步
	'install'	=> true,	//已安装，不要去掉啊
	'sqllog'	=> false,	//是否记录sql日志保存upload/sqllog下
	'reimtitle'	=> '',	//REIM即时通信上标题
	'bcolorxiang'	=> '',	//单据详情页面上默认展示线条的颜色
	'officeyl'	=> '0',	//文档Excel.Doc预览类型,0自己部署插件，1使用官网支持任何平台
	'debug'	=> false,	//为true调试开发模式,false上线模式
	'reim_show'	=> true,	//首页是否显示REIM
	'mobile_show'	=> true,	//首页是否显示手机版
	'loginyzm'	=> '0',	//登录方式:0仅使用帐号+密码,1帐号+密码/手机+验证码,2帐号+密码+验证码,3仅使用手机+验证码

);