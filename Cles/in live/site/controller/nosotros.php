<?php
   require_once("../models/class_nosotros.php");
         $noticia = new Nosotros();
         $ver = $noticia->mostrarNosotros();
         require_once("../view/nosotros.php");

?>

