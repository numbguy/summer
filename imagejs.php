<html>
<head>
<script language="javascript" type="text/javascript">
	function showImg(i)
	{
		document.getElementById("big").src=i.src;
	}
	</script>
    </head>
 <body>
 	<img src="../images/2a3TP.jpg" widht="200px" height="300px" id="big">
    <hr color="red" size="5">
    <img src="../images/2a3TP.jpg" width="100px height="150px" onmouseover= showImg(this)>
    
    <img id="img1" src="../images/3D_Fantasy_Places_HD_0029.jpg"  width="100px" height="100px" onclick=showImg(this)>
	<img id="img2" src="../images/1920x1080_hd_wallpaper_111_zixpkcom.jpg"  width="100px" height="100px" onmouseover=showImg(this)>	
    </body>
    </html>     