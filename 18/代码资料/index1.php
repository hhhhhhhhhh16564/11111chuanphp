<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//��������֮���ʱ��
$now = time();//��������
$next = $now + (60*60*24*7);
echo date("Y/m/d H:i:s",$next);

/*********************************************/

function dump($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
?>
</body>
</html>
