<?php
$destino = "clesindumentariadeportiva@hotmail.com";
$destino2 = "clesindumentariadeportiva@yahoo.com";
$destino3 = "clesindumentariadeportiva@yahoo.com.ar";
$asunto = "Consulta Cles - WEB";
$headers = "From: " . utf8_decode($_POST['nombre']);
$headers .= "<" . $_POST["mail"] . ">\r\n";
$headers .= "Reply-To: " . $_POST["mail"]; 
$mensaje = "CONSULTA: " . utf8_decode($_POST["consulta"]) . "\n\n";
$mensaje .= "Nombre: " . utf8_decode($_POST['nombre']) . "\n\n";
$mensaje .= "Telefono: " . $_POST['telefono'] . "\n\n FIN DEL MENSAJE";

mail($destino2, $asunto, $mensaje, $headers);
mail($destino3, $asunto, $mensaje, $headers);
echo mail($destino, $asunto, $mensaje, $headers);	
?>