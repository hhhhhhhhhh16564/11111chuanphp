<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		//

	function connMySQL($db_host="localhost", $db_user="root",$db_pwd="12345678"){

		$link = mysql_connect($db_host,$db_user, $db_pwd);

		if ($link) {
			echo "MySQL数据库已经连接成功 ！";
		}else{


			echo "MySQL数据库连接失败 ！";
		}
	}
connMySQL();
	 ?>



	 
</body>
</html>