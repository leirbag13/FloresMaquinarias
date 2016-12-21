<?php
require_once("../models/class_Servicios.php");
$id=$_GET["id"];
$delnov = new Servicios();
$bor = $delnov->deleteNovedades($id);
header("location: mostrarServicios.php");
?>
