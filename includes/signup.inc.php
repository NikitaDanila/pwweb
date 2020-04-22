<?php
	error_reporting(E_ALL ^ E_DEPRECATED);

	include_once 'dbh.inc.php';


	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	$sql = "INSERT INTO users (user_firts, user_last, user_email, user_uid, user_pwd) 
	VALUES ('$first', '$last', '$email', '$uid', '$pwd');";

	mysql_query($sql);

	header("Location: ../loginindex.php?signup=success");

?>


	

