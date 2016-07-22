<style type="text/css">
.fname {
	width:20%;
	border:2px solid;
	background-color:#0CF;
	margin:100px auto;
	padding:10px 40px;
	border-radius:25px;
	text-align:center;
}
#reg {
	text-decoration:underline;
	text-shadow:#999;
}
#login:hover {
	background-color:#F33;
	text-decoration:underline;
}	
.box {
	width: 30%;
	margin: 100px auto;
	background: rgba(255,255,255,0.2);
	/*background-color:#FF9;*/
	padding: 35px;
	border: 2px solid #906;
	border-radius: 50px;
	background-clip: padding-box;
	background-image:url(Wallpapers/166156224_d092a1bd88_o%20-%20Copy.jpg);
	/*text-align: center;*/
}

/*.already {
	border:2px solid;
	background-color:#0CF;
	margin:100px auto;
	width:20%;
	border-radius:50px;
	padding:10px 40px;
}*/
body {
	background-image:url(Wallpapers/141_1920%20-%20Copy.jpg);
	background-size:100%;
	background-attachment:fixed;
	animation:backpic 60s;
	animation-iteration-count:infinite;
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	}
@keyframes backpic {
	0% { background-image:url(Wallpapers/141_1920%20-%20Copy.jpg); }
	10% { background-image:url(Wallpapers/01012_pineygrovefarmnc_1920x12001%20-%20Copy.jpg); }
	40% { background-image:url(Wallpapers/2004-11-03-1920x1200%20-%20Copy.jpg); }
	60% { background-image:url(Wallpapers/140782655_8566d0d198_o%20-%20Copy.jpg); }
	80% { background-image:url(Wallpapers/171525067_1bc34b024f_o%20-%20Copy.jpg); }
	90% { background-image:url(Wallpapers/141_1920%20-%20Copy.jpg)}
}
.logo {
	width:1300px;
	height:100px;
	padding:10px;
	position:right top;
	border:3px solid;
	border-radius:25px;
}
.heading {
	border:3px solid;
	width:1140px;
	height:95px;
	float:right;
	text-align: center;
	border-radius:25px;
	font-size:50px;
}
.foot {
	width:1325px;
	height:100px;
	border:3px solid;
	border-radius:25px;
}
.cont {
	float:right;
	width:400px;
	height:80px;
	padding:10px 10px;
	border-left:2px solid;
	border-radius:25px;
	background-color:#6F3;
	color:#FFF;
}
.cont:hover {
	background-color:#396;
	text-decoration:underline;
}
.body {
	width:1325px;
}
</style>
<body>
<div class="logo" >
<img src="Wallpapers/believe.jpeg" width:"75px" height="100px"/>
<div class="heading">
COMPANY NAME
</div>
</div>
<div class="body">
<div class="fname" id="reg">
<b style="font-size:23px">REGISTRATION FORM</b>
</div>
<div class = "box">
<form id = "form1" style="border:#0F0" method="post" action="register_artista.php">
	<pre font>
<sup>*</sup>Name:               <input type="text" placeholder="Enter Name" name="name" />
    <br />
<sup>*</sup>Email ID:           <input type="text" placeholder="Enter Email" name="email" />
    <br />
<sup>*</sup>Password:           <input type="password" placeholder="Enter Password" name="pwd" />
    <br />
<sup>*</sup>Re-Password:        <input type="password" placeholder="Re-Enter Password" name="rpwd"/>
    <br />
<sup>*</sup>Address             <textarea rows="5" cols="25" name = "address"></textarea>
    <br />
<sup>*</sup>Phone Number         <input type = "text" placeholder="mobile no" name="mob" />
    <br />
    
            <br>
    		<input type = "submit"  value="register" name="register"/> <input type = "reset"  value="Later On"/>
            </pre>
            </form>
<sub>*ALL FIELDS ARE MANDATARY</sub>
</div>
<div class="fname" id="login">
ALREADY REGISTER. LOGIN HERE
</div>
</div>
<div class="foot">
<div class="cont">Contact us</div></div>            
</body>