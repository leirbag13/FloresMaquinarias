<?php
 require_once("../models/class_rubro.php");
 $noticia = new Rubro();
 $ver = $noticia->mostrarRubro();
 require_once("../view/productos.php");

?>

