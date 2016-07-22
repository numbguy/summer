<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>category</title>
<!--
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-responsive.min.css" />-->
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css" />
<script type="text/javascript" src="Bootstrap/js/JQuery.js">
</script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
 <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
<style>
	.row
	{
		margin-top:100px;
	}
	#cont
	{
		margin-top:15px;
		
	}

</style>
</head>

<body>
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container" >
    <div class="navbar-header">
      <button type ="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Sarcastic Art</a>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="nav navbar-nav">
      <li class="active"><a href="http://www.sarcasticart.in"target="_blank">Home</a></li>
      <li><a href="http://www.sarcasticart.in/about-us.php" target="_blank">About</a></li>
      <li><a href="http://www.sarcasticart.in"target="_blank">Contact</a></li>
      </ul>
        <form role="search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" placeholder="Search" class="form-control" />
          </div>
        </form>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Login</a></li>
      <li><a href="#">Signup</a></li>
      </ul>
    </div>
  </div>
</nav>
<br />
<br />
<br /><br />
<div class="container" id="cont">
<h1><font face="Palatino Linotype, Book Antiqua, Palatino, serif" color="#007FFF"> Water Colors </font></h1>
<div class="row">
<?php
	require('mysqli_conn.php');
	$image_path = 'http://localhost:97/recon/admin/photos/';
	$q = "SELECT ImageId,image_name ,image_category FROM water";
	$result = mysqli_query($dbcon,$q);
	if($result)
	{
		                                                
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
		{ 
		$src=$image_path.$row['image_name'];
		$cat =  $row['image_category'];
		//echo $cat;
		echo '
  <div class="col-xs-3">
    <div class="thumbnail">
   <!--    <a href="product_show.php?id='.$row['ImageId'].'">-->
	<a href="product_show.php?imagename='.$row['image_name'].' & imagecategory ='.$cat.'">

	  <script type="text/javascript" language="javascript">
	  var a = '.$row['ImageId'].'
	  document.write(a);
	 	</script>
	 
	  <img src='.$src.' height="350" width="350"></a>
     	<h3>Image 1</h3>
        <h4>Price:</h4>
      </div>
	</div>';	
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
</div>

 <hr />
</div>

</body>
</html> 