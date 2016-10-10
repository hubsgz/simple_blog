<?php
/* Smarty version 3.1.30, created on 2016-10-10 09:07:22
  from "/Volumes/macdata/data/www/simple_blog/tpl/detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fb5a4aac4cd5_33837194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99996fb4f40af0adad206666039a9bbe381b7ee8' => 
    array (
      0 => '/Volumes/macdata/data/www/simple_blog/tpl/detail.tpl',
      1 => 1476090438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57fb5a4aac4cd5_33837194 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/Volumes/macdata/data/www/simple_blog/inc/smarty/libs/plugins/modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</h2><div class="clr"></div>
          <p><?php echo $_smarty_tpl->tpl_vars['detail']->value['content'];?>
</p>
          <p>  <span>&nbsp;&bull;&nbsp;</span>  <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['detail']->value['addtime'],"%Y-%m-%d");?>
  <span>&nbsp;&bull;&nbsp;</span> </p>
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>文章分类</span> </h2><div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.php?c=1">个人日志</a></li>
            <li><a href="index.php?c=2">网络文摘</a></li>
            <li><a href="index.php?c=3">新闻资讯</a></li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
