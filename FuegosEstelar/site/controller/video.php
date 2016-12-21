<?php
require_once("../models/class_videos.php");

  $video = new Videos();
  $vid = $video->mostrar();
 require_once("../view/video.php");


?>
