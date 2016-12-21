<?php
session_start();
if (isset($_SESSION['user']))
{

  require_once("../models/class_videos.php");

  $id=$_GET["id"];
  $videos = new Videos();
  $ver = $videos->mostrarPoridVideos($id);

  
     $titulo = @$_POST['titulo'];
     $subtitulo = @$_POST['subtitulo'];
     $descripcion = @$_POST['descripcion'];
     $video = @$_POST['video'];

      if(isset($_POST['update']) && $_POST['update'] == 'updatevideo')
	{
                $videos->setTitulo($titulo);
                $videos->setSubtitulo($subtitulo);
                $videos->setDescripcion($descripcion);
                $videos->setVideo($video);
                
		if (! $videos->hasErrores())
		{
                    $videos->updateVideos($id);
                    header ("location: mostrarVideos.php");
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

    require_once("../view/editarVideos.php");

?>
