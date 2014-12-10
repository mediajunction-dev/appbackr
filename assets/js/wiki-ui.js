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
		$('.aa-search input').removeClass('current').attr('type', 'hidden');
	});
    $('#search-tags').click(function(){
	   $('#current-search').html('Tags');
	   $('#search-tags-field').addClass('current').attr('type', 'text');
    });
    $('#search-appname').click(function(){
	   $('#current-search').html('Apps');
	   $('#search-appname-field').addClass('current').attr('type', 'text');
    });
    $('#search-appscore').click(function(){
	   $('#current-search').html('Appscore');
	   $('#search-appscore-field').addClass('current').attr('type', 'text');
    });
    $('#search-appstore').click(function(){
	   $('#current-search').html('App Store');
	   $('#search-appstore-field').addClass('current').attr('type', 'text');
    });
});// Edit Button Toggle

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
	    activeout2();
	});
} 
function show_modal(modal_id){  
    $('.anatomy-wrapper').addClass('anatomy-modal-wrap');
    $('.anatomy-modal-backdrop').addClass('active');
    $('#'+modal_id).addClass("active-in").delay(100).queue(function(activein1){	    
	    $(this).addClass('active');
	    $(this).removeClass('active-in');
	    activein1();
	});
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