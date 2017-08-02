<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php 
//基本数据类型，使用引用传值

	$a = 10;
	$b = &$a;  //将变量$a的地址，传给了变量$b，这两个变量指向了同一个“地址、事物”
	$a = 990;
	echo $b;










	 ?>







</body>
</html>