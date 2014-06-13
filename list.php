<?php
header('Content-type:text/html;charset=UTF-8');
require_once("config/config.php");
$search=$_GET['search'];
$field=$_GET['field'];

$stmt=$dbh->prepare("select * from transaction where '".$field."' like '%".$search."%'");
$stmt->execute();

	while($row=$stmt->fetch()){
		echo "<a href='transaction.php?taid=".$row['taid']."'>".$row['transaction']."</a><br>";
		echo($row);
		echo "<br>";
	}
?>
