<?php
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "insreport";

	$site_url = "http://localhost/insreport/";
	
	$con 	= mysqli_connect($host, $user, $pass) or die (mysqli_error());
	$db	 	= mysqli_select_db($con, $db) or die(mysqli_error());
?>	
