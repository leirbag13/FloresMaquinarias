<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pirotecnia cordoba</title>
<meta name="description" content="Fuegos Estelas, 20 años de trayectoria en la venta libre de pirotecnia para eventos en Cordoba, Argentina."/>
<meta name="keywords" content="pirotecnia, fuegos, artificiales, fuegos artificiales, fosforos, espectaculo, eventos, cordoba, venta, RENAR, seguridad, Argentina, festejos, pirotecnia, fiestas, cañas voladoras, fosforos, candelas, infantiles, misiles, fuentes volcanes, audibles, morteros "/>
<meta name="classification" content="Pirotecnia" />
<meta name="url" content="http://www.fuegosestelar.com.ar" />
<meta name="page-topic" content="eventos, espectaculos, fiestas" />
<meta name="audience" content="All" />
<meta name="Rating" content="General" />
<meta name="Distribution" content="Global" />
<meta name="ObjectType" content="Document" />
<meta name="Robots" content="ALL" />
<meta name="author" content="3disegno"/>
<meta name="language" content="spanish"/>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="Contenedor">
<div id="banner">
<script language="javascript" src="saca.js"></script>
</div>
<div id="cuerpo">

<? include ("menu.php") ?>

<div id="caja">
<h1>FUEGOS ARTIFICIALES ESTELAR</h1>

<? 
if (!$HTTP_POST_VARS){ 
?>

<form action="contacto.php" method="post">

NOMBRE:<br /><input name="f_nombre" type="text" id="f_nombre" align="absmiddle" /><br />

MAIL:<br /><input name="f_email" type="text" id="f_email" align="absmiddle"/><br />

TE:<br /><input name="f_te" type="text" id="f_email" align="absmiddle"/><br />

COMENTARIO:<br /><textarea name="f_mensaje" rows="5" id="f_comentario"></textarea>
<br />

<input name="Enviar" type="submit" value="ENVIAR" class="boton" /><br />
</form>

<? 
}else{ 
    //Estoy recibiendo el formulario, compongo el cuerpo 
    $cuerpo = "Formulario enviado\n"; 
    $cuerpo .= "Nombre: " . $HTTP_POST_VARS["f_nombre"] . "\n"; 
    $cuerpo .= "E-Mail: " . $HTTP_POST_VARS["f_email"] . "\n";
	$cuerpo .= "TE: " . $HTTP_POST_VARS["f_te"] . "\n";
	$cuerpo .= "Mensaje: " . $HTTP_POST_VARS["f_mensaje"] . "\n";
 
    //mando el correo... 
    //mail("info@fuegosestelar.com.ar","Formulario recibido",$cuerpo); 
	mail("fuegos_estelar@hotmail.com","Formulario recibido",$cuerpo); 
	

    //doy las gracias por el envío
	?>
	Gracias por su Consulta!<br />
	<a href="home.php">Volver</a>
	
	<? } ?>


</div>

</div>
<div id="Pie"></div>
</div>
</body>
</html>