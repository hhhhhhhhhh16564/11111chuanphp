<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//unset()������ʹ��
$arr = array(10,20,30,40);
$len = count($arr);
echo "ԭʼ����ĸ�����$len";
dump($arr);
unset($arr[0]);//ɾ���±�Ϊ0������Ԫ��
$len = count($arr);
echo "<hr>��������ĸ�����$len";
dump($arr);
//unset()ɾ����������
unset($arr);
$len = count($arr);
echo "��������ĸ�����$len";
dump($arr);
//�ٸ�$arr��������һ��Ԫ��
$arr[] = 100;
$len = count($arr);
echo "��������ĸ�����$len";
dump($arr);




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
