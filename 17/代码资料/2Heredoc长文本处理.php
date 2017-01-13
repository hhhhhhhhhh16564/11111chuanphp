<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//实例：heredoc长文本处理
$name = "<font size=7 color=red>周更生</font>";
$str = <<<Heredoc
<h2>Heredoc长文本处理</h2>
PHP文件<b>的扩展</b>名：.php<br>
PHP的程序语句必须以分号结束(;)，JS中的结束分号可有可无。<br />
PHP访问的路径上不能出现{$name}中文字符；
asdaskdada
………………
Heredoc;
echo $str;
?>
</body>
</html>
