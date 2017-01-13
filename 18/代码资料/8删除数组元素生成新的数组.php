<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//将以下数组中的各元素进行倒序排列
$arr = array(1,2,3,4,5,6,7);
foreach($arr as $key=>$value)
{
	//从原数组中，每删除一个元素，将删除的值赋给一个新的数组元素
	$arr2[] = array_pop($arr);
}
$arr = $arr2;  //赋值传值，并不是引用传值
dump($arr);



/*********************************************/
function dump($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
?>
</body>
</html>
