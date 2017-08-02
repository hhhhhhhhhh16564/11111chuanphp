<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>连接数据库</title>
</head>
<body>
	<?php 
	// 数据库配置信息
	$db_host = "localhost";
	$db_user = "root";
	$db_pwd = "12345678";
	$db_name = "yanboDB";
	// 连接mysql服务器
	$link = mysql_connect($db_host,$db_user, $db_pwd);
	// 判断是否连通SQL
	if ($link) {
		
		echo "MySQL服务器连接成功! ";
	}else{
		// echo "MySQL服务器连接失败！"
		echo "服务器连接失败 ！".mysql_error();
		exit();
	}
	// 选择数据库
	if (mysql_select_db($db_name, $link)) {
		
		echo "选择数据库{$db_name} 成功！";

	}else{

		 die("选择数据库{$db_name}失败 ！");

	}

	// echo "这里是最后一行内容";

	 ?>
</body>
</html>