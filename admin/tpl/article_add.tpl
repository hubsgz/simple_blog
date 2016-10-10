
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="Css/style.css" />
    <script type="text/javascript" src="Js/jquery.js"></script>
    <script type="text/javascript" src="Js/bootstrap.js"></script>
    <script type="text/javascript" src="Js/ckform.js"></script>
    <script type="text/javascript" src="Js/common.js"></script>
    <script type="text/javascript" src="js/showdate.js"></script>
    
    
    <script type="text/javascript" charset="utf-8" src="http://ueditor.baidu.com/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://ueditor.baidu.com/ueditor/ueditor.all.js"></script>
    
    
    {literal}
    <style type="text/css">
        body {font-size: 20px;
             padding-bottom: 40px;
             background-color:#e9e7ef;
             font-size:17px;
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
<form action="" method="post" enctype="multipart/form-data">
<table class="table table-bordered table-hover definewidth m10" style="margin-left:3%;margin-top:2%;">
    <tr>
        <td width="10%" class="tableleft">标题</td>
        <td><input type="text" name="title" style="height: 41px; width: 546px"/></td>
     
    </tr>
    <tr>
        <td class="tableleft">内容</td>
        <td style="width:80%;">
        <!--style给定宽度可以影响编辑器的最终宽度-->
            <script type="text/plain" id="content" name="content">
            </script>
        </td>
    </tr> 
    <tr>
        <td class="tableleft">分类</td>
        <td>
        <select name="category">
               <option value="1">个人日志</option>
               <option value="2">网络文摘</option>
               <option value="3">新闻资讯</option>
        </select>
        </td>
    </tr> 
    <tr>
        <td class="tableleft">图片</td>
        <td><input type="file" name="pic" value="选择图片"/></td>
    </tr> 
    <tr>
        <td class="tableleft"></td>
        <td>
            <input type="hidden" name="act" value="add_submit"/>
            <button style="margin-left:180px;"type="submit" class="btn btn-primary" type="button">保存</button>&nbsp;&nbsp;
            <button type="button" ><a href="article.php">返回列表</a></button>
        </td>
    </tr>
</table>
</form>
</body>
</html>
{literal}
<script>
function jump(){
 window.location.href="placardQuery.html";
}

UE.getEditor('content');
</script>
{/literal}