<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
/*
3.����ֵ��ֵ/���ô�ֵ��������д�����
	a)	$a = 1; $b = $a; $a=$b++; $b = $a++; echo $a, ��,��, $b;
	b)	$a = 1; $b = $a; $b++; echo $a, ��,��, $b;
	c)	$a = 1; $b = &$a; $b++; echo $a, ��,��, $b;
*/
//��һ��
$a = 1;
$b = $a;       //$b=1;$a=1
$a = $b++;     //$a=1;$b=2
$b = $a++;     //$b=1;$a=2
echo $a."��".$b;

//�ڶ���
$a = 1;
$b = $a;    //$a=1,$b=1
$b++;       //$a=1,$b=2
echo "<hr>$a , $b";
//������
$a = 1;
$b = &$a;   //������$a�ĵ�ַ��������$b�������������໥������һ��ȫ��
$b++;       //$b=2,  $a=2
echo "<hr>$a , $b";
?>
</body>
</html>
