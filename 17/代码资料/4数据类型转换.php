<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//（1）强制将其它类型转成字符串
$a = true;       //PHP中"1"，JS中"true"
$a = false;      //""
$a = 0;          //"0"
$a = 123;        //"123"
$a = NULL;        //""
$a = 120.98;    //"120.98"
$a = (string)$a;
var_dump($a);  //JS中用typeof()
//（2）强制将其它类型转成数值
$a = true;       //  1
$a = false;      //  0
$a = "0";        //  0
//$a = "abc";      // 0
//$a = NULL;       // 0
//$a = "100px";    // 相当于JS中的parseInt()
$a = (int)$a;

echo "<hr>";
var_dump($a);  //JS中用typeof()

//（3）强制将其它类型转成布尔型
$a = 100;        // true
$a = 0;          //  false
$a = "0";        //  false
//$a = "abc";      // true
//$a = "";         //  false
//$a = NULL;       // false
//$a = "100px";    // true
$a = (bool)$a;

echo "<hr>";
var_dump($a);  //JS中用typeof()

?>
</body>
</html>
