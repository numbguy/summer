<?php
	if(isset($_GET["refg"])){
		$con = mysql_connect("localhost","root","");
		if(!$con)
			{
				die("not connected".mysql_error());
			}
		mysql_select_db("recon",$con);
		
		/*$name = $_GET["name"];
		$uid = $_GET["uid"];
		$pwd = $_GET["pwd"];
		$email = $_GET["email"];
		$sq = $_GET["sq"];
		$ans = $_GET["ans"];*/
		mysql_query("insert into register values('".$_GET["name"]."','". $_GET["uid"]."','".$_GET["pwd"]."','".$_GET["email"]."'.'".$_GET["sq"]."','".$_GET["ans"]."')");
		echo"Register success";
	}
?>	