
<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>博客登陆</title>

<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>


<div class="wrapper">

    <div class="container">
        <h1>入门博客 后台管理</h1>
        <form class="form" method="post" action="login.php">
            <input type="hidden" name="act" value="login">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password"><br>
            <button type="submit" id="login-button"><strong>登陆</strong></button>
        </form>
    </div>
    
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        
    </ul>
    
</div>



</body>
</html>