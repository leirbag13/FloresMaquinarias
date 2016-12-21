<?php
session_start();
if (isset($_SESSION['user']))
{
  require_once("../models/class_rubro.php");

  
   $titulo = @$_POST["text"];
   $imagen1 = @$_FILES["imagen"];

   //subo la imagen1
   if(isset($imagen1) && $_FILES['imagen']['error'] != 4)
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        copy($_FILES["imagen"]["tmp_name"],"../../img/".$_FILES["imagen"]["name"]);
        $imagen1 =  $_FILES['imagen']['name'];


        }
   

	if (isset($_POST['insert']) && $_POST['insert'] == 'insertRubro')
	{
		$noticia = new Rubro();
		$noticia->insertRubro($titulo,$imagen1);
               

		if (! $noticia->hasErrores())
		{
                    header ("location: mostrarRubro.php");
		}
		else
		{
			 $error = $noticia->getErrores();

		}
	}



}

   else
     {
             header ("location: ../index.php");
     }

    require_once("../view/insertRubro.php");

?>
