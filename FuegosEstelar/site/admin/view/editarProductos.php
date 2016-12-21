<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Panel Control</title>

<link rel="stylesheet" href="../css/my-acount.css" media="all"/>
<link rel="stylesheet" href="../css/categorias.css" media="all"/>
<!--[if IE ]>
<link rel="stylesheet" href="css/estilo_index_ie8.css" media="all"/>
<![endif]-->

<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/functions.js"></script>
</head>

<body>
    <div id="global">

        <div id="header">

        </div>

        <div id="menu">
            <div class="item">
                <img class="imgitem" src="../images/binicio.png"/>
                <ul>
                    <li><a href="../controller/my-acount.php">Inicio</a></li>
                    <li><a href="../controller/log-out.php">Log Out</a></li>
                </ul>
            </div>
            <div class="item1">
                <img class="imgitem1" src="../images/bmenu.png"/>
                <ul>
                    <li><a href="../controller/mostrarCategorias.php">Categorias</a></li>
                    <li><a href="../controller/mostrarSubCategoria.php">Sub Categorias</a></li>
                </ul>
            </div>
            <div class="item2">
                <img class="imgitem2" src="../images/bcontenido.png"/>
                <ul>
                    <li><a href="../controller/mostrarNoticias.php">Noticias</a></li>
                    <li><a href="../controller/mostrarNovedades.php">Novedades</a></li>
                    <li><a href="../controller/mostrarVideos.php">Videos</a></li>
                </ul>
            </div>
             <div class="item3">
                <img class="imgitem3" src="../images/bproductos.png"/>
                <ul>
                    <li><a href="../controller/mostrarProductos.php">Listar</a></li>
                    <li><a href="../controller/mostrarPrecios.php">Precios</a></li>
                
                </ul>
            </div>
        </div>
        <!-- end menu1 -->

        <div id="sidebar">

        </div>

        <div id="contenido">

          <h1>Modificar Producto</h1>

           <div id="categorias">
               <form action="" method="POST" enctype="multipart/form-data">
                  <table border="0">
                        <tr>
                             <td><p class="error"><?php echo @$error; ?></p></td>
                        </tr>

                        <tr>
                            <td><b>Nombre</b></td>
                            <td><input type="text" name="nombre" value="<?php echo $verpro[0]["nombre"] ?>"/><span class="error">*</span></td>
                        </tr>

                        <tr><td></td></tr>

                        <tr>
                            <td><b>Descripcion</b></td>
                            <td><textarea rows="10" cols="50" name="descripcion" ><?php echo $verpro[0]["descripcion"] ?></textarea></td>
                        </tr>

                        <tr><td></td></tr>

                        <tr>
                            <td><b>Categoria</b></td>
                            <td>
                                <select name="categoria">
                                    <option><?php echo $verpro[0]["categoria"] ?></option>
                                  <?php
                                  for($i=0;$i<sizeof($vercat);$i++)
                                  {
                                  ?>
                                    <option><?php echo $vercat[$i]['categoria'] ?></option>
                                  <?php
                                  }
                                  ?>
                                </select><span class="error">*</span>
                            </td>
                        </tr>

                        <tr><td></td></tr>

                         <tr>
                            <td><b>Sub categoria</b></td>
                            <td>
                                <select name="subcategoria">
                                    <option><?php echo $verpro[0]["item"] ?></option>
                                  <?php
                                  for($i=0;$i<sizeof($versubcat);$i++)
                                  {
                                  ?>
                                    <option><?php echo $versubcat[$i]['item'] ?></option>
                                  <?php
                                  }
                                  ?>
                                </select>
                            </td>
                        </tr>

                        <tr><td></td></tr>

                         <tr>
                            <td><b>Marca</b></td>
                            <td><input type="text" name="marca" value="<?php echo $verpro[0]["marca"] ?>"/></td>
                        </tr>

                        <tr><td></td></tr>

                         <tr>
                            <td><b>precio</b></td>
                            <td>$<input type="text" name="precio"  size="5" value="<?php echo $verpro[0]["precio"] ?>"/></td>
                        </tr>

                          <tr>
                            <td><b>Activo</b></td>
                            <?php
                            if($verpro[0]["activo"] == "si")
                            {
                                $check = "checked"

                            ?>
                            <td><input type="checkbox" name="activo" <?php echo $check ?> /></td>
                            <?php
                            }
                            ?>
                            <?php
                            if($verpro[0]["activo"] == "no")
                            {
                            ?>
                            <td><input type="checkbox" name="activo" /></td>
                            <?php
                            }
                            ?>
                            
                        </tr>

                        <tr><td></td></tr>

                        <tr>
                            <td><b>Imagen</b></td>
                            <td><input type="text" name="imgold" value="<?php echo $verpro[0]["imagen"] ?>"/>
                                <input type="file" name="imagenprod" value="<?php echo $verpro[0]["imagen"] ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <?php
                            if($verpro[0]["imagen"])
                            {
                            ?>
                            <td><img width="200" height="200" src="../../upload-images/<?php echo $verpro[0]["imagen"] ?>"/></td>
                            <?php
                            }
                            ?>
                            
                        </tr>

                          <tr><td></td></tr>

                        <tr>
                            <td><b>PDF</b></td>
                            <td><input type="text" name="pdfold" value="<?php echo $verpro[0]["pdf"] ?>"/><input type="file" name="pdf" value="<?php echo $verpro[0]["pdf"] ?>"/></td>
                        </tr>
                        <tr>
                            <td></td>
                             <?php
                            if($verpro[0]["pdf"])
                            {
                            ?>
                            <td><a href="../../upload-pdf/<?php echo $verpro[0]["pdf"] ?>" target="_black"><img src="../images/pdf.png"/></a></td>
                            <?php
                            }
                            ?>
                            
                        </tr>




                         <tr><td></td></tr>

                        <tr>
                            <td><b>Imagen2</b></td>
                            <td><input type="text" name="imgold2" value="<?php echo $verpro[0]["imagen2"] ?>"/>
                                <input type="file" name="imagenprod2" value="<?php echo $verpro[0]["imagen2"] ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <?php
                            if($verpro[0]["imagen2"])
                            {
                            ?>
                            <td><img width="200" height="200" src="../../upload-images/<?php echo $verpro[0]["imagen2"] ?>"/></td>
                            <?php
                            }
                            ?>

                        </tr>


                          <tr><td></td></tr>

                        <tr>
                            <td><b>Imagen3</b></td>
                            <td><input type="text" name="imgold3" value="<?php echo $verpro[0]["imagen3"] ?>"/>
                                <input type="file" name="imagenprod3" value="<?php echo $verpro[0]["imagen3"] ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <?php
                            if($verpro[0]["imagen3"])
                            {
                            ?>
                            <td><img width="200" height="200" src="../../upload-images/<?php echo $verpro[0]["imagen3"] ?>"/></td>
                            <?php
                            }
                            ?>

                        </tr>
                         <tr><td></td></tr>
                          <tr><td></td></tr>
                           <tr><td></td></tr>
                        <tr>
                            <td> <a href="javascript:history.back(1)">Volver Atr&aacute;s</a></td>
                           <td> <input type="submit" value="Modificar"/></td>
                           <td> <input name="update" type="hidden" value="updatepro"/></td>
                        </tr>

                  </table>
               </form>
           </div>
        </div>
    </div>

</body>
</html>

