<?php
	if(isset($_POST['register']))
	{
	require('mysqli_conn_login.php');
	echo'everything is fine';
	$name = mysqli_real_escape_string($dbcon,$_POST['name']);
	$username = mysqli_real_escape_string($dbcon,$_POST['uid']);
	$password = mysqli_real_escape_string($dbcon,$_POST['pwd']);
	$repassword = mysqli_real_escape_string($dbcon,$_POST['rpwd']);
	$email = mysqli_real_escape_string($dbcon,$_POST['email']);
	$securityQ = mysqli_real_escape_string($dbcon,$_POST['sq']);
	$securityA = mysqli_real_escape_string($dbcon,$_POST['ans']);
	if($password != $repassword)
	{
		echo"password doesnt match";
	}
	else
	{
	$q = "INSERT INTO user_account(name , username , password , email , securityQ , securityA)VALUES ('$name' , '$username' , '$password' , '$email' , 			         '$securityQ' , '$securityA')";
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