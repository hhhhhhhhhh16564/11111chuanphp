<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	$money = 100000;
	$n = 0;
	do{
		if ($money > 50000) {
			$money *= 0.95;
		}else{

			$money -= 5000;
		}

		$n++;

	}while ($money >= 5000);

	echo "共可经过改路口{$n}次";






	 ?>


</body>
</html>