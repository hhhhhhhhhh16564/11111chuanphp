<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//������ʼ��
$name = "�ܸ���";
$sex = true;
$age = 30;
$edu = "��ר";
$isMarried = false;
$school;  //�������������δ��ֵ��NULL��������
$salary = 2000;
$bonus = 500; 
//��������Ľ��
$str = "<h2>\"{$name}\"�Ļ�����Ϣ���£�</h2>";
$str .= "������$name";  //.=չ���� $str = $str."abc"
$str .= "<br>�Ա�".($sex ? "��" : "Ů");
$str .= "<br>���䣺$age";
$str .= "<br>ѧ����$edu";
$str .= "<br>���".($isMarried ? "�ѻ�" : "δ��");
$str .= "<br>�������ʣ�$salary";
$str .= "<br>����$bonus";
$str .= "<br>ʵ�����ʣ�".($salary+$bonus);
$str .= "<br>��ҵѧԺ��".($school ? $school : "δ��д");
echo $str;  //�൱��JS�е�document.write()
?>
</body>
</html>
