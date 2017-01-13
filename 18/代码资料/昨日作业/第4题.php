<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
/*
4.	（表达式）已知任意两个正整数（a，b），将其作为直角三角形的直角边长，求斜边长。（注：pow()函数用于幂运算）

c*c = a*a + b*b
*/

$a = 3;
$b = 4;
$c = sqrt($a*$a + $b*$b);
$c = sqrt(pow($a,2) + pow($b,2));
echo $c;
?>
</body>
</html>
