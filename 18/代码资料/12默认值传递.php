<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//����һ���������ݿ�ĺ���
function connMySQL($db_host="localhost",$db_user="root",$db_pwd="root")
{
	$link = mysql_connect($db_host,$db_user,$db_pwd);
	if($link)
	{
		echo "MySQL���ݿ��Ѿ���ͨ��";
	}else
	{
		echo "MySQL���ݿ�����ʧ�ܣ�";
	}
}
//���ú���

connMySQL("127.0.0.1","admin");

//�����Ϣ
function showInfo($who,$action="�ܲ�")
{
	echo "{$who}����{$action}����<br>";
}
showInfo("����");
showInfo("����","���");


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
