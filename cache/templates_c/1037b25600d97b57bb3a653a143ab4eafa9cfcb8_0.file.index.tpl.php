<?php
/* Smarty version 3.1.30, created on 2016-10-09 07:59:12
  from "/Volumes/macdata/data/www/simple_blog/tpl/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f9f8d05e3c01_38504781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1037b25600d97b57bb3a653a143ab4eafa9cfcb8' => 
    array (
      0 => '/Volumes/macdata/data/www/simple_blog/tpl/index.tpl',
      1 => 1475998775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57f9f8d05e3c01_38504781 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<?php echo $_smarty_tpl->tpl_vars['test']->value;?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
