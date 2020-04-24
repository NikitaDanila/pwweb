<?php
include_once 'randomnumber.inc.php';
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);

	$conn=mysql_connect("localhost","root","");
	$db=mysql_select_db("loginsystem");

	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	$request= "SELECT user_uid, user_pwd FROM users WHERE user_uid = '$uid' AND user_pwd = '$pwd'";
	$result = mysql_query($request);
	$row = mysql_fetch_array($result);

	$_SESSION["uid"] = $row["user_uid"];
	$randomNumber = $_SESSION['randomNumber'];
	$_SESSION["gut"] = "";
	
	if($row["user_uid"] != $uid){
		header("Location: ../newgame.php");
	} 
	else{
		header("Location: ../newgame.php?login=success");
	}