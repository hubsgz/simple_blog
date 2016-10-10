<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>php入门教程-幽戏出品</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="index.php"><small>我的第一个博客 </small><span>php入门</span>博客</a></h1></div>
      <div class="menu_nav">
        <ul>
          <li {if $nav_position eq 'index'}class="active"{/if}><a href="index.php"><span><span>首页</span></span></a></li>
          <li {if $nav_position eq 'aboutus'}class="active"{/if}><a href="pages.php?k=aboutus"><span><span>关于我们</span></span></a></li>
          <li {if $nav_position eq 'contactus'}class="active"{/if}><a href="pages.php?k=contactus"><span><span>联系我们</span></span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="hbg">&nbsp;</div>