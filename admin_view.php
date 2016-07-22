<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php                                                                                     
session_start();
	if(!isset($_SESSION['user_level']) or ($_SESSION['user_level']!=1))  
	{	 
	echo $_SESSION['user_level'];
	//header('location:login_form.php');
	exit(); 
	} 
	?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin page</title>
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
		margin-top:10px;
	}
	#cont
	{
		margin-top:15px;
	}
	#col4
	{
		border:solid !important;
	}
	#col8
	{
		border:solid #F00;
	}
	body {margin: 0;}

ul.sidenav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width:15%;
    background-color: #f1f1f1;
    position: fixed;
    height:auto;
    overflow: auto;
	border:solid !important;
}

ul.sidenav li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}
 
ul.sidenav li a.active {
    background-color: #4CAF50;
    color: white;
}

ul.sidenav li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

div.content {
    margin-left:18%;
    margin-right:5%;
	padding: 1px 16px;
    height: 100%;
	border:solid !important;
	}

@media screen and (max-width: 600px){
    ul.sidenav {
        width:100%;
        height:auto;
        position:relative;
    }
    ul.sidenav li a {
        float: left;
        padding: 15px;
    }
    div.content {
		margin-left:0;
		margin-right:0;
		}
}

@media screen and (max-width: 400px){
    ul.sidenav li a {
        text-align: center;
        float: none;
    }
}
	#font
	{
		font:"Courier New", Courier, monospace;
		font-size:larger;
		padding:10px;
		color:#FFFBF0;
		border:solid #F00;
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
      <li id="font"><?php 
		echo $_SESSION['name']; 
		?></li>
      <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<br />
<br />
<br /><br />
<ul class="sidenav">
  <li><a class="active" href="#home">Home</a></li>
 <li><a href="user_data.php">View Registered User</a></li>
 <!-- <li><form id = "reg-tab">
  <label for="text" class="control-label">reg-data</label>
  <input name="reg-data" id="reg-data" type="button" />
  <div id="content"></div>
  </form>
  <script>
  $('#reg-data').click(function(){
	  $.ajax({
		  url:"test.php",
		  type:'POST',
		  dataType:"json",
		  data:$("#reg-tab").serialize()
	  }).done(function(res){
		  var json_text = JSON.stringify(res,null,2);
		  obj = JSON.parse(json_text);
		  $("#content").html(obj.array.name);
	  });
  });
  </script>-->
  <li><a href="../admin/admincatalog.php">Catalog Entry</a></li>
  <li><a href="#about">About</a></li>
</ul>
<div class="content" id="content">
<!--<script id = "source" language="javascript" type="text/javascript">
	 $(function () 
  {
    //-----------------------------------------------------------------------
    // 2) Send a http request with AJAX http://api.jquery.com/jQuery.ajax/
    //-----------------------------------------------------------------------
    $.ajax({                                      
      url: 'test.php',                  //the script to call to get data          
      data: "",                        //you can insert url argumnets here to pass to api.php
                                       //for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
        var id = data[0];              //get id
        var name = data[1];
		var email = data[2];           //get name
        //--------------------------------------------------------------------
        // 3) Update html content
        //--------------------------------------------------------------------
        $('#output').html("<b>id: </b>"+id+"<b> name: </b>"+name+"<b> email: </b>"+email); //Set output element html
        //recommend reading up on jquery selectors they are awesome 
        // http://api.jquery.com/category/selectors/
      } 
    });
  }); 

  </script>-->
  <h2>Responsive Sidenav Example</h2>
  <p>This example use media queries to transform the sidenav to a top navigation bar when the screen size is 600px or less.</p>
  <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
  <p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
  <h4>Resize the browser window to see the effect.</h4>
	

</div>
</body>
</html>