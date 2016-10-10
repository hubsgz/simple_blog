<?php
/* Smarty version 3.1.30, created on 2016-10-10 09:23:03
  from "/Volumes/macdata/data/www/simple_blog/tpl/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fb5df74c5f74_03665082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d437b4fed0f469d582deffbd51c6c78f42834e' => 
    array (
      0 => '/Volumes/macdata/data/www/simple_blog/tpl/header.tpl',
      1 => 1476091357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fb5df74c5f74_03665082 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>php入门教程-幽戏出品</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />

<?php echo '<script'; ?>
 type="text/javascript" src="js/cufon-yui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/arial.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/cuf_run.js"><?php echo '</script'; ?>
>
<!-- CuFon ends -->
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="index.php"><small>我的第一个博客 </small><span>php入门</span>博客</a></h1></div>
      <div class="menu_nav">
        <ul>
          <li <?php if ($_smarty_tpl->tpl_vars['nav_position']->value == 'index') {?>class="active"<?php }?>><a href="index.php"><span><span>首页</span></span></a></li>
          <li <?php if ($_smarty_tpl->tpl_vars['nav_position']->value == 'aboutus') {?>class="active"<?php }?>><a href="pages.php?k=aboutus"><span><span>关于我们</span></span></a></li>
          <li <?php if ($_smarty_tpl->tpl_vars['nav_position']->value == 'contactus') {?>class="active"<?php }?>><a href="pages.php?k=contactus"><span><span>联系我们</span></span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="hbg">&nbsp;</div><?php }
}
