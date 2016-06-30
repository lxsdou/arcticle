<?php 
	require_once('../connect.php');

	@$user = $_GET['user'];
	@$pwd = $_GET['pwd'];
	$selectsql = 'select * from user where user = "'.$user.'"';
	@$query1 = mysql_query($selectsql);
	// if($query1&&mysql_num_rows($query1)){
	// 	while (@$row = mysql_fetch_assoc($query1)) {
	// 		@$data[] = $row;
	// 	}
	// }
	echo $selectsql;
	if (!empty($query1)) {
		$insertsql = 'insert into user(user,pwd) values("'.$user.'","'.$pwd.'")';
		$query = mysql_query($insertsql);
			if ($query) {
				echo "<script>alert('注册成功！');</script>";
				echo "<script>window.location.replace('login.php');</script>";
			} else {
				echo "<script>alert('注册失败！');</script>";
				echo "<script>window.location.replace('register.php');</script>";
	}
	} else{
		echo "该用户已被注册！";
	}
 ?>