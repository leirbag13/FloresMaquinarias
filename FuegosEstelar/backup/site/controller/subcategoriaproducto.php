<?php
require_once("../models/class_menu.php");

  $Menu = new Menu();
  //$ver = $Menu->mostrar();
  
  
  $cat = $_GET['cat'];
  $verproid = $Menu->mostrarPoridSubCategoria($cat);
  require_once("../view/subcategoriaproducto.php");
  
 
  
  
?>
