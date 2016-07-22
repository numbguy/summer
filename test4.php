<?php
	require('mysqli_conn.php');
	$image_path = 'http://localhost:97/recon/admin/photos/';
	echo "$image_path";
	$q = "SELECT ImageId ,image,image_path FROM newaddition";
	$result = mysqli_query($dbcon,$q);
	if($result)
	{
		                                               #3 
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
		{ 
		echo '<tr><td>'.$row['ImageId'].'</td>';
		$src=$image_path.$row['image'];
		echo "<img src=".$src.">  <br>";
		
		
		}
		 mysqli_free_result($result); 
		 // Free up the resources. 
		 }
		  else 
		  { 
		  // If it did not run OK. 
		  // Error message: 
		 		  } 
		  // End of if($result) 
		  mysqli_close($dbcon); 
		  // Close the database connection. 

?>

