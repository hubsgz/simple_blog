<?php
require 'inc/AdminCommon.class.php';  //包含后台公共文件
$com = new AdminCommon();
$smarty = $com -> initSmarty();  //初始化smarty
$db = $com -> initDb(); 		//初始化数据库连接




$smarty->assign('title', '后台首页');
$smarty->assign('username', $_SESSION['username']);
$smarty->display('index.tpl');