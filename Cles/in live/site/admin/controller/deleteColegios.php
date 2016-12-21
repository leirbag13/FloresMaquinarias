<?php
require_once("../models/class_colegios.php");
$id=$_GET["id"];
$delnot = new Colegio();
$bor = $delnot->deleteColegios($id);
header("location: mostrarColegios.php");
?>

