// Up, Down, Favorite Buttons
$(function() {
	$(".btn-circle-fav").click(function(){
		$(this).toggleClass('active');
	});
});
// App Card
$('.app-card').each(function (i) {
	$(this).attr('id', 'app-id_' + i);	
	$(this).find('.btn-circle-fav').attr('id', 'favorite_' + i).attr('name', 'favorite_' + i);
	$(this).find('.btn-circle-fav-label').attr('for', 'favorite_' + i);	
	$(this).find('input[type="radio"]').each(function (j){
		$(this).attr('name', 'appvote_' + i);	
		$(this).attr('name', 'vote_' + i).attr('id', 'vote_' + i + '_' + j);
	});
	$(this).find('input[type="radio"] ~ label').each(function (j){
		$(this).attr('for', 'vote_' + i + '_' + j);
	});
	// Favorite Toggle
	$(this).find('.btn-circle-fav').click(function(){
		$(this).closest('.app-card').toggleClass('favorited');
	});
	
});
// Search Category Switch
$(function() {
	$('.form-select ul a').click(function(){
		$('.aa-search input').remove();
	});
    $('#search-tags').click(function(){
	   $('#current-search').html('Tags');
	   $('.aa-search').html('<input class="current" id="search-tags-field" type="text" name="app_anatomy_tag_search" placeholder="Search tags to find apps">');
    });
    $('#search-appname').click(function(){
	   $('#current-search').html('Apps');
	   $('.aa-search').html('<input class="current" id="search-appname-field" type="text" name="app_anatomy_appname_search" placeholder="Search for an app">');
    });
    $('#search-appscore').click(function(){
	   $('#current-search').html('Appscore');
	   $('.aa-search').html('<input class="current" id="search-appscore-field" type="text" name="app_anatomy_appscore_search" placeholder="Search an appscore to find apps">');
    });
    $('#search-appstore').click(function(){
	   $('#current-search').html('App Store');
	   $('.aa-search').html('<input class="current" id="search-appstore-field" type="text" name="app_anatomy_appstore_search" placeholder="Search for an app store">');
    });
});
// Edit Button Toggle
$('.aa-tags').each(function() {
	$(this).find('.btn-circle-edit').click(function(){
		$(this).toggleClass('active');
		$(this).closest('.aa-tags').find('.aa-tag-list').toggleClass('aa-tag-edit');
		$(this).closest('.aa-tags').find('.aa-tag-created .aa-tag-link').toggleClass('anatomy-modal-link');
	});	
});
// Detail Header Swaps
$(window).on('resize load', function() {	
    if ( $(window).width() < 767) {
	    $('.app-score-vote-group').insertAfter('.price');
    }
	else {
		$('.col-sm-3.col-md-4').append($('.app-score-vote-group'));
	}
});
// Horizontal Galleries
$(function() {	
	$('.aa-screenshots .grid-box-scrollable-inner').scroll(function() {
		if ($(this).scrollLeft()>0) {
			$('.more-arrow').css({'right':'-75px'});
		}
		else {
			$('.more-arrow').css({'right':'0'});
		}
	});
	$('.aa-additional-apps .grid-box-scrollable-inner').scroll(function() {
		if ($(this).scrollLeft()>0) {
			$('.more-apps-arrow').css({'right':'-75px'});
		}
		else {
			$('.more-apps-arrow').css({'right':'0'});
		}
	});

});
// Expand Image Gallery
$('.screenshots-viewport').click(function(){
	$(this).toggleClass('expanded');
});
// Anatomy Modal  
function close_modal(){    
	$(".anatomy-wrapper").addClass("blur-out").delay(300).queue(function(blurout){	    
	    $(this).removeClass("blur-out");
	    $(this).removeClass("anatomy-modal-wrap");
	    blurout();
	});
	$(".anatomy-modal").addClass("active-out").delay(300).queue(function(activeout1){	    
	    $(this).removeClass("active-out");
	    $(this).removeClass("active");
	    activeout1();
	});
	$(".anatomy-modal-backdrop").addClass("active-out").delay(300).queue(function(activeout2){	    
	    $(this).removeClass("active-out");
	    $(this).removeClass("active");
	    $(this).remove();
	    activeout2();
	});
} 
function show_modal(modal_id){  
    $('.anatomy-wrapper').addClass('anatomy-modal-wrap');
    $('<div class="anatomy-modal-backdrop active"></div>').insertAfter('.anatomy-wrapper');
    $('#'+modal_id).addClass("active-in").delay(100).queue(function(activein1){	    
	    $(this).addClass('active');
	    $(this).removeClass('active-in');
	    activein1();
	});
	return false;
}
$(document).ready(function(){  
    $('.anatomy-modal-link').click(function(){  
          var modal_id = $(this).attr('name');
          show_modal(modal_id);  
    });
    $('.close-btn').click(function(){   
        close_modal();
    });  
    $('.btn-simple-delete').click(function(){   
        close_modal();
    });
    $('.btn-simple-cancel').click(function(){   
        close_modal();
    });
    $('.btn-fill-save').click(function(){   
        close_modal();
    });
    $('.btn-fill-favorite').click(function(){   
        close_modal();
    });
    $('.anatomy-modal-backdrop').click(function(){
	    close_modal();
    });
}); 