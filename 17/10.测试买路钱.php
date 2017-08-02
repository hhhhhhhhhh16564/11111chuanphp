<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>


<?php
//实例：计算一个人经过多少次路口
$money = 100000;  //现金
$n = 0;  //次数
//如果你够5000元，你可以过路口一次
while($money>=5000)
{
	$n++;  //次数加1
	if($money>50000)
	{
		$money = $money * 0.95;  //  $money *= 0.95
	}else
	{
		$money = $money - 5000;  //  $money -= 5000
	}
}
echo "你共可以经过该路口{$n}次！";
?>

</body>
</html>