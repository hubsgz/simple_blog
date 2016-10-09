<?php
/* Smarty version 3.1.30, created on 2016-10-09 13:09:37
  from "/Volumes/macdata/data/www/simple_blog/admin/tpl/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fa4191bdc415_13526615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e8885fc0f5a90be80373efeeb95e0bb1e207185' => 
    array (
      0 => '/Volumes/macdata/data/www/simple_blog/admin/tpl/login.tpl',
      1 => 1476018571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fa4191bdc415_13526615 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>博客登陆</title>

<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>


<div class="wrapper">

    <div class="container">
        <h1>入门博客 后台管理</h1>
        <form class="form" method="post" action="login.php">
            <input type="hidden" name="act" value="login">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password"><br>
            <button type="submit" id="login-button"><strong>登陆</strong></button>
        </form>
    </div>
    
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        
    </ul>
    
</div>



</body>
</html><?php }
}
