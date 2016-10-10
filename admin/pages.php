<?php
require 'inc/AdminCommon.class.php';  //包含后台公共文件
$com = new AdminCommon();
$smarty = $com -> initSmarty();  //初始化smarty
$db = $com -> initDb(); 		//初始化数据库连接

$act = $com->getStrParam('act', 'index');

//读取关于我们页面内容
$pagekey = $com->getStrParam('pagekey');

if ($act == 'index') {
	$sql = "select * from pages where pagekey='$pagekey'";
	$row = $db->getRow($sql);
	$pagecontent = $row['pagecontent'];
	
	$smarty->assign('pagekey', $pagekey);
	$smarty->assign('pagecontent', $pagecontent);
	$smarty->display('pages.tpl');
} elseif ($act == 'save') {
	$pagecontent = $com->getStrParam('pagecontent');
	$sql = "update pages set pagecontent='$pagecontent' where pagekey='$pagekey'";
	$re = $db->query($sql);
	if ($re) {
		$com->showTips('保存成功');
	} else {
		$com->showTips('保存失败');
	}
}
