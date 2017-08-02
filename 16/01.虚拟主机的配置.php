<?php 

网络基本概念
IP地址
网络中的每台电脑或网络设备都有一个自己的编号，这个编号应该是唯一，这个编号称为“IP地址”。
IP地址就跟我们的身份证号码一样。
IP地址，Internet Protocol Address网络协议地址。如：192.168.3.100
计算机之间的通讯，就是通过IP地址来进行的。
IP地址由32位二进制构成，分成四段，每个网段用小点隔开。“点分十进制”形式(a.b.c.d)，每段取值0-255之间。
特殊IP地址：127.0.0.1是指本机的内部测试IP地址。这个IP外部用户无法访问。
提示：电脑的IP地址一般是设置网卡中，一台电脑可有N多个网卡，一个网卡设置多个IP地址。


DN
DN，Domain Name域名。因为IP地址太不方便记忆，域名就是一串字符。
域名的命名规则：字母、数字、-(中划线)，一个域名最长不超过255个字符。
特殊的域名：localhost，是指本机内置域名，外部用户也不能访问。
172.23.43.34
167.42.67.124
192.168.1.237
例如：www.sina.com.cn   www.sohu.com
域名是分层次的：一般来说，范围最小的放在左边，范围最大放在右边。WWW叫网络名，sina是域名的主体，com商业公司，cn代表国家的顶级域名。
顶级域名的代号(行业类别)
com：商业公司
net：网络公司
mil：军事站点
edu：教育公共机构。www.pku.edu.cn  
gov：政府部门。www.henan.gov.cn   www.gz.gov.cn   www.beijing.gov.cn  
org：非盈利组织，红十字会www.redcross.org.cn  
顶级域名的代号(国家)
cn：代表中国
jp：代表日本
us：代表美国
fr：代表法国

DNS
DNS，Domain Name System域名解析系统，将我们输入的域名“翻译”成指定的IP地址，因为计算机只能识别IP地址，不认识域名是个什么东西。
DNS服务器：安装了DNS软件的电脑就是DNS服务器，也是一台电脑。
在DNS服务器中，存在“IP地址”和“域名”的一个对应关系。
	192.168.3.100     www.2014.com
	192.168.3.100		www.20140706.com
	172.123.32.24     www.baidu.com





hosts文件：本地DNS
hosts文件的路径：C:\Windows\System32\drivers\etc\hosts
注意：hosts文件没有扩展，是一个隐藏文件，可以使用任何编辑器打开。

上图表示：是IP地址和域名的一个关系表。

PHP网页的工作原理


Apache服务器介绍
Apache就是一个服务器软件，安装了Apache软件的电脑就是Apache服务器。
Apache是当前最流行的服务器，大约占市场60%以上的份额。
其它的服务器：IIS、Nginx等。
Apache特点：跨平台(windows、linux、 mac等)、连接市场上几乎所有的数据库(Access、Sql Server、MySQL、DB、Oracle等、配置文件是一个文本文件、开源、免费的)

phpStudy集成环境
PHP集成环境：wamp、phpstudy等
一般集成环境都会包含的功能：Apache、PHP、MySQL、phpMyAdmin(MySQL数据管理的界面)等
一、安装目录

二、选择网站的默认根目录

注意：网站的文件路径上不能含有中文字符。
三、选择要安装的组件


四、安装完成的界面

五、安装成功的界面


六、登录phpMyAdmin数据库管理软件
登录的地址：localhost/phpMyAdmin
登录的账号：root  root 

七、检查Apache服务是否启动
1、在任务栏的小图标上点击
2、查看进程管理：我的电脑——右击“管理”——服务和应该程序——服务



在DOS下，启动和停止Apache服务

phpStudy主程序的安装目录：C:\Program Files (x86)\phpStudy\Apache2
网站根目录：e:\www
访问网站的方法：
	域名：localhost
	IP地址：127.0.0.1
	网卡的IP：192.168.3.100
	


Apache的安装目录

bin：就是Apache的主程序文件夹，httpd.exe主程序
conf：全称config，是Apahce的主配置文件夹
		httpd.conf：是Apache的主配置文件
		vhosts.conf：是虚拟主机的配置文件
error：Apache运行时产生的错误信息
htdocs：是指网站的默认根目录，为了安全起见，一般要将“网站根目录”与主程序分开。
	现在我们的网站根目录是：e:\www
Logs：Apache运行时的日志文件，用于管理员滥测服务器运行状态；
Modules：Apache支持哪些组件或模块

Apache配置文件
配置文件的路径：c:\Program Files (x86)\phpStudy\Apache2\conf\httpd.conf
编辑httpd.conf：使用notepad、dreamweaver、editplus等打开
配置文件的注释：#
检查httpd.conf配置文件的语法是否合法

Windows环境变量的修改
我的电脑——属性——高级系统设置——高级——环境变量——系统变量——修改“path”变量的值
我的电脑的path变量的值：
C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;C:\Program Files (x86)\phpStudy\Apache2\bin
注意：各个路径之间用英文下的分号“;”隔开，最后不需要加分号。


Listen监听端口
当Apache启动起来后，要绑定指定的IP地址和端口，等待请求的进入。

命令格式：Listen [IP地址:]端口号
参数说明：IP地址可选，但如果加IP地址的话，IP地址和端口号间用“:”号隔开
举例：
		Listen 80;   //监听所有IP地址的80端口(系统默认的)
		Listen 192.168.3.100:80   //监听的是192.168.3.100的80端口
		Listen 8000;    //监听所有IP地址的8000端口，是自己定义的
提示：当Apache监听的端口号发生改变时，访问网站的方式也要改变。如下图所示


ServerRoot服务器根目录
ServerRoot "C:/Program Files (x86)/phpStudy/Apache2"
含义：指Apache的安装路径，一般不需要修改。
在配置文件中，有些路径是相对路径，相对就是ServerRoot指定的路径。
比如：LoadModule actions_module modules/mod_actions.so


DocumentRoot网站根目录
DocumentRoot "e:\www "
说明：网站的全部代码，要放在这个目录下。访问时，使用：http://localhost/about/index.php
我们对虚拟主机的访问，起点都是DocumentRoot指定的目录为起点。

DirectoryIndex默认网站首页
DirectoryIndex index.html index.php index.htm default.html default.php
默认是设置三个首页文件，如果空间中，存在哪一个首页，哪一个首页就执行；
注意：如果网站空间中，没有任何一个首页文件名的话，默认情况下会显示文件列表；如果显示文件列表，对于网站的安全及你文件结构都不太好。解决的办法是：设置某个目录的访问权限。
在网站根目录下，必须有一个默认首页文件名。

<Directory Directory-path></Directory>目录访问权限
语法结构：<Directory  dir-path>目录权限的配置参数</Directory>
配置参数：Options、AllowOverride、Deny、Allow、Order
（1）Options：设置目录的一些特性
	    None：禁止用户访问
		All：允许用户的所有操作
		Indexes：如果没有首页文件名，则显示目录列表
（2）AllowOverride：允许.htaccess中的配置覆盖Apache的主配置
	AllowOverride的取值none(禁止)、allow(允许)
如果想让一个网站访问速度更快，有两种解决办法：（1）全站静态化（2）伪静态化
	伪静态的实现，需要服务器端配置。.htaccess伪静态规则文件。一般放在网站的根目录下。

Discuz论坛源程序	
www.007.com/thread-3.php
变成
www.007.com/thread-1-3-5.html

（3）Deny禁止哪些IP访问我的网站
		Deny From All    //所有的IP都禁止访问我的网站
		Deny From  192.168.3.5  192.168.3.23   //禁止指定的IP访问
（4）Allow允许哪些IP可以访问我的网站
		Allow From All    //允许所有IP访问我的网站
		Allow From 192.168.3.100  //允许指定的IP访问我的网站
（5）Order设置Deny，Allow的生效顺序
		Order Deny,Allow


虚拟主机的配置
将一台服务器划分若干个“小空间”，每个空间放一个小网站，这个小网站具有所有的功能（WWW服务、FTP服务、Email服务等）。一台普通服务器的价格8000左右，好一点5万——50万之间。

虚拟主机的分类：
第一种：是基于域名的虚拟主机，一个IP上可以有N多个域名。(为主讲解)
第二种：是基于IP的虚拟主机，多个IP，多个网卡。

NameVirtualHost命令，是配置基于域名的虚拟主机的命令之一；
语法格式：NameVirtualHost [Ip地址:]端口号
NameVirtualHost  *:80    //所有IP的80端口
Include conf/vhosts.conf    //虚拟主机的配置文件

vhosts.conf的格式
<VirtualHost  *:80>
	ServerName  www.baidu.com  #服务器名称就是域名
	DocumentRoot   “E:\itcast”    #网站根目录
	DirectoryIndex index.html index.php   #设置虚拟网站的首页文件名
	#目录权限设置
	<Directory "e:\itcast\20140706">
		Options Indexes
		Order Allow,Deny
		Allow From All
	</Directory>
</VirtualHost>

注意：虚拟主机的优先级高于主配置。虚拟主机的配置会覆盖主配置。若还想使用localhot指向E:\www，则需要在vhosts.conf中再配置一个localhost的虚拟主机。






Alias别名目录
Alias命令可以将本网站之外的其它目录“挂载”到当前网站中来使用。
语法格式：Alias /目录别名  实际目录
举例：    Alias  /music  “e:\itcast\20140706\music”





 ?>