<?php
session_start();
if (isset($_SESSION['user']))
{
                require_once("../models/class_menu.php");

                 $id=$_GET["id"];
                 $subcategoria = @$_POST["subCategoria"];
                 $categoria = @$_POST["categoria"];

                 $menu = new Menu();
                 $ver = $menu->mostrarPoridSubCategoria($id);
                 $vercategorias = $menu->mostrar();

                 if(isset($_POST['action']) && $_POST['action'] == 'update')
                 {
                     $menu->setItem($subcategoria);
                     $menu->setCategoria($categoria);


                    if ($menu->hasErrores ())
                    {
                            $error = $menu->getErrores();


                    }
                    else
                    {
                        $menu->updateSubCategoria($id);
                         header("location: mostrarSubCategoria.php");
                    }
                 }



}

   else
     {
             header ("location: ../index.php");
     }

      require_once '../view/editarSubCategoria.php';

?>