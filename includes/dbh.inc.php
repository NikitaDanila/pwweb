<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "loginsystem";

	$conn = mysql_connect("localhost", "root", "");

	$db = mysql_select_db($dbName);

	// Crearea bazei de date
	if(!$db){ 

		$query = "CREATE DATABASE loginsystem";
		mysql_query($query);
		mysql_select_db("loginsystem");
	}

	// Creare tabel user
	$query_table_users = "CREATE TABLE users (
	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	user_firts varchar(256) not null,
	user_last varchar(256) not null,
	user_email varchar(256) not null,
	user_uid varchar(256) not null,
	user_pwd varchar(256) not null )";

	$result = mysql_query($query_table_users);
?>
