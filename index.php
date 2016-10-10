<?php
require 'inc/Common.class.php';  //包含公共文件
$com = new Common();
$smarty = $com -> initSmarty();  //初始化smarty
$db = $com -> initDb(); 		//初始化数据库连接

//当前页
$page = $com->getIntParam('p'); 
$page = $page <=0 ? 1 : $page;

//分类
$category = $com->getIntParam('c');
$where = "";
if ($category>0) {
	$where .= " where category=$category ";
}

//每页显示数量
$pagesize = 1;

//查询文章总数
$sql = "select count(*) as total from article $where";
$row = $db->getRow($sql);
$total = $row['total'];

//查询文章列表
$offset = ($page-1) * $pagesize;
$sql = "select * from article $where limit $offset, $pagesize";
$list = $db->getAll($sql);

//总页数
$pagecount = ceil($total/$pagesize);
//上一页
$prepage = $page - 1;
$prepage = $prepage<1? 1 : $prepage;
//下一页
$nextpage = $page + 1;
$nextpage = $nextpage>$pagecount? $pagecount : $nextpage;


$smarty->assign("list", $list);
$smarty->assign("pagecount", $pagecount);
$smarty->assign("prepage", $prepage);
$smarty->assign("nextpage", $nextpage);
$smarty->assign("page", $page);
$smarty->assign("category", $category);
$smarty->assign("nav_position", 'index');
$smarty->display('index.tpl');
