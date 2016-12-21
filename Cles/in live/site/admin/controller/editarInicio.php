<?php
session_start();
if (isset($_SESSION['user']))
{

                 require_once("../models/class_inicio.php");

                 $id=$_GET["id"];


                 $novedad = new Inicio();
                 $ver = $novedad->mostrarPoridInicio($id);

                   $boximage = @$_FILES["boximage"];
                   $boximageold = @$_POST["boximageold"];
                   $imagen1 = @$_FILES["imagennot1"];
                   $imagen1old = @$_POST["imagennot1old"];
                   $imagen2 = @$_FILES["imagennot2"];
                   $imagen2old = @$_POST["imagennot2old"];
                   $imagen3 = @$_FILES["imagennot3"];
                   $imagen3old = @$_POST["imagennot3old"];


                    //subo la foto
                      //pregnto si el usuario subio alguna box_image si no subio me da error 4
                   if(@$_FILES['boximage']['error'] == 4)
                         {
                             // si sube una foto hago esto
                       $boximage = $boximageold;


                        }
                         else
                         {
                              @copy($_FILES["boximage"]["tmp_name"],"../../img/".$_FILES["boximage"]["name"]);
                               $boximage =  @$_FILES['boximage']['name'];

                         }
                    //subo la foto
                      //pregnto si el usuario subio alguna imagen1 si no subio me da error 4
                   if(@$_FILES['imagennot1']['error'] == 4)
                         {
                             // si sube una foto hago esto
                       $imagen1 = $imagen1old;


                        }
                         else
                         {
                              @copy($_FILES["imagennot1"]["tmp_name"],"../../img/".$_FILES["imagennot1"]["name"]);
                               $imagen1 =  @$_FILES['imagennot1']['name'];

                         }


                    //pregnto si el usuario subio alguna imagen2 si no subio me da error 4
                    if(@$_FILES['imagennot2']['error'] == 4)
                         {
                             // si sube una foto hago esto
                       $imagen2 = $imagen2old;


                        }
                         else
                         {
                              @copy($_FILES["imagennot2"]["tmp_name"],"../../img/".$_FILES["imagennot2"]["name"]);
                               $imagen2 =  @$_FILES['imagennot2']['name'];

                         }

                         //pregnto si el usuario subio alguna imagen3 si no subio me da error 4
                    if(@$_FILES['imagennot3']['error'] == 4)
                         {
                             // si sube una foto hago esto
                       $imagen3 = $imagen3old;


                        }
                         else
                         {
                              @copy($_FILES["imagennot3"]["tmp_name"],"../../img/".$_FILES["imagennot3"]["name"]);
                               $imagen3 =  @$_FILES['imagennot3']['name'];

                         }

                 if(isset($_POST['update']) && $_POST['update'] == 'updateini')
                 {
                     

                    if ($novedad->hasErrores ())
                    {
                            $error = $novedad->getErrores();


                    }
                    else
                    {
                        $novedad->updateInicio($id, $boximage, $imagen1, $imagen2, $imagen3);
                        header("location: mostrarInicio.php");
                    }
                 }



}

   else
     {
             header ("location: ../index.php");
     }

      require_once '../view/editarInicio.tpl';

?>