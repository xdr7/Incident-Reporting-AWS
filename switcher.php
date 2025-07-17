<?php

$hal = $_GET['hal'];

switch($hal)
{
	case "login" :
		if(file_exists("user/form_user.php"));
		include "user/form_user.php";
		break;	
	case "user" :
		if(file_exists("user/switcher.php"));
		include "user/switcher.php";
		break;	
	case "insident" :
		if(file_exists("insident/switcher.php"));
		include "insident/switcher.php";
		break;	
	case "content" :
		if(file_exists("content/switcher.php"));
		include "content/switcher.php";
		break;		
	case "home" :
		if(file_exists("component/content.php"));
		include "component/content.php";
		break;
	case "home1" :
		if(file_exists("home1.php"));
		include "home1.php";
		break;
	
	default:header("location:?hal=login");
}
?>