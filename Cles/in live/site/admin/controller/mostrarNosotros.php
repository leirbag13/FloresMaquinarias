<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_nosotros.php");
		 $noticia = new Nosotros();
                 $ver = $noticia->mostrarNosotros();
                 require_once("../view/mostrarNosotros.php");


}

   else
     {
             header ("location: ../index.php");
     }


?>

