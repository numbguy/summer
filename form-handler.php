<?php
	/* contact form handler */
	$mailto="mayank.dubey09@gmail.com";
	$subject = "Message from some user";
	$formurl ="http://localhost:97/recon/home2.php/contact-us.php";
	$errorurl= "http://localhost:97/recon/error.html";
	$thankyouurl="http://localhost:97/recon/thankyou.html";
	$uself=0;
	//set the information received from the form as short variable			     $headersep = (!isset($uself) || ($uself == 0) ? "\r\n" : "\n";
	$username= $post['name'];
	$useremail= $post['email'];
	$phone= $post['phone'];
	$comment = $post['comment'];
	$http_referrer = getenv("HTTP_REFERER");
	$errors = array();
	/*errror checking here*/
	
	if(preg_match("[\r\n]",$username)||preg_match( "[\r\n]", $useremail )) 
	{ 
	header( "Location: $errorurl" ); 
	exit ; 
	} 
	#remove any spaces from beginning and end of email address 
	$useremail = trim($useremail); 
	#Check for permitted email address patterns 
	$name = "/^[-!#$%&\'*+\\.\/0-9=?A-Z^ `{|}~]+"; 
	$host = "([-0-9A-Z]+\.)+"; 
	$tlds = "([0-9A-Z]){2,4}$/i"; 
	if(!preg_match($name."@".$host.$tlds,$useremail)) 
	{ 
	header( "Location:$emailerrurl"); 
	exit ; 
	} 
	if (!empty($_POST['phone'])) 
	{ 
	//Remove spaces, hyphens, letters and brackets
	 $phone = preg_replace('/\D+/', '', ($_POST['phone'])); 
	 } 
	//check that no URLs have been inserted in the comment text area 
	if(strpos ($comment, '://')||strpos($comment, 'www') !==false)
	{ 
	header( "Location: $errorcommenturl" ); 
	exit ; 
	} 
	$messageproper = 
	"This message was sent from:\n" . 
	"$http referrer\n" . 
	"------------------------------------------------------------\n" .
	 "Name of sender: $username\n" . 
	 "Email of sender: $useremail\n" . 
	 "Telephone: $phone\n" . 
	 "------------------------- MESSAGE -------------------------\n\n" .
	  $comment . 
	  "\n\n------------------------------------------------------------\n" ;
	   mail($mailto, $subject, $messageproper, "From: \"$username\" <$useremail>" ); 
	   header( "Location: $thankyouurl" ); 
	   exit ; 
	   ?>
