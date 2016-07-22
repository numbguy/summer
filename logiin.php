<?php
	session_start();
	if(isset($_POST['login']))
	{
		require('mysqli_conn_login.php');
		//validating the email and password...
		if(!empty($_POST['email']))
		{
			$e = mysqli_real_escape_string($dbcon,$_POST['email']);
		}
		else
		{
			$e = FALSE;
			echo"emailid please";
		}
		if(!empty($_POST['pwd']))
		{
			$p = mysqli_real_escape_string($dbcon,$_POST['pwd']);
		}
		else
		{
			$p = FALSE;
			echo"password please";
		}
		if($e && $p) // no problemo
		{
			//retrieve the username and password from the database....
				$q = "SELECT User_ID , name , user_level FROM user_account WHERE ( email = '$e' AND password = '$p')";
			 	$result = mysqli_query($dbcon,$q);
				if(mysqli_num_rows($result)>0)
				{
					$_SESSION['is_logged_in']=TRUE;
					$_SESSION['name'] = $name;
					header('location:testpage.php');
				}
				else
				{
					echo ' no rows matched your requirement ' ;
				}
		}
	}
	else
	{
		echo ' you are wrong ';
	}
	
?>