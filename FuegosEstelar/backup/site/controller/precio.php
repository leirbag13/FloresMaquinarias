<?php
require_once("../models/class_precio.php");

 $price = new Precio();
 $theprice = $price->mostrarPecio();
 require_once("../view/precio.php");


?>
