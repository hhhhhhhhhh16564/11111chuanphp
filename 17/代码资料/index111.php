<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//ʵ��������һ���˾������ٴ�·��
$money = 100000;  //�ֽ�
$n = 0;  //����
//����㹻5000Ԫ������Թ�·��һ��
while($money>=5000)
{
	$n++;  //������1
	if($money>50000)
	{
		$money = $money * 0.95;  //  $money *= 0.95
	}else
	{
		$money = $money - 5000;  //  $money -= 5000
	}
}
echo "�㹲���Ծ�����·��{$n}�Σ�";
?>
</body>
</html>
