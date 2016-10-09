<?php
require 'inc/AdminCommon.class.php';  //包含后台公共文件
$com = new AdminCommon(false);
$smarty = $com -> initSmarty();  //初始化smarty
$db = $com -> initDb(); 		//初始化数据库连接


$act = $com->getStrParam('act', 'index');

if ($act == 'index') {
	$smarty->assign('title', '登陆');
	$smarty->display('login.tpl');
} elseif ($act == 'login') {
	$username = $com->getStrParam('username');
	$password = $com->getStrParam('password');
	
	if ($username && $password) {
		$password = md5($password);
		$sql = "select * from user where username='$username' and password='$password'";
		$arr = $db->getRow($sql);
		
		if (!empty($arr)) {
			//登陆成功
			$_SESSION['username'] = $username;
			$smarty->assign('tip_msg', '登陆成功');
			$smarty->assign('tourl', 'index.php');
			$smarty->display('tip.tpl');
			exit;
		} else {
			$smarty->assign('tip_msg', '用户名或密码有误');
			///$smarty->assign('tourl', 'login.php');
			$smarty->display('tip.tpl');
			exit;
		}
	} else {
		$smarty->assign('tip_msg', '用户名或密码为空');
		//$smarty->assign('tourl', 'login.php');
		$smarty->display('tip.tpl');
		exit;
	}
	 
} elseif ($act == 'logout') {
	$_SESSION['username'] = '';
	$smarty->assign('tip_msg', '退出成功');
	//$smarty->assign('tourl', 'login.php');
	$smarty->display('tip.tpl');
	exit;
}

