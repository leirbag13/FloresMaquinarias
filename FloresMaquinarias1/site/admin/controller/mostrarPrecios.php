<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_precio.php");
		 $precio = new Precio();
                 $ver = $precio->mostrarPecio();
                 require_once("../view/mostrarPrecios.php");


}

   else
     {
             header ("location: ../index.php");
     }


?>
