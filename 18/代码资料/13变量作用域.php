<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//ʹ��global�ؼ�������Ϊȫ�ֱ���
$a = 100;
function getValue()
{
	//ʹ��global�ؼ�������Ϊȫ�ֱ���
	global $a;
	$a += 200;
	echo $a;  // a=300
}
getValue();
echo $a; //a=300
echo "<hr>";

//��2��ʹ��ȫ������ $GLOBALS ֱ����Ϊȫ�ֱ���
$a = 10;
function getValue2()
{
	$GLOBALS["a"] += 90;
	echo $GLOBALS["a"];
}
getValue2();
echo "<hr>".$a;


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
