<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">

	<title><?php echo $header; ?></title>

	<meta name="description" content="Berkarir di Netmedia">
	<meta name="keywords" content="NET,netmedia,karir,career">
	<meta name="author" content="Firman Qodry, firman.qodry@gmail.com">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="shortcut icon" href="<?php echo base_url("assets/img/favicon.png");?>" type="image/x-icon" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/foundation.css"); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/jquery-ui.min.css"); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/hero.css"); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/animate.min.css"); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/animate.delay.css"); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/foundation-icons/foundation-icons.css"); ?>"/>

	<script type="text/javascript" src="<?php echo base_url("assets/js/vendor/modernizr.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/vendor/jquery-1.11.3.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/vendor/jquery-ui.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/custom.js");?>"></script>
</head>
<body>
	<section class="hero">
		<div class="row">
			<div class="small-centered medium-uncentered medium-12 large-12 columns">
				<a href="<?php echo site_url(); ?>"><div class="logo animate2 bounceIn"></div></a>
			</div>
			<?php
				if (isset($message_display)) {
					echo "<div class='message'>";
					echo $message_display;
					echo "</div>";
				}
			?>
		</div>
		<div class="row intro">
			<div class="small-centered medium-uncentered medium-12 large-12 columns">
				<h1 class="animate0 fadeInDownBig">Join with us!</h1>

				<div class="button-holder">
					<a class="button radius alert animate4 fadeInUp" href="<?php echo base_url("frontpage/auth/"); ?>">START</a>
				</div>

				<blockquote class="animate5 fadeInDownBig">"<?php echo $show_rand_quotes->qt_words; ?>"<cite><?php echo $show_rand_quotes->qt_authors; ?></cite></blockquote>
			</div>
		</div>

		<footer class="row">
			<div class="large-12 medium-12 small-12 columns">
				<p class="animate6 fadeInUpBig">Copyright &copy; <?php echo date("Y"); ?>. PT Net Mediatama Televisi</p>
			</div>
		</footer>
	</section>

	<script type="text/javascript" src="<?php echo base_url("assets/js/vendor/jquery.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/prettify/prettify.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/foundation.min.js"); ?>"></script>
	<script>
      $(document).foundation();
    </script>
</body>
</html>