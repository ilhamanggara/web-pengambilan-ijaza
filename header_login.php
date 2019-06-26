<?php 
session_start();
if (!isset($_SESSION['logged-mhs'])) {
	die("<script type=text/Javascript> alert('Anda Belum Login Sebagai Mahasiswa !')
			window.location = 'index.php';
		</script>");
}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universitas Bandar Lampung</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cloud 83 - hosting template ">
	<meta name="keywords" content="cloud, hosting, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section" style="background-color:#191970;">
		<a href="./index.html" class="site-logo"><img src="./img/logo_ubl.png" width="70"></a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="nav-warp">
			<div class="user-panel">
				<a href="logout.php">Logout</a>
			</div>
			<ul class="main-menu">
                <li><a href="home.php">Home</a></li>
								<li><a href="form_pengambilan.php">Form Pengambilan</a></li>
								<li><a href="cek_status.php">Cek Status</a></li>
				<li><a href="syarat1.php">Syarat Pengambilan</a></li>
				<!-- <li><a href="./service.html">Services</a></li>
				<li><a href="./blog.html">News</a></li>
				<li><a href="./contact.html">Contact</a></li> -->
			</ul>
		</div>
	</header>
	<!-- Header section end -->