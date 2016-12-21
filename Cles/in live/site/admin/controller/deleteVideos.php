<?php
require_once("../models/class_videos.php");
$id=$_GET["id"];
$delvideo = new Videos();
$bor = $delvideo->delete($id);
header("location: mostrarVideos.php");
?>
