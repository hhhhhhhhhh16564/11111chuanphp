<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//ʵ����heredoc���ı�����
$name = "<font size=7 color=red>�ܸ���</font>";
$str = <<<Heredoc
<h2>Heredoc���ı�����</h2>
PHP�ļ�<b>����չ</b>����.php<br>
PHP�ĳ����������ԷֺŽ���(;)��JS�еĽ����ֺſ��п��ޡ�<br />
PHP���ʵ�·���ϲ��ܳ���{$name}�����ַ���
asdaskdada
������������
Heredoc;
echo $str;
?>
</body>
</html>
