<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//ʵ�������������ڼ�
$week = date("N");  //���ص�ֵ1(����һ)-7(������)
switch($week)
{
	case 1:
		$str = "һ";
		break;
	case 2:
		$str = "��";
		break;
	case 3:
		$str = "��";
		break;
	case 4:
		$str = "��";
		break;
	case 5:
		$str = "��";
		break;
	case 6:
		$str = "��";
		break;
	default:
		$str = "��";
}
echo "����������$str";
?>
</body>
</html>
