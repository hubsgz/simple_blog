
<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>错误提示</title>

<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>


<div class="wrapper">

    <div class="container">
        {$tip_msg}
    </div>
    
</div>

<script>
setTimeout(function(){
	{if isset($tourl) and !empty($tourl)}
	   location.href="{$tourl}";
	{else}
	   history.go(-1);
	{/if}
}, 1000);
</script>

</body>
</html>