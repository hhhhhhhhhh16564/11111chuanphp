<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>引号中的变量和转义字符</title>
</head>
<body>
	<?php 

	//(1) 双引号内，输出变量时，输出的是什么
	$name = "周更生";
	$str = "我的名字叫$name";
	echo $str;

	//  (2) 单引号内，输出变量时，输出的是什么？
	$name = "周更生";
	$str = '<hr>我的名字叫$name';

	echo $str;

	//双括号内，变量后面跟一个非空字符，会怎么样？
	$name = "周更生";
	$str = "<hr><font size = '7' color= '#ff0000' face= '黑体'>{$name}是我的名字！</font>";

	echo $str;

	 ?>



<!-- 

一、布尔型数据类型
	布尔型只有两个值true和false。比如：$isMarried = true;  $isMarried = TRUE;
	提示：true和false是PHP的关键字，因此，不区分大小写。

二、数值型数据类型
	数值型分为：整型和浮点型。
	比如：$age = 30;   $score = 89.89;
三、字符串型
	用单引号或双引号，引起来的字符，就是字符串。
	如：$name = ‘周更生’ ;  $school = “北京科技大学”;
	第三种方式：Heredoc方式
	作用：当想处理较长文本时，可以使用该方式。
	语法格式：
		$str = <<<Heredoc
			中间的内容随便写
		Heredoc;
	说明：
		“<<<Heredoc”应该是文本的开始标记，其后不能加分号结束；
		Heredoc的名称可以自己规定；
		“Heredoc;”是长文本的结束标记，必须单独一行，不能缩进，必须以分号结束；
		其中的变量，可以使用{}括起来，如：{$name}
		其中的转义字符，都可以使用；
字符串中需要注意的部分
如果单引号中存在变量的话，输出的是变量的名称，而不是值；
	$name = "周更生";
$str = '<hr>我的名字叫$name';
echo $str;
		如果双引号中存在变量的话，输出的又是变量的值；
			$name = "周更生";
$str = "我的名字叫$name";
echo $str;   //我的名字叫周更生
		如果双引号中，变量后面跟一个非空字符(除HTML标记外)，会让PHP编译器糊涂，它不知道究竟哪个是变量，因此，PHP会将$之后的所有字符当成一个变量，可这个变量不存在。
		解决的办法：就是用{}括号，把变量括起来。
		$name = "周更生";
$str = "<hr>{$name}是我的名字！";
echo $str;
转义字符
	单引号内的转义字符，只能是\’和\”
	双引号内的转义字符，可以是所有的。

四、空类型NULL
	在JS中，一个变量定义未赋值时，将返回undefined
当一个变量定义了，但未赋值时，将返回NULL类型，NULL类型只有一个值NULL。
	以下几种情况，将返回NULL：
		变量定义未赋值时； $name;
		变量赋了一个NULL值；$name=NULL
		unset删除一个变量时，也将返回NUL








 -->






















</body>
</html>