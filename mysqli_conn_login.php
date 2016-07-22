<?php
DEFINE('DB_USER' , 'mayank2');
DEFINE('DB_PASSWORD' , 'Accounts');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'Accounts');
$dbcon = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL:'.mysqli_connect.error()); 	
	mysqli_set_charset($dbcon,'utf8');
?>