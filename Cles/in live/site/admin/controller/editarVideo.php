<?php
session_start();
if (isset($_SESSION['user']))
{

  require_once("../models/class_video.php");

  $id=$_GET["id"];
  $videos = new Video();
  $ver = $videos->mostrarPoridVideo($id);

  
     $colegio = @$_POST['colegio'];
     $video = @$_POST['video'];

      if(isset($_POST['update']) && $_POST['update'] == 'updateVideo')
	{
                
		if (! $videos->hasErrores())
		{
                    $videos->updateVideo($id, $colegio, $video);
                    header ("location: mostrarVideo.php");
		}
		else
		{
			 $error = $videos->getErrores();

		}
	}



}

   else
     {
             header ("location: ../index.php");
     }

    require_once("../view/editarVideo.php");

?>
