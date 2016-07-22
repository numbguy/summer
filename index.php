<?php 
// This script performs an INSERT query that adds a record to the users table. 
	if($_SERVER['REQUEST_METHOD'] == 'POST') 
	{                                            
	#1    
	$errors = array(); 
	// Initialize an error array.    
	// Was the first name entered?    
	if(empty($_POST['name'])) 
	{ 
	$errors[] = 'You did not enter your first name.'; 
	} 
	else 
	{
	$fn = trim($_POST['name']);    
	}    
	// Was the last name entered?    
	if (empty($_POST['uid'])) 
	{        
	$errors[] = 'You did not enter your userid.';    
	} 
	else 
	{ 
	$ln = trim($_POST['uid']);    
	}    
	// Was an email address entered?    
	if (empty($_POST['email'])) 
	{        
	$errors[] = 'You did not enter your email address.';    
	} 
	else 
	{ $e = trim($_POST['email']);    
	}    
	// Did the two passwords match?      
	#2    
	if (!empty($_POST['pwd'])) 
	{        
	if ($_POST['pwd'] != $_POST['rpwd']) 
	{        
	$errors[] = 'Your passwords were not the same.';    
	} 
	else 
	{ $p = trim($_POST['pwd']);   
	 }   
	  } 
	else 
	{ 
	$errors[] = 'You did not enter your password.';    
	}
	 //Start of the SUCCESSFUL SECTION. i.e all the fields were filled out 
	 if(empty($errors)) 
	 { 
	 // If no problems encountered, register user in the database    
	  #3 
	  require ('conn.php'); // Connect to the database.                            
	  #4 // Make the query    
	   #5 
	$q = "INSERT INTO users(name,uid, pwd,email) VALUES ('$name','$uid', '$pwd', '$email')";                                 
	#6 
	$result = @mysqli_query($dbcon, $q); 
	// Run the query.                                
	#7 
	if ($result) 
	{ 
	// If it ran OK.
	#8 
	//header("location: register-thanks.php");   
	#9
	exit();                                                                                
	#10 //End of SUCCESSFUL SECTION ...}
	 }
	else 
	{ 
	// If the form handler or database table contained errors 
	#11 // Display any error message ....
	echo '<h2>System Error</h2> <p class="error">You could not be registered due to a system error. We apologize for any     inconvenience.</p>'; 
	// Debug the message: ....
	echo'<p>'.mysqli_error($dbcon).
	'<br><br>Query:'
	.$q.
	'</p>'; 
	} 
	// End of if clause ($result)
	mysqli_close($dbcon); 
	// Close the database connection.    
    exit();    
	} 
	else 
	{ // Display the errors        
	echo '<h2>Error!</h2>       
	<p class="error">The following error(s) occurred:<br>';        
	foreach($errors as $msg) 
	{ // Print each error.                          
	#12            
	echo " - $msg<br>\n";    
	}        
	echo '</p><h3>Please try again.</h3><p><br></p>';    
	}
	// End of if (empty($errors)) IF.   } 
	// End of the main Submit conditional. 
	}
?>



<h2>Register</h2>                                                                    
#13 <!--display the form on the screen--> 
<form action="index.php" method="post"> 
<p><label class="label" for="name">
First Name:</label>
<input id="name" type="text" name="name" size="30" maxlength="30" 
 value="<?php 
 		if (isset($_POST['name']))
		 echo $_POST['name']; 
		 ?>"></p> <p>
<label class="label" for="uid">
USerid: 
<input id="uid" type="text" name="uid" size="30" maxlength="40"  
value="<?php 
	if (isset($_POST['uid'])) 
	echo $_POST['uid']; 
	?>"></p> <p>
  <label class="label" for="pwd">
  Password:</label>
  <input id="pwd" type="password" name="pwd" size="12" maxlength="12"  
  value="<?php 
  if (isset($_POST['pwd'])) 
  echo $_POST['pwd']; 
  ?>" >&nbsp;  
  Between 8 and 12 characters.</p> <p>
  <label class="label" for="rpwd">
  Confirm Password:</label> 
  <input id="rpwd" type="password" name="rpwd" size="12" maxlength="12"  
  value="<?php 
  if (isset($_POST['rpwd'])) 
  echo $_POST['rpwd']; ?>">
  </p>
 <label class="label" for="email">
 Email Address:</label> 
 <input id="email" type="text" name="email" size="30" maxlength="60" 
  value="<?php 
  if (isset($_POST['email'])) 
  echo $_POST['email']; ?>"> 
  </p> 
  <p>
 
<p>	<input id="submit" type="submit" name="submit" value="Register"></p> 
	</form><!-- End of the page content. -->