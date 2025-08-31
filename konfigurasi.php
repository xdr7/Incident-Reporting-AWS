<?php
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "insreport";


	//$db2	= 'simrs2012';
	$site_url = "http://192.168.35.50:7777/insreport/";
	
	$con 	= mysqli_connect($host, $user, $pass) or die (mysqli_error());
	$db	 	= mysqli_select_db($con, $db) or die(mysqli_error());

/*
function koneksi_2(){
	global $host,$user,$pass,$db2;

	$con2	= mysql_connect($host, $user, $pass) or die (mysql_error());
	mysql_select_db($db2, $con2) or die(mysql_error());
	return $con2;
}*/

//Function database sama dengan di atas, hanya berbeda perlakuan
//function con1()
//{
//	global $host, $user, $pass, $db;
//	$con1 = mysql_connect($host, $user, $pass);
//	mysql_select_db($db, $con1);
//	return $con1;
//}

//function con2()
//{
//	global $host, $user, $pass, $db2;
//	$con2 = mysql_connect($host, $user, $pass);
//	mysql_select_db($db2, $con2);
//	return $con2;
//}
?>	
