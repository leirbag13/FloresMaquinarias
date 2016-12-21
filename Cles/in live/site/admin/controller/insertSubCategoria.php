<?php
session_start();
if (isset($_SESSION['user']))
{

  require_once("../models/class_menu.php");

  $menu = new Menu();
  $ver = $menu->mostrar();

     $subcategoria = @$_POST['subCategoria'];
     $categoria = @$_POST['categoria'];
 
	if (isset($_POST['subCategoria']) && isset($_POST['categoria']))
	{

		$menu = new Menu();
		$menu->setItem($subcategoria);
                $menu->setCategoria($categoria);

		if (! $menu->hasErrores())
		{
                    $menu->insertSubCategoria();
                    header ("location: mostrarSubCategoria.php");
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

    require_once("../view/insertSubCategoria.php");

?>
