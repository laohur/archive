<?php
@header('Content-type: text/html;charset=UTF-8');


$db=new PDO("mysql:host=localhost;dbname=assistant;charset=utf8","root","root")or die(print_r($db->errorInfo(),true));
$insert="insert into `transactions` ($fields) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt=$db->prepare($insert);
$stmt->execute($post);
?>
