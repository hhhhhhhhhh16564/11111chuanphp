<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
/*
��1-100������ż���ĺ�
*/
$sum = 0;  //��
for($i=1;$i<100;$i++)
{
	//�ж��Ƿ���ż��
	if($i%2==0)
	{
		$sum += $i;  // $sum = $sum + $i
	}
}
echo "���ǣ�$sum";


?>
</body>
</html>
