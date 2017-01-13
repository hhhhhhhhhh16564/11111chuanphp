<?php
//包含连接数据库的文件
require("include/conn.php");

//判断表单数据是否由login.php页面提交
if(isset($_POST["ac"]) && $_POST["ac"]=="login")
{
	//获取用户名和密码信息
	$username = trim($_POST["username"]);
	$password = trim($_POST["password"]);
	$password = md5($password);  // 对密码加密
	
	//查询数据库中的账号和密码，与用户输入的账号和密码是否匹配
	$sql = "SELECT * FROM {$db_prefix}admin WHERE username='$username' and password='$password'";
	$result = mysql_query($sql);
	$records = mysql_num_rows($result);
	//判断记录总数是不是1，如果为1，则将用户登录信息写入数据库，如果为0，跳转登录页面
	if($records==1)
	{
		//如果账号正确，则登录信息写进数据库
		$lastloginip = $_SERVER["REMOTE_ADDR"];
		$lastlogintime = time();
		//更新数据库
		$sql = "UPDATE {$db_prefix}admin SET lastloginip='$lastloginip',lastlogintime=$lastlogintime,loginhits=loginhits+1 WHERE username='$username'";
		//如果SQL语句执行成功，则跳转到success.php页面
		if(mysql_query($sql))
		{
			$message = "登录成功！";
			$url = "index.php";
			echo "<script>location.href='success.php?url=$url&message=$message'</script>";
			exit();
		}
	}else
	{
		//如果用户信息不正确，则跳转到错误信息页面
		$message = "用户名或密码不正确，返回重新填写！";
		echo "<script>location.href='error.php?message=$message'</script>";
		exit();
	}
	
}else
{
	$message = "非法用户！";
	echo "<script>location.href='error.php?message=$message'</script>";
	exit();
}



?>