<?php
 require_once("../models/class_colegios.php");
 
 
$Menu = new Colegio(); 
$ver = $Menu->mostrarColegios();

@$id = $_GET["id"];
$verporid = $Menu->mostrarPoridColegios($id);

require_once("../view/colegios.php");  

?>
