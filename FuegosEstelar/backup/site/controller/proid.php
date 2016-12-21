<?php
require_once("../models/class_menu.php");
require_once("../models/class_producto.php");

  $Menu = new Menu();
  $ver = $Menu->mostrar();
  $cat = $_GET['cat'];
  $versubcat = $Menu->mostrarPoridSubCategoria($cat);
  
  
  $item = $_GET['item'];
  $cate = new Producto();
  $verproid = $cate->mostrarPoritemProducto($item);
  require_once("../view/proid.php");
  
 
  
  
?>
