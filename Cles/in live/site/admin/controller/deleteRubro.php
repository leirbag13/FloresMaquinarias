<?php
require_once("../models/class_rubro.php");
$id=$_GET["id"];
$delnot = new Rubro();
$bor = $delnot->deleteRubro($id);
header("location: mostrarRubro.php");
?>
