<?php
session_start();
if (isset($_SESSION['user']))
{

  require_once("../models/class_video.php");

     $videos = new Video(); 
     $colegio = @$_POST['colegio'];
     $video = @$_POST['video'];

      if(isset($_POST['insert']) && $_POST['insert'] == 'insertvideo')
	{
                
		if (! $videos->hasErrores())
		{
                    $videos->insertVideo($colegio, $video);
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

    require_once("../view/insertVideo.php");

?>
