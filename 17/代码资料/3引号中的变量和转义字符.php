<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//��1��˫�����ڣ��������ʱ���������ʲô��
$name = "�ܸ���";
$str = "�ҵ����ֽ�$name";
echo $str;
//��2���������ڣ��������ʱ���������ʲô��
$name = "�ܸ���";
$str = '<hr>�ҵ����ֽ�$name';
echo $str;
//��3��˫�����ڣ����������һ���ǿ��ַ�������ô����
$name = "�ܸ���";
$str = "<hr><font size=\"7\" color=\"#990000\" face=\"����\">{$name}���ҵ����֣�</font>";
echo $str;

?>
</body>
</html>
