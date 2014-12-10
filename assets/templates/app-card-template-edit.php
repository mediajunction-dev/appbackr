<!-- App Card -->
<div class="app-card favorited edit-app">
	<div class="app-card-inner">		
		<a href="#">
		<!-- App Icon -->
		<div class="app-icon"><img src="../assets/images/angry-birds-icon.jpg"></div>
		<!-- App Title -->
		<div class="app-card-title">
			<div class="app-card-title-inner">
			App name goes here and can be long
			<small>
			Developer Name
			</small>
			</div>
		</div>					
		</a>
		<!-- Score/Vote -->
		<div class="app-card-score">
			<div class="app-score-icon">
				<span>8.6</span>
			</div>
			<?php include('../assets/templates/favorite-vote-btn-group-favorited.php'); ?>
		</div>
		<!-- Group Actions -->
		<div class="card-action">
			<a class="btn-simple btn-simple-edit anatomy-modal-link" name="edit-app">Edit</a>
		</div>
		<div class="group-action-float">
			<a class="btn-simple btn-simple-share">Share</a>
		</div>
	</div><!--/ .group-card-inner -->
</div><!--/ .group-card -->