<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
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
