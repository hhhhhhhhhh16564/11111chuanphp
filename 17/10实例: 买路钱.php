<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$money = 10000000;
	$n = 0;
	while ($money >= 5000) {
		$n++;

		if ($money>5000) {
			$money = $money * 0.95;
		}else{
			$money = $money - 5000;
		}


	}

echo "你一共可以经过该路口{$n}此 ！";


	 ?>
</body>
</html>