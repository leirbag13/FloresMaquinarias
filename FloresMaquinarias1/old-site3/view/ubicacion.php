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
            
            <div id="banner">
                
            </div>
            
            <div id="banner-footer-text">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took...</p>
            </div>
        </div>  
        
         <!--dinamic content-->
         
        <div id="content" style="margin-left: 369px;  *margin-left: 245px;">
            <p class="stitle">NOS ENCONTRAMOS EN:</p>
            <div class="content-text">
			<iframe width="665" height="310" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Padre+Lozano+409,+C%C3%B3rdoba&amp;aq=0&amp;oq=Padre+Lozano+409&amp;sll=-38.341656,-63.28125&amp;sspn=57.821182,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=Padre+Lozano+409,+C%C3%B3rdoba&amp;ll=-31.410748,-64.218367&amp;spn=0.007829,0.016512&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.ar/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Padre+Lozano+409,+C%C3%B3rdoba&amp;aq=0&amp;oq=Padre+Lozano+409&amp;sll=-38.341656,-63.28125&amp;sspn=57.821182,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=Padre+Lozano+409,+C%C3%B3rdoba&amp;ll=-31.410748,-64.218367&amp;spn=0.007829,0.016512&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
                <!--<img width="665" height="310" src="../images/map.JPG"/>-->
            </div>
        </div>
           
         <!--fin dinamic content-->
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

                                    <li><a href="maquinas.php">&nbsp;<?php echo $versub[$j]["item"]; ?></a></li>


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
            <a href="#"><img  src="../images/encontranos-aca.png"/></a>
        </div>

    </div>
      
    <div id="footer">

    </div>
        
  </body>
</html>
