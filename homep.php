<link rel="stylesheet" type="text/css" href="slider.css">
<style type = "text/css">
/*.t
{
	background-color:aqua;
	width:100%;
	height:30px;
	margin-top:70px;
}*/
 ul{
		background-color:aqua;
		width:100%;
		height:40px;
		margin-top:70px;
		list-style-type:none;
		overflow:hidden;
	}
	li{
		float:left;
	 	border-right:2px #FF0000;
	}
	li:last-child{
		border-right:none;
	}
    li a{
		display:block;
		text-align:center;
		color:#2A3F00;
		padding:10px 20px;
		}
	li a:hover
	{
		background-color:#FFFBF0;
	}

.nav
{
	background-color:grey;
	width:100%;
	height:60px;
	position:fixed;
	margin:0;
	top:0;
}
#s{
	float:right;
	margin-right:30px;
	margin-top:20px;
}
input[type=search]
{
	background-image:url(search-icon.png);
	background-repeat:no-repeat;
	margin-left:0;
}



.l
{
	background-color:orange;
	width:10%;
	height:90%;
	float:left;
}
.r
{
	background-color:red;
	width:90%;
	height:90%;
	float:right;
}
.f
{
	background-color:black;
	width:100%;
	height:200px;
}
</style>
<div class="nav">
<img src="images/3d-fantasy-art-1920x1080-1010025.jpg" width="50" height="50">
<i><B><font face="Comic Sans MS, cursive" size="+3">SARCASTIC ART</font></B></i>
<form id="s">
<input type="search">
</form>
</div>
<ul>
<li><a href="home.php"><font size="+2"><b>HOME</b></font></a></li>
<li><a href="page1.php"><font size="+2"><b>Page1</b></font></a></li>
<li><a href="page2.php"><font size="+2"><b>Page2</b></font></a></li>
<li><a href="page3.php"><font size="+2"><b>Page3</b></font></a></li>
</ul>


<div style="clear:both"></div>
<div class="container">
<img src="images/2a3TP.jpg"  class= "img"/>
<div id= "left_holder"></div>
<div id="right_holder"></div>




</div>
<div class= "l">
</div>
<div class = "r">
</div>
<div style = "clear:both"></div>
<div class = "f">
</div>