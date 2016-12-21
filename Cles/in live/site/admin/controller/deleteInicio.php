<?php
require_once("../models/class_inicio.php");
$id=$_GET["id"];
$delvideo = new Inicio();
$bor = $delvideo->deleteInicio($id);
header("location: mostrarInicio.php");
?>
