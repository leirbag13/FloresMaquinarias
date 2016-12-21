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

            <h1>Edici&oacute;n de productos y art&iacute;culos </h1>
           <div id="categorias">
               <a class="mas" href="../controller/insertProductos.php">AGREGAR<img class="mas" border="0" src="../images/mas.png" alt="Agregar"/></a>
               <br/>
               <br/>
               
                <table border="1">
                    <tr>
                        <td><b>Nombre</b></td>
                        <td><b>Descripcion</b></td>
                        <td><b>Categoria</b></td>
                        <td><b>SubCategoria</b></td>
                        <td><b>Marca</b></td>
                        <td><b>precio</b></td>
                        <td><b>Activo</b></td>
                        <td><b>Imagen</b></td>
                        <td><b>PDF</b></td>
                        <td><b>Editar</b></td>
                        <td><b>Eliminar</b></td>
                    </tr>
                  <?php
                  for($i=0;$i<sizeof($ver);$i++)
                  {
                  ?>
                    <tr>
                        <td><?php echo $ver[$i]["nombre"] ;?></td>
                        <td><?php echo $ver[$i]["descripcion"] ;?></td>
                        <td><?php echo $ver[$i]["categoria"] ;?></td>
                        <td><?php echo $ver[$i]["item"] ;?></td>
                        <td><?php echo $ver[$i]["marca"] ;?></td>
                        <td>$<?php echo $ver[$i]["precio"] ;?></td>
                        <td><?php echo $ver[$i]["activo"] ;?></td>

                        <!--//mostrar si hay imagen-->
                        <?php
                        if($ver[$i]["imagen"] != "" )
                        {
                        ?>
                        <td><img width="54" height="55" src="../../upload-images/<?php echo $ver[$i]["imagen"] ;?>"/></td>
                        <?php
                        }

                        else
                        {
                        ?>
                             <td><?php echo $ver[$i]["imagen"] ;?></td>
                        <?php
                        }
                        ?>

                        <!--// mostrar si hay pdf-->
                        <?php
                        if($ver[$i]["pdf"] != "" )
                        {
                        ?>
                        <td><a href="../../upload-pdf/<?php echo $ver[$i]["pdf"] ;?>" target="_black"><img src="../images/pdf.png"/></a></td>
                        <?php
                        }
                        
                        else
                        {
                        ?>
                             <td><?php echo $ver[$i]["pdf"] ;?></td>
                        <?php
                        }
                        ?>
                             
                        <td aling="center"> <a href="editarProductos.php?id=<?php echo $ver[$i]['id'];?>"><img border="0" src="../images/editar.png" alt="Editar"/></a></td>
                        <td aling="center"><a href="deleteProductos.php?id=<?php echo $ver[$i]['id'];?>"><img border="0" src="../images/eliminar.png" alt="Eliminar"/></a></td>
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






