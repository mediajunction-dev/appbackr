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
<body class="wiki detail logged-in">
	<div class="anatomy-wrapper">
	<!-- Header -->
	<?php include('../assets/includes/header-loggedin.php'); ?>
	
	<!-- Search/Social -->
	<?php include('../assets/includes/search-share-header.php'); ?>
	
	<!-- Profile Billboard -->
	<div class="grid-billboard-container">
		<div class="app-billboard-content">
			<div class="container">				
			<div class="row-fluid col-center-xs">
				<div class="col-sm-9 col-md-8">
					<div class="aa-app-info">
						<div class="app-icon"><img src="http://appbackr.mediajunction.com/assets/images/angry-birds-icon.jpg" alt="App Name"></div>
						<div class="app-info-content">
							<h1 class="app-name">App name goes here</h1>
							<p>
								App Developer, Inc.<br>
								Category &nbsp;/&nbsp; Low Maturity
							</p>
							<h5 class="price android">FREE</h5>
							<!-- Sentiments -->
							<ul class="aa-tag-list">
								<li class="aa-tag"><a class="aa-tag-link" href="#">#awesome</a></li>
								<li class="aa-tag"><a class="aa-tag-link" href="#">#musthave</a></li>
								<li class="aa-tag"><a class="aa-tag-link" href="#">#worthit</a></li>
							</ul>
							<!-- Behaviors -->
							<ul class="aa-tag-list">
								<li class="aa-tag"><a class="aa-tag-link" href="#">+collaborative</a></li>
								<li class="aa-tag"><a class="aa-tag-link" href="#">+sms</a></li>
								<li class="aa-tag"><a class="aa-tag-link" href="#">+lightweight</a></li>
							</ul>
							<p class="platform-version">
								VERSION 2.3
							</p>
						</div>
					</div>
				</div>				
				<div class="col-sm-3 col-md-4">
					<div class="app-score-vote-group">
						<div class="app-score-icon">
							<span>8.6</span>
						</div>
						<?php include('../assets/templates/favorite-vote-btn-group-active.php'); ?>
					</div>
				</div>
			</div><!--/ .row-fluid -->			
			</div><!--/ .container -->
		</div><!--/ .profile-billboard-content -->
	</div><!--/ .grid-billboard-container -->	
	<div class="grid-container grid-container-bottom">
		<!-- STATS -->
		<div class="row-fluid grid-row-bottom">
			<!-- Stat -->
			<div class="col-xs-6 col-sm-3 grid-stat-box app-stat-box">
				<div class="stat downloads">
					100K
					<small>DOWNLOADS</small>							
				</div>	
			</div><!--/ .grid-stat-box -->
			<!-- Stat -->
			<div class="col-xs-6 col-sm-3 grid-stat-box app-stat-box">
				<div class="stat reviews">
					112
					<small>REVIEWS</small>							
				</div>	
			</div><!--/ .grid-stat-box -->
			<!-- Stat -->
			<div class="col-xs-6 col-sm-3 grid-stat-box app-stat-box">
				<div class="stat social">
					34
					<small>MENTIONS</small>							
				</div>	
			</div><!--/ .grid-stat-box -->
			<!-- Stat -->
			<div class="col-xs-6 col-sm-3 grid-stat-box app-stat-box">
				<div class="stat true-relevency">
					16
					<small>TRUE RELEVENCY</small>							
				</div>	
			</div><!--/ .grid-stat-box -->
			</div>
		<!--/ STATS -->
		<!-- TAGS -->
		<div class="row-fluid grid-row-bottom">
			<!-- Sentiment Tags -->
			<div class="col-sm-6 aa-tags aa-sentiments">
				<div class="grid-title-bar">
					<h2>Sentiments</h2>
				</div>
				<div class="grid-box-md">
					<ul class="aa-tag-list">
						<li class="aa-tag aa-tag-created">					
							<a class="aa-tag-link" href="sentiment-tags.php" title="sentiment-tag-name">#Short</a>
							<div class="aa-tag-actions">
								<span class="wikiicon-btn-delete"></span>
							</div>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">#Short</a>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">#Short</a>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">#LongSentiment</a>
						</li>
						<li class="aa-tag aa-tag-created">							
							<a class="aa-tag-link" href="#" title="sentiment-tag-name">#LongerSentiment</a>
							<div class="aa-tag-actions">
								<span class="wikiicon-btn-delete"></span>
							</div>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">#Short</a>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">#LongSentiment</a>
						</li>
						<li class="aa-tag aa-tag-created">
							<a class="aa-tag-link" href="#" title="sentiment-tag-name">#Short</a>
							<div class="aa-tag-actions">
								<span class="wikiicon-btn-delete"></span>
							</div>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">#LongerSentiment</a>
						</li>
						<li class="aa-tag aa-tag-created">							
							<a class="aa-tag-link" href="#" title="sentiment-tag-name">#Short</a>
							<div class="aa-tag-actions">
								<span class="wikiicon-btn-delete"></span>
							</div>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">#Short</a>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">#LongerSentiment</a>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">#LongSentiment</a>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">#Short</a>
						</li>
						<li class="aa-tag aa-tag-created">							
							<a class="aa-tag-link" href="#" title="sentiment-tag-name">#Short</a>
							<div class="aa-tag-actions">
								<span class="wikiicon-btn-delete"></span>
							</div>
						</li>
					</ul>
				</div>
				<div class="aa-tag-action-bar">
					<div class="btn-circle-group">
					<a class="btn-circle btn-circle-add anatomy-modal-link" name="add-sentiment-tag"><i class="wikiicon-btn-add"></i></a>
					<a class="btn-circle btn-circle-edit"><i class="wikiicon-btn-edit"></i></a>
					</div>
				</div>
			</div>
			<!-- Behavior Tags -->
			<div class="col-sm-6 grid-col-last aa-tags aa-behaviors">
				<div class="grid-title-bar">
					<h2>Behaviors</h2>
				</div>
				<div class="grid-box-md">
					<ul class="aa-tag-list">
						<li class="aa-tag aa-tag-created">					
							<a class="aa-tag-link" href="behavior-tags.php" title="behavior-tag-name">+Short</a>
							<div class="aa-tag-actions">
								<span class="wikiicon-btn-delete"></span>
							</div>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">+Short</a>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">+Short</a>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">+LongBehavior</a>
						</li>
						<li class="aa-tag aa-tag-created">							
							<a class="aa-tag-link" href="#" title="behavior-tag-name">+LongerBehavior</a>
							<div class="aa-tag-actions">
								<span class="wikiicon-btn-delete"></span>
							</div>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">+Short</a>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">+LongBehavior</a>
						</li>
						<li class="aa-tag aa-tag-created">
							<a class="aa-tag-link" href="#" title="behavior-tag-name">+Short</a>
							<div class="aa-tag-actions">
								<span class="wikiicon-btn-delete"></span>
							</div>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">+LongerBehavior</a>
						</li>
						<li class="aa-tag aa-tag-created">							
							<a class="aa-tag-link" href="#" title="behavior-tag-name">+Short</a>
							<div class="aa-tag-actions">
								<span class="wikiicon-btn-delete"></span>
							</div>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">+Short</a>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">+LongerBehavior</a>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">+LongBehavior</a>
						</li>
						<li class="aa-tag">							
							<a class="aa-tag-link" href="#">+Short</a>
						</li>
						<li class="aa-tag aa-tag-created">							
							<a class="aa-tag-link" href="#" title="behavior-tag-name">+Short</a>
							<div class="aa-tag-actions">
								<span class="wikiicon-btn-delete"></span>
							</div>
						</li>
					</ul>
				</div>
				<div class="aa-tag-action-bar">
					<div class="btn-circle-group">
					<a class="btn-circle btn-circle-add anatomy-modal-link" name="add-behavior-tag"><i class="wikiicon-btn-add"></i></a>
					<a class="btn-circle btn-circle-edit"><i class="wikiicon-btn-edit"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!--/ TAGS -->
		<!-- REVIEWS/MENTIONS/STORES -->
		<div class="row-fluid grid-row-bottom">
			<div class="col-sm-8 aa-reviews-mentions">
				<div class="grid-title-bar">
					<h2>Reviews</h2>
				</div>
				<div class="grid-box-lg">
					<!-- Review -->
					<div class="aa-app-review">
						<div class="row-fluid">
							<div class="col-sm-4 col-sm-offset-4 col-md-offset-0">
								<img src="../assets/images/wsj.png" alt="Wall Street Journal">
							</div>
							<div class="col-sm-12 col-md-8">
								<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. <a class="read-more" href="#">Read Full Review</a>
								</p>
							</div>
						</div>
					</div> <!-- .aa-app-review -->
					<!-- Review -->
					<div class="aa-app-review">
						<div class="row-fluid">
							<div class="col-sm-4 col-sm-offset-4 col-md-offset-0">
								<img src="../assets/images/nyt.png" alt="New York Times">
							</div>
							<div class="col-sm-12 col-md-8">
								<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. <a class="read-more" href="#">Read Full Review</a>
								</p>
							</div>
						</div>
					</div> <!-- .aa-app-review -->
					<!-- Review -->
					<div class="aa-app-review">
						<div class="row-fluid">
							<div class="col-sm-4 col-sm-offset-4 col-md-offset-0">
								<img src="../assets/images/wired.png" alt="Wired">
							</div>
							<div class="col-sm-12 col-md-8">
								<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. <a class="read-more" href="#">Read Full Review</a>
								</p>
							</div>
						</div>
					</div> <!-- .aa-app-review -->
				</div>
			</div>
			<div class="col-sm-4 aa-stores">
				<div class="grid-title-bar">
					<h2>Stores</h2>
				</div>
				<div class="grid-box-lg">
					<ul class="store-list">
						<li>
						<a href="#" target="_blank"><img src="../assets/images/amazon-logo.png" alt=""></a>
						</li>
						<li>
						<a href="#" target="_blank"><img src="../assets/images/tizen-logo.png" alt=""></a>
						</li>
						<li>
						<a href="#" target="_blank"><img src="../assets/images/samsung-logo.png" alt=""></a>
						</li>
						<li>
						<a href="#" target="_blank"><img src="../assets/images/windows-phone-logo.png" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Full Width Stores -->
		<div class="row-fluid grid-row-bottom">
			<div class="col-sm-12 aa-stores">
				<div class="grid-title-bar">
					<h2>Stores</h2>
				</div>
				<div class="grid-box-lg">
					<ul class="store-list">
						<li>
						<a href="#" target="_blank"><img src="../assets/images/amazon-logo.png" alt=""></a>
						</li>
						<li>
						<a href="#" target="_blank"><img src="../assets/images/tizen-logo.png" alt=""></a>
						</li>
						<li>
						<a href="#" target="_blank"><img src="../assets/images/samsung-logo.png" alt=""></a>
						</li>
						<li>
						<a href="#" target="_blank"><img src="../assets/images/windows-phone-logo.png" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--/ Full Width Stores -->
		<!--/ REVIEWS/MENTIONS/STORES -->
		<!-- ADDITIONAL INFO TABS -->
		<div class="row-fluid grid-row-bottom">
			<div class="col-sm-12 aa-info-tabs">
				<div class="grid-box-md">
					<ul class="nav nav-pills nav-justified" id="more-info-tabs">
						<li class="active"><a href="#aa-app-description" data-toggle="tab">Description</a></li>
						<li><a href="#aa-app-true-review" data-toggle="tab">True Review</a></li>
						<li><a href="#aa-app-feature-list" data-toggle="tab">Feature List</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="aa-app-description">
							<h3>Description</h3>
							<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							</p>
						</div>
						<div class="tab-pane" id="aa-app-true-review">
							<h3>True Review</h3>
							<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							</p>
						</div>
						<div class="tab-pane" id="aa-app-feature-list">
							<h3>Feature List</h3>
							<ul class="feature-list">
								<li>Feature</li>
								<li>Longer feature goes here</li>
								<li>Feature here</li>
								<li>Feature</li>
								<li>Longer feature goes here</li>
								<li>Feature</li>
								<li>Feature</li>
								<li>Feature here</li>								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ ADDITIONAL INFO TABS -->
		<!-- SCREENSHOTS -->
		<div class="row-fluid grid-row-bottom">
			<div class="col-sm-12 aa-screenshots">
				<div class="grid-box-scrollable">
					<div class="more-arrow"></div>
					<div class="grid-box-scrollable-inner">
						<ul class="screenshots-viewport">
							<li><img src="http://placehold.it/400x658" alt="Screenshot Name"></li>
							<li><img src="http://placehold.it/400x658" alt="Screenshot Name"></li>
							<li><img src="http://placehold.it/850x658" alt="Screenshot Name"></li>
							<li><img src="http://placehold.it/400x658" alt="Screenshot Name"></li>
							<li><img src="http://placehold.it/400x658" alt="Screenshot Name"></li>
							<li><img src="http://placehold.it/400x658" alt="Screenshot Name"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--/ SCREENSHOTS -->
		<!-- SIMILAR/MORE APPS -->
		<div class="row-fluid">
			<div class="col-sm-12 aa-additional-apps">
				<div class="grid-title-bar">
					<h2>Similar Apps</h2>
				</div>
				<div class="grid-box-scrollable">
					<div class="more-apps-arrow"></div>
					<div class="grid-box-scrollable-inner">
						<?php include('../assets/templates/app-card-template-active.php'); ?>
						<?php include('../assets/templates/app-card-template-favorited.php'); ?>
						<?php include('../assets/templates/app-card-template-favorited.php'); ?>
						<?php include('../assets/templates/app-card-template-active.php'); ?>
						<?php include('../assets/templates/app-card-template-favorited.php'); ?>
						<?php include('../assets/templates/app-card-template-active.php'); ?>
						<?php include('../assets/templates/app-card-template-active.php'); ?>
					</div>
				</div>
			</div>
		</div>
		<!--/ SIMILAR/MORE APPS -->
	</div><!--/ .grid-container -->
	<div class="container aa-sign-up">
		<div class="row-fluid">
			<div class="col-sm-6 col-sm-offset-3">
				
			</div>
		</div>
	</div>
	<!-- Footer -->
	<?php include('../assets/includes/footer.php'); ?>
	</div><!--/ .anatomy-wrapper -->		
	
	<?php include('../assets/actions/favorite-app.php'); ?>	
	<?php include('../assets/actions/edit-sentiment-tag.php'); ?>
	<?php include('../assets/actions/add-sentiment-tag.php'); ?>
	<?php include('../assets/actions/edit-behavior-tag.php'); ?>
	<?php include('../assets/actions/add-behavior-tag.php'); ?>	
	
<?php include('../assets/includes/scripts.php'); ?>
<script>
var _gaq=[['_setAccount','UA-5106720-3'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
