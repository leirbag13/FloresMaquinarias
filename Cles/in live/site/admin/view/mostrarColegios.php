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
                    <li><a href="../controller/mostrarInicio.php">Home</a></li>
                </ul>
            </div>
            <div class="item2">
                <img class="imgitem2" src="../images/bcontenido.png"/>
                <ul>
                    <li><a href="../controller/mostrarNosotros.php">Nosotros</a></li>
                    <li><a href="../controller/mostrarColegios.php">Colegios</a></li>
                    <li><a href="../controller/mostrarVideo.php">Videos</a></li>
                </ul>
            </div>
             <div class="item3">
                <img class="imgitem3" src="../images/bproductos.png"/>
                <ul>
                    <li><a href="../controller/mostrarRubro.php">Rubros</a></li>

                </ul>
            </div>
        </div>
        <!-- end menu1 -->

        <div id="sidebar">

        </div>

        <div id="contenido">

            <h1>Edici&oacute;n de Colegios</h1>
           <div id="categorias">
               <a class="mas" href="../controller/insertColegios.php">AGREGAR<img class="mas" border="0" src="../images/mas.png" alt="Agregar"/></a>
               <br/>
               <br/>

                <table border="1">
                    <tr>
                        <td><b>Colegios</b></td>                       
                        <td><b>Imagen1</b></td>
                        <td><b>Imagen2</b></td>
                        <td><b>Imagen3</b></td>
                        <td><b>Imagen4</b></td>
                        <td><b>Imagen5</b></td>
                        <td><b>Editar</b></td>
                        <td><b>Eliminar</b></td>
                    </tr>
                  <?php
                  for($i=0;$i<sizeof($ver);$i++)
                  {
                  ?>
                    <tr>
                        
                        <td><?php echo $ver[$i]["colegio"] ;?></td>
                       
                        
                          <!--mostrar si hay imagen 1-->
                         <?php
                        if($ver[$i]["image_1"] != "" )
                        {
                        ?>
                        <td><img width="54" height="55" src="../../img/<?php echo $ver[$i]["image_1"] ;?>"/></td>
                        <?php
                        }

                        else
                        {
                        ?>
                             <td><?php echo $ver[$i]["image_1"] ;?></td>
                        <?php
                        }
                        ?>

                         <!--mostrar si hay imagen 2-->
                              <?php
                        if($ver[$i]["image_2"] != "" )
                        {
                        ?>
                        <td><img width="54" height="55" src="../../img/<?php echo $ver[$i]["image_2"] ;?>"/></td>
                        <?php
                        }

                        else
                        {
                        ?>
                             <td><?php echo $ver[$i]["image_2"] ;?></td>
                        <?php
                        }
                        ?>

                       <!--mostrar si hay imagen 3-->
                              <?php
                        if($ver[$i]["image_3"] != "" )
                        {
                        ?>
                        <td><img width="54" height="55" src="../../img/<?php echo $ver[$i]["image_3"] ;?>"/></td>
                        <?php
                        }

                        else
                        {
                        ?>
                             <td><?php echo $ver[$i]["image_3"] ;?></td>
                        <?php
                        }
                        ?>
                        
                              <!--mostrar si hay imagen 4-->
                              <?php
                        if($ver[$i]["image_4"] != "" )
                        {
                        ?>
                        <td><img width="54" height="55" src="../../img/<?php echo $ver[$i]["image_4"] ;?>"/></td>
                        <?php
                        }

                        else
                        {
                        ?>
                             <td><?php echo $ver[$i]["image_4"] ;?></td>
                        <?php
                        }
                        ?>
                    
                              <!--mostrar si hay imagen 5-->
                              <?php
                        if($ver[$i]["image_5"] != "" )
                        {
                        ?>
                        <td><img width="54" height="55" src="../../img/<?php echo $ver[$i]["image_5"] ;?>"/></td>
                        <?php
                        }

                        else
                        {
                        ?>
                             <td><?php echo $ver[$i]["image_5"] ;?></td>
                        <?php
                        }
                        ?>
                  
                        <td aling="center"> <a href="editarColegios.php?id=<?php echo $ver[$i]['id'];?>"><img border="0" src="../images/editar.png" alt="Editar"/></a></td>
                        <td aling="center"><a href="deleteColegios.php?id=<?php echo $ver[$i]['id'];?>"><img border="0" src="../images/eliminar.png" alt="Eliminar"/></a></td>
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






