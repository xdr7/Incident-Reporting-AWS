<?php
$act = $_GET['act'];

switch ($act)
{
	case 'add' :
		if(file_exists("content/content.php"))
		{
			$url_target = "?hal=content&act=sv&mode=new";
			include "content/content.php";
		}
		else echo "Page Not Found";
	break;

	case 'edit' :
		if(file_exists("content/content.php"))
		{
			$url_target = "?hal=content&act=sv&mode=ubah&id_content=".$_GET['id_content'];
			$sql = "SELECT * FROM content WHERE id_content=".$_GET['id_content'];
			$result = mysqli_query($con,$sql);
			$r = mysqli_fetch_array($result);
			extract($r);
			include "content/content.php";
		}
		else echo "Page Not Found";
	break;
	
	case 'sv' :
		$date = date("Y-m-d H:i:s");
		$errors = array();
		if(empty($_POST['title']))				$errors[] = "Please Insert Nama Unit" ;
		if(empty($_POST['body']))				$errors[] = "Please Insert Nama Unit" ;
		if(empty($_POST['category']))				$errors[] = "Please Insert Nama Unit" ;
		/*if(empty($_POST['simpan']))
		{
			$fileName = $_FILES['image']['name'];
		}*/
		if(empty($errors))
		{
			if($_GET['mode'] == 'new')
			{
				$sql = "INSERT INTO content(title, date, body, category)
				VALUES('".$_POST['title']."', '".$date."', '".$_POST['body']."', '".$_POST['category']."')";
				/*move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);*/
				$result = mysqli_query($con,$sql);
				$id = mysqli_insert_id();
			}
			elseif ($_GET['mode'] == 'ubah')
			{
				$sql = "UPDATE content SET title='".$_POST['title']."', date='".$date."', body='".$_POST['body']."', category='".$_POST['category']."' WHERE id_content=".$_GET['id_content'];
				$result = mysqli_query($con,$sql);
				$id = mysqli_insert_id();
			}
			header("location:?hal=content&act=add");		
		} 
		else
		{
			foreach ($errors as $e) {
				echo "<br />".$e;
			}
		}
		break;	
		
case 'delete' :
		$sql = "DELETE FROM content WHERE id_content=".$_GET['id_content'];
		$result = mysqli_query($con,$sql);
		header("location:?hal=content&act=report");
		break;
		
	case 'report':
			$sql = "SELECT * FROM content";
			$result = mysqli_query($con,$sql);
			include "content/report.php";
		break;		
	
	case 'view' :
		$sql = "SELECT * FROM content WHERE id_content=".$_GET['id_content'];
		$result = mysqli_query($con,$sql);
		$r = mysqli_fetch_array($result);
		extract($r);
		include('content/view.php');		
		break;	

}?>