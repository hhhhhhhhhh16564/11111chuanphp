<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//��������֮ǰ��ʱ��
$start = getTime();

for($i=0;$i<900000;$i++)
{
	echo "���ݴ��ǲ���";
}

//��������֮���ʱ��
$end = getTime();
echo "�������е�ʱ�䣺".($end - $start);

/*********************************************/
function getTime()
{
	list($msec,$sec) = explode(" ",microtime());
    return $msec + $sec;
}


function dump($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
?>
</body>
</html>
