<?php 
	require_once('../connect.php');
	session_start();
	@$user = $_GET['user'];
	@$pwd = $_GET['pwd'];
	$selectsql = 'select * from user where user = "'.$user.'"';
	$query = mysql_query($selectsql);
	if ($query&&mysql_num_rows($query)) {
		while ($row = mysql_fetch_assoc($query)){
			@$data[] = $row;
		}
	}
	echo @$data['pwd'];
	foreach (@$data as $value) {
		// echo $value['id'];
		// echo $value['user'];
		// echo $value['pwd'];
	}
	if ($user === @$value['user']&&$pwd === @$value['pwd']) {
		echo "<script>alert('登陆成功！');</script>";
		$_SESSION['user'] = $user;
		//echo $_COOKIE['user'].'1111';
		echo "<script>window.location.replace('arcticle.manage.php');</script>";
	} else {
		echo "<script>alert('登陆失败！');</script>";
		echo "<script>window.location.replace('login.php');</script>";
	}
 ?>