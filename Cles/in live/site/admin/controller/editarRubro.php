<?php
session_start();
if (isset($_SESSION['user']))
{
            
                 require_once("../models/class_rubro.php");
                  
                 $id=$_GET["id"];


                 $noticia = new Rubro();
                 $ver = $noticia->mostrarPoridRubro($id);

                   $titulo = @$_POST["titulo"];
                   $imagen = @$_FILES["imagen"];
                   $imagen1old = @$_POST["imagennot1old"];
                   
                    
                    //pregnto si el usuario subio alguna imagen1 si no subio me da error 4
                   if(@$_FILES['imagen']['error'] == 4)
                         {
                             // si sube una foto hago esto
                       $imagen = $imagen1old;


                        }
                         else
                         {
                             @copy($_FILES["imagen"]["tmp_name"],"../../img/".$_FILES["imagen"]["name"]);
                               $imagen =  @$_FILES['imagen']['name'];

                         }

                 if(isset($_POST['update']) && $_POST['update'] == 'updateRubro')
                 {

                    if ($noticia->hasErrores ())
                    {
                            $error = $noticia->getErrores();


                    }
                    else
                    {
                        $noticia->updateRubro($id, $titulo, $imagen);
                        header("location: mostrarRubro.php");
                    }
                 }



}

   else
     {
             header ("location: ../index.php");
     }

      require_once '../view/editarRubro.php';

?>