<?php
		include_once('config/top.php');
?>
<!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>业务分录搜索表</title>
       <script>
           var xmlHttp;
	function createXMLHttpRequest(){
		if(window.XMLHttpRequest){
				xmlHttp = new XMLHttpRequest();
			}else if(window.ActiveXObject){
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
		}
        function check(obj){
            createXMLHttpRequest();
            var values = obj.value;
            var url = "search.php?value="+values+"&time="+new Date().getTime();
            xmlHttp.onreadystatechange=function(){
                if(xmlHttp.readyState == 4){
					if(xmlHttp.responseText){
                    document.getElementById("showTime").innerHTML=xmlHttp.responseText;
                    document.getElementById("showTime").style.display ='block';
					}
                }
            }
            xmlHttp.open('get',url,false);
            xmlHttp.send(null);
            
        }
		function over(obj){
			obj.style.background = '#cccccc';
			obj.style.color = '#ffffff';
			obj.style.cursor = 'hand';
		}
		function out(obj){
			obj.style.background = '#ffffff';
			obj.style.color = '#cccccc';
			obj.style.cursor = 'hand';
		}
		function click(obj){
			document.getElementById('search').value = obj.innerHTML;
			document.getElementById("showTime").style.display ='none';
		}
       </script>
</head>
<body>
<h1>业务分录搜索表</h1>
<form enctype="multipart/form-data" action='list.php' method="get" >
            
	请输入关键字：<input type="search" name="search" x-webkit-speech x-webkit-speech lang="zh-CN" x-webkit-grammar="bUIltin:search" placeholder="键入搜索词" id='search' oninput="check(this)">
	<div id="showTime" style="display:none;"></div>

    <p><input type="radio" checked="checked" name="field" value="transaction" />业务
	<input type="radio" name="field" value="synopsis" />简介
	<input type="radio" name="field" value="i_keywords" />涉及关键词
	<input type="radio" name="field" value="i_accounts" />涉及账户	
	<input type="radio" name="field" value="author" />作者	

    <input name="submit" type="submit" id="submit" value="提交">
</form>

</body>
</html>
