<?php
	require_once('../connect.php');
	$id = $_POST['id'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$dateline = time();
	$updatesql = "update arcticle set title='$title',author='$author',description='$description',content='$content',dateline=$dateline where Id=$id";
	echo $insertsql;
	mysql_query($updatesql);
?>