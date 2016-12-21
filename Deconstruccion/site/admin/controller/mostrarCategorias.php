<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_menu.php");
				 $Menu = new Menu();
                 $ver = $Menu->mostrar();
                 require_once("../view/mostrarCategorias.tpl");


}

   else
     {
             header ("location: ../index.php");
     }
//require_once("../view/mostrarCategorias.tpl");

?>
