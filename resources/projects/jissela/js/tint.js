$(document).ready(function(){
 
	$( ".thumbnail" )
		.mouseenter(function() {
			$(this).find('.caption').removeClass("slideOutLeft").addClass("slideInLeft").show();
		})
		.mouseleave(function() {
			$(this).find('.caption').removeClass("slideInLeft").addClass("slideOutLeft");
	 });
});