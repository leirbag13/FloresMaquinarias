<?php
session_start();
if (isset($_SESSION['user']))
{
  require_once("../models/class_noticias.php");

  
    $imagen1 = @$_FILES["imagennot1"];
   $imagen2 = @$_FILES["imagennot2"];
   $imagen3 = @$_FILES["imagennot3"];

   //subo la imagen1
   if(isset($imagen1) && $_FILES['imagennot1']['error'] != 4)
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        copy($_FILES["imagennot1"]["tmp_name"],"../../upload-images/".$_FILES["imagennot1"]["name"]);
        $imagen1 =  $_FILES['imagennot1']['name'];


        }
      
   //subo la imagen2
   if(isset($imagen2) && $_FILES['imagennot2']['error'] != 4)
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        copy($_FILES["imagennot2"]["tmp_name"],"../../upload-images/".$_FILES["imagennot2"]["name"]);
        $imagen2 =  $_FILES['imagennot2']['name'];


        }
          
     //subo la imagen3
   if(isset($imagen3) && $_FILES['imagennot3']['error'] != 4)
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        copy($_FILES["imagennot3"]["tmp_name"],"../../upload-images/".$_FILES["imagennot3"]["name"]);
        $imagen3 =  $_FILES['imagennot3']['name'];


        }
   

	if (isset($_POST['insert']) && $_POST['insert'] == 'insertnot')
	{
		$noticia = new Noticias();

		if (! $noticia->hasErrores())
		{
                    $noticia->insertNoticias($imagen1,$imagen2,$imagen3);
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
