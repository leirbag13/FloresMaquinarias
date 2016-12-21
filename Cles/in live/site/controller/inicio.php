<?php
 require_once("models/class_inicio.php");
                 $Menu = new Inicio();
 $ver = $Menu->mostrarInicio();
 require_once("view/index.php");

?>
