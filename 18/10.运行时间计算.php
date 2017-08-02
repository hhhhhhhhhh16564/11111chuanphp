<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	// 计算七天之后的时间
	$now = time(); // 现在秒数
	$next = $now + (60*60*24*7);
	echo date("Y/m/d H:i:s", $next);
	echo "<hr>";

	// 程序运行事前的时间
	$start = getTime();
	for ($i=0; $i < 10000; $i++) { 
		
		echo "好好学习天天向上";
	}
	// 程序运行之后的时间

	$end = getTime();
	echo "程序运行的时间: ".($end-$start);


    function getTime(){

    	list($msec, $sec) = explode(" ", microtime());
    	return $msec + $sec;

    }




	function dump($arr)
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}
	 ?>
</body>
</html>