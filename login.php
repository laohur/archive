<?php
header('Content-type:text/html;charset=UTF-8');
require_once("config/config.php");
include_once('config/top.php');
$arr1="username,password,phone,email";
$add="insert into `user` ({$arr1}) values (?,?,?,?)";
$stmt=$dbh->prepare($add);

$array=array($_POST["username"],$_POST["password"],$_POST["phone"],$_POST["email"]);
if(!empty($_POST["username"])){
$stmt->execute($array);}

$rows=$stmt->rowCount();
if($rows==1){
	echo "恭喜{$_POST['username']},注册成功! <p>";
	setcookie('username',$_POST['username'],time()+3600*7*24);
	setcookie('password',$_POST['password'],time()+3600*7*24);
}else{
	echo "哈哈,{$_POST['username']}注册失败! <p>";	
}

?>
