<?php
header('Content-type:text/html;charset=UTF-8');
require_once("config/config.php");
include("./config/top.php");


$stmt=$dbh->prepare("select password from user where username=(:username)");
$stmt->bindParam(':username',$_POST["username"]);
$stmt->execute();
$rows=$stmt->rowCount();
if($rows==1){
	$row=$stmt->fetch();
	var_dump($row);
}

if( !empty($_POST['password']) and !empty($row['password']) and $_POST['password']==$row['password']){
	echo "恭喜{$_POST['username']},登陆成功! <p>";
	setcookie('username',$_POST['username'],time()+3600);
	setcookie('password',$_POST['password'],time()+3600);
}else{
	echo "哈哈,{$_POST['username']}登陆失败! <p>";	
}

?>
