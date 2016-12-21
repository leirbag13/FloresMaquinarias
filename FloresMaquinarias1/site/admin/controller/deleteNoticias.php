<?php
require_once("../models/class_noticias.php");
$id=$_GET["id"];
$delnot = new Noticias();
$bor = $delnot->deleteNoticias($id);
header("location: mostrarNoticias.php");
?>
