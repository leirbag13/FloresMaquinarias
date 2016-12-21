//menu
/*$(document).ready(function(){
		$("#menu h1").mouseover(function(){
			$(this).next("#menu  ul").slideDown(500).siblings("#menu ul").slideUp("slow");
		});
	});*/


        //function mostrar y ocultar para el menu
$(document).ready(function(){

	$(".imgitem").mouseenter(function(){
	 $(".item ul").toggle("slow");
	 
	})
 });

 $(document).ready(function(){
    
	$(".item").mouseleave(function(){
	 $(".item ul").toggle("slow");

	})
 });

$(document).ready(function(){

	$(".imgitem1").mouseenter(function(){
	 $(".item1 ul").toggle("slow");

	})
 });

 $(document).ready(function(){

	$(".item1").mouseleave(function(){
	 $(".item1 ul").toggle("slow");

	})
 });


$(document).ready(function(){

	$(".imgitem2").mouseenter(function(){
	 $(".item2 ul").toggle("slow");

	})
 });

 $(document).ready(function(){

	$(".item2").mouseleave(function(){
	 $(".item2 ul").toggle("slow");

	})
 });

$(document).ready(function(){

	$(".imgitem3").mouseenter(function(){
	 $(".item3 ul").toggle("slow");

	})
 });

 $(document).ready(function(){

	$(".item3").mouseleave(function(){
	 $(".item3 ul").toggle("slow");

	})
 });





//fin menu

//cargar contenido central con ajax

/*$(document).ready(function() {

    $("#contenido").load('../view/includes/tutorial.tpl');

});


$(document).ready(function() {
	$("#categorias").click(function(event) {
			  $("#contenido").load('../view/includes/categorias.html');
	});
});*/