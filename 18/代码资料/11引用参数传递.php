<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//如果想在函数内，对函数外变量的值，进行修改，就必须要用引用传值。
function getMax(&$x,$y)
{
	$x = $x + $y;
}
$a = 10;
$b = 20;
getMax($a,$b);
echo $a;

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
