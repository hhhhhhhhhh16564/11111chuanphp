<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>heredoc长文本处理</title>
</head>
<body>

<?php 

//实例： heredoc长文本处理
$name = "<font size=7 color=red>周更生</font>";

$str = <<<Heredoc
<h2>Heredoc文本处理</h2>
PHP文件<b>拓展</b>名:. php<br>
php的程序语句必须以分好结束(;),js 中的结束可有可无。<br/>
PHP访问的路径上不能出现{$name}中文字符;

asddksjfjlk

--------------
Heredoc;

$ss = <<<jjj
<br>
所肩负的解放军见附件附件附件及附件附件及附件附件
jjj;
echo $str, $ss;


 ?>
	
</body>
</html>