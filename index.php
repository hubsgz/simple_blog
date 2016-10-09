<?php
require 'inc/Common.class.php';  //包含公共文件
$com = new Common();
$smarty = $com -> initSmarty();  //初始化smarty
$db = $com -> initDb(); 		//初始化数据库连接


$sql = "select * from user";
$arr = $db->getAll($sql);
print_r($arr);

$arr = $db->getRow($sql);
print_r($arr);

$smarty->assign("test", "test");
$smarty->display('index.tpl');
