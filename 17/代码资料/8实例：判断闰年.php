<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<?php
//ʵ���������û�����(��)�����ж�һ������ǲ�������
/*
	��1����PHP����ȡ�����û�������Ϣ
	��2����JS�б�����ֵ���������PHP�ı���
	��3����PHP���ж��Ƿ�������
*/
if(isset($_GET["ac"]) && $_GET["ac"]=="login")
{
	$year = $_GET["year"]; //���Զ�$year�����ϸ���ж�....
	if($year%4==0 && $year%100!=0 || $year%400==0)
	{
		echo "<script>window.alert('".$year."��һ������')</script>";  //��JS��alert()���
	}else
	{
		echo "<script>window.alert('".$year."��һ��ƽ�꣡');</script>";  //��JS��alert()���
	}
}
?></head>

<body>
<form name="form1" method="get">
	������һ����ݣ�<input type="text" name="year" />
	<input type="hidden" name="ac" value="login" />
	<input type="submit" value="�ύ" />
</form>
</body>
</html>
