<?php
session_start();
if (isset($_SESSION['user']))
{
   
  require_once("../models/class_menu.php");
  
   
   $categoria = @$_POST['categoria'];
   
	if (isset($_POST['categoria']))
	{
              
		$menu = new Menu();
                $menu->setCategoria($categoria);
		

		if (! $menu->hasErrores())
		{
                    $menu->insertCategoria();
                    header ("location: mostrarCategorias.php");
		}
		else
		{
			 $error = $menu->getErrores();

		}
	}

       

}

   else
     {
             header ("location: ../index.php");
     }

    require_once("../view/insertCategoria.tpl");

?>
