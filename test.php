<?php	

$dbhost = "localhost";
$dbuser =  "root";
$dbpass ="";
$dberror1 = "could not connect to your database";
$dberror2 = "could not find your table";
$conn = mysqli_connect($dbhost,$dbuser, $dbpass) or die($dberror1);
$select_db = mysqli_select_db($conn,'reco') or die ($dberror2);
?>
<?php
if(isset($_POST['sub']));
	{
	session_start();
	/*if(isset($_POST['user']));
	echo'username can be recognised';
	/*$user1 = $_POST['user'];
	$pass1= $_POST["pass"];
	$email1 = $_POST["email"];
	*/
	$sql = $conn->query("INSERT INTO users(username , password , email) values ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')");
	}
?>
<form method = "POST" action="">
USERNAME:- <input type = "text" id = "user" name = "username"/>
PASSWORD:- <input type = "password" id = "pass" name = "password" />
EMAIL-ID:- <input type = "text" id = "email"  name = "email"/>
<input type = "submit" value = "submit" name = "sub" />
</form>
