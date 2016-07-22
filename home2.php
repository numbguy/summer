<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	session_start();
	if(!isset($_SESSION['name']))
	{
		echo ' not signed in';
	}
?>
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
  #im{
	  overflow:hidden;
  }
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
	  margin: auto;
    }
  .foot {
	  width:100%;
	  background-color:#003500;
    }
	#log{
		height:100%;
		border:solid #2A1F00;
		overflow:scroll;
		width:250px;
		margin-left:15px;
		position:inherit;
	}
	#thumb{
		height:200px;
		width:200px;
		}
    </style>
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
<a class="navbar-brand" href="home2.php">Sarcastic Art</a>
</div>
<div class="collapse navbar-collapse" id="navbarCollapse">
<ul class="nav navbar-nav">
<li class="active"><a href="home2.php"target="_blank">Home</a></li>
<!-- dropdown menu -->
<li class = "dropdown">
<a href = "#" data-toggle = "dropdown" class ="dropdown-toggle"> Categories <b class = "caret"></b></a>
<ul class = "dropdown-menu">
<li><a href = "#" > mountains </a></li>
<li><a href = "#" > rivers </a> </li>
<li><a href = "#" > cars </a> </li>
<li> <a href = "#" > trucks </a> </li>
<li class = "divider"></li>
<li> <a href = "#" > TRash </a> </li>
</ul>
</li> 
</ul>
<form role="search" class="navbar-form navbar-left">
<div class="form-group">
<input type="text" placeholder="Search" class="form-control" />
</div>
</form>

<ul class="nav navbar-nav navbar-right">
<li class = "dropdown">
<a href = "#" data-toggle = "dropdown" class ="dropdown-toggle"> Login <b class = "caret"></b></a>
<ul class = "dropdown-menu">
<li><a href="../login module/login_form.php">Login As User</a></li>
<li><a href="#">Login as Artist</a></li>
</ul></li>
<li class = "dropdown">
<a href = "#" data-toggle = "dropdown" class ="dropdown-toggle"> Register <b class = "caret"></b></a>
<ul class="dropdown-menu">
<li><a href="../login module/user_register.php">User Register</a></li>
<li><a href="../login module/artist_registration.php">Artist Register</a></li>
</ul>
</li>
</ul>
</div>
</div>
</nav>
<!--<div class="container">-->
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="../admin/photos/C61SEKPealUpopLdYqQuKbp2zI6rdcYFfwpWpwYekdFED2QWswbFNE9jP9b6NgB8.jpg" alt="Life" width="460" height="345">
        <div class="carousel-caption">
          <h3>Quotes</h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="../admin/photos/8626.jpg" alt="trees" width="460" height="345">
        <div class="carousel-caption">
          <h3>OIL</h3>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="../admin/photos/499787.png" alt="Programmer" width="460" height="345">
        <div class="carousel-caption">
          <h3>Quotes</h3>
          <p></p>
        </div>
      </div>

     
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!--</div>-->
<br />
<br />
<div class="container" id="cont">
<h4><font face="Palatino Linotype, Book Antiqua, Palatino, serif" color="#007FFF"><a href="Newaddtion.php"> New Addition</a></font></h4>
<div  class = "col-xs-9">
<div class="row">
<?php
	require('mysqli_conn.php');
	$image_path = 'http://localhost:97/recon/admin/photos/';
	$q = "SELECT ImageId,image_name FROM newaddition LIMIT 4";
	$result = mysqli_query($dbcon,$q);
	if($result)
	{
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
		{ 
			$src=$image_path.$row['image_name'];
			echo '
  			<div class="col-xs-3">
    		<div class="thumbnail" id = "thumb">
     		<a href="Newaddtion.php">
	  		<script type="text/javascript" language="javascript">
	  		var a = '.$row['ImageId'].'
	  		document.write(a);
	 		</script>
	 		<img src='.$src.' height="150" width="150" id = "im"></a>
      		</div>
			</div>';	
		}
		 mysqli_free_result($result); 
	}
	else 
	{ 
		 echo ' no records matched ' ;
	} 
		 mysqli_close($dbcon); 
		 ?>

</div>
<hr />
<!--<div class="container" id="cont">-->
<h4><font face="Palatino Linotype, Book Antiqua, Palatino, serif" color="#007FFF"><a href="oil.php"> Oil Paintings </a></font></h4>
<div class="row">
<?php
	//require('mysqli_conn.php');
	$dbcon = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL:'.mysqli_connect.error()); 
	if($dbcon)
	//echo"connected";
	// Set the encoding 
	mysqli_set_charset($dbcon,'utf8'); 
	$image_path = 'http://localhost:97/recon/admin/photos/';
	$q = "SELECT ImageId,image_name FROM oil LIMIT 4";
	$result = mysqli_query($dbcon,$q);
	if($result)
	{
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
		{ 
			$src=$image_path.$row['image_name'];
			echo '
  			<div class="col-xs-3">
    		<div class="thumbnail" id = "thumb">
     		<a href="oil.php">
	  		<script type="text/javascript" language="javascript">
	  		var a = '.$row['ImageId'].'
	  		document.write(a);
	 		</script>
	 		<img src='.$src.' height="150" width="150"></a>
      		</div>
			</div>';	
		}
		 mysqli_free_result($result); 
	}
	else 
	{ 
		 echo ' no records matched ' ;
	} 
		 mysqli_close($dbcon); 
	?>
</div>
<hr />
<h4><font face="Palatino Linotype, Book Antiqua, Palatino, serif" color="#007FFF"><a href="Mural.php"> Mural Works </a></font></h4>
<div class="row">
<?php
	//require('mysqli_conn.php');
	$dbcon = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL:'.mysqli_connect.error()); 
	if($dbcon)
	//echo"connected";
	// Set the encoding 
	mysqli_set_charset($dbcon,'utf8'); 
	$image_path = 'http://localhost:97/recon/admin/photos/';
	$q = "SELECT ImageId,image_name FROM mural LIMIT 4";
	$result = mysqli_query($dbcon,$q);
	if($result)
	{
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
		{ 
			$src=$image_path.$row['image_name'];
			echo '
  			<div class="col-xs-3">
    		<div class="thumbnail" id = "thumb">
     		<a href="oil.php">
	  		<script type="text/javascript" language="javascript">
	  		var a = '.$row['ImageId'].'
	  		document.write(a);
	 		</script>
	 		<img src='.$src.' height="150" width="150"></a>
      		</div>
			</div>';	
		}
		 mysqli_free_result($result); 
	}
	else 
	{ 
		 echo ' no records matched ' ;
	} 
		 mysqli_close($dbcon); 
	?>
</div>
<hr />

<h4><font face="Palatino Linotype, Book Antiqua, Palatino, serif" color="#007FFF"><a href="pencil.php"> Pencil Art </a></font></h4>
<div class="row">
<?php
	//require('mysqli_conn.php');
	$dbcon = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL:'.mysqli_connect.error()); 
	if($dbcon)
	//echo"connected";
	// Set the encoding 
	mysqli_set_charset($dbcon,'utf8'); 
	$image_path = 'http://localhost:97/recon/admin/photos/';
	$q = "SELECT ImageId,image_name FROM pencil LIMIT 4";
	$result = mysqli_query($dbcon,$q);
	if($result)
	{
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
		{ 
			$src=$image_path.$row['image_name'];
			echo '
  			<div class="col-xs-3">
    		<div class="thumbnail" id = "thumb">
     		<a href="oil.php">
	  		<script type="text/javascript" language="javascript">
	  		var a = '.$row['ImageId'].'
	  		document.write(a);
	 		</script>
	 		<img src='.$src.' height="150" width="150"></a>
      		</div>
			</div>';	
		}
		 mysqli_free_result($result); 
	}
	else 
	{ 
		 echo ' no records matched ' ;
	} 
		 mysqli_close($dbcon); 
	?>
</div>
<hr />
<h4><font face="Palatino Linotype, Book Antiqua, Palatino, serif" color="#007FFF"><a href="wash.php"> Wash Paintings </a></font></h4>
<div class="row">
<?php
	//require('mysqli_conn.php');
	$dbcon = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL:'.mysqli_connect.error()); 
	if($dbcon)
	//echo"connected";
	// Set the encoding 
	mysqli_set_charset($dbcon,'utf8'); 
	$image_path = 'http://localhost:97/recon/admin/photos/';
	$q = "SELECT ImageId,image_name FROM wash LIMIT 4";
	$result = mysqli_query($dbcon,$q);
	if($result)
	{
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
		{ 
			$src=$image_path.$row['image_name'];
			echo '
  			<div class="col-xs-3">
    		<div class="thumbnail" id = "thumb">
     		<a href="oil.php">
	  		<script type="text/javascript" language="javascript">
	  		var a = '.$row['ImageId'].'
	  		document.write(a);
	 		</script>
	 		<img src='.$src.' height="150" width="150"></a>
      		</div>
			</div>';	
		}
		 mysqli_free_result($result); 
	}
	else 
	{ 
		 echo ' no records matched ' ;
	} 
		 mysqli_close($dbcon); 
	?>
</div>
<hr />

<h4><font face="Palatino Linotype, Book Antiqua, Palatino, serif" color="#007FFF"><a href="acrylic.php"> Acrylic Masterpiece </a></font></h4>
<div class="row">
<?php
	//require('mysqli_conn.php');
	$dbcon = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL:'.mysqli_connect.error()); 
	if($dbcon)
	//echo"connected";
	// Set the encoding 
	mysqli_set_charset($dbcon,'utf8'); 
	$image_path = 'http://localhost:97/recon/admin/photos/';
	$q = "SELECT ImageId,image_name FROM acrylic LIMIT 4";
	$result = mysqli_query($dbcon,$q);
	if($result)
	{
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
		{ 
			$src=$image_path.$row['image_name'];
			echo '
  			<div class="col-xs-3">
    		<div class="thumbnail" id = "thumb">
     		<a href="oil.php">
	  		<script type="text/javascript" language="javascript">
	  		var a = '.$row['ImageId'].'
	  		document.write(a);
	 		</script>
	 		<img src='.$src.' height="150" width="150"></a>
      		</div>
			</div>';	
		}
		 mysqli_free_result($result); 
	}
	else 
	{ 
		 echo ' no records matched ' ;
	} 
		 mysqli_close($dbcon); 
	?>
</div>
<hr />
<h4><font face="Palatino Linotype, Book Antiqua, Palatino, serif" color="#007FFF"><a href="water.php"> Water colours</a></font></h4>
<div class="row">
<?php
	//require('mysqli_conn.php');
	$dbcon = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL:'.mysqli_connect.error()); 
	if($dbcon)
	//echo"connected";
	// Set the encoding 
	mysqli_set_charset($dbcon,'utf8'); 
	$image_path = 'http://localhost:97/recon/admin/photos/';
	$q = "SELECT ImageId,image_name FROM water LIMIT 4";
	$result = mysqli_query($dbcon,$q);
	if($result)
	{
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
		{ 
			$src=$image_path.$row['image_name'];
			echo '
  			<div class="col-xs-3">
    		<div class="thumbnail" id = "thumb">
     		<a href="oil.php">
	  		<script type="text/javascript" language="javascript">
	  		var a = '.$row['ImageId'].'
	  		document.write(a);
	 		</script>
	 		<img src='.$src.' height="150" width="150"></a>
      		</div>
			</div>';	
		}
		 mysqli_free_result($result); 
	}
	else 
	{ 
		 echo ' no records matched ' ;
	} 
		 mysqli_close($dbcon); 
	?>
</div>
<hr />
</div>

<div class="col-xs-3">
<div id = "log">

    </div>
    </div>
</div>
<div class="foot">
    	<p>&copy; Copyright 2015 Sarcasticart</p>
      <p> <ul type = "square">
      	  <li><a href = "disclaimer.html">Disclaimer</a></li>
          <li><a href="About-us.php"> About US </a></li>
          <li><a href = "terms.html"> Terms and Conditions </a> </li>
          <li><a href="team.php"> Our Team </a></li>
          </ul>
      </footer>
  </div>
</body>
</html>