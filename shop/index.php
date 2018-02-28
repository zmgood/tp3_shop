<?php

//使用thinkPHP框架开发shop商城项目

//框架的两种模式：[默认]生产（线上）、开发（调试）
define('APP_DEBUG', true);  // 开发 错误提示具体
//define('APP_DEBUG', false); // 生产 错误提示模糊

define('SITE_URL', 'http://www.tp.com/shop/');

//给静态资源文件访问目录设置常量，方便后期维护
//Home分组
define('CSS_URL', '/shop/Public/css/');
define('IMG_URL', '/shop/Public/img/');
define('JS_URL', '/shop/Public/js/');
//Admin分组
define('ADMIN_CSS_URL', '/shop/Admin/Public/css/');
define('ADMIN_IMG_URL', '/shop/Admin/Public/img/');

//引入框架的接口文件
include ('../ThinkPHP/ThinkPHP.php');







