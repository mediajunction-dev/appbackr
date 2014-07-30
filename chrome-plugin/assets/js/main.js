//Developer Bio and Blur Overlay
$( "a#dev-bio" ).click(function() {
  $(".overlay").fadeToggle( "fast", "linear" );
  $(".gradientLine").fadeToggle( "fast", "linear" );
  $("nav").toggleClass( "blur");
  $("main").toggleClass( "blur");
  return false;
});
//Sets active state for each tab
$( "nav a" ).click(function() {
	$( "body" ).removeClass( "triggered" );
	$("main .similar").addClass("animate");
	$("nav a.active").toggleClass("active");
	$(this).toggleClass( "active");
	$("main section.active").toggleClass("active");
	var id = $(this).attr('id');
	$("main section."+id).toggleClass( "active");
	$( "nav" ).addClass( "triggered" );
});
//Triggers similar apps section
$( "section.similar:not(.active)" ).click(function() {
	$("main .similar").addClass("active");
	$("nav a.active").toggleClass("active");
	$( "nav" ).removeClass( "triggered" );
});

//Prevent blur from creating shadows on links within overlay
$( ".overlay a:not(#dev-bio)" ).mouseout(function() {
	$(".overlay").css("display","block");
});
$( ".overlay a" ).mouseover(function() {
	$(".overlay").css("display","inline-block");
});
$( ".overlay a#dev-bio" ).click(function() {
	$(".overlay").css("display","none");
});

$( document ).ready(function() {
	//Opens by default to Similar Apps
    $("main .similar").addClass("active");
    $( "body" ).addClass( "triggered" );
});