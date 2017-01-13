<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//变量初始化
$name = "周更生";
$sex = true;
$age = 30;
$edu = "大专";
$isMarried = false;
$school;  //定义变量，但并未赋值，NULL数据类型
$salary = 2000;
$bonus = 500; 
//构建输出的结果
$str = "<h2>\"{$name}\"的基本信息如下：</h2>";
$str .= "姓名：$name";  //.=展开后 $str = $str."abc"
$str .= "<br>性别：".($sex ? "男" : "女");
$str .= "<br>年龄：$age";
$str .= "<br>学历：$edu";
$str .= "<br>婚否：".($isMarried ? "已婚" : "未婚");
$str .= "<br>基本工资：$salary";
$str .= "<br>奖金：$bonus";
$str .= "<br>实发工资：".($salary+$bonus);
$str .= "<br>毕业学院：".($school ? $school : "未填写");
echo $str;  //相当于JS中的document.write()
?>
</body>
</html>
