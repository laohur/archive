<?php
if( !empty($_COOKIE['username']) and !empty($_COOKIE['password']) ){
	echo "hello, ".$_COOKIE['username']."! 您已登录!";
	include_once('config/top.php');
}

?>
<!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>用户登陆</title>
</head>
<body>
<h1>用户登陆</h1>

<form enctype="multipart/form-data" action="logon.php" method="post" accept-charset="utf-8" >

	姓名<input type="text" id="username" name="username" value="<?php if(!empty($_COOKIE['username'])){ echo $_COOKIE['username']; }?>" /> 
    密码<input type="password" name="password"  value="<?php if(!empty($_COOKIE['password'])){ echo $_COOKIE['password']; }?>" /><p>
	<input type="submit" name="logon"  value="登陆" />
</form>
</body>
</html>

