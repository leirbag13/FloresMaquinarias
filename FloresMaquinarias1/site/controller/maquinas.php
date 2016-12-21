<?php

require_once("../models/class_menu.php");
$Menu = new Menu();
$ver = $Menu->mostrar();
require_once("../models/class_producto.php");
$maquinas = new Producto();
$verma = $maquinas->mostrarProducto();


require_once("../view/maquinas.php");
?>
