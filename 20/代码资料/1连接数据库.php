<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>无标题文档</title>
</head>

<body>
<?php
//数据库配置信息
$db_host = "localhost";
$db_user = "root";
$db_pwd = "root";
$db_name = "saixinji0tuan";
//连接MySQL服务器
$link = @mysql_connect($db_host,$db_user,$db_pwd);
//判断是否连通MySQL
if($link)
{
	echo "MySQL服务器连接成功！";
}else
{
	//echo "MySQL服务器连接失败！".mysql_error();
	exit("MySQL服务器连接失败！");
}
//选择数据库
if(mysql_select_db($db_name,$link))
{
	echo "选择数据库{$db_name}成功！";
}else
{
	die("选择数据库{$db_name}失败！");
}
echo "这里是最后一行内容";
?>
</body>
</html>
