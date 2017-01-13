<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
/*
求：1-100间所有偶数的和
*/
$sum = 0;  //和
for($i=1;$i<100;$i++)
{
	//判断是否是偶数
	if($i%2==0)
	{
		$sum += $i;  // $sum = $sum + $i
	}
}
echo "和是：$sum";


?>
</body>
</html>
