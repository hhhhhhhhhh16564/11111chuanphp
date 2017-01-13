<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//将非枚举数组，转成枚举数组
$arr["a"] = 100;
$arr[10] = 200;
$arr["b"] = 300;
$arr[20] = 400;
$arr2 = array_values($arr);
dump($arr2);
//将数组中前两个值赋给两个变量
//list要求数组必须是一个从0开始的枚举数组
list($a,$b) = $arr2;
echo "$a , $b";
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
