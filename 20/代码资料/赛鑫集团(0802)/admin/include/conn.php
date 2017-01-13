<?php
//声明网页客户显示的字符集
header("content-type:text/html;charset=utf-8");
//包含文件
require("config.php");
require("functions.php");

//连接数据库
$link = getLink($db_host,$db_user,$db_pwd,$db_name);
?>