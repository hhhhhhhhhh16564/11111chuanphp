<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//定义一个连接数据库的函数
function connMySQL($db_host="localhost",$db_user="root",$db_pwd="root")
{
	$link = mysql_connect($db_host,$db_user,$db_pwd);
	if($link)
	{
		echo "MySQL数据库已经连通！";
	}else
	{
		echo "MySQL数据库连接失败！";
	}
}
//调用函数

connMySQL("127.0.0.1","admin");

//输出信息
function showInfo($who,$action="跑步")
{
	echo "{$who}正在{$action}……<br>";
}
showInfo("张三");
showInfo("李四","打架");


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
