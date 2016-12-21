<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

   <link rel="stylesheet" href="../css/general.css" media="all">
    
    <link rel="stylesheet" href="../css/precio.css" media="all">
    
    <!--
      jQuery library
    -->
    <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>

    <!--
      jCarousel library
    -->
    <script type="text/javascript" src="../js/jquery.jcarousel.min.js"></script>
    <!--funciones-->
    <script type="text/javascript" src="../js/functions.js"></script>

  
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
                                          onmouseout="document.videos.src='../images/bacground-butoon-videos.png'">
                        <img name="videos" src="../images/bacground-butoon-videos.png"/></a></div>
            
                <div class="item"><a href="precio.php" onmouseover="document.precios.src='../images/bacground-butoon-precios2.png'"
                                          onmouseout="document.precios.src='../images/bacground-butoon-precios2.png'">
                        <img name="precios" src="../images/bacground-butoon-precios2.png"/></a></div>
            
                <div class="item"><a href="contacto.php" onmouseover="document.contactos.src='../images/bacground-butoon-contactos2.png'"
                                          onmouseout="document.contactos.src='../images/bacground-butoon-contactos.png'">
                        <img name="contactos" src="../images/bacground-butoon-contactos.png"/></a></div>
            
        </div>
        
        
        <div id="content-price">
             <p class="stitle">Lista de precios</p>
                <div id="wrap">
                  <ul id="mycarousel" class="jcarousel jcarousel-skin-tango">
                    <li class="news">
                        
                        <table>
                            <tr>
                                <td style="background: #66FFFF; text-align: center; font-family: arial; font-size: 13px;"><b>Artículo</b></td>
                                <td style="background: #66FFFF; text-align: center; font-family: arial; font-size: 13px;"><b>Descripción</b></td>
                                <td style="background: #66FFFF; text-align: center; font-family: arial; font-size: 13px;"><b>Precio unidad</b></td>
                                <td style="background: #66FFFF; text-align: center; font-family: arial; font-size: 13px;"><b>Cont display</b></td>
                                <td style="background: #66FFFF; text-align: center; font-family: arial; font-size: 13px;"><b>Precio display</b></td>
                                <td style="background: #66FFFF; text-align: center; font-family: arial; font-size: 13px;"><b>Cont del bulto</b></td>
                                <td style="background: #66FFFF; text-align: center; font-family: arial; font-size: 13px;"><b>Precio del bulto</b></td>
                                <td style="background: #66FFFF; text-align: center; font-family: arial; font-size: 13px;"><b>Sugerido al publico</b></td>
                                
                            </tr>
                            
                             
                           <!-- <tr>
                                <td  colspan="8" style="background: #FF6600; text-align: left; font-family: arial; font-size: 10px;"><b><?php echo $theprice[0]["articulo"] ;?></b></td>
 
                            </tr>-->
                            
                            <!--dinamic td's-->
                            <?php
                              for($i=0;$i<sizeof($theprice);$i++)
                              {
                              ?>
                            <tr>
                                <td style="background: #3366CC; text-align: center; color: #FFFFFF; font-family: arial; font-size: 11px;"><b><?php echo $theprice[$i]["articulo"] ;?></b></td>
                                <td style="background: #3366CC; text-align: center; color: #FFFFFF; font-family: arial; font-size: 11px;"><b><?php echo $theprice[$i]["descripcion"] ;?></b></td>
                                <td style="background: #3366CC; text-align: center; color: #FFFFFF; font-family: arial; font-size: 11px;"><b><?php echo $theprice[$i]["precio_unidad"] ;?></b></td>
                                <td style="background: #3366CC; text-align: center; color: #FFFFFF; font-family: arial; font-size: 11px;"><b><?php echo $theprice[$i]["cont_display"] ;?></b></td>
                                <td style="background: #3366CC; text-align: center; color: #FFFFFF; font-family: arial; font-size: 11px;"><b><?php echo $theprice[$i]["precio_display"] ;?></b></td>
                                <td style="background: #3366CC; text-align: center; color: #FFFFFF; font-family: arial; font-size: 11px;"><b><?php echo $theprice[$i]["cont_del_bulto"] ;?></b></td>
                                <td style="background: #3366CC; text-align: center; color: #FFFFFF; font-family: arial; font-size: 11px;"><b><?php echo $theprice[$i]["precio_del_bulto"] ;?></b></td>
                                <td style="background: #3366CC; text-align: center; color: #FFFFFF; font-family: arial; font-size: 11px;"><b><?php echo $theprice[$i]["sugerido_al_publico"] ;?></b></td>
                               
                            </tr>
                             <?php
                               }
                               ?>
                        </table>
                      
                    </li>
                    <li class="news">
                        
                        &nbsp;
                      
                    </li>
                    <li class="news">
                        
                        &nbsp;
                      
                    </li>
                    <li class="news">
                        
                        &nbsp;
                      
                    </li>
                    <li class="news">
                        
                        &nbsp;
                      
                    </li>
                    <li class="news">
                        
                        &nbsp;
                      
                    </li>
                   
                 
                 
                   
                   
                  
          
                               
                   </ul>
                </div>
        </div>
        
        
        <div id="footer">
            <span>FUEGOS ARTIFICIALES ESTELAR - CÓRDOBA - ARGENTINA - GÓNGORA  1010 - TEL 54 9 0351 4114259 - CEL  156 647700 / 155 299616 E-MAIL: fuegos_estelar@hotmail.com</span> 
        </div>

    </div>
        
  </body>
</html>
