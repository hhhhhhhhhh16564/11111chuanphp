<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//���ݿ�������Ϣ
$db_host = "localhost";
$db_user = "root";
$db_pwd = "root";
$db_name = "saixinji0tuan";
//����MySQL������
$link = @mysql_connect($db_host,$db_user,$db_pwd);
//�ж��Ƿ���ͨMySQL
if($link)
{
	echo "MySQL���������ӳɹ���";
}else
{
	//echo "MySQL����������ʧ�ܣ�".mysql_error();
	exit("MySQL����������ʧ�ܣ�");
}
//ѡ�����ݿ�
if(mysql_select_db($db_name,$link))
{
	echo "ѡ�����ݿ�{$db_name}�ɹ���";
}else
{
	die("ѡ�����ݿ�{$db_name}ʧ�ܣ�");
}
echo "���������һ������";
?>
</body>
</html>
