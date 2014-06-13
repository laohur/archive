<?php
header('Content-type: text/html;charset=UTF-8');
require_once('config/config.php');
include_once('config/top.php');

if(empty($_GET['taid'])){
	$_GET['taid']=1;
}
//获取原始结果
$stmt=$dbh->prepare("select * from transaction where taid= '".$_GET['taid']."' ");
$stmt->execute();
$allrow=$stmt->fetch();
if( !empty($_COOKIE['username']) and ($_COOKIE['username']==$allrow['author'] or $_COOKIE['username']==$allrow['auditor']) ){	$authority=true;}else{$authority=false;}
?>

<!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>&nbsp;&nbsp;<?php echo $allrow["transaction"]; ?>分录登记表</title>
	
</head>

<body>


<h1><?php echo $allrow["transaction"]; ?>分录登记表</h1>
<form enctype="multipart/form-data" action='insert.php' method="post" >
	业务名称<input type="text" name="transaction" valign="middle" placeholder="差旅费" value="<?php echo $allrow['transaction']; ?>" /><p>
	业务简介<textarea type="text" name="synopsis"  ><?php echo $allrow['synopsis']; ?></textarea>
   	关联业务<textarea type="text" name="a_transactions" ><?php echo $allrow['a_transactions']; ?></textarea><p>
    涉及关键词<textarea name="i_keywords" cols="18" rows="3" type="text"><?php echo $allrow['i_keywords']; ?></textarea>
    关联关键词<textarea name="a_keywords" cols="18" rows="3" type="text" ><?php echo $allrow['a_keywords']; ?></textarea><p>
    涉及问题<textarea type="text" name="i_questions" ><?php echo $allrow['i_questions']; ?></textarea>
    关联问题<textarea type="text" name="a_questions" ><?php echo $allrow['a_questions']; ?></textarea><br>
    涉及账户<textarea type="text" name="i_accounts" ><?php echo $allrow['i_accounts']; ?></textarea>
    关联账户<textarea type="text" name="a_accounts" ><?php echo $allrow['a_accounts']; ?></textarea><p>
    
    业务介绍<textarea name="introduction" cols="50" type="text" ><?php echo $allrow['introduction']; ?></textarea><br>
    业务案例<textarea name="example" cols="50" type="text" ><?php echo $allrow['example']; ?></textarea><p>
    
<fieldset><legend>分录</legend>
	分录一摘要<input type="text" name="description1"  value="<?php echo $allrow['description1']; ?>"  />
    借一<textarea id="editor" name="debit1" ><?php echo $allrow['debit1']; ?></textarea>
    贷一<textarea type="text" name="credit1" ><?php echo $allrow['credit1']; ?></textarea> <br>  
 	分录二摘要<input type="text" name="description2" value="<?php echo $allrow['description2']; ?>"  /> 
    借二<textarea type="text" name="debit2" ><?php echo $allrow['debit2']; ?></textarea> 
    贷二<textarea type="text" name="credit2" ><?php echo $allrow['credit2']; ?></textarea> <br>
    分录三摘要<input type="text" name="description3"  value="<?php echo $allrow['description3']; ?>" />
    借三<textarea type="text" name="debit3" ><?php echo $allrow['debit3']; ?></textarea> 
    贷三<textarea type="text" name="credit3" ><?php echo $allrow['credit3']; ?></textarea>  <p>   
    分录四摘要<input type="text" name="description4"  value="<?php echo $allrow['description4']; ?>" />
    借四<textarea type="text" name="debit4" ><?php echo $allrow['debit4']; ?></textarea>
    贷四<textarea type="text" name="credit4" ><?php echo $allrow['credit4']; ?></textarea> <br>
    分录五摘要<input type="text" name="description5"  value="<?php echo $allrow['description5']; ?>" />
    借五<textarea type="text" name="debit5" ><?php echo $allrow['debit5']; ?></textarea> 
    贷五<textarea type="text" name="credit5" ><?php echo $allrow['credit5']; ?></textarea> <br>
    分录六摘要<input type="text" name="description6"  value="<?php echo $allrow['description6']; ?>" />
    借六<textarea type="text" name="debit6" ><?php echo $allrow['debit6']; ?></textarea> 
    贷六<textarea type="text" name="credit6" ><?php echo $allrow['credit6']; ?></textarea> <p>
</fieldset><br>
        
    计算<textarea type="text" name="calculation" ><?php echo $allrow['calculation']; ?></textarea>
    解释<textarea type="text" name="explanation" ><?php echo $allrow['explanation']; ?></textarea>
    参考<textarea name="reference" ><?php echo $allrow['reference']; ?></textarea><br>
    建议<input type="text" name="advises" value="<?php echo $allrow['advises']; ?>" />
    评论<input type="text" name="comments" value="<?php echo $allrow['comments']; ?>" /><br>
    
    作者<input type="text" name="author" value="<?php echo $allrow['author']; ?>" />添加于<?php echo $allrow['createtime'];$_POST['createtime']=$allrow['createtime']; ?>
    审核<input type="text" name="auditor" value="<?php echo $allrow['auditor']; ?>" />编辑于<?php echo $allrow['updatetime'];  ?><p>
    
	<input type="radio" name="way" value="add" />添加	
	<input type="radio" name="way" value="modify" />修改	

	<?php if($authority==true){echo '<input name="submit" type="submit" >';}else{ echo "作者或者审核才能编辑!"; }  ?>
</form>

</body>
</html>;
