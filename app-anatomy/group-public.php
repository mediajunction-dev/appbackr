<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>App Anatomy | appbackr</title>
  <meta name="description" content="appbackr is a wholesale marketplace for applications. App developers find wholesale buyers to fund applications and drive sales.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../assets/js/fonts.min.js"></script>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <script src="../assets/js/libs/modernizr-2.6.2.min.js"></script>
</head>
<body class="wiki public">
	<!-- Header -->
	<?php include('../assets/includes/header.php'); ?>
	
	<!-- Search/Social -->
	<?php include('../assets/includes/search-share-header.php'); ?>
	
	<!-- Sign Up CTA -->
	<?php include('../assets/includes/fixed-join-cta.php'); ?>
	
	<!-- Profile Billboard -->
	<div class="grid-billboard-container">
		<div class="profile-billboard-content">
			<div class="container">
			<div class="row-fluid">
				<div class="col-sm-7">
					<div class="grid-billboard-content-inner">
						<div class="vert-content">
						<div class="vert-content-inner">
							<div class="group-title">
								<h1>Group Name Here</h1>
								<a class="user-profile-link" href="#"><span class="user-profile-image"><img src="../assets/images/user-profile-placeholder.jpg"></span> Keith Miller</a>
							</div>							
							<div class="billboard-actions">
								<a class="btn-simple btn-simple-share" href="#">SHARE</a>
							</div>
						</div>	
						</div>
					</div>
				</div>				
				<div class="col-sm-5">					
					<!-- Stat -->
					<div class="col-xs-4 grid-stat-box">
						<div class="stat">
							14
							<small>APPS</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
					<!-- Stat -->
					<div class="col-xs-4 grid-stat-box">
						<div class="stat">
							8.3
							<small>AVE APPSCORE</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
					<!-- Stat -->
					<div class="col-xs-4 grid-stat-box">
						<div class="stat">
							192
							<small>SHARES</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
				</div>
			</div><!--/ .row-fluid -->
			</div><!--/ .container -->
		</div><!--/ .profile-billboard-content -->
	</div><!--/ .grid-billboard-contaienr -->
	<div class="grid-app-wall">
		<div class="grid-app-wall-inner">
			
			<?php include('../assets/templates/app-card-template.php'); ?>
			<?php include('../assets/templates/app-card-template.php'); ?>
			<?php include('../assets/templates/app-card-template.php'); ?>
			<?php include('../assets/templates/app-card-template.php'); ?>
			<?php include('../assets/templates/app-card-template.php'); ?>
			<?php include('../assets/templates/app-card-template.php'); ?>
			<?php include('../assets/templates/app-card-template.php'); ?>
			<?php include('../assets/templates/app-card-template.php'); ?>
			
		</div>
	</div>
	<!-- Footer -->
	<?php include('../assets/includes/footer.php'); ?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../assets/js/libs/jquery-1.9.1.min.js"><\/script>')</script>
<script src="../assets/js/plugins.min.js"></script>
<script src="../assets/js/main.min.js"></script>
<script src="../assets/js/wiki-ui.js"></script>

<script>
var _gaq=[['_setAccount','UA-5106720-3'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
