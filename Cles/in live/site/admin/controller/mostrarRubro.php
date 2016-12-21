<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_rubro.php");
		 $noticia = new Rubro();
                 $ver = $noticia->mostrarRubro();
                 require_once("../view/mostrarRubro.php");


}

   else
     {
             header ("location: ../index.php");
     }


?>

