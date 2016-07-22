<?php
	echo '<h1><center> This is the table for the registered user </center></h1>';
	require('mysqli_conn_login.php');
	$q = "SELECT User_ID ,name,email FROM user_account";
	$result = mysqli_query($dbcon,$q);
	if($result)
	{
		echo '<center><table border="2" color="black" cellpadding="5px" width="50%"> <tr><td><b>User_ID</b></td><td><b>Name</b></td><td><b>Email-ID</b></td></tr>'; 
		// Fetch and print all the records:                                                  #3 
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
		{ 
		echo '<tr><td>'.$row['User_ID']. '</td><td>'. $row['name'].'</td><td>'.$row['email'].'</td></tr>'; 
		}   
		 echo '</table></center>'; 
		 // Close the table so that it is ready for displaying.    
		 mysqli_free_result($result); 
		 // Free up the resources. 
		 }
		  else 
		  { 
		  // If it did not run OK. 
		  // Error message: 
		  echo '<p class="error">The current users could not be retrieved. We apologize  for any inconvenience.</p>'; 
		  // Debug message: 
		  echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>'; 
		  } 
		  // End of if($result) 
		  mysqli_close($dbcon); 
		  // Close the database connection. 

?>