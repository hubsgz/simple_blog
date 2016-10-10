{include file="header.tpl" title=foo}

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>{$detail.title}</h2><div class="clr"></div>
          <p>{$detail.content}</p>
          <p>  <span>&nbsp;&bull;&nbsp;</span>  {$detail.addtime|date_format:"%Y-%m-%d"}  <span>&nbsp;&bull;&nbsp;</span> </p>
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>文章分类</span> </h2><div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.php?c=1">个人日志</a></li>
            <li><a href="index.php?c=2">网络文摘</a></li>
            <li><a href="index.php?c=3">新闻资讯</a></li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>

{include file="footer.tpl"}
