<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_colegios.php");
				 $Menu = new Colegio();
                 $ver = $Menu->mostrarColegios();
                 require_once("../view/mostrarColegios.php");


}

   else
     {
             header ("location: ../index.php");
     }
//require_once("../view/mostrarCategorias.tpl");

?>
