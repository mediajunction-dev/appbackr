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
						<div class="group-title">
							<h1>Group Name Here</h1>								
						</div>						
					</div>
				</div>				
				<div class="col-sm-6">
					<!-- Stat -->
					<div class="grid-stat-box">
						<div class="stat">
							14
							<small>APPS</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
					<!-- Stat -->
					<div class="grid-stat-box">
						<div class="stat">
							8.3
							<small>AVG. SCORE</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
					<!-- Stat -->
					<div class="grid-stat-box">
						<div class="stat">
							192
							<small>SHARES</small>							
						</div>	
					</div><!--/ .grid-stat-box -->
				</div>
			</div><!--/ .row-fluid -->
			<!-- Action Bar -->
			<div class="row-fluid col-center-xs billboard-action-bar">
				<div class="col-sm-6">
					<a class="btn-simple btn-simple-share" href="#">SHARE</a>					
					<a class="btn-simple btn-simple-edit anatomy-modal-link" name="edit-group">EDIT GROUP</a>
				</div>
				<div class="col-sm-6">
					<a class="user-profile-link" href="profile-loggedin-edit.php"><span class="user-profile-image"><img src="../assets/images/user-profile-placeholder.jpg"></span> Keith Miller</a>
				</div>
			</div><!--/ .row-fluid -->				
			</div><!--/ .container -->
		</div><!--/ .profile-billboard-content -->
	</div><!--/ .grid-billboard-container -->
	<div class="grid-app-wall">
		<div class="grid-app-wall-inner">
			<div class="group-description">
				<div class="container">
				<div class="row-fluid">
				<div class="col-md-8 col-md-offset-2">
				<p>
					Group description goes here. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
				</div>
				</div>
				</div>
			</div>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			<?php include('../assets/templates/app-card-template-edit.php'); ?>
			
		</div>
	</div>
	<!-- Footer -->
	<?php include('../assets/includes/footer.php'); ?>
	</div><!--/ .anatomy-wrapper -->
		
	<?php include('../assets/actions/edit-app.php'); ?>
	<?php include('../assets/actions/edit-group.php'); ?>
	
<?php include('../assets/includes/scripts.php'); ?>
<script>
var _gaq=[['_setAccount','UA-5106720-3'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
