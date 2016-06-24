<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>添加文章</title>
</head>
<body>
	<form id="form1" name="form1" method="POST" action="arcticle.add.handle.php">
		<table>
			<td><tr>发布文章</tr><br></td>
			<td>
				<tr>标题 </tr>
				<tr><input type="text" name="title" id="title" /></tr><br>
			</td>
			<td>
				<tr>作者 </tr>
				<tr><input type="text" name="author" id="author" /></tr><br>
			</td>
			<td>
				<tr>简介 </tr>
				<tr><input type="text" name="description" id="description" /></tr><br>
			</td>
			<td>
				<tr>内容 </tr>
				<tr><input type="text" name="content" id="content" /></tr><br>
			</td>
			<td>
				<tr><input type="submit"/></tr><br>
			</td>
		</table>
	</form>

</body>
</html>