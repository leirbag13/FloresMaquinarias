<?php
 require_once("models/class_menu.php");
 $Menu = new Menu();
 $ver = $Menu->mostrar();
 //$versub = $Menu->mostrarSubCategoria();
 require_once("models/class_noticias.php");
 $not = new Noticias();
 $vernot = $not->mostrarNoticias();

 require_once("view/inicio.php");


?>
