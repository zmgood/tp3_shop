<?php /* Smarty version Smarty-3.1.6, created on 2017-08-30 22:09:58
         compiled from "D:/PHP/wamp/wamp64/www/itcast/shop/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3084559a65b2be3b458-78244889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0b0c21c90c630508571ea74387b8f2b6a82388' => 
    array (
      0 => 'D:/PHP/wamp/wamp64/www/itcast/shop/Admin/View\\Index\\index.html',
      1 => 1504102172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3084559a65b2be3b458-78244889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59a65b2c0cb41',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a65b2c0cb41')) {function content_59a65b2c0cb41($_smarty_tpl) {?><!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <meta http-equiv=pragma content=no-cache />
        <meta http-equiv=cache-control content=no-cache />
        <meta http-equiv=expires content=-1000 />
        
        <title>管理中心 v1.0</title>
    </head>
    <frameset border=0 framespacing=0 rows="60, *" frameborder=0>
        <!--
        frame标签的src属性值不能设置“相对路径”
        相对地址会收到路由最后一级地址影响而使的请求有可能失败
        -->
        <frame name=head src="<?php echo @__CONTROLLER__;?>
/head.html" frameborder=0 noresize scrolling=no>
            <frameset cols="170, *">
                <frame name=left src=" <?php echo @__CONTROLLER__;?>
/left.html" frameborder=0 noresize />
                <frame name=right src=" <?php echo @__CONTROLLER__;?>
/right.html" frameborder=0 noresize scrolling=yes />
            </frameset>
    </frameset>
    <noframes>
    </noframes>
</html><?php }} ?>