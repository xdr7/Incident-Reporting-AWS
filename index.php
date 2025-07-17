<!doctype html>
<?php
	session_start();
		ob_start();
// Load configuration and classes
require_once("konfigurasi.php");
require_once("library/mysql.class.php");
require_once("library/paging.class.php");	
	$mySQL = new MySQL($con);
    $pager = new Paging($mySQL);?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!--<link rel="stylesheet" href="assets/date/jquery-ui.css" type="text/css" />-->
	<title>Incident Reporting</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<!--FOOPICKER-->
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    --> 
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	
	
	<script type="text/javascript" src="assets/js/my.js"></script>
	<!--CKEDITOR-->	
		<script src="ckeditor/ckeditor.js"></script>
		<script src="ckfinder/ckfinder.js"></script>
		<link rel="stylesheet" href="assets/css/main.css">
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        
		<!--Js date-->		
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php?hal=home" class="simple-text">
                    Incident Report
                </a>
            </div>

            <ul class="nav">
			<li class="active">
                    <a href="index.php?hal=home">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				<?php if($_SESSION['login']== "oke"){?>
			
				<li>
                    <a href="index.php?hal=insident&act=add_insident">
                        <i class="pe-7s-mail-open-file"></i>
                        <p>Laporkan Insiden</p>
                    </a>
                </li>
				<li>
                    <a href="index.php?hal=content&act=view&id_content=2">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        <p>Jenis - Jenis Insiden</p>
                    </a>
                </li>
				
				<?php if($_SESSION['level']== "2"){?>
					<li>
                    <a href="index.php?hal=insident&act=report">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <p>Report Insident</p>
                    </a>
                </li>
				<li>
                    <a href="index.php?hal=user&act=permission">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li><?php } ?>
                <?php } ?>
				<?php if($_SESSION['level']== "1"){?>
				<li>
                    <a href="index.php?hal=insident&act=report">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <p>Report Insident</p>
                    </a>
                </li>
                <li>
                    <a href="index.php?hal=user&act=report">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
				<li>
                    <a href="index.php?hal=content&act=add">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        <p>Tambah Content</p>
                    </a>
                </li>
				<li>
                    <a href="index.php?hal=content&act=report">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <p>REPORT Content</p>
                    </a>
                </li>
				<?php } ?>
				<?php if($_SESSION['login'] == "oke"){ ?>
	                    <li>							
                            <a href="index.php?hal=user&act=logout">
							<i class="fa fa-sign-out" aria-hidden="true"></i>

                               <p> Log out </p>
                            </a>
							<?php } ?>
                        </li>
						<?php if($_SESSION['login'] !== "oke"){?>
						<li>
							<a href="index.php?hal=login">
							<i class="fa fa-sign-in" aria-hidden="true"></i>
							<p>Login</p>
							</a>
						</li>
						<?php } ?>
            </ul>
    	</div>
		
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<?php if($_SESSION['login'] == "oke"){ ?>
                    <a class="navbar-brand" href="#">Dashboard</a><?php } ?>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
					
                        <li>
                            <a href="index.php?hal=home" >
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
						<?php if($_SESSION['level'] == '1'){ ?>
						<?php 
								include "konfigurasi.php";?>
<?php
								$sql = "SELECT COUNT(*) AS status FROM reporting WHERE status='1'";
								$query = mysqli_query($con,$sql);
								$msg = mysqli_fetch_array($query);
							
							?>
                        <li>
                              <a href="index.php?hal=insident&act=report" >
                                    <i class="fa fa-envelope-o"></i>                                    
                                    <span class="notification" alt="Jumlah data Baru" ><?php echo "{$msg['status']}";?></span>
                              </a>
                        </li>
                        <li>
                           <a href="">
                                <!--<i class="fa fa-search"></i>-->
                            </a>
                        </li>
						<?php }?>
						<!--bts-->
						<?php if($_SESSION['level'] == '2'){ ?>
						<?php 
								include "konfigurasi.php";?>
<?php
								$sql = "SELECT COUNT(*) AS grad FROM reporting";
								$query = mysqli_query($con,$sql);
								$msg = mysqli_fetch_array($query);
							
							?>
                        <li>
                              <a href="index.php?hal=insident&act=report" >
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="notification" title="Jumlah data Baru"><?= escape_output($msg['status']) ?></span>
                              </a>
                        </li>
                        <li>
                           <a href="">
                                <!--<i class="fa fa-search"></i>-->
                            </a>
                        </li>
						<?php }?>
						
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                       	
							<?php if($_SESSION['level'] == '1'){ ?>
						<li class="dropdown">
                           <a href="?hal=user&act=update&id_user=134">
                               Account Edit
                            </a>
                        </li>
							<?php } ?>
                     
                    </ul>
                </div>
            </div>
			
        </nav>

<!-- Content -->
        <div class="content">
            <div class="container-fluid">
                <?php include "switcher.php";?>				
				</div>
        </div>
<!-- End -->		

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">

                </nav>
                <p class="copyright pull-right">
                    &copy; <?= date('Y') ?> &nbsp; Ver.3.0 <a href="">Instalasi PDE</a>&nbsp;-&nbsp; 
					RSUD Abdoel Wahab Sjahranie Samarinda Provinsi Kalimantan Timur
                </p>
            </div>
        </footer>

    </div>
</div>

</body>

    <!--   Core JS Files   -->
     <!--<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    js lama-->
	<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin
	<script src="assets/js/chartist.min.js"></script> -->

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	

	<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!--<script src="assets/js/main.js"></script>  -->

</html>
