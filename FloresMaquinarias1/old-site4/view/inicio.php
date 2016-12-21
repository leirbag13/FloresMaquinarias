<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="stylesheet" href="../css/general.css" media="all">

        <link rel="stylesheet" href="../css/skin.css" media="all">

        <!--
          jQuery library
        -->
        <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>

        <!--
          jCarousel library
        -->
        <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
        <!--funciones-->
        <script type="text/javascript" src="js/functions.js"></script>

    </head>
    <body>

        <div id="c-header">

        </div>

        <div id="global">


            <div id="header">
                <div id="logo">
                    <a href="#"><img src="../images/logo.png"/></a>
                </div>

                <div id="navigator">
                    <ul>
                        <li><a href="/">INICIO</a></li>
                        <li><a href="controller/empresa.php">EMPRESA</a></li>
                        <li><a href="controller/servicios.php">SERVICIOS</a></li>
                        <li><a href="controller/ubicacion.php">UBICACIÓN</a></li>
                        <li><a href="controller/video.php">VIDEOS</a></li>
                        <li><a href="controller/contacto.php">CONTACTO</a></li>
                    </ul>
                </div>

            </div>


            <div id="sobre">
                <a href="#"><img src="../images/sobre.png"/></a>
            </div>

            <div id="banner-header">

                <div id="machine">

                </div>

                <div id="banner">

                </div>

                <div id="banner-footer-text">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took...</p>
                </div>
            </div>  

            <!--dinamic content-->
            <div id="content" style="background: url(../images/background-content-inicio.jpg) no-repeat;  width: 505px;">
                <p class="stitle">NOTICIAS Y NOVEDADES</p>
                <div id="wrap">
                    <ul id="mycarousel" class="jcarousel jcarousel-skin-tango">
                        <?php
                        for ($i = 0; $i < sizeof($vernot); $i++) {
                            ?>
                            <li class="news">
                                <img src="../../upload-images/<?php echo $vernot[$i]["imagen1"] ;?>" width="108" height="82" alt="" />
                               
                                <p class="title" style="margin-left: 135px;"><?php echo $vernot[$i]['titulo'];?></p>
                                <p class="date" style="margin-left: 135px;"><?php echo $vernot[$i]['subtitulo'];?></p>
                                <p class="text" style="margin-left: 135px;"><?php echo $vernot[$i]['cuerpo'];?></p>
                            </li>
                        
                    </ul>
                </div>
            </div>
            <!--fin dinamic content-->
            <div id="img-inicio">
               <a href="../../upload-pdf/<?php echo $vernot[0]["pdf"] ?>" target="_black"><img src="../images/inicio-recetario.png"/></a>
            </div>
    <?php
                        }
                        ?>
            <?php
            for ($i = 0; $i < sizeof($ver); $i++) {
                ?>
                <div class="slider">

                    <div class="categories<?php echo $i; ?>">


                        <p><a href="controller/maquinas.php"><?php echo $ver[$i]["categoria"]; ?></a></p>


                        <?php
                        $versub = $Menu->mostrarSubCategoria($ver[$i]["categoria"]);
                        for ($j = 0; $j < sizeof($versub); $j++) {
                            ?>
                            <div class="sub-categories">

                                <ul>

                                    <li><a href="controller/maquinas.php">&nbsp;<?php echo $versub[$j]["item"]; ?></a></li>


                                </ul>

                            </div>
                            <?php
                        }
                        ?>
                    </div>


                </div>


                <?php
            }
            ?>


            <div id="map">
                <a href="#"><img src="../images/encontranos-aca.png"/></a>
            </div>

        </div>

        <div id="footer">

        </div>

    </body>
</html>
