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
                    <li><a href="../controller/mostrarNoticias.php">Inicio</a></li>
                    <li><a href="../controller/mostrarNovedades.php">Empresa</a></li>
                    <li><a href="../controller/mostrarServicios.php">Servicios</a></li>
                    <li><a href="../controller/mostrarVideos.php">Videos</a></li>
                </ul>
            </div>
             <div class="item3">
                <img class="imgitem3" src="../images/bproductos.png"/>
                <ul>
                    <li><a href="../controller/mostrarProductos.php">Listar</a></li>
                  

                </ul>
            </div>
        </div>
        <!-- end menu1 -->

        <div id="sidebar">

        </div>

        <div id="contenido">

          <h1>Modificar  Noticia</h1>

           <div id="categorias">
               <form action="" method="POST" enctype="multipart/form-data">
                  <table border="0">
                         <tr>
                                <td><p class="error"><?php echo @$error; ?></p></td>
                        </tr>
                        <tr>
                            <td><b>titulo</b></td>
                            <td><input type="text" name="titulo" value="<?php  echo $vernot[0]["titulo"]?>"/><span class="error">*</span></td>
                        </tr>

                        <tr><td></td></tr>

                        <tr>
                            <td><b>subtitulo</b></td>
                            <td><input type="text" name="subtitulo" value="<?php  echo $vernot[0]["subtitulo"]?>"/></td>
                        </tr>

                          <tr><td></td></tr>

                         <tr><td></td></tr>

                        <tr>
                            <td><b>cuerpo</b></td>
                            <td><textarea rows="10" cols="50" name="cuerpo"><?php  echo $vernot[0]["cuerpo"]?></textarea><span class="error">*</span></td>
                        </tr>

                        <tr><td></td></tr>

                        <tr>
                            <td><b>Imagen1</b></td>
                            <td>
                                <input type="text" name="imagennot1old" value="<?php  echo $vernot[0]["imagen1"]?>"/>
                                <input type="file" name="imagennot1"/>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td></td>
                            <?php
                            if($vernot[0]["imagen1"])
                            {
                            ?>
                            <td><img width="200" height="200" src="../../upload-images/<?php echo $vernot[0]["imagen1"] ?>"/></td>
                            <?php
                            }
                            ?>

                        </tr>
                        
                        <tr>
                            <td><b>PDF</b></td>
                            <td><input type="text" name="pdfold" value="<?php echo $vernot[0]["pdf"] ?>"/><input type="file" name="pdf" value="<?php echo $vernot[0]["pdf"] ?>"/></td>
                        </tr>
                        <tr>
                            <td></td>
                             <?php
                            if($vernot[0]["pdf"])
                            {
                            ?>
                            <td><a href="../../upload-pdf/<?php echo $vernot[0]["pdf"] ?>" target="_black"><img src="../images/pdf.png"/></a></td>
                            <?php
                            }
                            ?>
                            
                        </tr>


                          <tr><td></td></tr>

                         <tr><td></td></tr>
                          <tr><td></td></tr>
                           <tr><td></td></tr>
                        <tr>
                            <td> <a href="javascript:history.back(1)">Volver Atr&aacute;s</a></td>
                           <td> <input type="submit" value="Modificar"/></td>
                           <td> <input name="update" type="hidden" value="updatenot"/></td>
                        </tr>

                  </table>
               </form>
           </div>
        </div>
    </div>

</body>
</html>

