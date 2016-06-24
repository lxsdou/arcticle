<?php
	require_once('../connect.php');
	$id = $_GET['id'];
	$deletesql = "delete from arcticle where Id = $id";
	mysql_query($deletesql); 
?>