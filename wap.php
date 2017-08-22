<?php
// +----------------------------------------------------------------------
// | MhyShoopAdmin [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://maoheyuan.com All rights reserved.
// +----------------------------------------------------------------------
// | MIT
// +----------------------------------------------------------------------
// | Author: maoheyuan <maoheyuan@qq.com>
// +----------------------------------------------------------------------

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

define('BIND_MODULE','Wap');
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);
/*define("REAL_PATH",dirname(__FILE__));*/
// 定义应用目录
define('APP_PATH','./shopApp/');
define('APP_NAME','shopApp');
define('RUNTIME_PATH','./Runtime/');
// 引入ThinkPHP入口文件
require './ThinkPHP3.2/ThinkPHP.php';
// 亲^_^ 后面不需要任何代码了 就是如此简单
