<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31458148-1']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>::CLES::</title>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/general.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/diapo.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.pix_diapo_home').diapo({fx:'scrollLeft', loaderColor:'#3398CC', time:5000});
});
</script>
</head>

<body>
<div id="cabecera">
	<div id="todoLogo">
    	<div id="logo"><img src="img/logo.jpg"/></div>
        <div id="slogan">ROPA DE EGRESADOS - ROPA DEPORTIVA - UNIFORMES</div>
    </div>
    <div id="redesSociales">
		<div id="btnsRedes">
        	<div class="unBtnRedes"><a href="#"><img src="img/btnRed01.jpg"/></a></div>
            <div class="unBtnRedes"><a href="#"><img src="img/btnRed02.jpg"/></a></div>
        </div>    
    </div>
    <div id="reproductor"><a href="#"><img src="img/reproductor.jpg"/></a></div>
</div>
<div id="botonera">
    <div class="unBoton"><a href="../controller/contacto.php">CONTACTO</a></div>
    <div class="unBoton"><a href="../controller/videos.php">VIDEOS</a></div>
    <div class="unBoton"><a href="../controller/colegios.php">COLEGIOS</a></div>
    <div class="unBoton"><a href="../controller/productos.php">PRODUCTOS</a></div>
    <div class="unBoton"><a href="../controller/nosotros.php">NOSOTROS</a></div>
    <div class="unBoton"><a href="/" style="font-style:italic; color:#3398CC; line-height:40px;">INICIO</a></div>
</div>
<div id="contenedor">
	<div id="contenidoIzquierda"><a href="#"><img src="img/<?php echo $ver[0]['box_image']?>" width="250px" height="450"/></a></div>
    <div id="contenidoDerecha">
		<div id="contenedorSlider">
    		<div class="pix_diapo_home">
                    <?php  for($i=0;$i<sizeof($ver);$i++):?>
				<div data-thumb="img/miniSlider01.jpg">
					<a href="#"><img src="img/<?php echo $ver[$i]['image_1']?>" width="650" height="450"/></a>
				</div>
				<div data-thumb="img/miniSlider02.jpg">
					<a href="#"><img src="img/<?php echo $ver[$i]['image_2']?>" width="650" height="450"/></a>
				</div>
				<div data-thumb="img/miniSlider03.jpg">
					<a href="#"><img src="img/<?php echo $ver[$i]['image_3']?>" width="650" height="450"/></a>
				</div>
                    <?php endfor;?>
               </div>    
		 </div>
     </div>
     <div class="clear"></div>
</div>
<div id="deportes">
	<div id="txtDeporte"><a href="#"><img src="img/deportesTxt.png"/></a></div>
    <div class="imgDeporte"><img src="img/imgDeporte01.jpg"/></div>
    <div class="imgDeporte"><img src="img/imgDeporte02.jpg"/></div>
    <div class="imgDeporte"><img src="img/imgDeporte03.jpg"/></div>
</div>
</div>
<div id="pie">Deán Funes 1430 - Bº Alberdi - Córdoba - Tel/Fax: 0351 4806555 - Mail: clesindumentariadeportiva@hotmail.com - cleindumentariadeportiva@yahoo.com.ar </div>
</body>
</html>
