<?php
require_once("../models/class_menu.php");
$id=$_GET["id"];
$delsub = new Menu();
$bor = $delsub->deleteSub($id);
header("location: mostrarSubCategoria.php");
?>
