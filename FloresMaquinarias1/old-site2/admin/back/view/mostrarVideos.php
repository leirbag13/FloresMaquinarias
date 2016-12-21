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

                </ul>
            </div>
        </div>
        <!-- end menu1 -->

        <div id="sidebar">

        </div>

        <div id="contenido">

          <h1>Edici&oacute;n de Videos</h1>

           <div id="categorias">
                <a class="mas" href="../controller/insertVideos.php">AGREGAR<img class="mas" border="0" src="../images/mas.png" alt="Agregar"/></a>
               <br/>
               <br/>

               <div class="videos">
                   
                       
              
                <table class="tablevideos"  border="1">
                     <?php
                  for($i=0;$i<sizeof($ver);$i++)
                  {
                  ?>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td> <h2> <?php echo $ver[$i]["titulo"]?></h2></td>
                        <td>TITULO</td>

                    </tr>
                     <tr>
                   
                        <td>  <h3><?php echo $ver[$i]["subtitulo"]?></h3></td>
                        <td>SUBTITULO</td>

                    </tr>
                   
                     
                    <tr>
                        <td>VIDEO</td>
                        <td>DESCRIPCI&Oacute;N</td>

                    </tr>
                    <tr>
                        <td><?php echo $ver[$i]["video"]?></td>
                        <td><?php echo $ver[$i]["descripcion"]?></td>
                        
                    </tr>
                    <tr>
                        <td aling="center"> <a href="editarVideos.php?id=<?php echo $ver[$i]['id'];?>"><img border="0" src="../images/editar.png" alt="Editar"/></a>&nbsp;<b>EDITAR</b></td>
                        <td aling="center"><a href="deleteVideos.php?id=<?php echo $ver[$i]['id'];?>"><img border="0" src="../images/eliminar.png" alt="Eliminar"/></a>&nbsp;<b>ELIMINAR</b></td>
                    </tr>
                    <?php
                     }
                    ?>
                </table>
              </div>
           </div>
        </div>
    </div>

</body>
</html>






