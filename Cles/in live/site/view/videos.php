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
<link href="../css/reset.css" rel="stylesheet" type="text/css">
<link href="../css/general.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</head>

<body>
<div id="cabecera">
	<div id="todoLogo">
    	<div id="logo"><img src="../img/logo.jpg"/></div>
        <div id="slogan">ROPA DE EGRESADOS - ROPA DEPORTIVA - UNIFORMES</div>
    </div>
    <div id="redesSociales">
		<div id="btnsRedes">
        	<div class="unBtnRedes"><a href="#"><img src="../img/btnRed01.jpg"/></a></div>
            <div class="unBtnRedes"><a href="#"><img src="../img/btnRed02.jpg"/></a></div>
        </div>    
    </div>
    <div id="reproductor"><a href="#"><img src="../img/reproductor.jpg"/></a></div>
</div>
<div id="botonera">
    <div class="unBoton"><a href="../controller/contacto.php">CONTACTO</a></div>
    <div class="unBoton"><a href="videos.php" style="font-style:italic; color:#66FECB; line-height:40px;">VIDEOS</a></div>
    <div class="unBoton"><a href="../controller/colegios.php">COLEGIOS</a></div>
    <div class="unBoton"><a href="../controller/productos.php">PRODUCTOS</a></div>
    <div class="unBoton"><a href="../controller/nosotros.php">NOSOTROS</a></div>
    <div class="unBoton"><a href="/">INICIO</a></div>
</div>
<div id="contenedor">
	<div id="contenidoIzquierda" style= "background-image:url(../img/imgVideos01.jpg);" onClick="presionBoton()">
    	<ul id="btnsColegios" type="disc">
            <?php  for($i=0;$i<sizeof($ver);$i++):?>
                <li><a href="videos.php?id=<?php echo $ver[$i]["id"]?>"><img src="../img/playVideos.png"/><?php echo $ver[$i]["colegio"] ;?></a></li>
            <?php endfor;?>
        </ul>
    </div>
   <?php if(empty($id)):?>
    <div id="contenidoDerecha" onClick="presionBoton()"><?php echo $ver[0]["video"] ?></div>
    <?php else:?>
     <div id="contenidoDerecha" onClick="presionBoton()"><?php echo $verporid[0]["video"] ?></div>
     <?php endif;?>
    <div class="clear"></div>
</div>
<div id="deportes">
	<div id="txtDeporte"><a href="#"><img src="../img/deportesTxt.png"/></a></div>
    <div class="imgDeporte"><img src="../img/imgDeporte01.jpg"/></div>
    <div class="imgDeporte"><img src="../img/imgDeporte02.jpg"/></div>
    <div class="imgDeporte"><img src="../img/imgDeporte03.jpg"/></div>
</div>
</div>
<div id="pie">Deán Funes 1430 - Bº Alberdi - Córdoba - Tel/Fax: 0351 4806555 - Mail: clesindumentariadeportiva@hotmail.com - cleindumentariadeportiva@yahoo.com.ar </div>
</body>
</html>
