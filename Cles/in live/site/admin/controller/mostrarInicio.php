<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_inicio.php");
				 $Menu = new Inicio();
                 $ver = $Menu->mostrarInicio();
                 require_once("../view/mostrarInicio.tpl");


}

   else
     {
             header ("location: ../index.php");
     }
//require_once("../view/mostrarCategorias.tpl");

?>
