<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>数据类型转换</title>
</head>
<body>

<?php 
//(1) 强制将其它数据类型转换为字符串
$a = true; // php中为"1" js中为true
$a = false; // ""
$a = 0;  // "0"
$a = 123; //"123"
$a = NULL; // ""
$a = 120.98; // "120.98"

$a = (string)$a;


// (2) 强制其它类型转换为数值
$a = true; //1
$a = false; //0
$a = "0"; //0
$a = "abc"; // 0
$a = NULL;  //0
$a = "100px"; //相当于js中的parseInt()
$a = (int)$a;

// (3) 强制其它类型转换为布尔类型
$a = 100;  //true
$a = 0; // false;
$a = "abc";      // true
$a = "";         //  false
$a = NULL;       // false
$a = "100px";    // true
$a = (bool)$a;
echo "<hr>";

var_dump($a);
 ?>

</body>
</html>

<!-- 

数据类型转换
大部分情况下，都是程序自动转换。
一、强制转换的函数(结构)
	(bool) $name    //转成布尔型
	(string) $name   //转成字符串
	(int)  $age      //转成整型   (int)23.45  = 23
	(float)  $int     //转成浮点型
	(array) $str      //转成数组
	……
二、数据类型的判断  is_*，返回的结果true或false
	is_bool( $var )   //判断变量是不是布尔型
	is_string($var)   //是不是字符型
	is_int($var)     //是不是整数
	is_float($var)   //是不是浮点数
	is_null($var)    //是不是为空
	is_numeric($var) //是不是数值型
	is_array($var)   //是不是数组
	……
三、强制将其它类型转成字符型
	案例：4数据类型转换.php

var_dump($var)输出一个变量的类型和值
语法：void var_dump($var)
描述：打印输出一个变量的类型和值
举例：var_dump($var)

变量的类型完全是根据值决定的，给变量赋一个什么类型的值，它就是一个什么类型的变量。
基本数据类型：string、int、float、boolean
特殊的数据类型：null
$name = “;
//$name = $name+”的毕业院校”;   //js中+号变成连接符，PHP中的+就是数学运算

查看PHP、 Apache、 MySQL的一些配置信息
phpinfo();




 -->



