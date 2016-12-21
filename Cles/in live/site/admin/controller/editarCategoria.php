<?php
session_start();
if (isset($_SESSION['user']))
{
                require_once("../models/class_menu.php");

                 $id=$_GET["id"];
                 $categoria = @$_POST["categoria"];

                 $menu = new Menu();
                 $ver = $menu->mostrarPorid($id);

                 $menu->setCategoria($categoria);

                 if(isset($_POST['action']) && $_POST['action'] == 'update')
                 {
                   

                    if ($menu->hasErrores ())
                    {
                            $error = $menu->getErrores();


                    }
                    else
                    {
                        $menu->update($id);
                        header("location: mostrarCategorias.php");
                    }
                 }



}

   else
     {
             header ("location: ../index.php");
     }

      require_once '../view/editarCategoria.php';

?>