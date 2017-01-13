<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	// 枚举数组、关联数组
	$arr[] = 10;
	$arr[10] = 100;
	$arr["web_url"] = "http://www.sina.com.cn";
	$arr["web_icp"] = "😁👌👌👌哈";

	echo "<pre>";
     print_r($arr);
      echo "</pre>";
      
	echo "<hr>";


// 重载数组下标

	$arr = array(
	"a" => 100,
	"b" => 200,
	"c" => 300,
	10 => 10000,
	90,
	88,

		);

echo "<pre>";
print_r($arr);
echo "</pre>";




	 ?>




</body>
</html>