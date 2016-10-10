<?php
require 'inc/Common.class.php';  //包含公共文件
$com = new Common();
$smarty = $com -> initSmarty();  //初始化smarty
$db = $com -> initDb(); 		//初始化数据库连接

//获取页面键值
$pagekey = $com->getStrParam('k'); 

//查询页面内容
$sql = "select * from pages where pagekey='$pagekey' ";
$detail = $db->getRow($sql);

if (!$detail) {
	die('页面不存在!!<a href="index.php">回首页</a>');
}

if ($pagekey == 'aboutus') {
	$title = "关于我们";
} else {
	$title = "联系我们";
}

$smarty->assign("title", $title);
$smarty->assign("pagecontent", $detail['pagecontent']);
$smarty->assign("nav_position", $pagekey);
$smarty->display('pages.tpl');
