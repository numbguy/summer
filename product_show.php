<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>

<!--<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-responsive.min.css" />-->
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css" />
<script type="text/javascript" src="Bootstrap/js/JQuery.js">
</script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
 <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
  <style>
  		#tum{
			border:solid !important;
			height:500px;
			width:100%;
			overflow:auto;
		}
		#cont{
			background:#C0C0C0;
		}
		#col1{
			margin-top:100px;
			height:400px;
			margin-left:0;
		}
		#col2{
			margin-top:100px;
			height:500px;
			margin-right:0;
			}
		#col3{
			margin-top:20px;
			background:#2A1FFF;
			height:200px;
			}
			#col4{
			margin-top:20px;
			background:#2AFF00;
			height:200px;
			}
			#foot{
			margin-top:20px;
			background:#2A1FFF;
			height:50px;
			margin-bottom:10px;
			
			
			}
				
	</style>
	
	<!--<script type="text/javascript" language="javascript">
	function getURLparameter(param)
	{
		var pageURL = window.location.search.substring(1);
		var URLvariables = pageURL.split('&');
		for(var i = 0 ; i< URLvariables.length; i++){
			var parameterName = URLvariables[i].split("=");
			if(parameterName[0] = param)
				return parameterName[1];
			
			}
				
	}
	var imageid = getURLparameter("Data");
 //echo $imgid = "<script>document.write(imageid)</script 
></script>-->


 
</head>


<body>
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">

<div class="container">
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
<li class="active"><a href="home2.php"target="_blank">Home</a></li>
<li><a href="http://www.sarcasticart.in/about-us.php" target="_blank">About</a></li>
<li><a href="http://www.sarcasticart.in"target="_blank">Contact</a></li>
</ul>
<form role="search" class="navbar-form navbar-left">
<div class="form-group">
<input type="text" placeholder="Search" class="form-control" />
</div>
</form>
<ul class="nav navbar-nav navbar-right">
<?php
if(!isset($_SESSION['user_id']))
{
	echo '<li><a href="../login module/login_form.php">Login</a></li>';
	echo '<li><a href="../login module/user_register.php">Signup</a></li>';
}
else
{
	echo '<li>';
 	echo $_SESSION['name']; 
	echo '</li>';
    echo '<li><a href="logout.php">Logout</a></li>';
}
?>
</ul>
</div>
</div>
</nav>
<div class = "container" id="cont">
<div class = "row">
<div class = "col-xs-5" id="col1">  
<?php
	require('mysqli_conn.php');
	
	$image_path = 'http://localhost:97/recon/admin/photos/';
	$imageName=$_GET['imagename'];
	$imagecategory = $_GET['imagecategory'];
	echo $imagecategory;
	$q = "SELECT  image_name FROM oil where image_name = '$imageName'";
	$result = mysqli_query($dbcon,$q);
	if($result)
	{
		                                                
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
		{ 
		$src=$image_path.$row['image_name'];
		
		echo '
			<div class="thumbnail" id ="tum">
	 		<img src='.$src.'></a>
      		</div>';
	  	}
		 mysqli_free_result($result); 
	}
	 else 
	 { 
			echo "bad connection";	   
	 }
	 //mysqli_close($dbcon); 
?>	
</div>
<div class = "col-xs-7" id="col2">
<?php
	//require('mysqli_conn.php');
	$image_path = 'http://localhost:97/recon/admin/photos/';
	$imageName=$_GET['imagename'];
	$q = "SELECT Artist_name, image_name , image_category , image_price , image_desc  FROM oil where image_name = '$imageName'";
	$result = mysqli_query($dbcon,$q);
	if($result)
	{
		                                                
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
		{ 
		$src=$image_path.$row['image_name'];
	  	echo '
		
			<b><u><font size="+3">Artist:-</font></u></b> <font size="+2">'.$row['Artist_name'].'</font><br><hr>
			<b><u><font size="+3">Painting :-</font></u></b> <font size="+2">'.$row['image_name'].'<br><hr>
			<b><u><font size="+3">Category :- </font></u></b> <font size="+2">'.$row['image_category'].'<br><hr>
			<b><u><font size="+3">Price :-</font></u></b> <font size="+2"> '.$row['image_price'].'<br><hr>
			<b><u><font size="+3">About :-</font></u></b> <font size="+2"> '.$row['image_desc'].'<br><hr>
			';
		}
		 mysqli_free_result($result); 
	 }
	 else 
	 { 
			echo "bad connection";	   
	 }
	 mysqli_close($dbcon); 
?>	
</div>
</div>
<!--<div class="row">
<div class = "col-xs-12" id="col3">
</div>
</div>
<div class="row">
<div class = "col-xs-12" id = "col4">
</div>
</div>
<div class="row">
<div class = "col-xs-12" id = "foot">
</div>
</div>--->
</div>