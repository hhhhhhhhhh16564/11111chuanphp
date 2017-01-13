<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//实例：表格隔行变色
$str = "<table border='1' style='border-collapse:collapse;' width='500'>";
$str .="<tr><th>编号</th><th>标题</th><th>发布时间</th></tr>";
for($i=1;$i<100;$i++)
{
	$str .= "<tr";
	if($i%2==0)
	{
		$str .= " bgcolor='#f0f0f0'";
	}
	$str .= ">";
	$str .= "<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
	$str .= "</tr>";
}
$str .= "</table>";


//输出结果
echo $str;
?>
</body>
</html>
