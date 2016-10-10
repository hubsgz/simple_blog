<?php
/* Smarty version 3.1.30, created on 2016-10-10 09:09:48
  from "/Volumes/macdata/data/www/simple_blog/tpl/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fb5adc65b5a0_75121305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1037b25600d97b57bb3a653a143ab4eafa9cfcb8' => 
    array (
      0 => '/Volumes/macdata/data/www/simple_blog/tpl/index.tpl',
      1 => 1476090586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57fb5adc65b5a0_75121305 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/Volumes/macdata/data/www/simple_blog/inc/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/Volumes/macdata/data/www/simple_blog/inc/smarty/libs/plugins/modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
      
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <div class="article">
          <h2><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h2><div class="clr"></div>
          <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" width="613" height="154" alt="image" />
          <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['content'],50,"...");?>
</p>
          <p class="spec"><a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="rm">更多</a> &nbsp;|&nbsp; <span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['addtime'],"%Y-%m-%d");?>
</span></p>
        </div>
        <?php
}
} else {
?>

        暂无数据
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        
        <?php if ($_smarty_tpl->tpl_vars['list']->value) {?>
        <div class="pagebar article">
          <?php if ($_smarty_tpl->tpl_vars['page']->value != 1) {?>
          <span class="item"><a href="index.php?p=1&c=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
">首页</a></span>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['prepage']->value != $_smarty_tpl->tpl_vars['page']->value) {?>
          <span class="item"><a href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['prepage']->value;?>
&c=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
">上一页</a></span>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['nextpage']->value != $_smarty_tpl->tpl_vars['page']->value) {?>
          <span class="item"><a href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
&c=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
">下一页</a></span>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['pagecount']->value != $_smarty_tpl->tpl_vars['page']->value) {?>
          <span class="item"><a href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>
&c=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
">尾页</a></span>
          <?php }?>
        </div>
        <?php }?>
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
