<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//�����������еĸ�Ԫ�ؽ��е�������
$arr = array(1,2,3,4,5,6,7);
foreach($arr as $key=>$value)
{
	//��ԭ�����У�ÿɾ��һ��Ԫ�أ���ɾ����ֵ����һ���µ�����Ԫ��
	$arr2[] = array_pop($arr);
}
$arr = $arr2;  //��ֵ��ֵ�����������ô�ֵ
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
