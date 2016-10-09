<?php
/* Smarty version 3.1.30, created on 2016-10-09 13:20:44
  from "/Volumes/macdata/data/www/simple_blog/admin/tpl/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fa442cb4c1e6_02590504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c27d3f9935fdb03430077c734295d27f72da6d0' => 
    array (
      0 => '/Volumes/macdata/data/www/simple_blog/admin/tpl/index.tpl',
      1 => 1476019242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57fa442cb4c1e6_02590504 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 
<a href="login.php?act=logout">退出</a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
