<?php
header('Content-type:text/html;charset=UTF-8');
require_once("config/config.php");

$stmt=$dbh->prepare("select * from user where username=(:username)");
$stmt->bindParam(':username',$_POST["username"]);

$stmt->execute();
$row=$stmt->rowCount();

if($_GET['action']=="checkUserName"){
    if(
        $row==1
    ){
        echo 1;
    }else{
        echo 0;
    }
}

?>
