<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//基本数据类型，使用引用传值
$a = 10;
$b = &$a;  //将变量$a的地址，传给了变量$b，这两个变量指向了同一个“地址、事物”
$a = 990;  //对变量$a进行了重新赋值
echo $b;   //测试变量$b的值


?>
</body>
</html>
