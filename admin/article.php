<?php
require 'inc/AdminCommon.class.php';  //包含后台公共文件
$com = new AdminCommon();
$smarty = $com -> initSmarty();  //初始化smarty
$db = $com -> initDb(); 		//初始化数据库连接


$act = $com->getStrParam('act', 'list');

if ($act == 'add') { 	//添加文章
	$smarty->display('article_add.tpl');
} elseif ($act == 'add_submit') { //文章添加提交入库
	
	//接收参数
	$title = $com->getStrParam('title');
	$content = $com->getStrParam('content');
	$category = $com->getStrParam('category');
	
	//参数验证
	if ($title == '') {
		$com->showTips('标题为空');
	}
	if ($content == '') {
		$com->showTips('内容为空');
	}
	
	//获取上传图片信息
	$pic = $_FILES['pic'];
	if ($pic['error'] > 0) {
		$com->showTips('请选择图片');
	}
	
	//得到文件名称
	$pic_name = $pic['name'];
	
	//得到文件类型，并且都转化成小写
	$arr = explode('.', $pic_name);
	$type = strtolower(end($arr));
	
	//定义允许上传的类型
	$allow_type = array('jpg','jpeg','gif','png');
	
	//判断文件类型是否被允许上传
	if(!in_array($type, $allow_type)){
		$com->showTips('不合法的图片类型');
		return;
	}
	
	//上传文件的存放路径
	$upload_path = 'upload/';
	$new_pic_name = time() . '.' . $type;
	
	//开始移动文件到相应的文件夹
	if (move_uploaded_file($pic['tmp_name'], ROOT_PATH . $upload_path . $new_pic_name)) {
		
		$pic = $upload_path . $new_pic_name;
		$addtime = time();
		$sql = "insert into article (title, content, category, addtime, pic) values ('$title', '$content', '$category', $addtime, '$pic')";
		$re = $db->query($sql);
		
		if ($re) {
			$com->showTips('保存成功', 'article.php');
		} else {
			$com->showTips('保存失败');
		}
	}else{
		$com->showTips('图片上传失败');
	}
	
} elseif ($act == 'list') { //文章列表
	
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
	$pagesize = 5;
	
	//查询文章总数
	$sql = "select count(*) as total from article $where";
	$row = $db->getRow($sql);
	$total = $row['total'];
	
	//查询文章列表
	$offset = ($page-1) * $pagesize;
	$sql = "select * from article $where order by addtime desc limit $offset, $pagesize";
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
	
	$smarty->display('article_list.tpl');

} elseif ($act == 'edit') { //文章修改
	//获取文章id
	$id = $com->getIntParam('id');
	
	if ($id<=0) {
		$com->showTips('错误的id');
	}
	
	//查询文章详细信息
	$sql = "select * from article where id=$id ";
	$detail = $db->getRow($sql);
	
	if (!$detail) {
		$com->showTips('文章不存在');
	}
	
	$smarty->assign("detail", $detail);
	$smarty->display('article_edit.tpl');
	
} elseif ($act == 'edit_submit') {
	
	//接收参数
	$id = $com->getIntParam('id');
	$title = $com->getStrParam('title');
	$content = $com->getStrParam('content');
	$category = $com->getStrParam('category');
	
	//参数验证
	if ($id<=0) {
		$com->showTips('错误的id');
	}
	if ($title == '') {
		$com->showTips('标题为空');
	}
	if ($content == '') {
		$com->showTips('内容为空');
	}
	
	$newpic = '';
	
	//获取上传图片信息
	$pic = $_FILES['pic'];
	if ($pic['error'] == 0) {
		
		//得到文件名称
		$pic_name = $pic['name'];
		
		//得到文件类型，并且都转化成小写
		$arr = explode('.', $pic_name);
		$type = strtolower(end($arr));
		
		//定义允许上传的类型
		$allow_type = array('jpg','jpeg','gif','png');
		
		//判断文件类型是否被允许上传
		if(!in_array($type, $allow_type)){
			$com->showTips('不合法的图片类型');
			return;
		}
		
		//上传文件的存放路径
		$upload_path = 'upload/';
		$new_pic_name = time() . '.' . $type;
		
		//开始移动文件到相应的文件夹
		if (move_uploaded_file($pic['tmp_name'], ROOT_PATH . $upload_path . $new_pic_name)) {
			$newpic = $upload_path . $new_pic_name;
		}
	}
	
	$sql = "update article set title='$title', content='$content', category='$category'";
	if ($newpic) {
		$sql .= " , pic='$newpic' ";	
	}
	$sql .= " where id=$id ";
	$re = $db->query($sql);
	if ($re) {
		$com->showTips('保存成功', 'article.php');
	} else {
		$com->showTips('保存失败');
	}
} elseif ($act == 'del') { //删除文章
	//接收参数
	$id = $com->getIntParam('id');
	
	if ($id<=0) {
		$com->showTips('错误的id');
	}
	
	$sql = "delete from article where id=$id";
	
	$re = $db->query($sql);
	if ($re) {
		$com->showTips('删除成功', 'article.php');
	} else {
		$com->showTips('删除失败');
	}
}

