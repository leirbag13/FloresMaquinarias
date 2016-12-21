<?php
require_once("../models/class_video.php");
$id=$_GET["id"];
$delvideo = new Video();
$bor = $delvideo->deleteVideo($id);
header("location: mostrarVideo.php");
?>
