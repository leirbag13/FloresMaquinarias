<?php
session_start();
if (isset($_SESSION['user']))
{
  require_once("../models/class_noticias.php");

  
   $titulo = @$_POST["titulo"];
   $subtitulo = @$_POST["subtitulo"];
   $fecha = date("d/m/Y");;
   $cuerpo = @$_POST["cuerpo"];
   $imagen1 = @$_FILES["imagennot1"];
   $pdf = @$_FILES["pdf"];


   //subo la imagen1
   if(isset($imagen1) && $_FILES['imagennot1']['error'] != 4)
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        copy($_FILES["imagennot1"]["tmp_name"],"../../upload-images/".$_FILES["imagennot1"]["name"]);
        $imagen1 =  $_FILES['imagennot1']['name'];


        }
        
           //subo el pdf
   if(isset($pdf))
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        @copy($_FILES["pdf"]["tmp_name"],"../../upload-pdf/".$_FILES["pdf"]["name"]);
        $pdf =  @$_FILES['pdf']['name'];
      

        }
         else
             {
               $pdf = "--";
             }

      

   

	if (isset($_POST['insert']) && $_POST['insert'] == 'insertnot')
	{
		$noticia = new Noticias();
		$noticia->setTitulo($titulo);
                $noticia->setSubtitulo($subtitulo);  
                $noticia->setCuerpo($cuerpo);
               

		if (! $noticia->hasErrores())
		{
                    $noticia->insertNoticias($imagen1,$pdf);
                    header ("location: mostrarNoticias.php");
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

    require_once("../view/insertNoticias.php");

?>
