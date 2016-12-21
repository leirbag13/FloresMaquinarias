<?php

require_once("../models/class_menu.php");
$Menu = new Menu();
$ver = $Menu->mostrar();

require_once("../models/class_servicios.php");
$novedades = new Servicios();
$vernov = $novedades->mostrarNovedades();

require_once("../view/servicios.php");
?>
