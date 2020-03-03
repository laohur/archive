<?php
@header('Content-type: text/html;charset=UTF-8');
include_once("config/config.php");

if(!empty($_GET['taid'])){
	$stmt=$dbh->prepare("select * from transaction where taid=? ");
	$stmt->execute(array($_GET['taid']));
}
if(!empty($_GET['transaction'])){
	$stmt=$dbh->prepare("select * from transaction where transaction=? ");
	$stmt->execute(array($_GET['transaction']));
}

$array=$stmt->fetch();

return $array;
var_dump($array);

?>