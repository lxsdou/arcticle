<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>登陆</title>
</head>
<body>
	<form class="login" action="" method="GET">
		姓名：<input type="text" placeholder="请输入姓名" name="user" id="user"></input><br>
		密码：<input type="text" placeholder="请输入密码" name="pwd" id="pwd"></input><br>
		<input type="submit" value="登陆" onclick="action='login.handle.php';"></input>
		<input type="button" value="注册" onclick="window.location.replace('register.php');"></input>
	</form>
</body>
</html>