<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
/*
����ĳ����100,000�ֽ�ÿ����һ��·����Ҫ����һ�ν��ѡ����ѹ���Ϊ�����ֽ����50,000ʱÿ����Ҫ��5%����ֽ�С�ڵ���50,000ʱÿ�ν�5,000����дһ���������˿��Ծ������ٴ����·��
*/
//��1��������ʼ��
$money = 100000;
$n = 0;
do{
	if($money>50000)
	{
		$money *= 0.95;
	}else
	{
		$money -= 5000;
	}
	$n++;
}while($money>=5000);
//������
echo "���ɾ�����·��{$n}��";

?>
</body>
</html>
