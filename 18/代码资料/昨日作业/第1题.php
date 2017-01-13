<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
/*1.	（基础，输出）输出内容文字： 
老师说: ” 不能使用 ‘换行符’(即\n)在网页上达到换行的目的，而应该使用<br />标签”。
——注意，上面单引号和双引号都是英文的。
*/
$name = 100;
$str = "老师说: \"不能使用'换行符'(即\\n)在网页上达到换行的目的，\$name而应该使用&lt;br /&gt;标签\"。";
echo $str;

?>
</body>
</html>
