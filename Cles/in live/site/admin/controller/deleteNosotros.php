<?php
require_once("../models/class_nosotros.php");
$id=$_GET["id"];
$delnot = new Nosotros();
$bor = $delnot->deleteNosotros($id);
header("location: mostrarNosotros.php");
?>
