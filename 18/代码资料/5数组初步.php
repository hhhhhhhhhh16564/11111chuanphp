<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//ö�����顢��������
$arr[] = 10;
$arr[10] = 100;
$arr["web_url"] = "http://www.sina.com.cn";
$arr["web_icp"] = "����12023423424��";
$arr[] = 1000;
print_r($arr);
echo "<hr>";
//���������±�
$arr = array(
				"a" => 100,
				"b" => 200,
				"c" => 300,
				10 => 1000,
				900
			);
print_r($arr);
?>
</body>
</html>
