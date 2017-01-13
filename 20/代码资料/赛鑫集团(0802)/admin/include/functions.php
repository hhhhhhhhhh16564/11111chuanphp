<?php
/*******************************连接数据库函数****************************************/
function getLink($db_host,$db_user,$db_pwd,$db_name)
{
	//连接数据库
	$link = @mysql_connect($db_host,$db_user,$db_pwd);
	if(!$link)
	{
		echo "<li>MySQL数据库服务器连接失败，请与管理员联系</li>";
		exit();
	}
	//选择数据库
	if(!mysql_select_db($db_name))
	{
		echo "<li>MySQL数据库选择失败，请与管理员联系</li>";
		exit();
	}
	//设置返回数据的字符集
	mysql_query("set names utf8");
	//将连接标识符返回
	return $link;
}







?>