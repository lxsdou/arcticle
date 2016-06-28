<?php 
	require_once('../connect.php');
	echo @$value['id'];
	$sql = "select *from arcticle order by dateline desc";
	$query = mysql_query($sql);
	if ($query&&mysql_num_rows($query)) {
			while ($row = mysql_fetch_assoc($query)) {
				echo $data[] = $row;
			}
		}else{
			$data = array();
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>管理列表</title>
</head>
<body>
	<table>
		<tr>文章管理列表</tr>
		<tr>
			<td>编号</td>
			<td>标题</td>
			<td>操作</td>
		</tr>
		<?php 
			if (!empty($data)) {
				foreach ($data as $value) {
		 ?>
		 <tr>
		 	<td><?php echo @$value['Id']; ?></td>
		 	<td><?php echo @$value['title']; ?></td>
		 	<td>
		 		<a href="arcticle.del.handle.php?id=<?php echo $value['Id']; ?>">删除</a>
				<a href="arcticle.modify.php?id=<?php echo $value['Id']; ?>">修改</a>
		 	</td>
		 </tr>
		 <?php 
		 }
		 }
		  ?>
	</table>
</body>
</html>