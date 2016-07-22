<?php

// Inialize session
session_start();
if(!isset($_SESSION['User_ID']))
{
	header("location:login_form.php");
	exit();
}
else
{
	$_SESSION = array();
	session_destroy();
	setcookie('PHPSESSID', ", time()-3600,'/', ", 0, 0);
// Delete certain session
//unset($_SESSION['User_ID']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location:http://localhost:97/recon/login%20module/login_form.php');
echo 'exit';
exit();
}
?>