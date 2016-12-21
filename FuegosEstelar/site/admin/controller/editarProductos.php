<?php
session_start();
if (isset($_SESSION['user']))
{
                 require_once("../models/class_menu.php");
                 require_once("../models/class_producto.php");
                  //llamo a la clase menu para hacer los combo box
                   $Menu = new Menu();
                   $vercat = $Menu->mostrar();
                   $versubcat = $Menu->mostrarsubcategoria();

                   $id=$_GET["id"];
                 

                   $producto = new Producto();
                   $verpro = $producto->mostrarPoridProducto($id);

                   $nombre = @$_POST["nombre"];
                   $descripcion = @$_POST["descripcion"];
                   $categoria = @$_POST["categoria"];
                   $subcategoria = @$_POST["subcategoria"];
                   $marca = @$_POST["marca"];
                   $precio = @$_POST["precio"];
                   $imagen = @$_FILES["imagenprod"];
                   $imagenold = @$_POST["imgold"];
                   $pdf = @$_FILES["pdf"];
                   $pdfold = @$_POST["pdfold"];
                   $imagen2 = @$_FILES["imagenprod2"];
                   $imagenold2 = @$_POST["imgold2"];
                   $imagen3 = @$_FILES["imagenprod3"];
                   $imagenold3 = @$_POST["imgold3"];

                   //chequeo si esta activo el check
                   $estado = @$_POST["activo"];
                   if(isset ($estado))
                   {
                     $estado = "si";
                   }
                   else
                   {
                      $estado = "no";
                   }

                    //subo la foto
                      //pregnto si el usuario subio alguna foto si no subio me da error 4
                   if(@$_FILES['imagenprod']['error'] == 4)
                         {
                             // si sube una foto hago esto
                       $imagen = $imagenold;
                        
                         
                           //echo $_FILES["imagenprod"];
                        //aca subo la foto con la funcion copy
                       

                        }
                         else
                         {
                              @copy($_FILES["imagenprod"]["tmp_name"],"../../upload-images/".$_FILES["imagenprod"]["name"]);
                               $imagen =  @$_FILES['imagenprod']['name'];
                                
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



                                 //pregnto si el usuario subio alguna foto si no subio me da error 4
                   if(@$_FILES['imagenprod2']['error'] == 4)
                         {
                             // si sube una foto hago esto
                       $imagen2 = $imagenold2;


                           //echo $_FILES["imagenprod"];
                        //aca subo la foto con la funcion copy


                        }
                         else
                         {
                              @copy($_FILES["imagenprod2"]["tmp_name"],"../../upload-images/".$_FILES["imagenprod2"]["name"]);
                               $imagen2 =  @$_FILES['imagenprod2']['name'];

                         }


                            //pregnto si el usuario subio alguna foto si no subio me da error 4
                   if(@$_FILES['imagenprod3']['error'] == 4)
                         {
                             // si sube una foto hago esto
                       $imagen3 = $imagenold3;


                           //echo $_FILES["imagenprod"];
                        //aca subo la foto con la funcion copy


                        }
                         else
                         {
                              @copy($_FILES["imagenprod3"]["tmp_name"],"../../upload-images/".$_FILES["imagenprod3"]["name"]);
                               $imagen3 =  @$_FILES['imagenprod3']['name'];

                         }

                 if(isset($_POST['update']) && $_POST['update'] == 'updatepro')
                 {
                     
                        $producto->setNombre($nombre);
                        $producto->setDescripcion($descripcion);
                        $producto->setCategoria($categoria);
                        $producto->setItem($subcategoria);
                        $producto->setMarca($marca);
                        $producto->setPrecio($precio);
                        $producto->setEstado($estado);


                    if ($producto->hasErrores ())
                    {
                            $error = $producto->getErrores();


                    }
                    else
                    {
                        $producto->updateProducto($id,$imagen, $pdf,$imagen2,$imagen3);
                        header("location: mostrarProductos.php");
                    }
                 }



}

   else
     {
             header ("location: ../index.php");
     }

      require_once '../view/editarProductos.php';

?>