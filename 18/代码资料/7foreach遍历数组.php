<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//ʹ��foreach()��ѭ������
$arr["name"] = "�ܸ���";
$arr["tel"] = "13011057865";
$arr["address"] = "�����������";
$arr["post"] = "510101";

foreach($arr as $key=>$value)
{
	echo "\$arr[$key] = $value <br />";
}

//ʹ��foreach��ͳ�����鳤��
$n = 0;
foreach($arr as $value)
{
	$n++;
}
echo "ʹ��foreachͳ�Ƶ�����ĳ��ȣ�$n";
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
