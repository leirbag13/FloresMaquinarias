<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_videos.php");
		 $videos = new Videos();
                 $ver = $videos->mostrar();
                 require_once("../view/mostrarVideos.php");


}

   else
     {
             header ("location: ../index.php");
     }


?>
