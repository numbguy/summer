<?php
	session_start();
	if(!isset($_SESSION))
	{
	echo '<pre>';
	echo ''.$_SESSION['name'].'';
	echo '</pre>';
	}
	else
	{
			echo ' not in session';
	}
	?>
