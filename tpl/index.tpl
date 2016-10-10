{include file="header.tpl" title=foo}

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
      
        {foreach $list as $item}
        <div class="article">
          <h2>{$item.title}</h2><div class="clr"></div>
          <img src="{$item.img}" width="613" height="154" alt="image" />
          <p>{$item.content|truncate:50:"..."}</p>
          <p class="spec"><a href="detail.php?id={$item.id}" class="rm">更多</a> &nbsp;|&nbsp; <span class="date">{$item.addtime|date_format:"%Y-%m-%d"}</span></p>
        </div>
        {foreachelse}
        暂无数据
        {/foreach}
        
        {if $list}
        <div class="pagebar article">
          {if $page neq 1}
          <span class="item"><a href="index.php?p=1&c={$category}">首页</a></span>
          {/if}
          {if $prepage neq $page}
          <span class="item"><a href="index.php?p={$prepage}&c={$category}">上一页</a></span>
          {/if}
          {if $nextpage neq $page}
          <span class="item"><a href="index.php?p={$nextpage}&c={$category}">下一页</a></span>
          {/if}
          {if $pagecount neq $page}
          <span class="item"><a href="index.php?p={$pagecount}&c={$category}">尾页</a></span>
          {/if}
        </div>
        {/if}
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
