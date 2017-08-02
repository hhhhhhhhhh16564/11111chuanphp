<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	// 将非枚举数组，转换为枚举数组
	$arr["0"] = 100;
	$arr[5] = 200;
	$arr["b"] = 300;
	$arr[2] = 400;
	$arr2 = array_values($arr);
	dump($arr2);


	// 将数组中的两个值赋值给两个变量
	// list 要求数组必须是一个从0开始的枚举数组

	list($a,$b) = $arr2;
	echo "$a, $b";
	function dump($arr){
		echo "<pre>";	
		print_r($arr);
		echo "</pre>";
	}












	 ?>
</body>
</html>