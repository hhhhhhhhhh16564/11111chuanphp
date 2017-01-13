<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<?php
//实例：根据用户输入(表单)，来判断一个年份是不是闰年
/*
	（1）用PHP来获取表单中用户输入信息
	（2）将JS中变量的值，如果赋给PHP的变量
	（3）用PHP来判断是否是闰年
*/
if(isset($_GET["ac"]) && $_GET["ac"]=="login")
{
	$year = $_GET["year"]; //可以对$year进行严格的判断....
	if($year%4==0 && $year%100!=0 || $year%400==0)
	{
		echo "<script>window.alert('".$year."是一个闰年')</script>";  //用JS的alert()输出
	}else
	{
		echo "<script>window.alert('".$year."是一个平年！');</script>";  //用JS的alert()输出
	}
}
?></head>

<body>
<form name="form1" method="get">
	请输入一个年份：<input type="text" name="year" />
	<input type="hidden" name="ac" value="login" />
	<input type="submit" value="提交" />
</form>
</body>
</html>
