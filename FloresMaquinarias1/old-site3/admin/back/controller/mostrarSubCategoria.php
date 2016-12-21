<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_menu.php");
		 $Menu = new Menu();
                 $versub = $Menu->mostrarsubcategoria();
                 require_once("../view/mostrarSubCategoria.php");


}

   else
     {
             header ("location: ../index.php");
     }


?>


