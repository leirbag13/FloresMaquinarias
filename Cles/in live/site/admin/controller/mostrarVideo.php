<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_video.php");
		 $videos = new Video();
                 $ver = $videos->mostrarVideo();
                 require_once("../view/mostrarVideo.php");


}

   else
     {
             header ("location: ../index.php");
     }


?>
