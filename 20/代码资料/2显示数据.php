<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
//数据库配置信息
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PWD","root");
define("DB_NAME","saixinjituan");
//连接MySQL数据库
$link = @mysql_connect(DB_HOST,DB_USER,DB_PWD);
if(!$link)
{
	echo "<li>连接MySQL数据库服务器失败！</li>";
	exit();  //中止程序继续向下运行
}
//选择MySQL数据库
if(!mysql_select_db(DB_NAME))
{
	echo "<li>选择数据库".DB_NAME."失败！</li>";
	exit();
}
//设置MySQL返回的数据的字符集
mysql_query("set names utf8");

//数据库查询
$sql = "select id,title,author,source,hits,addate from 007_news where id<50";
$result = mysql_query($sql);
//从结果集中，取出一行数据
while($row=mysql_fetch_row($result))
{
	$arr[] = $row;  //将每个$row数组，存到$arr中去，生成一个二维数组
}
dump($arr);
//定义函数dump()
function dump($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
?>
</body>
</html>
