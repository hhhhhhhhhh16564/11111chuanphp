<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//（1）双引号内，输出变量时，输出的是什么？
$name = "周更生";
$str = "我的名字叫$name";
echo $str;
//（2）单引号内，输出变量时，输出的是什么？
$name = "周更生";
$str = '<hr>我的名字叫$name';
echo $str;
//（3）双引号内，变量后面跟一个非空字符，会怎么样？
$name = "周更生";
$str = "<hr><font size=\"7\" color=\"#990000\" face=\"黑体\">{$name}是我的名字！</font>";
echo $str;

?>
</body>
</html>
