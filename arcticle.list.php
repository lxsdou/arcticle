<?php 
	require_once('connect.php');
	$sql = "select *from arcticle order by dateline desc";
	$query = mysql_query($sql);
	if ($query&&mysql_num_rows($query)) {
		while ($row = mysql_fetch_assoc($query)) {
			 $data[] = $row;
			 // echo $data[0]['Id'];
			 // echo $row['Id'];
			 // print_r(mysql_fetch_assoc($query));
			 //
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>文章发布系统</title>
	<style type="text/css">
		html body{
			margin: 0;
			padding: 0;
		} 
		.arcticle{
			position: relative;
			margin: 0 auto;
			padding-top: 50px;
			width: 1000px;
		}
		.title{
			float: left;
		}
		.nav{
			float: right;
			display: inline-block;
		}
		.nav li{
			display: inline;
			list-style-type: none;
		}
		.nav li a{
			text-decoration: none;
		}
		.header{
			height: 100px;
		}
		.content{
			width: 500px;
			margin-left: 165px;
			border: 1px solid #000;
		}
		.content div{
			display: block;
		}
		.content .arcticleHead .arcticleTitle{
			float: left;
		}
		.content .arcticleHead .author{
			float: right;
			margin-left: 200px;
		}
		.arcticleContent{
			width: 100%;
			height: 300px;
			margin-top: 30px;
		}
		.detail{
			margin-top: 30px;
		}
	</style>
</head>
<body>
<div class="arcticle">
	<div class="header">
		<div class="title" >这里是文章发布系统</div>
			<div class="nav">
				<li><a href="">文章</a></li>
				<li><a href="">关于我们</a></li>
				<li><a href="">联系我们</a></li>
			</div>
	</div>
	<?php 
			if (empty($data)) {
				echo "当前没有文章";
			}else{
				foreach ($data as $value) {
		 ?>
		<div class="content">
			<div class="arcticleHead">
				<div class="arcticleTitle"><?php echo $value['title']; ?></div>
				<div class="author">作者：<?php echo $value['author']; ?></div>
			</div>
			<div class="arcticleContent"><?php echo $value['content']; ?></div>
			<div class="detail"><a href="">查看详细>></a></div><br>
		</div>
	<?php 
			}
			}
		 ?>
	<div class="footer">
		<p>欢迎...</p>
	</div>
</div>	
</body>
</html>