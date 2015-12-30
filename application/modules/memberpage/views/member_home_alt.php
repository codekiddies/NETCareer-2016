<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">

	<title><?php echo $title; ?></title>

	<meta name="description" content="Berkarir di Netmedia">
	<meta name="keywords" content="NET,netmedia,karir,career">
	<meta name="author" content="Firman Qodry, firman.qodry@gmail.com">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="shortcut icon" href="<?php echo base_url("assets/img/favicon.png");?>" type="image/x-icon" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/foundation.css"); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/jquery-ui.min.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/member_alt.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/animate.min.css"); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/animate.delay.css"); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/foundation-icons/foundation-icons.css"); ?>"/>

	<script type="text/javascript" src="<?php echo base_url("assets/js/vendor/modernizr.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/vendor/jquery-1.11.3.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/vendor/jquery-ui.min.js"); ?>"></script>
</head>
<body>

	<div class="off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">
			<nav class="tab-bar">
				<section class="left-small">
					<a href="#" class="left-off-canvas-toggle menu-icon"><span></span></a>
				</section>

				<!--<section class="middle tab-bar-section">
					<h1 class="title">CAREER AT NETMEDIA</h1>
				</section>-->
			</nav>

			<aside class="left-off-canvas-menu">
				<ul class="off-canvas-list">
					<li><label for="about-net">NET.</label></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li><label for="main-menu">NET. Career</label></li>
					<li><a href="<?php echo base_url("memberpage"); ?>">Home</a></li>
					<li><a href="<?php echo base_url("memberpage/notice"); ?>">Pengumuman</a></li>
					<li><a href="<?php echo base_url("memberpage/jobdesc"); ?>">Job Description</a></li>
					<li><a href="<?php echo base_url("memberpage/pilih"); ?>">Pilih Status</a></li>
					<li><a href="<?php echo base_url("frontpage/logout"); ?>">Logout</a></li>
				</ul>		
			</aside>

			<section class="main-section">
				<!--content goes here-->
				<header class="row-fluid header">
					<div class="small-centered medium-12 large-12 column">
						<h1 class="main-header"><strong>CAREER AT NETMEDIA</strong></h1>

						<hr>
		
						<h4 class="main-header">Home</h4>
					</div>

					<!--<ul class="header-subnav">
						<li><a href="#" class="is-active">Home</a></li>
						<li><a href="<?php //echo base_url("frontpage/logout"); ?>">Logout</a></li>
					</ul>-->
				</header>
				<br/>

				<div class="row" id="judul-1">
					<div class="small-12 medium-12 large-12 column">
						<h1>Selamat datang, <?php echo $first_name . " " . $last_name; ?>.</h1>
					</div>
				</div>

				<div class="row" id="welcome">
					<div class="small-12 medium-12 large-12 column">
						<h4>Selamat datang di halaman <strong>Karir PT. NET MEDIATAMA TELEVISI</strong>, kami membutuhkan pegawai yang kreatif, handal, dan tangguh. Jika Anda merasa bahwa Anda adalah orang yang tepat, mari bergabung dengan kami.</h4>
					</div>
				</div><br/>

				<div class="row">
					<div class="small-12 medium-12 large-12 column" style="text-align:center">
						<a href="<?php echo base_url("memberpage/pilih"); ?>" class="button round" style="font-family:AeroLight">DAFTAR</a>
					</div>
				</div><br/>

				<footer class="row">
					<div class="large-12 medium-12 small-12 columns">
						<p>Copyright &copy; <?php echo date("Y"); ?>. PT Net Mediatama Televisi</p>
					</div>
				</footer>

			</section>

			<a class="exit-off-canvas"></a>
		</div><!--inner wrap-->
	</div><!--off canvas wrap-->
	
	<script type="text/javascript" src="<?php echo base_url("assets/js/vendor/jquery.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/prettify/prettify.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/foundation.min.js"); ?>"></script>
	<script>
    	$(document).foundation();
    </script>
</body>
</html>