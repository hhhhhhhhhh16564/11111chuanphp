<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//�����������ͣ�ʹ�����ô�ֵ
$a = 10;
$b = &$a;  //������$a�ĵ�ַ�������˱���$b������������ָ����ͬһ������ַ�����
$a = 990;  //�Ա���$a���������¸�ֵ
echo $b;   //���Ա���$b��ֵ


?>
</body>
</html>
