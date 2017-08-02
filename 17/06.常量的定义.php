<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>常量的定义</title>
</head>
<body>

<?php 
//定义常量

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PWD", "root");

//输出常量
$str = "<h2>MySQL数据库的配置信息</h2>";
$str .= "MySQL主机名：".DB_HOST;
$str .= "<br>MySQL的用户:".DB_USER;
$str .= "<br>MySQL的密码:".DB_PWD;

echo $str;


 ?>	
</body>
</html>