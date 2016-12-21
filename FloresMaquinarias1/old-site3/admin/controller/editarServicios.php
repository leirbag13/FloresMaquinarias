<?php
session_start();
if (isset($_SESSION['user']))
{
  require_once("../models/class_servicios.php");

  $id=$_GET["id"];


 $novedad = new Servicios();
 $vernov = $novedad->mostrarPoridNovedades($id);


   $titulo = @$_POST["titulo"];
   $cuerpo = @$_POST["cuerpo"];
   $imagen1 = @$_FILES["imagennot1"];


    //subo la imagen1
   if(isset($imagen1))
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        copy($_FILES["imagennot1"]["tmp_name"],"../../upload-images/".$_FILES["imagennot1"]["name"]);
        $imagen1 =  $_FILES['imagennot1']['name'];

        }

  




	if (isset($_POST['update']) && $_POST['update'] == 'updatenov')
	{

		$novedad = new Servicios();
                $novedad->setTitulo($titulo);
                $novedad->setCuerpo($cuerpo);
		

		if (! $novedad->hasErrores())
		{
                    $novedad->updateNovedades($id,$imagen1);
                    header ("location: mostrarServicios.php");
		}
		else
		{
			 $error = $novedad->getErrores();

		}
	}



}

   else
     {
             header ("location: ../index.php");
     }

    require_once("../view/editarServicios.php");

?>
