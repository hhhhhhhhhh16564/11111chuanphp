<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	// 使用global 关键字声明为全局变量
	$a = 100;
	function getValue(){
		global $a;
		$a += 200;
		echo $a;



	}
getValue();
echo "$a";
echo "<hr>";

$a = 5000;

function getValue2(){
	$GLOBALS['a'] += 1000;
	echo $a;  // 不能输出结果
	echo $GLOBALS["a"]; // 6000

}

getValue2();
echo "<hr>".$a; // 6000
echo $GLOBALS['a']; // 60000

	 ?>
</body>
</html>