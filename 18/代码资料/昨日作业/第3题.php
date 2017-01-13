<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
/*
3.（赋值传值/引用传值）读程序，写结果：
	a)	$a = 1; $b = $a; $a=$b++; $b = $a++; echo $a, “,”, $b;
	b)	$a = 1; $b = $a; $b++; echo $a, “,”, $b;
	c)	$a = 1; $b = &$a; $b++; echo $a, “,”, $b;
*/
//第一问
$a = 1;
$b = $a;       //$b=1;$a=1
$a = $b++;     //$a=1;$b=2
$b = $a++;     //$b=1;$a=2
echo $a."，".$b;

//第二句
$a = 1;
$b = $a;    //$a=1,$b=1
$b++;       //$a=1,$b=2
echo "<hr>$a , $b";
//第三句
$a = 1;
$b = &$a;   //将变量$a的地址，传给了$b，两个变量是相互关联，一变全变
$b++;       //$b=2,  $a=2
echo "<hr>$a , $b";
?>
</body>
</html>
