<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
/*
�к졢�ס������������ɸ������к졢����25�����ס�����31�����졢����28������������������ٸ���

*/
/*
	��1��������������������������  $red  $white  $black
	��2������+����=25      $red+$white==25      
	��3������+����=31      $white+$black=31
	��4������+����=28      $red+$black=28
	��5�����������֪�����ʰ�����ô�㣿����=25-����
	����
	
	ö��˼�룺
	����     ����         ����
	1        1            1           false
	2        1            1           false
	3        1            1           false
	����������������
	24       1            1           false
	
	1        2            1           false
	1        3            1           false
	����������������
*/
$num = 0;
for($red=1;$red<25;$red++)
{
	for($white=1;$white<25;$white++)
	{
		for($black=1;$black<28;$black++)
		{
			$num++;
			if($red+$white==25 && $white+$black==31 && $red+$black==28)
			{
				echo "����$red ������$white ������$black";
			}
		}
	}
}
echo "<br><h3>һ��ѭ����<font color=red>{$num}</font>�Σ�</h3>";

/*�ڶ���ѭ���Ĵ���ͳ��*/
$num = 0;
for($red=1;$red<=25;$red++)
{
	for($white=1;$white<=25-$red;$white++)
	{
		for($black=1;$black<=28-$red;$black++)
		{
			$num++;
			if($red+$white==25 && $white+$black==31 && $red+$black==28)
			{
				echo "<br>����$red ������$white ������$black";
			}
		}
	}
}
echo "<br><h3>һ��ѭ����<font color=red>{$num}</font>�Σ�</h3>";

/*������ѭ���Ĵ���ͳ��*/
$num = 0;
for($red=1;$red<=25;$red++)
{
	$white = 25-$red;
	$black = 31-$white;
	$num++;
	if($red+$white==25 && $white+$black==31 && $red+$black==28)
	{
		echo "<br>����$red ������$white ������$black";
	}
}
echo "<br><h3>һ��ѭ����<font color=red>{$num}</font>�Σ�</h3>";

?>
</body>
</html>
