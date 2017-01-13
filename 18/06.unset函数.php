<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	// unset()函数的使用

	$arr = array(10,20,30,40);
	$len = count($arr);
	echo "原始数组的个数: $len";
	dump($arr);


	unset($arr[0]); // 删除下标为0的数组的元素
	$len = count($arr);
	echo "<hr> 现在数组的个数: $len";
	dump($arr);



	// unset() 删除整个数组
	unset($arr);
	$len = count($arr);
	echo "现在数组的个数: $len";
	dump($arr);



	// 再给$arr 数组增加一个元素
	$arr[] = 100;
	$len = count($arr);
	echo "现在数组的个数: $len";
	dump($arr);









	function dump($arr){
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}

	 ?>
</body>
</html>