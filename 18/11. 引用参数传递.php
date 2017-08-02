<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
function getMax(&$x,$y){
	$x = $x + $y;
}
$a = 10;
$b = 20;
getMax($a,$b);
echo $a;
function dump($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
	 ?>
</body>
</html>