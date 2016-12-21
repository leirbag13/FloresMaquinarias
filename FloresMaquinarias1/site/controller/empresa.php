<?php

require_once("../models/class_menu.php");
$Menu = new Menu();
$ver = $Menu->mostrar();
require_once("../models/class_novedades.php");
$novedades = new Novedades();
$vernov = $novedades->mostrarNovedades();

require_once("../view/empresa.php");
?>
