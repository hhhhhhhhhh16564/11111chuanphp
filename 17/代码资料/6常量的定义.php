<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//���峣��
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PWD","root");
//�������
$str = "<h2>MySQL���ݿ��������Ϣ</h2>";
$str .= "MySQL��������".DB_HOST;
$str .= "<br>MySQL���û���".DB_USER;
$str .= "<br>MySQL�����룺".DB_PWD;
echo $str;
?>
</body>
</html>
