<?php
require_once("../models/class_novedades.php");
$id=$_GET["id"];
$delnov = new Novedades();
$bor = $delnov->deleteNovedades($id);
header("location: mostrarNovedades.php");
?>
