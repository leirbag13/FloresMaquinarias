<?php
session_start();
if (isset($_SESSION['user']))
{
            
                 require_once("../models/class_colegios.php");
                  
                 $id=$_GET["id"];


                 $noticia = new Colegio();
                 $ver = $noticia->mostrarPoridColegios($id);

                   $colegio = @$_POST["colegio"];
                   $imagen1 = @$_FILES["imagennot1"];
                   $imagen1old = @$_POST["imagennot1old"];
                   $imagen2 = @$_FILES["imagennot2"];
                   $imagen2old = @$_POST["imagennot2old"];
                   $imagen3 = @$_FILES["imagennot3"];
                   $imagen3old = @$_POST["imagennot3old"];
                   $imagen4 = @$_FILES["imagennot4"];
                   $imagen4old = @$_POST["imagennot4old"];
                   $imagen5 = @$_FILES["imagennot5"];
                   $imagen5old = @$_POST["imagennot5old"];

                   
                    
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
                         
                         //pregnto si el usuario subio alguna imagen4 si no subio me da error 4
                    if(@$_FILES['imagennot4']['error'] == 4)
                         {
                             // si sube una foto hago esto
                       $imagen4 = $imagen4old;

                        }
                         else
                         {
                              @copy($_FILES["imagennot4"]["tmp_name"],"../../img/".$_FILES["imagennot4"]["name"]);
                               $imagen4 =  @$_FILES['imagennot4']['name'];

                         }
                         
                         //pregnto si el usuario subio alguna imagen5 si no subio me da error 4
                    if(@$_FILES['imagennot5']['error'] == 4)
                         {
                             // si sube una foto hago esto
                       $imagen5 = $imagen5old;

                        }
                         else
                         {
                              @copy($_FILES["imagennot5"]["tmp_name"],"../../img/".$_FILES["imagennot5"]["name"]);
                               $imagen5 =  @$_FILES['imagennot5']['name'];

                         }

                 if(isset($_POST['update']) && $_POST['update'] == 'updateColegio')
                 {
                       

                    if ($noticia->hasErrores ())
                    {
                            $error = $noticia->getErrores();
                    }
                    else
                    {
                        $noticia->updateColegios($id,$colegio,$imagen1,$imagen2,$imagen3,$imagen4,$imagen5);
                        header("location: mostrarColegios.php");
                       // echo $noticia->updateColegios($colegio,$imagen1,$imagen2,$imagen3,$imagen4,$imagen5);
                    }
                 }



}

   else
     {
             header ("location: ../index.php");
     }

      require_once '../view/editarColegios.php';

?>