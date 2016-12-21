<?php

 require_once("../models/class_video.php");
 $videos = new Video();
 $ver = $videos->mostrarVideo();
 
 $id=$_GET["id"];
 $verporid = $videos->mostrarPoridVideo($id);
  
 require_once("../view/videos.php");

?>
