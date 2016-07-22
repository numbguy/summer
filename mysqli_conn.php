<?php 
// Create a connection to the catalog database and set the encoding to utf-8 
DEFINE ('DB_USER', 'mayank'); 
DEFINE ('DB_PASSWORD', 'catalog'); 
DEFINE ('DB_HOST', 'localhost'); 
DEFINE ('DB_NAME', 'catalog'); 
// Make the connection 
$dbcon = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL:'.mysqli_connect.error()); 
	if($dbcon)
	//echo"connected";
// Set the encoding 
mysqli_set_charset($dbcon,'utf8'); 
?>