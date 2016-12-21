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
        jQuery galeri riff (galeria de imagenes)
        -->
        <link rel="stylesheet" href="../css/basic.css" type="text/css" />
        <link rel="stylesheet" href="../css/galleriffic-2.css" type="text/css" />
        <script type="text/javascript" src="../js/jquery-1.3.2.js"></script>
        <script type="text/javascript" src="../js/jquery.galleriffic.js"></script>
        <script type="text/javascript" src="../js/jquery.opacityrollover.js"></script>
        <!-- We only want the thunbnails to display when javascript is disabled -->
        <script type="text/javascript">
            document.write('<style>.noscript { display: none; }</style>');
        </script>

        <!--script de la galeria-->
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                // We only want these styles applied when javascript is enabled
				
                $('div.content').css('display', 'block');

                // Initially set opacity on thumbs and add
                // additional styling for hover effect on thumbs
                var onMouseOutOpacity = 0.67;
                $('#thumbs ul.thumbs li').opacityrollover({
                    mouseOutOpacity:   onMouseOutOpacity,
                    mouseOverOpacity:  1.0,
                    fadeSpeed:         'fast',
                    exemptionSelector: '.selected'
                });
				
                // Initialize Advanced Galleriffic Gallery
                var gallery = $('#thumbs').galleriffic({
                    delay:                     2500,
                    numThumbs:                 9,
                    preloadAhead:              10,
                    enableTopPager:            false,
                    enableBottomPager:         true,
                    maxPagesToShow:            7,
                    imageContainerSel:         '#slideshow',
                    controlsContainerSel:      '#controls',
                    captionContainerSel:       '#caption',
                    loadingContainerSel:       '#loading',
                    renderSSControls:          true,
                    renderNavControls:         true,
                    playLinkText:              'Play Slideshow',
                    pauseLinkText:             'Pause Slideshow',
                    prevLinkText:              '&lsaquo; Previous Photo',
                    nextLinkText:              'Next Photo &rsaquo;',
                    nextPageLinkText:          'Next &rsaquo;',
                    prevPageLinkText:          '&lsaquo; Prev',
                    enableHistory:             false,
                    autoStart:                 false,
                    syncTransitions:           true,
                    defaultTransitionDuration: 900,
                    onSlideChange:             function(prevIndex, nextIndex) {
                        // 'this' refers to the gallery, which is an extension of $('#thumbs')
                        this.find('ul.thumbs').children()
                        .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
                        .eq(nextIndex).fadeTo('fast', 1.0);
                    },
                    onPageTransitionOut:       function(callback) {
                        this.fadeTo('fast', 0.0, callback);
                    },
                    onPageTransitionIn:        function() {
                        this.fadeTo('fast', 1.0);
                    }
                });
            });
        </script>

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
                        <li><a href="empresa.php">EMPRESA</a></li>
                        <li><a href="servicios.php">SERVICIOS</a></li>
                        <li><a href="ubicacion.php">UBICACIÓN</a></li>
                        <li><a href="video.php">VIDEOS</a></li>
                        <li><a href="contacto.php">CONTACTO</a></li>
                    </ul>
                </div>

            </div>


            <div id="sobre">
                <a href="#"><img src="../images/sobre.png"/></a>
            </div>

            <div id="banner-header">

                <div id="machine">

                </div>
            </div>  


            <div id="product">

                <div id="product-head">
                    <p class="product-tit">MÁQUINAS NUEVAS</p>
                    <p class="product-sub-tit"><i>BATIDORAS  RÁPIDA</i></p>
                </div>

                <div class="product-men">
                    <ul>
                        <li><a href="#">BATIDORAS  RÁPIDA</a></li>
                        <li><a href="#">BATIDORAS  RÁPIDA</a></li>
                    </ul>
                </div>


                <div id="thumbs" class="navigation">
                    <ul class="thumbs noscript">

                        <?php
                        for ($i = 0; $i < sizeof($verma); $i++) {
                            ?>
                            <li>
                                <a class="thumb" name="leaf" href="#" title="">
                                    <img style="width: 239px; height: 185px; margin-left: -2px; margin-top: -2px;" src="../upload-images/<?php echo $verma[$i]["imagen"] ;?>" alt="Title #0" />

                                    <div id="description-machine">
                                        <div id="tex-dexc">
                                            <span style="margin-top: 1px"><?php echo $verma[$i]["nombre"]; ?></span>
                                            <span style="margin-top: 14px"><?php echo $verma[$i]["marca"]; ?></span>
                                            <span style="margin-top: 27px"><?php echo $verma[$i]["categoria"]; ?></span>
                                        </div>
                                        <div id="tex-price">                                                                       
                                            <span><?php echo $verma[$i]["precio"]; ?></span>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <?php
                        }
                        ?>

                    </ul>
                </div>


            </div>

            <?php
            for ($i = 0; $i < sizeof($ver); $i++) {
                ?>
                <div class="slider">

                    <div class="categories">


                        <p><a href="maquinas.php"><?php echo $ver[$i]["categoria"]; ?></a></p>


                        <?php
                        $versub = $Menu->mostrarSubCategoria($ver[$i]["categoria"]);
                        for ($j = 0; $j < sizeof($versub); $j++) {
                            ?>
                            <div class="sub-categories">

                                <ul>

                                    <li><a href="#">&nbsp;<?php echo $versub[$j]["item"]; ?></a></li>


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
