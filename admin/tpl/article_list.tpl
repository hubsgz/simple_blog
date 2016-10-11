
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="description" content="Creating Modal Window with Twitter Bootstrap">
<link href="/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="Css/style.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/ckform.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    
    {literal}
    <style type="text/css">
        body {
            padding-bottom: 40px;
            background-color:#e9e7ef;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }
    </style>
    {/literal}
</head>
<body>
<form class="form-inline definewidth m20" action="" method="get">
    <font color="#33ccff"><strong>分类：</strong></font>
        <select name="c">
               <option value="-1">全部</option>
               <option value="1" {if $category eq 1}selected="selected"{/if}>个人日志</option>
               <option value="2" {if $category eq 2}selected="selected"{/if}>网络文摘</option>
               <option value="3" {if $category eq 3}selected="selected"{/if}>新闻资讯</option>
        </select>
    <button type="submit" class="btn btn-primary">查询</button>
</form>
    <table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>标题</th>
        <th>内容</th>
        <th>发布时间</th>
        <th>图片</th>
        <th>修改</th>
        <th>删除</th>
    </tr>
    </thead>
        {foreach $list as $item}
        <tr>
                <td>{$item.title}</td>
                <td>{$item.content|truncate:10:"..."}</td>
                <td>{$item.addtime|date_format:"%Y-%m-%d"}</td>
                <td><img src="../{$item.pic}" style="width:613px; height:154px" alt="image" /></td>
                <td><a href="?act=edit&id={$item.id}">修改</a></td>
                <td><a onclick="delarticle({$item.id});" href="#">删除</a></td>
        </tr>
        {/foreach}
   </table>
    {if $list}
    <div class="pagebar article">
      {if $page neq 1}
      <span class="item"><a href="article.php?p=1&c={$category}">首页</a></span>
      {/if}
      {if $prepage neq $page}
      <span class="item"><a href="article.php?p={$prepage}&c={$category}">上一页</a></span>
      {/if}
      {if $nextpage neq $page}
      <span class="item"><a href="article.php?p={$nextpage}&c={$category}">下一页</a></span>
      {/if}
      {if $pagecount neq $page}
      <span class="item"><a href="article.php?p={$pagecount}&c={$category}">尾页</a></span>
      {/if}
    </div>
    {/if}
</body>
</html>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script src="js/bootstrap-popover.js"></script>
{literal}
<script>
$(function ()
{ $("#xiangqing").popover();
});

function delarticle(id)
{
	if(confirm('删除后不可恢复,确定要删除吗?')){
		location.href="?act=del&id="+id;
	}
}
</script>
{/literal}
