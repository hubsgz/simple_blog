<?php
/* Smarty version 3.1.30, created on 2016-10-10 09:19:53
  from "/Volumes/macdata/data/www/simple_blog/tpl/pages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fb5d39e23766_00457588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e010e64c44d8e36061fdfa08869b8e190e1309cf' => 
    array (
      0 => '/Volumes/macdata/data/www/simple_blog/tpl/pages.tpl',
      1 => 1476091187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57fb5d39e23766_00457588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span></h2><div class="clr"></div>
          <p> <?php echo $_smarty_tpl->tpl_vars['pagecontent']->value;?>
</p>
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
