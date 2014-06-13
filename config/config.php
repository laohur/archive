<?php
header('Content-type:text/html;charset=UTF-8');
$dbh=new PDO("mysql:host=localhost;dbname=account;charset=utf8","root","root",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING))or die(print_r($db->errorInfo(),true));

define("APPROOT","http://localhost/account/");
?>
