<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
//��1��ǿ�ƽ���������ת���ַ���
$a = true;       //PHP��"1"��JS��"true"
$a = false;      //""
$a = 0;          //"0"
$a = 123;        //"123"
$a = NULL;        //""
$a = 120.98;    //"120.98"
$a = (string)$a;
var_dump($a);  //JS����typeof()
//��2��ǿ�ƽ���������ת����ֵ
$a = true;       //  1
$a = false;      //  0
$a = "0";        //  0
//$a = "abc";      // 0
//$a = NULL;       // 0
//$a = "100px";    // �൱��JS�е�parseInt()
$a = (int)$a;

echo "<hr>";
var_dump($a);  //JS����typeof()

//��3��ǿ�ƽ���������ת�ɲ�����
$a = 100;        // true
$a = 0;          //  false
$a = "0";        //  false
//$a = "abc";      // true
//$a = "";         //  false
//$a = NULL;       // false
//$a = "100px";    // true
$a = (bool)$a;

echo "<hr>";
var_dump($a);  //JS����typeof()

?>
</body>
</html>
