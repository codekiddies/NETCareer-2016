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
		
						<h4 class="main-header">Job Description</h4>
					</div>
				</header>
				<br/>

				<div class="row">
					<div class="small-12 medium-12 large-12 column">
						<div id="accordion">
							<h3>CORPORATE LEGAL</h3>
							<div>
							<?php foreach( $get_posisi_corplegal as $row ): ?>
								<h4><?php echo $row->jabatan; ?></h4>
								<p>
									<?php echo $row->keterangan; ?><br/>

									Skills &amp; Experience: <br/>

									<?php $array = explode(';', $row->syarat); ?>

									<ul>
									<?php foreach($array as $r): ?>
										<li><?php echo $r; ?></li>
									<?php endforeach; ?>
									</ul>

								</p>
							<?php endforeach; ?>
							</div>

							<h3>CORPORATE SERVICE</h3>
							<div>
							<?php foreach( $get_posisi_corpservice as $row ): ?>
								<h4><?php echo $row->jabatan; ?></h4>
								<p>
									<?php echo $row->keterangan; ?><br/>
									Skills &amp; Experience: <br/>
									
									<?php $array = explode(';', $row->syarat); ?>

									<ul>
									<?php foreach($array as $r): ?>
										<li><?php echo $r; ?></li>
									<?php endforeach; ?>
									</ul>

								</p>
							<?php endforeach; ?>
							</div>

							<h3>FINANCE</h3>
							<div>
							<?php foreach( $get_posisi_finance as $row ): ?>
								<h4><?php echo $row->jabatan; ?></h4>
								<p>
									<?php echo $row->keterangan; ?><br/>
									Skills &amp; Experience: <br/>
									
									<?php $array = explode(';', $row->syarat); ?>

									<ul>
									<?php foreach($array as $r): ?>
										<li><?php echo $r; ?></li>
									<?php endforeach; ?>
									</ul>

								</p>
							<?php endforeach; ?>
							</div>

							<h3>NEWS</h3>
							<div>
							<?php foreach( $get_posisi_news as $row ): ?>
								<h4><?php echo $row->jabatan; ?></h4>
								<p>
									<?php echo $row->keterangan; ?><br/>
									Skills &amp; Experience: <br/>
									
									<?php $array = explode(';', $row->syarat); ?>

									<ul>
									<?php foreach($array as $r): ?>
										<li><?php echo $r; ?></li>
									<?php endforeach; ?>
									</ul>

								</p>
							<?php endforeach; ?>
							</div>

							<h3>PRODUCTION</h3>
							<div>
							<?php foreach( $get_posisi_production as $row ): ?>
								<h4><?php echo $row->jabatan; ?></h4>
								<p>
									<?php echo $row->keterangan; ?><br/>
									Skills &amp; Experience: <br/>
									
									<?php $array = explode(';', $row->syarat); ?>

									<ul>
									<?php foreach($array as $r): ?>
										<li><?php echo $r; ?></li>
									<?php endforeach; ?>
									</ul>

								</p>
							<?php endforeach; ?>
							</div>

							<h3>PROGRAMMING</h3>
							<div>
							<?php foreach( $get_posisi_programming as $row ): ?>
								<h4><?php echo $row->jabatan; ?></h4>
								<p>
									<?php echo $row->keterangan; ?><br/>
									Skills &amp; Experience: <br/>
									
									<?php $array = explode(';', $row->syarat); ?>

									<ul>
									<?php foreach($array as $r): ?>
										<li><?php echo $r; ?></li>
									<?php endforeach; ?>
									</ul>

								</p>
							<?php endforeach; ?>
							</div>

							<h3>SALES &amp; MARKETING</h3>
							<div>
							<?php foreach( $get_posisi_sales as $row ): ?>
								<h4><?php echo $row->jabatan; ?></h4>
								<p>
									<?php echo $row->keterangan; ?><br/>
									Skills &amp; Experience: <br/>
									
									<?php $array = explode(';', $row->syarat); ?>

									<ul>
									<?php foreach($array as $r): ?>
										<li><?php echo $r; ?></li>
									<?php endforeach; ?>
									</ul>

								</p>
							<?php endforeach; ?>
							</div>

							<h3>SERVICES</h3>
							<div>
							<?php foreach( $get_posisi_services as $row ): ?>
								<h4><?php echo $row->jabatan; ?></h4>
								<p>
									<?php echo $row->keterangan; ?><br/>
									Skills &amp; Experience: <br/>
									
									<?php $array = explode(';', $row->syarat); ?>

									<ul>
									<?php foreach($array as $r): ?>
										<li><?php echo $r; ?></li>
									<?php endforeach; ?>
									</ul>

								</p>
							<?php endforeach; ?>
							</div>

							<h3>TECHNIC</h3>
							<div>
							<?php foreach( $get_posisi_tech as $row ): ?>
								<h4><?php echo $row->jabatan; ?></h4>
								<p>
									<?php echo $row->keterangan; ?><br/>
									Skills &amp; Experience: <br/>
									
									<?php $array = explode(';', $row->syarat); ?>

									<ul>
									<?php foreach($array as $r): ?>
										<li><?php echo $r; ?></li>
									<?php endforeach; ?>
									</ul>

								</p>
							<?php endforeach; ?>
							</div>
						</div>
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
	<script type="text/javascript" src="<?php echo base_url("assets/js/vendor/jquery-ui.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/prettify/prettify.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/foundation.min.js"); ?>"></script>
	<script>
    	$(document).foundation();
    </script>

	<script>
		$(function() {
			$( "#accordion" ).accordion({
				collapsible: true,
				active: false,
				heightStyle: "content"
			});
		});
	</script>

</body>
</html>