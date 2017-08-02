<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php
//实例：今天是星期几
$week = date("N");  //返回的值1(星期一)-7(星期日)
switch($week)
{
	case 1:
		$str = "一";
		break;
	case 2:
		$str = "二";
		break;
	case 3:
		$str = "三";
		break;
	case 4:
		$str = "四";
		break;
	case 5:
		$str = "五";
		break;
	case 6:
		$str = "六";
		break;
	default:
		$str = "日";
}
echo "今天是星期$str";
?>





</body>
</html>