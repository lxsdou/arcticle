<?php
	require_once('../connect.php');
	@$id = $_GET['id'];
	$query = "select *from arcticle where Id = $id";
	mysql_query($query) or die(mysql_error());
	//echo $query;
	$data = mysql_fetch_assoc(mysql_query($query));
	//echo $data['title'];
	echo $data['Id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>修改文章</title>
</head>
<body>
	<form id="form1" name="form1" method="POST" action="arcticle.modify.handle.php">
		<table>
			<td><tr>修改文章</tr><br></td>
			<td>
				<tr>标题 </tr>
				<tr><input type="text" name="title" id="title" value="<?php echo $data['title'];?>"/></tr><br>
			</td>
			<td>
				<tr>作者 </tr>
				<tr><input type="text" name="author" id="author" value="<?php echo $data['author'];?>"/></tr><br>
			</td>
			<td>
				<tr>简介 </tr>
				<tr><input type="text" name="description" id="description" value="<?php echo $data['description'];?>"/></tr><br>
			</td>
			<td>
				<tr>内容 </tr>
				<tr><input type="text" name="content" id="content" value="<?php echo $data['content'];?>"/></tr><br>
			</td>
				<td><input type="hidden" name="id" value="<?php echo $data['Id'];?>"></input></td>
			<td>
				<tr><input type="submit"/></tr><br>
			</td>
		</table>
	</form>

</body>
</html>
