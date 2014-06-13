<?php
header('Content-type:text/html;charset=UTF-8');
require_once("config/config.php");
$_GET['search']='';
$search= $_GET['search'];

$stmt=$dbh->prepare("select transaction from transaction where transaction like '%".$search."%'");
$stmt->execute();
$a="";
	while($row=$stmt->fetch()){
		$a.="<div class='show' onmouseover='over(this)' onmouseout='out(this) onclick='click(this)'>".$row['transaction']."</div>";
	}
	echo $a;

?>
