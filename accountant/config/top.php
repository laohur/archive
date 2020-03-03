<?php
@header('Content-type:text/html;charset=UTF-8');

echo '<a href="./navigator.html">导航</a> <a href="./login.html.php">注册</a> <a href="./logon0.php">登陆</a> <a href="./api.html.php">API</a> <a href="./transaction.php">业务</a> <a href="./search.html.php">搜索</a><p>';

if( !empty($_COOKIE['username'])){
	echo "欢迎 ".$_COOKIE['username']." !<p>";
}else{
	echo "请点击上方登录!";
}
