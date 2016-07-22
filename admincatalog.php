<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admincatalog</title>
<!--<link rel="stylesheet" type="text/css" href="bootstrap1.css"/>-->
<style>
#cont
{
	margin-top:150px;
	border:solid;
	border-color:#2A1F00;
	alignment-adjust:middle;
}
</style>
</head>

<body>
<!--<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
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
</nav>-->
<div class = "container" id="cont">
<h1><CENTER>ENTER THE DETAILS OF THE PRODUCTS</CENTER></h1><br /><br />	
<form method="post" action="catalogentry.php" enctype="multipart/form-data">
<PRE>
<b><center>Artist_name:-<input type="text" name="image_name" /></center></b><br />
<b><center>Image_category:-   <select name="image_category">
				<option>oil painting</option>
                <option>Sketches</option>
                <option>watercolor</option>
                </select></center></b><br />
<b><center>Image_price:-<input type="number" name="image_price" /></center></b><br />
</PRE>
<pre>
<b><center>Image_desc:-
<textarea rows="10" cols="100" name="image_desc"></textarea></center><br /></pre>                
<center><b>Image:-<input type="file" name="image" /> <!--<input type="submit" name="submit" value="upload" />--><br />
<br />
<center><input type="submit" value="upload" name="sub" />
<input type="reset"  /></center></b>
</form>
</div>
</body>
</html>