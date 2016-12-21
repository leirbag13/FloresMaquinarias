<?php
session_start();
if (isset($_SESSION['user']))
{
            
                 require_once("../models/class_noticias.php");
                  
                 $id=$_GET["id"];


                 $noticia = new Noticias();
                 $vernot = $noticia->mostrarPoridNoticias($id);

                   $titulo = @$_POST["titulo"];
                   $subtitulo = @$_POST["subtitulo"];
                   $fecha = date("d/m/Y");
                   $cuerpo = @$_POST["cuerpo"];
                   $imagen1 = @$_FILES["imagennot1"];
                   $imagen1old = @$_POST["imagennot1old"];
                   $pdf = @$_FILES["pdf"];
                   $pdfold = @$_POST["pdfold"];


                   
                    
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


                       //pregnto si el usuario subio algun pdf si no subio me da error 4
                   if(@$_FILES['pdf']['error'] == 4)
                         {
                             // si sube una foto hago esto
                             $pdf = $pdfold;
                        //aca subo la foto con la funcion copy
                        


                        }
                         else
                             {
                               @copy($_FILES["pdf"]["tmp_name"],"../../upload-pdf/".$_FILES["pdf"]["name"]);
                               $pdf =  @$_FILES['pdf']['name'];
                              }

            
             

                 if(isset($_POST['update']) && $_POST['update'] == 'updatenot')
                 {
                        $noticia->setTitulo($titulo);
                        $noticia->setSubtitulo($subtitulo);
                        $noticia->setFuente($fuente);
                        $noticia->setCuerpo($cuerpo);


                    if ($noticia->hasErrores ())
                    {
                            $error = $noticia->getErrores();


                    }
                    else
                    {
                        $noticia->updateNoticias($id,$imagen1,$pdf);
                        header("location: mostrarNoticias.php");
                    }
                 }



}

   else
     {
             header ("location: ../index.php");
     }

      require_once '../view/editarNoticias.php';

?>