<?php
require_once("../models/class_precio.php");
$id=$_GET["id"];
$precio = new Precio();
$bor = $precio->deletePecio($id);
header("location: mostrarPrecios.php");
?>
