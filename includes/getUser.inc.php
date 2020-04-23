<?php
	error_reporting(E_ALL ^ E_DEPRECATED);

	$conn=mysql_connect("localhost","root","");
	$db=mysql_select_db("loginsystem");

	$uid = $_POST['uid'];

	$request= "SELECT user_uid FROM users WHERE user_uid = '$uid';";

	$result = mysql_query($request);
	$row = mysql_fetch_array($result);

	echo $row["user_uid"];
	?>

