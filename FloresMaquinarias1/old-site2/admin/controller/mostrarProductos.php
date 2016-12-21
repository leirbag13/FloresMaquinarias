<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_producto.php");
		 $producto = new Producto();
                 $ver = $producto->mostrarProducto();
                 require_once("../view/mostrarProductos.php");


}

   else
     {
             header ("location: ../index.php");
     }


?>
