<style>
#cont
{
	margin-top:150px;
	border:solid;
	border-color:#2A1F00;
	alignment-adjust:middle;
}
</style>


<body>

<div class = "container" id="cont">
<h1><CENTER>ENTER THE DETAILS OF THE PRODUCTS</CENTER></h1><br /><br />	
<form method="post" action="catalogentry1.php" enctype="multipart/form-data">
<PRE>
<b><center>Artist_ID:-<input type="text" name="Artist_ID" > </center></b><br />
<b><center>Artist_name:-<input type="text" name="Artist_name" /></center></b><br />
<b><center>Image_category:-   <select name="image_category">
				<option></option>
                <option>oil </option>
                <option>acrylic</option>
                <option>mural</option>
                <option>water</option>
                <option>wash</option>
                <option>pencil</option>
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