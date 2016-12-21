<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

            <h1>Edici&oacute;n de Novedades</h1>
           <div id="categorias">
               <a class="mas" href="../controller/insertNovedades.php">AGREGAR<img class="mas" border="0" src="../images/mas.png" alt="Agregar"/></a>
               <br/>
               <br/>

                <table border="1">
                    <tr>
                        <td><b>titulo</b></td>
                        <td><b>cuerpo</b></td>
                        <td><b>Imagen1</b></td>
                        <td><b>Editar</b></td>
                        <td><b>Eliminar</b></td>
                    </tr>
                  <?php
                  for($i=0;$i<sizeof($vernov);$i++)
                  {
                  ?>
                    <tr>
                        <td><?php echo $vernov[$i]["titulo"] ;?></td>
                        <td><?php echo $vernov[$i]["cuerpo"] ;?></td>

                          <!--mostrar si hay imagen 1-->
                         <?php
                        if($vernov[$i]["imagen1"] != "" )
                        {
                        ?>
                        <td><img width="54" height="55" src="../../upload-images/<?php echo $vernov[$i]["imagen1"] ;?>"/></td>
                        <?php
                        }

                        else
                        {
                        ?>
                             <td><?php echo $vernov[$i]["imagen1"] ;?></td>
                        <?php
                        }
                        ?>

                        <td aling="center"> <a href="editarNovedades.php?id=<?php echo $vernov[$i]['id'];?>"><img border="0" src="../images/editar.png" alt="Editar"/></a></td>
                        <td aling="center"><a href="deleteNovedades.php?id=<?php echo $vernov[$i]['id'];?>"><img border="0" src="../images/eliminar.png" alt="Eliminar"/></a></td>
                    </tr>

                   <?php
                  }
                   ?>
                </table>
           </div>
        </div>
    </div>

</body>
</html>






