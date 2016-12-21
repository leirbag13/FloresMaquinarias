<?php
require_once("../models/class_producto.php");
$id=$_GET["id"];
$delproduc = new Producto();
$bor = $delproduc->deleteProducto($id);
header("location: mostrarProductos.php");
?>
