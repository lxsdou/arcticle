<?php
	require_once('../connect.php');
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$dateline = time();
	$insertsql = "insert into arcticle(title,author,description,content,dateline) values('$title','$author','$description','$content',$dateline)";
	echo $insertsql;
	mysql_query($insertsql);
?>