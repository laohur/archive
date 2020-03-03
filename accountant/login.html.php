<!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>用户注册</title>

</head>
<body>
	<?php
		include_once ("config/top.php");
	?>
<h1>用注册户</h1>

<form enctype="multipart/form-data" action="login.php" method="post" accept-charset="utf-8" >

	    姓名<input type="text" id="username" name="username"  /> <span id="result"></span><br>
<script type="text/javascript">
document.getElementById("username").onblur=function(){  // 输入框失去焦点
    var thisNode=this;
    var span=document.getElementById("result");
    var xmlhttp;
    try{
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }catch(e){
        // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState<4){  // 正在交互
            span.style.color="blue";
            span.innerHTML="正在检测...";
        }
        if (xmlhttp.readyState==4 && xmlhttp.status==200){  // 请求成功
            if(parseInt(xmlhttp.responseText)){  // 将服务器返回的数据转换为整数
            span.style.color="red";
                span.innerHTML="哈哈,这个名字被抢注了！";
            }else{
            span.style.color="green";
                span.innerHTML="恭喜你，有一个独一无二的名字！";
            }
        }
    }
    xmlhttp.open("POST","checkname.php?action=checkUserName",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("username="+thisNode.value);
}
</script>
    密码<input type="password" name="password"  /><br>
    电话<input type="text" name="phone"  /><br>
    mail<input type="text" name="email"  /><p>
	<input type="submit" name="login"  value="注册" />

</form>
</body>
</html>

