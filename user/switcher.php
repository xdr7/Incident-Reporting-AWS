<?php
/*
 SWITCHER.PHP
 */
$act = $_GET['act'];

switch($act)
{
case "add-unit" :
		if(file_exists('user/unit-creat.php'))
		{
			$url_target = "?hal=user&act=simpan&mode=new";
			include "user/unit-creat.php";
		}
		else echo "user not Found";
		break;
	case "add" :
		if(file_exists('user/creat_user.php'))
		{
			$url_target = "?hal=user&act=simpan&mode=new";
			include "user/creat_user.php";
		}
		else echo "user not Found";
		break;
	case 'update' :
		if(file_exists('user/creat_user.php'))
		{
			$url_target = "?hal=user&act=simpan&mode=update&id_user=".$_GET['id_user'];
			$SQL = "SELECT * FROM user WHERE id_user=".$_GET['id_user'];
			$result = mysqli_query($con,$SQL);
			$r = mysqli_fetch_array($result);
			extract($r);
			include "user/creat_user.php";
		}
		else echo "user not Found";
		break;
	case 'simpan' :
		$errors = array();
		if(empty($_POST['username'])) 	$errors[] = "Insert Your Username";
		if(empty($_POST['password']))	$errors[] = "Insert Your password";
		if(empty($_POST['level']))		$errors[] = "insert level";	
		if(empty($_POST['unit']))		$errors[] = "insert level";	
		if(empty($errors))
		{
			if($_GET['mode'] == 'new')
			{
				$sql = "INSERT INTO user(username, password, level, unit) VALUES('".$_POST['username']."','".$_POST['password']."','".$_POST['level']."', '".$_POST['unit']."')";
				$r= mysqli_query($con,$sql);
				$id_user = mysqli_insert_id();
			}
			elseif($_GET['mode'] == 'update')
			{
				$sql = "UPDATE user SET username='".$_POST['username']."', password='".$_POST['password']."', level='".$_POST['level']."', unit='".$_POST['unit']."' WHERE id_user=".$_GET['id_user'];
				$r= mysqli_query($con,$sql);
				$id_user = mysqli_insert_id();
			}
			if($_SESSION['level']== "2"){
			header("location:?hal=user&act=permission");}
			elseif($_SESSION['level']== "1"){
			header("location:?hal=user&act=report");}
			//echo mysqli_error();
		}
		else
		{
			foreach($errors as $e)
				echo " - ".$e;
		}
		break;
	case 'login' :
		$sql = "SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0 )
		{
			$data = mysqli_fetch_array($result);
			$_SESSION['login'] = 'oke';
			$_SESSION['level'] = $data['level'];	
			header("location:index.php?hal=home");
		}
		echo "Username dan password salah";
		break;
	case 'logout'	:
		unset($_SESSION['login']);
		unset($_SESSION['level']);
		header("location:index.php");
		break;
	case 'delete' :
		$sql = "DELETE FROM user WHERE id_user=".$_GET['id_user'];
		$result = mysqli_query($con,$sql);
		if($_SESSION['level']== "2"){
			header("location:?hal=user&act=permission");}
			elseif($_SESSION['level']== "1"){
			header("location:?hal=user&act=report");}
		break;	
	case 'report' :
		include "library/paging2.php";
		$sql = "SELECT * FROM user";
		$result = mysqli_query($con,$sql);
		
		//pagination config start
        $rpp = 10; // jumlah record per halaman
        $reload = "index.php?hal=user&act=report";
        $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
        $tcount = mysqli_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
		
		//echo mysqli_error();
		include("user/report.php");
		break;
		
	case 'permission' :
		include "library/paging2.php";
		$sql = "SELECT * FROM user WHERE level= 3";
		$result = mysqli_query($con,$sql);
		
		//pagination config start
        $rpp = 10; // jumlah record per halaman
        $reload = "index.php?hal=user&act=permission";
        $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
        $tcount = mysqli_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
		
	
		include("user/report-permission.php");
		break;	
		

		case 'tampil' :	
		$sql = "SELECT * FROM user WHERE id_user=".$_GET['id_user'];
		$result = mysqli_query($con,$sql);
		$r = mysqli_fetch_array($result);
		extract($r);
		include('user/lihat.php');		
		break;	
	}
?>