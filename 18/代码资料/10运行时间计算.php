<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
//程序运行之前的时间
$start = getTime();

for($i=0;$i<900000;$i++)
{
	echo "广州传智播客";
}

//程序运行之后的时间
$end = getTime();
echo "程序运行的时间：".($end - $start);

/*********************************************/
function getTime()
{
	list($msec,$sec) = explode(" ",microtime());
    return $msec + $sec;
}


function dump($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
?>
</body>
</html>
