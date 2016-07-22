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
			 	//count the no. of rows that matches this email/password combination...
			 	if(mysqli_num_rows($result) == 1)
			 	{
					 //if it matches start the session....
						//session_start();
						
						//$_SESSION = mysqli_fetch_array ($result, MYSQLI_ASSOC); 
					// Ensure that the user level is an integer. 
						//$_SESSION['user_level'] = (int)$_SESSION['user_level']; 
						//$_SESSION['User_ID'] = $User_ID;
						//$_SESSION['is_logged_in'] = $_SESSION['TRUE'];
						//$_SESSION['user_level'] = (int)$_SESSION['user_level'];
						//$_SESSION['User_ID'] = $_SESSION['User_ID'];
						//$_SESSION['name'] = $_SESSION['name'];
							$_SESSION['name'] = $name;				
						// Use a ternary operation to set the URL                                                  #4 
						//$url = ($_SESSION['user_level'] == 1) ? 'admin_view.php' : 'http://localhost:97/recon/main/home2.php'; 
						header('Location: test.php'); 
						
						/*echo $url;
						echo $_SESSION['user_level'];
						echo $_SESSION['User_ID'];
						echo $_SESSION['name'];*/
					// Make the browser load either the members’ or the admin page 
				//exit();
					// Cancel the rest of the script
					/*if($_SESSION['user_level']==1)
					{
						header('location: admin_view.php');
						exit();
					}
					else
					{*/
						//header('location:http://localhost:97/recon/main/home2.php');
					
					//}
				
					//mysqli_free_result($result);
					//mysqli_close($dbcon);
				}//exit();
		} 
		else 
		{ 
			 // No match was made. 
			 echo '<p class="error">
			 The e-mail address and password entered do not match our records  
			 <br>
			 Perhaps you need to register, just click the Register button on the header menu</p>';    
		}    
	}	
	else 
	{ 			
				 // If there was a problem.    
			 	echo '<p class="error">Please try again.</p>';    
	}    
			 	mysqli_close($dbcon);    
			  // End of SUBMIT conditional. 
?> 
