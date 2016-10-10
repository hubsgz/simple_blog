<?php
require 'inc/Common.class.php';  //包含公共文件
$com = new Common();
$smarty = $com -> initSmarty();  //初始化smarty
$db = $com -> initDb(); 		//初始化数据库连接

//获取文章id
$id = $com->getIntParam('id'); 

//查询文章总数
$sql = "select * from article where id=$id ";
$detail = $db->getRow($sql);

$smarty->assign("detail", $detail);
$smarty->display('detail.tpl');
