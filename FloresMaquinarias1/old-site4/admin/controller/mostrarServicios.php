<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_servicios.php");
		 $novedades = new Servicios();
                 $vernov = $novedades->mostrarNovedades();
                 require_once("../view/mostrarServicios.php");


}

   else
     {
             header ("location: ../index.php");
     }


?>
