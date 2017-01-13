<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//unset()函数的使用
$arr = array(10,20,30,40);
$len = count($arr);
echo "原始数组的个数：$len";
dump($arr);
unset($arr[0]);//删除下标为0的数组元素
$len = count($arr);
echo "<hr>现在数组的个数：$len";
dump($arr);
//unset()删除整个数组
unset($arr);
$len = count($arr);
echo "现在数组的个数：$len";
dump($arr);
//再给$arr数组增加一个元素
$arr[] = 100;
$len = count($arr);
echo "现在数组的个数：$len";
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
