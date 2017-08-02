<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>显示数据</title>
</head>
<body>
	<?php 
//数据库配置信息

	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PWD","12345678");
	define("DB_NAME","yanboDB");

	// 连接mysql数据库
	$link = mysql_connect(DB_HOST, DB_USER, DB_PWD);

	if (!$link) {
		
		echo "<li>连接数据库失败 ！</li>";
		// exit();

	}


	// 选择mYSQL数据库
	if (!mysql_select_db(DB_NAME)) {
		echo "<li>选择数据库 ".DB_NAME."失败 ！</li>";
		exit();
	}


	// 设置MySQL返回时的字符集
$result = mysql_query("set names utf8");
  
    if ($result) {
    	echo "设置字符集成功";
    }

$sql = "select user_name, email, pass, reg_time, reg_ip from USER";

$result = mysql_query($sql);
//从结果集中，取出一行数据
$num = mysql_num_rows($result);

echo "查出的数据个数为: {$num} <br/>";

// while ($row = mysql_fetch_row($result)) {
// 	$arr[] = $row; 
// 	// 将每个$row数组， 存到$arr中去， 生成一个二维数组
// }


/*

3、从结果集中取得一行作为混合数组返回
	语法：$arrRow = mysql_fetch_array($result[,$type])
	参数：
			$result：是指执行完SQL语句后返回的结果集；
			$type：指数组的类型，取值：MYSQL_BOTH、MYSQL_NUM、MYSQL_ASSOC
				   MYSQL_NUM：是一个常数，必须大写，返回的数据是枚举数组；
				   MYSQL_ASSOC：返回的是关联数组，数组下标是字符的；
				   MYSQL_BOTH：同时返回混合数组
*/

//枚举数组
// while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
// 	// 将每个$row数组， 存到$arr1中去， 生成一个二维数组 
// 	$arr[] = $row;
		
// }



// 关联数组
// while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
// 	$arr[] = $row;
// }


// 混合数组
// while ($row = mysql_fetch_row($result, MYSQL_BOTH)) {
// 	$arr[] = $row;		

// }



// 关联数组					
while ($row = mysql_fetch_assoc($result)) {

	$arr[] = $row;

}













dump($arr);

echo "这里是随后一行 ";

function dump($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}


?>
</body>
</html>


















