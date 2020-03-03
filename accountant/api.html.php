<?php	include_once('config/top.php');
?>
<!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>API说明文档</title>
</head>
<body>
<h1>API说明文档</h1>
	API格式为 "http://localhost/account/api.php?field=value".<br>
	例如"http://localhost/account/api.php?taid=1". <br>
	field是选择查询字段,优先是业务编号taid,也可以是业务名称transaction."<a href="http://localhost/account/api.php?transaction=差旅费" target="new">http://localhost/account/api.php?transaction=差旅费</a>".<br>
	返回字段是 一个PHP数组.因为PHP数组效率最高,欲使用json的朋友可以json_encode().<br>
	示例:"<a href="http://localhost/account/api.php?taid=1" target="new">http://localhost/account/api.php?taid=1</a>". 试试?<p>
<section>

	array(80) { ["taid"]=> string(1) "1" [0]=> string(1) "1" ["transaction"]=> string(9) "差旅费" [1]=> string(9) "差旅费" ["synopsis"]=> string(33) "员工出差,借差旅费,报销." [2]=> string(33) "员工出差,借差旅费,报销." ["a_transactions"]=> string(12) "员工报销" [3]=> string(12) "员工报销" ["i_keywords"]=> string(45) "差旅费 出借差旅费 员工出差 出差" [4]=> string(45) "差旅费 出借差旅费 员工出差 出差" ["a_keywords"]=> string(12) "管理费用" [5]=> string(12) "管理费用" ["i_questions"]=> string(31) "员工借差旅费怎么分录?" [6]=> string(31) "员工借差旅费怎么分录?" ["a_questions"]=> string(25) "管理费用怎么分录?" [7]=> string(25) "管理费用怎么分录?" ["i_accounts"]=> string(28) "其他应收款 库存现金" [8]=> string(28) "其他应收款 库存现金" ["a_accounts"]=> string(12) "管理费用" [9]=> string(12) "管理费用" ["introduction"]=> string(783) "员工出差报销. 出差人员回到单位后应及时办理差旅费的报销手续。首先，出差人员到财务部门领取差旅费报销单，如实填写报销单的有关内容，如出差事由，出发到达的时间、地点，乘坐的交通工具的车别、等级、金额等等，并将有关车票、船票、飞机票、住宿发票等有关原始凭证粘贴在报销单的背后，经所在部门和单位有关领导审查签字后，送财务部门，财务部门有关人员应审查单据是否真实、合法，按照本单位差旅费开支管理办法计算应报销的交通费金额、应发给的伙食补助费、住宿费包干结余、不买卧铺补贴等，对差旅费进行结算，编制会计凭证后交出纳员具体办理现金收付。" [10]=> string(783) "员工出差报销. 出差人员回到单位后应及时办理差旅费的报销手续。首先，出差人员到财务部门领取差旅费报销单，如实填写报销单的有关内容，如出差事由，出发到达的时间、地点，乘坐的交通工具的车别、等级、金额等等，并将有关车票、船票、飞机票、住宿发票等有关原始凭证粘贴在报销单的背后，经所在部门和单位有关领导审查签字后，送财务部门，财务部门有关人员应审查单据是否真实、合法，按照本单位差旅费开支管理办法计算应报销的交通费金额、应发给的伙食补助费、住宿费包干结余、不买卧铺补贴等，对差旅费进行结算，编制会计凭证后交出纳员具体办理现金收付。" ["example"]=> string(54) "小辉借款3000元出差.花了2000元,还剩1000元." [11]=> string(54) "小辉借款3000元出差.花了2000元,还剩1000元." ["description1"]=> string(18) "借款给员工时" [12]=> string(18) "借款给员工时" ["debit1"]=> string(38) "其他应收款-差旅费(小辉) 3000" [13]=> string(38) "其他应收款-差旅费(小辉) 3000" ["credit1"]=> string(17) "库存现金 3000" [14]=> string(17) "库存现金 3000" ["description2"]=> string(9) "报销时" [15]=> string(9) "报销时" ["debit2"]=> string(36) "管理费用 2000 库存现金 1000" [16]=> string(36) "管理费用 2000 库存现金 1000" ["credit2"]=> string(20) "其他应收款 3000" [17]=> string(20) "其他应收款 3000" ["description3"]=> NULL [18]=> NULL ["debit3"]=> string(0) "" [19]=> string(0) "" ["credit3"]=> string(0) "" [20]=> string(0) "" ["description4"]=> NULL [21]=> NULL ["debit4"]=> string(0) "" [22]=> string(0) "" ["credit4"]=> string(0) "" [23]=> string(0) "" ["description5"]=> NULL [24]=> NULL ["debit5"]=> string(0) "" [25]=> string(0) "" ["credit5"]=> string(0) "" [26]=> string(0) "" ["description6"]=> NULL [27]=> NULL ["debit6"]=> string(0) "" [28]=> string(0) "" ["credit6"]=> string(0) "" [29]=> string(0) "" ["calculation"]=> string(41) "管理费用=其他应收款-库存现金" [30]=> string(41) "管理费用=其他应收款-库存现金" ["explanation"]=> string(75) "管理费用=其他应收款-库存现金. 所报销金额是管理费用." [31]=> string(75) "管理费用=其他应收款-库存现金. 所报销金额是管理费用." ["reference"]=> string(110) "《财政部关于印发《中央国家机关和事业单位差旅费管理办法》的通知》(财行[2006])" [32]=> string(110) "《财政部关于印发《中央国家机关和事业单位差旅费管理办法》的通知》(财行[2006])" ["advises"]=> string(15) "更丰富一些" [33]=> string(15) "更丰富一些" ["comments"]=> string(12) "参见链接" [34]=> string(12) "参见链接" ["author"]=> string(9) "沧桑哥" [35]=> string(9) "沧桑哥" ["createtime"]=> string(19) "2014-06-05 14:27:37" [36]=> string(19) "2014-06-05 14:27:37" ["auditor"]=> string(9) "沧桑哥" [37]=> string(9) "沧桑哥" ["updatetime"]=> string(19) "2014-06-04 21:21:11" [38]=> string(19) "2014-06-04 21:21:11" ["level"]=> string(1) "0" [39]=> string(1) "0" }
</section>


</body>
</html>;
