<?php
session_start();
if (isset($_SESSION['user']))
{
  
                 require_once("../models/class_precio.php");
                  //llamo a la clase menu para hacer los combo box
                  

                   $id=$_GET["id"];
                   $precio = new Precio();
                   $verpre = $precio->mostrarPoridPecio($id);

                   $articulo = @$_POST["articulo"];
                   $descripcion = @$_POST["descripcion"];
                   $precio_unitario = @$_POST["precio_unitario"];
                   $cont_display = @$_POST["cont_display"];
                   $precio_display = @$_POST["precio_display"];
                   $cont_del_bulto = @$_POST["cont_del_bulto"];
                   $precio_del_bulto = @$_POST["precio_del_bulto"];
                   $sugerido_al_publico = @$_POST["sugerido_al_publico"];

                 if(isset($_POST['update']) && $_POST['update'] == 'updatepre')
                 {
                     
                        $precio->setArticulo($articulo);
                        $precio->setDescripcion($descripcion);
                        $precio->setPprecioUnitario($precio_unitario);
                        $precio->setContDisplay($cont_display);
                        $precio->setPrecioDisplay($precio_display);
                        $precio->setContDelBulto($cont_del_bulto);
                        $precio->setPrecioDelBulto($precio_del_bulto);
                        $precio->setSugeridoAlPublico($sugerido_al_publico);

 
                    if ($precio->hasErrores ())
                    {
                            $error = $precio->getErrores();


                    }
                    else
                    {
                        $precio->updatePecio($id);
                        header("location: mostrarPrecios.php");
                    }
                 }



}

   else
     {
             header ("location: ../index.php");
     }

      require_once '../view/editarPrecios.php';

?>