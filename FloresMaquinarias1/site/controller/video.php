<?php
 require_once("../models/class_menu.php");
 require_once("../models/class_videos.php");
 $Menu = new Menu();
 $ver = $Menu->mostrar();
 $video = new Videos();
 /*$id=$_GET["id"];
 @$vervidid = $video->mostrarPoridVideos($id);*/
 @$vervidideos = $video->mostrar();
 require_once("../view/video.php");


?>
