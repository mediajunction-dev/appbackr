<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>appbackr.org</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body class="interior-page">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<?php include('assets/inc/header.php'); ?>
	
	<section class="sheet-container" data-stellar-background-ratio=".5">
		<div class="container sheet">
			<form id="app_search_form" class="search-form">
			<div class="row">
				<aside class="col-sm-12 col-md-3">
					<h3>Filters</h3>
					<div class="filters">
						
						<label for="app_search">App Name</label>
						<input type="text" id="app_search" name="app_search">
						<hr>
						<label for="app_categories">Categories</label>
						<select class="multiselect" multiple="multiple" placeholder="Select Categories" name="app_categories">
							<option value="Option 1">Option 1</option>
							<option value="Option 2">Option 2</option>
							<option value="Option 3">Option 3</option>
							<option value="Option 4">Option 4</option>
							<option value="Option 5">Option 5</option>
							<option value="Option 6">Option 6</option>
						</select>
						<hr>
						<label for="appscore">Appscore</label>
						<b>1</b>
						<input type="text" name="appscore" class="slider" value="" data-slider-min="1" data-slider-max="10" data-slider-value="[3,8]">
						<b>10</b>
						<hr>
						<label for="avg_rating">Maturity Rating</label>
						<b>0</b>
						<input type="text" name="mat_rating" class="slider" value="" data-slider-min="0" data-slider-max="5">
						<b>5</b>
						<hr>
						<label>Price</label>
						<div class="btn-group btn-group-justified" data-toggle="buttons">
						  <label class="btn btn-default active">
						    <input type="radio" name="app_price_free" id="app_price_free"> Free
						  </label>
						  <label class="btn btn-default">
						    <input type="radio" name="app_price_paid" id="app_price_paid"> Paid
						  </label>
						  <label class="btn btn-default">
						    <input type="radio" name="app_price_all" id="app_price_all"> All
						  </label>
						</div>
						
						<div class="module-actions">
							<button class="btn btn-info">SEARCH</button>
						</div>
					</div>
				</aside>
				<article class="col-sm-12 col-md-9">
					<div id="app-results" class="app-search-results">
						<div class="col-sm-12 col-md-7">						
						<h3>Search Results <small>52 Apps</small></h3>
						</div>
						<div class="col-sm-12 col-md-5">
							<ul class="pagination pull-right">
							  <li class="disabled"><a href="#">&laquo;</a></li>
							  <li class="active"><a href="#">1</a></li>
							  <li><a href="#">2</a></li>
							  <li><a href="#">3</a></li>
							  <li><a href="#">4</a></li>
							  <li><a href="#">...</a></li>
							  <li><a href="#">&raquo;</a></li>
							</ul>
						</div>
						<table class="module-table table-hover module-table-header-footer">
							<thead>
								<tr>
								<th><h3>App</h3></th>
								<th>Category</th>
								<th>Price</th>
								<th>Appscore</th>
								<th>Versions</th>
								<th>Rating Distribution</th>
								</tr>
							</thead>
							<tbody>
							<!-- Row -->
							<tr>
							<td>
								<span class="app-icon app-icon-xs"><img src="../assets/images/angry-birds-icon.jpg"></span>
								App Name
							</td>
							<td>Category</td>
							<td>Free</td>
							<td align="center">
								<span class="app-score-icon app-icon-xs"><span>9.6</span></span>
							</td>								
							<td>2.4</td>
							<td>206, 116, 283, 542, 1271</td>
							</tr>
							<!--/ Row -->
							<!-- Row -->
							<tr>
							<td>
								<span class="app-icon app-icon-xs"><img src="../assets/images/angry-birds-icon.jpg"></span>
								App Name
							</td>
							<td>Category</td>
							<td>Free</td>
							<td align="center">
								<span class="app-score-icon app-icon-xs"><span>9.6</span></span>
							</td>								
							<td>2.4</td>
							<td>206, 116, 283, 542, 1271</td>
							</tr>
							<!--/ Row -->
							<!-- Row -->
							<tr>
							<td>
								<span class="app-icon app-icon-xs"><img src="../assets/images/angry-birds-icon.jpg"></span>
								App Name
							</td>
							<td>Category</td>
							<td>Free</td>
							<td align="center">
								<span class="app-score-icon app-icon-xs"><span>9.6</span></span>
							</td>								
							<td>2.4</td>
							<td>206, 116, 283, 542, 1271</td>
							</tr>
							<!--/ Row -->
							<!-- Row -->
							<tr>
							<td>
								<span class="app-icon app-icon-xs"><img src="../assets/images/angry-birds-icon.jpg"></span>
								App Name
							</td>
							<td>Category</td>
							<td>Free</td>
							<td align="center">
								<span class="app-score-icon app-icon-xs"><span>9.6</span></span>
							</td>								
							<td>2.4</td>
							<td>206, 116, 283, 542, 1271</td>
							</tr>
							<!--/ Row -->
							<!-- Row -->
							<tr>
							<td>
								<span class="app-icon app-icon-xs"><img src="../assets/images/angry-birds-icon.jpg"></span>
								App Name
							</td>
							<td>Category</td>
							<td>Free</td>
							<td align="center">
								<span class="app-score-icon app-icon-xs"><span>9.6</span></span>
							</td>								
							<td>2.4</td>
							<td>206, 116, 283, 542, 1271</td>
							</tr>
							<!--/ Row -->
							<!-- Row -->
							<tr>
							<td>
								<span class="app-icon app-icon-xs"><img src="../assets/images/angry-birds-icon.jpg"></span>
								App Name
							</td>
							<td>Category</td>
							<td>Free</td>
							<td align="center">
								<span class="app-score-icon app-icon-xs"><span>9.6</span></span>
							</td>								
							<td>2.4</td>
							<td>206, 116, 283, 542, 1271</td>
							</tr>
							<!--/ Row -->
							<!-- Row -->
							<tr>
							<td>
								<span class="app-icon app-icon-xs"><img src="../assets/images/angry-birds-icon.jpg"></span>
								App Name
							</td>
							<td>Category</td>
							<td>Free</td>
							<td align="center">
								<span class="app-score-icon app-icon-xs"><span>9.6</span></span>
							</td>								
							<td>2.4</td>
							<td>206, 116, 283, 542, 1271</td>
							</tr>
							<!--/ Row -->
							<!-- Row -->
							<tr>
							<td>
								<span class="app-icon app-icon-xs"><img src="../assets/images/angry-birds-icon.jpg"></span>
								App Name
							</td>
							<td>Category</td>
							<td>Free</td>
							<td align="center">
								<span class="app-score-icon app-icon-xs"><span>9.6</span></span>
							</td>								
							<td>2.4</td>
							<td>206, 116, 283, 542, 1271</td>
							</tr>
							<!--/ Row -->
							<!-- Row -->
							<tr>
							<td>
								<span class="app-icon app-icon-xs"><img src="../assets/images/angry-birds-icon.jpg"></span>
								App Name
							</td>
							<td>Category</td>
							<td>Free</td>
							<td align="center">
								<span class="app-score-icon app-icon-xs"><span>9.6</span></span>
							</td>								
							<td>2.4</td>
							<td>206, 116, 283, 542, 1271</td>
							</tr>
							<!--/ Row -->
							</tbody>
						</table><!--/ .module-content -->
						<div class="col-sm-12 col-md-5 col-md-offset-7">
							<ul class="pagination pull-right">
							  <li class="disabled"><a href="#">&laquo;</a></li>
							  <li class="active"><a href="#">1</a></li>
							  <li><a href="#">2</a></li>
							  <li><a href="#">3</a></li>
							  <li><a href="#">4</a></li>
							  <li><a href="#">...</a></li>
							  <li><a href="#">&raquo;</a></li>
							</ul>
						</div>
					</div>
				</article>	
			</div>
			</form>	
		</div>
	</section>
		
	<section id="section-06" class="orange-cta-section section-half">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-offset-2 col-md-8">
					<div class="vert-content">
					<div class="vert-content-inner">
					<h2 style="text-align:center;">Sign up to benefit from appbackr.org</h2>
					<form class="form-centered" id="Chrome3" name="Chrome3" method="POST" action="">
					
					<input id="textinput" name="deeplink" placeholder="Email" required type="text"/>
					<div class="checkbox">
						<label>
					    	<input type="checkbox"> Are you a developer?
						</label>
					</div>
					
					<button type="submit" class="btn btn-primary btn-lg" name="Chrome3">Sign Up</button>
					
					</form>
					</div>
					</div>
				</div>
			</div>
		</div>				
	</section>	
	<?php include('assets/inc/footer.php'); ?>
	
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/bootstrap-slider.js"></script>
    <script src="assets/js/bootstrap-multiselect.js"></script>
	<script>
	$(document).ready(function() {
		$('.multiselect').multiselect();
		$('.slider').slider();
		$('#app_search_form').submit(function () {
			$("#app-results .table-responsive").remove();
		 	$("<div class='loading-block'></div>").insertAfter("#app-results .module-title");	 	
		 	return false;
		});
	});
	</script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
</body>
</html>
