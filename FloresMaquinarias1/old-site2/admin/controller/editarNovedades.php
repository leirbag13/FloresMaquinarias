<?php
session_start();
if (isset($_SESSION['user']))
{

                 require_once("../models/class_novedades.php");

                 $id=$_GET["id"];


                 $novedad = new Novedades();
                 $vernov = $novedad->mostrarPoridNovedades($id);

                   $titulo = @$_POST["titulo"];
                   $cuerpo = @$_POST["cuerpo"];
                   $imagen1 = @$_FILES["imagennot1"];
                   $imagen1old = @$_POST["imagennot1old"];



                    //subo la foto
                      //pregnto si el usuario subio alguna imagen1 si no subio me da error 4
                   if(@$_FILES['imagennot1']['error'] == 4)
                         {
                             // si sube una foto hago esto
                       $imagen1 = $imagen1old;


                        }
                         else
                         {
                              @copy($_FILES["imagennot1"]["tmp_name"],"../../upload-images/".$_FILES["imagennot1"]["name"]);
                               $imagen1 =  @$_FILES['imagennot1']['name'];

                         }


                 if(isset($_POST['update']) && $_POST['update'] == 'updatenov')
                 {
                     
                        $novedad->setTitulo($titulo);
                        $novedad->setCuerpo($cuerpo);


                    if ($novedad->hasErrores ())
                    {
                            $error = $novedad->getErrores();


                    }
                    else
                    {
                        $novedad->updateNovedades($id, $imagen1);
                        header("location: mostrarNovedades.php");
                    }
                 }



}

   else
     {
             header ("location: ../index.php");
     }

      require_once '../view/editarNovedades.php';

?>