<?php
session_start();
if (isset($_SESSION['user']))
{

  require_once("../models/class_videos.php");


     $video = @$_POST['video'];
       
      if(isset($_POST['action']) && $_POST['action'] == 'insertvideo')
	{

		$videos = new Videos();

                $videos->setVideo($video);
		

		if (! $videos->hasErrores())
		{
                    $videos->insertVideos();
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

    require_once("../view/insertVideos.php");

?>
