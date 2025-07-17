<?php
$act = $_GET['act'];

switch ($act)
{
	case 'add_insident' :
		if(file_exists("insident/insident.php"))
		{
			$url_target = "?hal=insident&act=sv&mode=new";
			include "insident/insident.php";
		}
		else echo "Page Not Found";
	break;

	case 'edit_insident' :
	if(file_exists('insident/insident.php'))
		{
			$url_target = "?hal=insident&act=sv&mode=ubah&id_ins=".$_GET['id_ins'];
			$SQL = "SELECT * FROM reporting WHERE id_ins=".$_GET['id_ins'];
			$result = mysqli_query($con,$SQL);
			$r = mysqli_fetch_array($result);			
			extract($r);
			include "insident/insident.php";
		}
		
		else echo "Page Not Found";
	break;
	
	case 'sv' :
		$status = '1';
		$tgl = date("Y-m-d H:i:s");
		$errors = array();
		if(empty($_POST['tgl_masuk']))			$errors[] = "Please Insert tanggal Masuk";
		if(empty($_POST['tgl_kejadian']))		$errors[] = "alert(Please Insert tanggal Kejadian!";
		if(empty($_POST['nama_pasien']))			$errors[] = "Please Insert Nama Pasien" ;
		if(empty($_POST['unit']))			$errors[] = "Please Insert UNIT" ;
		if(empty($_POST['no_rm']))			$errors[] = "Please Insert NO REKAM MEDIS" ;
		if(empty($_POST['diagnosa']))			$errors[] = "Please Insert DIAGNOSA" ;
		if(empty($_POST['jenkel']))			$errors[] = "Please Insert JENIS KELAMIN" ;
		if(empty($_POST['laporan']))			$errors[] = "Please Insert LAPORAN" ;
		if(empty($_POST['grad']))				$errors[] = "Please Insert GRADING" ;
		if(empty($_POST['jenis']))				$errors[] = "Please Insert JENIS INSIDEN" ;		
		if(empty($_POST['simpan']))
		{
			$fileName = $_FILES['image']['name'];
		}
		if(empty($errors))
		{
			if($_GET['mode'] == 'new')
			{
				$sql = "INSERT INTO reporting(unit, nama_pasien, jenkel, no_rm, diagnosa, tgl, status, tgl_lahir, tgl_masuk, tgl_kejadian, laporan, grad, jenis, image )
				VALUES('".$_POST['unit']."', '".$_POST['nama_pasien']."', '".$_POST['jenkel']."', '".$_POST['no_rm']."', '".$_POST['diagnosa']."', 
				'".$tgl."', '".$status."', '".$_POST['tgl_lahir']."', '".$_POST['tgl_masuk']."', '".$_POST['tgl_kejadian']."', '".$_POST['laporan']."', '".$_POST['grad']."', '".$_POST['jenis']."', '".$_FILES['image']['name']."')";
				if(move_uploaded_file($_FILES['image']['tmp_name'], "insident/image/".$_FILES['image']['name'])){
				}else{
					echo "Gagal Upload Image coy....!!!";
				}
				$result = mysqli_query($con,$sql);
				$id = mysqli_insert_id();
				extract($result);
				echo $sql;
			}
			elseif ($_GET['mode'] == 'ubah')
			{
				$sql = "UPDATE reporting SET  unit='".$_POST['unit']."', nama_pasien='".$_POST['nama_pasien']."', no_rm='".$_POST['no_rm']."', 
				diagnosa='".$_POST['diagnosa']."', tgl='".$tgl."', status='".$_POST['status']."', tgl_lahir='".$_POST['tgl_lahir']."', tgl_masuk='".$_POST['tgl_masuk']."', laporan='".$_POST['laporan']."', 
				grad='".$_POST['grad']."', jenis='".$_POST['jenis']."' WHERE id_ins=".$_GET['id_ins'];
				
				$result = mysqli_query($con,$sql);
				extract($result);
				$id = mysqli_insert_id(); 
			}
			header("location:?hal=insident&act=add_insident");		
		} 
		else
		{
			foreach ($errors as $e) {
				echo "<br />".$e;
			}
		}
		break;	
		
	case 'delete' :
		$sql = "DELETE FROM reporting WHERE id_ins=".$_GET['id_ins'];
		$result = mysqli_query($con,$sql);
		header("location:?hal=insident&act=report");
		break;
case 'report' :
// FUNGSI tanggal
function tanggal_indo($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			);
			
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split 	  = explode('-', $tanggal);
	$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
	
	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}

		include "library/paging2.php";
		$sql = "SELECT * FROM reporting ORDER BY tgl DESC";
		$result = mysqli_query($con,$sql);
		
		//pagination config start
        $rpp = 10; // jumlah record per halaman
        $reload = "index.php?hal=insident&act=report";
        $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
        $tcount = mysqli_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
		
		//echo mysqli_error();
		include("insident/report.php");
		break;		
	
	case 'view' :
	
		$sql = "SELECT * FROM reporting WHERE id_ins=".$_GET['id_ins'];
		$result = mysqli_query($con,$sql);
		$r = mysqli_fetch_array($result);
		extract($r);
		include('insident/view-ins.php');		
		break;	

}?>