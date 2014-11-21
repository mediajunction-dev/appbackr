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
<body class="wiki logged-in edit">
	<div class="anatomy-wrapper">
	<!-- Header -->
	<?php include('../assets/includes/header.php'); ?>
	
	<!-- Search/Social -->
	<?php include('../assets/includes/search-share-header.php'); ?>
	
	<!-- Profile Billboard -->
	<div class="grid-billboard-container">
		<div class="profile-billboard-content">
			<div class="container">
			<div class="row-fluid">
				<div class="col-sm-6">
					<div class="grid-billboard-content-inner">
						<div class="vert-content">
						<div class="vert-content-inner">
							<div class="user-profile user-profile-lg">
								<img src="../assets/images/user-profile-placeholder.jpg" alt="">
							</div>
							<div class="user-profile-content">
								<div class="vert-content">
								<div class="vert-content-inner">
								<h1>Keith Miller</h1>
								<h6>Member Since <span class="user-date">2/2014</h6>
								</div>
								</div>
							</div>
						</div>	
						</div>
					</div>
				</div>				
				<div class="col-sm-6">
					<!-- Stat -->
					<div class="col-xs-6 col-sm-3 grid-stat-box">
						<div class="stat">
							240
							<small>APPS</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
					<!-- Stat -->
					<div class="col-xs-6 col-sm-3 grid-stat-box">
						<div class="stat">
							12
							<small>GROUPS</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
					<!-- Stat -->
					<div class="col-xs-6 col-sm-3 grid-stat-box">
						<div class="stat">
							34
							<small>VOTES</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
					<!-- Stat -->
					<div class="col-xs-6 col-sm-3 grid-stat-box">
						<div class="stat">
							111
							<small>TAGS</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
				</div>
			</div><!--/ .row-fluid -->
			</div><!--/ .container -->
		</div><!--/ .profile-billboard-content -->
	</div><!--/ .grid-billboard-contaienr -->
	<div class="grid-app-wall">
		<div class="grid-app-wall-inner">
			<?php include('../assets/templates/create-group-btn.php'); ?>
			<?php include('../assets/templates/group-card-template.php'); ?>
			<?php include('../assets/templates/group-card-template.php'); ?>
			<?php include('../assets/templates/group-card-template.php'); ?>
			<?php include('../assets/templates/group-card-template.php'); ?>
			<?php include('../assets/templates/group-card-template.php'); ?>
			<?php include('../assets/templates/group-card-template.php'); ?>
			<?php include('../assets/templates/group-card-template.php'); ?>
			<?php include('../assets/templates/group-card-template.php'); ?>
			<?php include('../assets/templates/group-card-template.php'); ?>
			<?php include('../assets/templates/group-card-template.php'); ?>
			<?php include('../assets/templates/group-card-template.php'); ?>
			<?php include('../assets/templates/group-card-template.php'); ?>
		</div>
	</div>
	<!-- Footer -->
	<?php include('../assets/includes/footer.php'); ?>
	</div><!--/ .anatomy-wrapper -->
	
	<?php include('../assets/actions/create-group.php'); ?>
	<?php include('../assets/actions/edit-group.php'); ?>
	<!-- Backdrop -->
	<div class="anatomy-modal-backdrop"></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../assets/js/libs/jquery-1.9.1.min.js"><\/script>')</script>
<script src="../assets/js/plugins.min.js"></script>
<script src="../assets/js/main.min.js"></script>
<script src="../assets/js/wiki-ui.min.js"></script>

<script>
var _gaq=[['_setAccount','UA-5106720-3'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
