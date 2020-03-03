<?php
@header('Content-type: text/html;charset=UTF-8');
require_once("config/config.php");
$fields="transaction,synopsis,a_transactions,i_keywords,a_keywords,i_questions,a_questions,i_accounts,a_accounts,introduction,example,description1,debit1,credit1,description2,debit2,credit2,description3,debit3,credit3,description4,debit4,credit4,description5,debit5,credit5,description6,debit6,credit6,calculation,explanation,reference,advises,comments,author,createtime,auditor,updatetime";

$post=array($_POST["transaction"],$_POST["synopsis"],$_POST["a_transactions"],$_POST["i_keywords"],$_POST["a_keywords"],$_POST["i_questions"],$_POST["a_questions"],$_POST["i_accounts"],$_POST["a_accounts"],$_POST["introduction"],$_POST["example"],$_POST["description1"],$_POST["debit1"],$_POST["credit1"],$_POST["description2"],$_POST["debit2"],$_POST["credit2"],$_POST["description3"],$_POST["debit3"],$_POST["credit3"],$_POST["description4"],$_POST["debit4"],$_POST["credit4"],$_POST["description5"],$_POST["debit5"],$_POST["credit5"],$_POST["description6"],$_POST["debit6"],$_POST["credit6"],$_POST["calculation"],$_POST["explanation"],$_POST["reference"],$_POST["advises"],$_POST["comments"],$_POST["author"],$_POST['createtime'],$_POST["auditor"],date("Y-m-d H:i:s"));
if($_POST['way']=='add'){
	$sql="insert into `transaction` ({$fields}) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
}
if($_POST['way']=='modify'){
	$sql="update `transaction` set ({$fields}) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
}
$stmt=$dbh->prepare($sql);
$stmt->execute($post);
$rows=$stmt->rowCount();
if($rows==1){
	echo "²åÈë{$_POST['transaction']}³É¹¦!";
	print_f($post);
}

?>
