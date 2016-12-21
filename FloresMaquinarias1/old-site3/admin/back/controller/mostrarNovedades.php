<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_novedades.php");
		 $novedades = new Novedades();
                 $vernov = $novedades->mostrarNovedades();
                 require_once("../view/mostrarNovedades.php");


}

   else
     {
             header ("location: ../index.php");
     }


?>
