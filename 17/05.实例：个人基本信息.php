<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>个人基本信息</title>
</head>
<body>
<?php 

// error_reporting(E_ALL); 
//变量初始化
$name = "周更生";
$sex = true;
$age = 30;
$edu = "大专";
$isMarried = false;
$school; //定义变量，但是并未赋值，NULL数据类型
$salary = 2000;
$bounds = 500;

//构建输出的结果
$str = "<h2>\"{$name}\"的基本信息如下:</h2>";
$str .= "姓名: $name";
$str .= "<br>性别:".($sex ? "男":"女");
$str .= "<br>年龄: $age";
$str .= "<br>学历: $edu";
$str .= "<br> 婚否: ".($isMarried ? "已婚":"未婚");
$str .= "<br> 基本工资: $salary";
$str .= "<br> 实发工资：".($salary+$bounds);
$str .= "<br> 毕业学院: ".($school ? $school : "未填写");
echo $str;
 ?>
</body>
</html>