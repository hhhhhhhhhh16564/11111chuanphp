<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php 
	$arr["name"] = "周更生";
	$arr["tel"] = "18324783274";
	$arr["address"] = "广州市光速区";
	$arr["post"] = "510101";
	foreach ($arr as $key => $value) {
			echo "\$arr[$key] = $value <br/>";
	}
	//使用foreach来统计数组长度
	$n = 0;
	foreach ($arr as $value) {
		$n++;
	}
   echo "使用foreach来统计数组长度: $n";
   function dump($arr){
   	echo "<pre>";
   	print_r($arr);
   	echo "</pre>";
   }
	 ?>

</body>
</html>