<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_noticias.php");
		 $noticia = new Noticias();
                 $vernot = $noticia->mostrarNoticias();
                 require_once("../view/mostrarNoticias.php");


}

   else
     {
             header ("location: ../index.php");
     }


?>
