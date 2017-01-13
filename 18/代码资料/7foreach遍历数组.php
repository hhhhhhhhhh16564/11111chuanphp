<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//使用foreach()来循环数组
$arr["name"] = "周更生";
$arr["tel"] = "13011057865";
$arr["address"] = "广州市天河区";
$arr["post"] = "510101";

foreach($arr as $key=>$value)
{
	echo "\$arr[$key] = $value <br />";
}

//使用foreach来统计数组长度
$n = 0;
foreach($arr as $value)
{
	$n++;
}
echo "使用foreach统计的数组的长度：$n";
/*********************************************/
function dump($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
?>
</body>
</html>
