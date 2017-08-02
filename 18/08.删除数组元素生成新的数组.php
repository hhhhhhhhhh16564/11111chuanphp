<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
// 将一下数组中的各个元素进行倒叙排列
$arr = array(1, 2, 3, 4, 5, 7);
foreach ($arr as $key => $value) {
	// 从原数组中，每删除一个元素, 将删除的值赋值给一个县的数组元素
	 $arr2[] = array_pop($arr);
}
// 赋值传值, 并不是引用传值
$arr = $arr2; 
dump($arr);
function dump($arr){
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
 ?>
	
</body>
</html>