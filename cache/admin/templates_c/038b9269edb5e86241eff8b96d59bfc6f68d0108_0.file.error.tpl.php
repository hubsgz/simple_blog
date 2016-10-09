<?php
/* Smarty version 3.1.30, created on 2016-10-09 13:06:45
  from "/Volumes/macdata/data/www/simple_blog/admin/tpl/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fa40e5322689_69283854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '038b9269edb5e86241eff8b96d59bfc6f68d0108' => 
    array (
      0 => '/Volumes/macdata/data/www/simple_blog/admin/tpl/error.tpl',
      1 => 1476018402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fa40e5322689_69283854 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>错误提示</title>

<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>


<div class="wrapper">

    <div class="container">
        <?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>

    </div>
    
</div>

<?php echo '<script'; ?>
>
setTimeout(function(){
	<?php if (isset($_smarty_tpl->tpl_vars['tourl']->value)) {?>
	   location.href="<?php echo $_smarty_tpl->tpl_vars['tourl']->value;?>
";
	<?php } else { ?>
	   history.go(-1);
	<?php }?>
}, 1000);
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
