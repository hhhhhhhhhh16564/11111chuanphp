<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
/*
假设某人有100,000现金。每经过一次路口需要进行一次交费。交费规则为当他现金大于50,000时每次需要交5%如果现金小于等于50,000时每次交5,000。请写一程序计算此人可以经过多少次这个路口
*/
//（1）变量初始化
$money = 100000;
$n = 0;
do{
	if($money>50000)
	{
		$money *= 0.95;
	}else
	{
		$money -= 5000;
	}
	$n++;
}while($money>=5000);
//输出结果
echo "共可经过该路口{$n}次";

?>
</body>
</html>
