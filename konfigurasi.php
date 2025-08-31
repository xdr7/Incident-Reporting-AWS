<?php
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "insreport";

	$site_url = "http://192.168.35.50:7777/insreport/";
	
	$con 	= mysqli_connect($host, $user, $pass) or die (mysqli_error());
	$db	 	= mysqli_select_db($con, $db) or die(mysqli_error());
?>	
