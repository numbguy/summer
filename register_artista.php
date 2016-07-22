<?php
	if(isset($_POST['register']))
	{
	require('mysqli_conn.php');
	echo'everything is fine';
	$name = mysqli_real_escape_string($dbcon,$_POST['name']);
	//$username = mysqli_real_escape_string($dbcon,$_POST['uid']);
	$email = mysqli_real_escape_string($dbcon,$_POST['email']);
	$password = mysqli_real_escape_string($dbcon,$_POST['pwd']);
	$repassword = mysqli_real_escape_string($dbcon,$_POST['rpwd']);
	
	//$securityQ = mysqli_real_escape_string($dbcon,$_POST['sq']);
	//$securityA = mysqli_real_escape_string($dbcon,$_POST['ans']);
	$address = mysqli_real_escape_string($dbcon,$_POST['address']);
	$phone = $_POST['mob'];
	if($password != $repassword)
	{
		echo"password doesnt match";
	}
	else
	{
	
	$q = "INSERT INTO artist_account(Artist_Name , Email, Password, Address, Mobile)VALUES('$name','$email','$password ,'$address','$phone')";
	$result = mysqli_query($dbcon , $q);
	if($result)
	{
		echo"registered";
	}
	else
	{

		echo"galti hua hai";
	}
	}
}
	?>