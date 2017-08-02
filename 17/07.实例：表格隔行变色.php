<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	//实例： 表格隔行变色
	$str = "<table border='1' style='border-collapse:collapse;' width='500' align='center'>";
	$str .= "<tr><td>编号</td><td>标题</td><td>发布时间</td></tr>";
	for($i= 1;$i<100;$i++){
		$str .= "<tr ";
		if ($i%2==0) {
			
			$str .= "bgcolor = '#f0f0f0'";
		}
		$str .= ">";
		$str .= "<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
		$str .= "</tr>";
	}
	$str .= "</table>";
    echo $str;
	 ?>
</body>
</html>