<?php
require_once("../models/class_menu.php");
$id=$_GET["id"];
$categoria=$_GET["categoria"];
$del = new Menu();
$del->setCategoria($categoria);
$bor = $del->delete($id);
header("location: mostrarCategorias.php");
?>
