<?php
session_start();
if (isset($_SESSION['user']))
{
   
  require_once("../models/class_inicio.php");
  
   $box_image = @$_FILES["boximage"];
   $imagen1 = @$_FILES["imagennot1"];
   $imagen2 = @$_FILES["imagennot2"];
   $imagen3 = @$_FILES["imagennot3"];

   //subo la box_image
   if(isset($box_image) && $_FILES['boximage']['error'] != 4)
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        copy($_FILES["boximage"]["tmp_name"],"../../img/".$_FILES["boximage"]["name"]);
        $box_image =  $_FILES['boximage']['name'];


        }
   //subo la imagen1
   if(isset($imagen1) && $_FILES['imagennot1']['error'] != 4)
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        copy($_FILES["imagennot1"]["tmp_name"],"../../img/".$_FILES["imagennot1"]["name"]);
        $imagen1 =  $_FILES['imagennot1']['name'];


        }
      
   //subo la imagen2
   if(isset($imagen2) && $_FILES['imagennot2']['error'] != 4)
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        copy($_FILES["imagennot2"]["tmp_name"],"../../img/".$_FILES["imagennot2"]["name"]);
        $imagen2 =  $_FILES['imagennot2']['name'];


        }
          
     //subo la imagen3
   if(isset($imagen3) && $_FILES['imagennot3']['error'] != 4)
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        copy($_FILES["imagennot3"]["tmp_name"],"../../img/".$_FILES["imagennot3"]["name"]);
        $imagen3 =  $_FILES['imagennot3']['name'];


        }
        
        if (isset($_POST['insert']) && $_POST['insert'] == 'insertini')
	{
		$inicio = new Inicio();
	               

		if (! $inicio->hasErrores())
		{
                    $inicio->insertInicio($box_image, $imagen1,$imagen2,$imagen3);
                    header ("location: mostrarInicio.php");
		}
		else
		{
			 $error = $inicio->getErrores();

		}
	}
   
}

   else
     {
             header ("location: ../index.php");
     }

    require_once("../view/insertInicio.tpl");

?>
