<?php /* Smarty version Smarty-3.1.6, created on 2017-10-30 14:13:02
         compiled from "D:/wamp64/www/itcast/shop/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2802859f6c2ee568e06-98234973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6728e3df74739d3e5287814c0868a0240d2cb405' => 
    array (
      0 => 'D:/wamp64/www/itcast/shop/Admin/View\\Index\\index.html',
      1 => 1504102172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2802859f6c2ee568e06-98234973',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f6c2ee72d0e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f6c2ee72d0e')) {function content_59f6c2ee72d0e($_smarty_tpl) {?><!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
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