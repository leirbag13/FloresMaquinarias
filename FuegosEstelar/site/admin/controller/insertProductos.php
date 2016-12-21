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

   $nombre = @$_POST["nombre"];
   $descripcion = @$_POST["descripcion"];
   $categoria = @$_POST["categoria"];
   $subcategoria = @$_POST["subcategoria"];
   $marca = @$_POST["marca"];
   $precio = @$_POST["precio"];
   $imagen = @$_FILES["imagenprod"];
   $pdf = @$_FILES["pdf"];
   $imagen2 = @$_FILES["imagenprod2"];
   $imagen3 = @$_FILES["imagenprod3"];
   $estado = @$_POST["activo"];
       //seteo el estado en si o no (activo)
         if(isset ($estado))
           {
             $estado = "si";
           }
           else
           {
              $estado = "no";
           }

    //subo la foto
   if(isset($imagen))
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        @copy($_FILES["imagenprod"]["tmp_name"],"../../upload-images/".$_FILES["imagenprod"]["name"]);
        $imagen =  $_FILES['imagenprod']['name'];
      
        }
         else
             {
               $imagen = "--";
             }


   //subo el pdf
   if(isset($pdf))
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        @copy($_FILES["pdf"]["tmp_name"],"../../upload-pdf/".$_FILES["pdf"]["name"]);
        $pdf =  @$_FILES['pdf']['name'];
      

        }
         else
             {
               $pdf = "--";
             }

       if(isset($imagen2))
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        @copy($_FILES["imagenprod2"]["tmp_name"],"../../upload-images/".$_FILES["imagenprod2"]["name"]);
        $imagen2 =  @$_FILES['imagenprod2']['name'];

        }
         else
             {
               $imagen2 = "--";
             }

        if(isset($imagen3))
         {
             // si sube una foto hago esto

        //aca subo la foto con la funcion copy
        @copy($_FILES["imagenprod3"]["tmp_name"],"../../upload-images/".$_FILES["imagenprod3"]["name"]);
        $imagen3 =  @$_FILES['imagenprod3']['name'];

        }
         else
             {
               $imagen3 = "--";
             }



   
	if (isset($_POST['insert']) && $_POST['insert'] == 'insertpro')
	{

		$producto = new Producto();
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setCategoria($categoria);
                $producto->setItem($subcategoria);
                $producto->setMarca($marca);
                $producto->setPrecio($precio);
                $producto->setEstado($estado);
		

		if (! $producto->hasErrores())
		{
                    $producto->insertProducto($imagen, $pdf,$imagen2,$imagen3);
                    header ("location: mostrarProductos.php");
		}
		else
		{
			 $error = $producto->getErrores();

		}
	}



}

   else
     {
             header ("location: ../index.php");
     }

    require_once("../view/insertProductos.php");

?>
