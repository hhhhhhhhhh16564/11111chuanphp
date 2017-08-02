<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>第一个php网页</title>
</head>
<body>
<?php 
	
	echo "第一个php网页";
 ?>
	
</body>
</html>

<!-- 

1、同学们，如何在自己电脑中配置，才能通过域名访问服务器的www.20140706.com网址？
首先在你的hosts文件中做一个对应关系：192.16.3.100  www.20140706.com

2、当设置了虚拟主机后，localhost域名指向的地址不对了，怎么办？
	原因：是因为虚拟主机的优先级最高，它把主配置进行了覆盖。
	解决的办法：在虚拟主机文件中，再配置一个虚拟主机，域名是localhost，网站根目录设置为原来的。
3、配置虚拟主机的步骤
	第一步：配置本地DNS，也就是hosts文件
	第二步：找到Apache的主配置文件httpd.conf，路径C:\Program Files (x86)\phpStudy\Apache2\conf
		常用的全局配置命令
		Listen：监听指定的IP地址或端口，有访问请求进入
ServerRoot：Apache的安装路径
		DocumentRoot：你的默认网站的根目录路径
		DirectoryIndex：默认首页(网站根目录下)，index.html   index.php  index.htm
		#访问目录的权限
		<Directory  网站的路径>
			Options：你的目录具有哪些特性，none、all、Indexes
			AllowOverride：是否允许伪静态的配置规则，覆盖我们服务器的配置
					纯静态网页(.html)  >  伪静态网页(假的静态，扩展名.html) > 纯程序网站(.php)
			Order：deny,Allow,指先禁用，还是先允许
			Deny From All   
			Allow from 192.168.3.23 
</Directory>
		#虚拟主机的配置主命令
		NameVirtualHost  192.168.3.100:80  #哪个IP的哪个端口，允许访问虚拟主机
		Include conf/vhosts.conf


	第三步：虚拟主机的配置文件vhosts.conf，路径C:\Program Files (x86)\phpStudy\Apache2\conf
4、如果临时使用站点以外的目录，怎么办？
	http://www.2014.com/music
	Alias /music   “e:\itcast\20140706\music”
	
赛鑫集团网站的配置使用
配置文件：admin/include/config.php
导入SQL文件：saixinjitun.sql


PHP简介
PHP，Hypertext Preprocessor，超文本预处理器，PHP是一种开源的服务器端的脚本程序。PHP语法，结合了C、Java、 Perl、JavaScript等语法，并且PHP也有自己的语法。PHP入门比较简单。

PHP语法基础
PHP与ASP一样，也是嵌入到HTML文件中去的；
PHP文件必须要经过虚拟主机(Apache服务器)解析后，才能看到结果；
PHP的标记是：<?php    ?>
PHP文件的扩展名：.php
PHP的程序语句必须以分号结束(;)，JS中的结束分号可有可无。
PHP访问的路径上不能出现中文字符；
PHP访问时，必须要经过虚拟主机，才能看到结果；http://www.2014.com/index.php
PHP中是区分大小写的，但PHP中的关键字和函数名不区分大小写；
		break、while、WHILE 等关键字不分大小写

PHP中的注释
HTML注释：
CSS注释：/*    */
JavaScript：//或 /*   */
PHP的单行注释：//或#
PHP的多行注释：/*    */


PHP中的变量
变量就是存储数据的临时区域。程序中的所有数据，都是用不同的变量来进行存储的。
一、PHP变量的命名规则
	变量包含：字母、数字、下划线字符；
	变量只能以字母或下划线开头；
	变量不能以数字开头；
	PHP变量前必须要加一个美元符号($)；比如：  $name = “zhang”
	PHP变量不需要提前定义，使用时直接赋值即可；
	PHP中的变量名是区分大小写的，但关键字和函数名不区分；


注意：PHP的输出语句是echo，JS中的输出语句 document.write( )
		echo “字符串”;
		echo $name;
		echo true;










 -->