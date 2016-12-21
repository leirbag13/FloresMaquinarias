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

          <h1>Modificar Sub Categor&iacute;a</h1>

           <div id="categorias">
               <form action="" method="POST">
                  <table border="0">
                        <tr>
                             <td><p class="error"><?php echo @$error; ?></p></td>
                        </tr>
                        <tr>
                            <td><h3>Sub Categoria Nueva</h3></td>
                            <td><input type="text" name="subCategoria" value="<?php echo $ver[0]["item"] ?>"/><span class="error">*</span></td>
                            <td>Categoria Correspondiente</td>
                            <td>
                                <select name="categoria">
                                    <option><?php echo $ver[0]["categoria"] ;?></option>
                                 <?php
                                  for($i=0;$i<sizeof($vercategorias);$i++)
                                  {
                                  ?>

                                    <option><?php echo $vercategorias[$i]["categoria"] ;?></option>

                                <?php
                                  }
                                 ?>
                                  </select><span class="error">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td> <a href="javascript:history.back(1)">Volver Atr&aacute;s</a></td>
                           <td> 
                               <input type="submit" value="Modificar"/>
                                <input name="action" type="hidden" value="update"/>
                           </td>
                        </tr>

                  </table>
               </form>
           </div>
        </div>
    </div>

</body>
</html>

