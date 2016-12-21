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

          <h1>Modificar  Colegio</h1>

           <div id="categorias">
               <form action="" method="POST" enctype="multipart/form-data">
                  <table border="0">
                         <tr>
                                <td><p class="error"><?php echo @$error; ?></p></td>
                        </tr>
                        <tr>
                            <td><b>Colegios</b></td>
                            <td><input type="text" name="colegio" value="<?php  echo $ver[0]["colegio"]?>"/><span class="error">*</span></td>
                        </tr>

                   

                        <tr>
                            <td><b>Imagen1</b></td>
                            <td>
                                <input type="text" name="imagennot1old" value="<?php  echo $ver[0]["image_1"]?>"/>
                                <input type="file" name="imagennot1"/>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td></td>
                            <?php
                            if($ver[0]["image_1"])
                            {
                            ?>
                            <td><img width="200" height="200" src="../../img/<?php echo $ver[0]["image_1"] ?>"/></td>
                            <?php
                            }
                            ?>

                        </tr>

                          <tr><td></td></tr>

                        <tr>
                            <td><b>Imagen2</b></td>
                            <td>
                                <input type="text" name="imagennot2old" value="<?php  echo $ver[0]["image_2"]?>"/>
                                <input type="file" name="imagennot2"/>
                            </td>
                        </tr>
                          <tr><td></td></tr>
                        <tr>
                            <td></td>
                            <?php
                            if($ver[0]["image_2"])
                            {
                            ?>
                            <td><img width="200" height="200" src="../../img/<?php echo $ver[0]["image_2"] ?>"/></td>
                            <?php
                            }
                            ?>

                        </tr>

                          <tr><td></td></tr>

                        <tr>
                            <td><b>Imagen3</b></td>
                            <td>
                                <input type="text" name="imagennot3old" value="<?php  echo $ver[0]["image_3"]?>"/>
                                <input type="file" name="imagennot3"/>
                            </td>
                        </tr>
                           <tr><td></td></tr>
                        <tr>
                            <td></td>
                            <?php
                            if($ver[0]["image_3"])
                            {
                            ?>
                            <td><img width="200" height="200" src="../../img/<?php echo $ver[0]["image_3"] ?>"/></td>
                            <?php
                            }
                            ?>

                        </tr>
                           
                        <tr>
                            <td><b>Imagen4</b></td>
                            <td>
                                <input type="text" name="imagennot4old" value="<?php  echo $ver[0]["image_4"]?>"/>
                                <input type="file" name="imagennot4"/>
                            </td>
                        </tr>
                           <tr><td></td></tr>
                        <tr>
                            <td></td>
                            <?php
                            if($ver[0]["image_4"])
                            {
                            ?>
                            <td><img width="200" height="200" src="../../img/<?php echo $ver[0]["image_4"] ?>"/></td>
                            <?php
                            }
                            ?>

                        </tr>
                           
                           <tr>
                            <td><b>Imagen5</b></td>
                            <td>
                                <input type="text" name="imagennot5old" value="<?php  echo $ver[0]["image_5"]?>"/>
                                <input type="file" name="imagennot5"/>
                            </td>
                        </tr>
                           <tr><td></td></tr>
                        <tr>
                            <td></td>
                            <?php
                            if($ver[0]["image_5"])
                            {
                            ?>
                            <td><img width="200" height="200" src="../../img/<?php echo $ver[0]["image_5"] ?>"/></td>
                            <?php
                            }
                            ?>

                        </tr>

                       
                        <tr>
                            <td> <a href="javascript:history.back(1)">Volver Atr&aacute;s</a></td>
                           <td> <input type="submit" value="Modificar"/></td>
                           <td> <input name="update" type="hidden" value="updateColegio"/></td>
                        </tr>

                  </table>
               </form>
           </div>
        </div>
    </div>

</body>
</html>

