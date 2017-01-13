<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//定义常量
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PWD","root");
//输出常量
$str = "<h2>MySQL数据库的配置信息</h2>";
$str .= "MySQL主机名：".DB_HOST;
$str .= "<br>MySQL的用户：".DB_USER;
$str .= "<br>MySQL的密码：".DB_PWD;
echo $str;
?>
</body>
</html>
