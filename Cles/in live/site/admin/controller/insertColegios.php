<?php
session_start();
if (isset($_SESSION['user']))
{
  require_once("../models/class_colegios.php");

  
   $colegio = @$_POST["colegio"];
   $imagen1 = @$_FILES["imagennot1"];
   $imagen2 = @$_FILES["imagennot2"];
   $imagen3 = @$_FILES["imagennot3"];
   $imagen4 = @$_FILES["imagennot4"];
   $imagen5 = @$_FILES["imagennot5"];
   
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
        
        //subo la imagen4
   if(isset($imagen4) && $_FILES['imagennot4']['error'] != 4)
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        copy($_FILES["imagennot4"]["tmp_name"],"../../img/".$_FILES["imagennot4"]["name"]);
        $imagen4 =  $_FILES['imagennot4']['name'];


        }
        
            //subo la imagen5
   if(isset($imagen5) && $_FILES['imagennot5']['error'] != 4)
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        copy($_FILES["imagennot5"]["tmp_name"],"../../img/".$_FILES["imagennot5"]["name"]);
        $imagen5 =  $_FILES['imagennot5']['name'];


        }
        
   

	if (isset($_POST['insert']) && $_POST['insert'] == 'insertColegio')
	{
		$noticia = new Colegio();	              
               

		if (! $noticia->hasErrores())
		{
                    $noticia->insertColegio($colegio,$imagen1,$imagen2,$imagen3,$imagen4,$imagen5);
                    header ("location: mostrarColegios.php");
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

    require_once("../view/insertColegios.php");

?>
