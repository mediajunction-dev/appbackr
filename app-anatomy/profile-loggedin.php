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
<body class="wiki logged-in">
	<div class="anatomy-wrapper">
	<!-- Header -->
	<?php include('../assets/includes/header-loggedin.php'); ?>
	
	<!-- Search/Social -->
	<?php include('../assets/includes/search-share-header.php'); ?>
	
	<!-- Profile Billboard -->
	<div class="grid-billboard-container">
		<div class="profile-billboard-content">
			<div class="container">
			<!-- User Info -->
			<div class="row-fluid col-center-xs">
				<div class="col-sm-6">
					<div class="grid-billboard-content-inner">						
						<div class="user-profile user-profile-lg">
							<img src="../assets/images/128.jpg" alt="">
						</div>
						<div class="user-profile-content">
							<div class="vert-content">
							<div class="vert-content-inner">
							<h1>Janet Burns</h1>
							<h6>Member Since <span class="user-date">1/2015</h6>
							</div>
							</div>
						</div>
					</div>
				</div>				
				<div class="col-sm-6">
					<!-- Stat -->
					<div class="grid-stat-box">
						<div class="stat">
							240
							<small>APPS</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
					<!-- Stat -->
					<div class="grid-stat-box">
						<div class="stat">
							12
							<small>GROUPS</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
					<!-- Stat -->
					<div class="grid-stat-box">
						<div class="stat">
							34
							<small>VOTES</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
					<!-- Stat -->
					<div class="grid-stat-box">
						<div class="stat">
							111
							<small>TAGS</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
				</div>
			</div><!--/ .row-fluid -->
			<!-- Action Bar -->
			<div class="row-fluid col-left-right billboard-action-bar">
				<div class="col-xs-6">
					<a class="btn-simple btn-simple-share" href="#">SHARE</a>					
				</div>
				<div class="col-xs-6">
					<a class="btn-simple btn-simple-connect" href="#">CONNECT</a>
				</div>
			</div><!--/ .row-fluid -->				
			</div><!--/ .container -->
		</div><!--/ .profile-billboard-content -->
	</div><!--/ .grid-billboard-container -->	
	<div class="grid-app-wall">
		<div class="grid-app-wall-inner">
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
			<?php include('../assets/templates/group-card-template-loggedin.php'); ?>
		</div>
	</div>
	<!-- Footer -->
	<?php include('../assets/includes/footer.php'); ?>
	</div><!--/ .anatomy-wrapper -->		

<?php include('../assets/includes/scripts.php'); ?>
<script>
var _gaq=[['_setAccount','UA-5106720-3'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
