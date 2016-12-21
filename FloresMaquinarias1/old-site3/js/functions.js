        //function carrucel
jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        vertical: true,
        scroll: 2
    });
});
        //function carrucel
jQuery(document).ready(function() {
    jQuery('#mycarousel-video').jcarousel({
        vertical: true,
        scroll: 2
    });
});

$(document).ready(function(){

	$(".categories").mouseenter(function(){
	 $(".categories ul li a").toggle("slow");
	 
	})
 });
 
  $(document).ready(function(){
    
	$(".categories").mouseleave(function(){
	 $(".categories ul li a").toggle("slow");

	})
 });
