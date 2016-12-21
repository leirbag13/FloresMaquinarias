<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

   <link rel="stylesheet" href="../css/general.css" media="all">
    
    <link rel="stylesheet" href="../css/video.css" media="all">
    
    <!--
      jQuery library
    -->
    <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>

    <!--
      jCarousel library
    -->
    <script type="text/javascript" src="../js/jquery.jcarousel.min.js"></script>
    <!--funciones-->

    <script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel').jcarousel();
    });

    </script>
  
  </head>
  <body>
      
         
    <div id="global">
        
      
        <div id="fireworks">
            <div class="image">
                <img src="../images/fireworks-video.jpg"/>
            </div>
            
            <div id="logo">
                <a href="#"><img src="../images/logo.png"/></a>
            </div>
        </div>
          
        <div id="menu">
                <div class="item"><a href="/"  onmouseover="document.inicio.src='../images/bacground-butoon-inicio2.png'"
                                          onmouseout="document.inicio.src='../images/bacground-butoon-inicio.png'">
                        <img name="inicio" src="../images/bacground-butoon-inicio.png"/></a></div>
            
                <div class="item"><a href="empresa.php" onmouseover="document.empresa.src='../images/bacground-butoon-empresa2.png'"
                                          onmouseout="document.empresa.src='../images/bacground-butoon-empresa.png'">
                        <img name="empresa" src="../images/bacground-butoon-empresa.png"/></a></div>
            
                <div class="item"><a href="producto.php" onmouseover="document.producto.src='../images/bacground-butoon-producto2.png'"
                                          onmouseout="document.producto.src='../images/bacground-butoon-producto.png'">
                        <img name="producto" src="../images/bacground-butoon-producto.png"/></a></div>
            
                <div class="item"><a href="servicios.php" onmouseover="document.servicios.src='../images/bacground-butoon-servicios2.png'"
                                          onmouseout="document.servicios.src='../images/bacground-butoon-servicios.png'">
                        <img name="servicios" src="../images/bacground-butoon-servicios.png"/></a></div>
            
                <div class="item"><a href="video.php" onmouseover="document.videos.src='../images/bacground-butoon-videos2.png'"
                                          onmouseout="document.videos.src='../images/bacground-butoon-videos2.png'">
                        <img name="videos" src="../images/bacground-butoon-videos2.png"/></a></div>
            
                <div class="item"><a href="precio.php" onmouseover="document.precios.src='../images/bacground-butoon-precios2.png'"
                                          onmouseout="document.precios.src='../images/bacground-butoon-precios.png'">
                        <img name="precios" src="../images/bacground-butoon-precios.png"/></a></div>
            
                <div class="item"><a href="contacto.php" onmouseover="document.contactos.src='../images/bacground-butoon-contactos2.png'"
                                          onmouseout="document.contactos.src='../images/bacground-butoon-contactos.png'">
                        <img name="contactos" src="../images/bacground-butoon-contactos.png"/></a></div>
            
        </div>
        
        
        <div id="content">
             <p class="stitle" style="width: 270px; ">Fuegos artificiales STELAR en acción.</p>
             
             <!--<div id="video">
                 <img src="../images/video-test.png"/>
             </div>-->
             
               <div id="wrap">
                  <ul id="mycarousel" class="jcarousel-skin-tango">
                        <?php
                          for($i=0;$i<sizeof($vid);$i++)
                          {
                          ?>
                        <li> <?php echo $vid[$i]["video"] ;?></li>
                   
                    
                           <?php
                           }
                           ?>

                  </ul>

                </div>
        </div>
        
        
        
       
        
        
       <div id="footer">
            <span>FUEGOS ARTIFICIALES ESTELAR - CÓRDOBA - ARGENTINA - GÓNGORA  1010 - TEL 54 9 0351 4114259 - CEL  156 647700 / 155 299616 E-MAIL: fuegos_estelar@hotmail.com</span> 
        </div>


    </div>
        
  </body>
</html>
