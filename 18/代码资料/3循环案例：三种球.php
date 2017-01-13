<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
/*
有红、白、黑三种球若干个，其中红、白球共25个，白、黑球共31个，红、黑球共28个，求这三种球各多少个？

*/
/*
	（1）定义三个变量，代替三种球  $red  $white  $black
	（2）红球+白球=25      $red+$white==25      
	（3）白球+黑球=31      $white+$black=31
	（4）红球+黑球=28      $red+$black=28
	（5）假设红球已知，请问白球怎么算？白球=25-红球
	……
	
	枚举思想：
	红球     白球         黑球
	1        1            1           false
	2        1            1           false
	3        1            1           false
	……………………
	24       1            1           false
	
	1        2            1           false
	1        3            1           false
	……………………
*/
$num = 0;
for($red=1;$red<25;$red++)
{
	for($white=1;$white<25;$white++)
	{
		for($black=1;$black<28;$black++)
		{
			$num++;
			if($red+$white==25 && $white+$black==31 && $red+$black==28)
			{
				echo "红球：$red ，白球：$white ，黑球：$black";
			}
		}
	}
}
echo "<br><h3>一共循环了<font color=red>{$num}</font>次！</h3>";

/*第二次循环的次数统计*/
$num = 0;
for($red=1;$red<=25;$red++)
{
	for($white=1;$white<=25-$red;$white++)
	{
		for($black=1;$black<=28-$red;$black++)
		{
			$num++;
			if($red+$white==25 && $white+$black==31 && $red+$black==28)
			{
				echo "<br>红球：$red ，白球：$white ，黑球：$black";
			}
		}
	}
}
echo "<br><h3>一共循环了<font color=red>{$num}</font>次！</h3>";

/*第三次循环的次数统计*/
$num = 0;
for($red=1;$red<=25;$red++)
{
	$white = 25-$red;
	$black = 31-$white;
	$num++;
	if($red+$white==25 && $white+$black==31 && $red+$black==28)
	{
		echo "<br>红球：$red ，白球：$white ，黑球：$black";
	}
}
echo "<br><h3>一共循环了<font color=red>{$num}</font>次！</h3>";

?>
</body>
</html>
