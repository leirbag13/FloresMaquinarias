<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" href="../css/general.css" media="all">
        
    <!--
      jQuery library
    -->
    <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>


    <!--funciones-->
    <script type="text/javascript" src="js/functions.js"></script>

  
  </head>
  <body>
      
         
    <div id="global">
        
       
        <div id="fireworks">
            <div class="image">
                <img src="../images/fireworks-produc.jpg"/>
            </div>
            
            <div id="logo">
                <a href="#"><img src="../images/logo.png"/></a>
            </div>
        </div>
          
        <div id="menu-produc">
          
          <?php
          for($i=0;$i<sizeof($versubcat);$i++)
          {
          ?>
          <div class="item"><a href="proid.php?item=<?php echo $versubcat[$i]["item"] ;?>&cat=<?php echo $versubcat[$i]["categoria"] ;?>"  onmouseover="document.<?php echo $versubcat[$i]["item"] ;?>.src='../images/product-background2.png'"
                                          onmouseout="document.<?php echo $versubcat[$i]["item"] ;?>.src='../images/product-background1.png'">
                        <img name="<?php echo $versubcat[$i]["item"] ;?>" src="../images/product-background1.png"/><span style="  color: #FFFFFF;
    font-family: Futura;
    font-size: 11px;
    font-weight: bold;
    margin-left: -111px;
    margin-top: 5px;
    position: absolute;
    width: 111px;;"><?php echo $versubcat[$i]["item"] ;?></span></a>
              
          </div>
           <?php
           }
           ?>
        </div>
        
         <div id="men-produc">
             <ul>
                 <li><div id="circulo">
                 <a href="javascript:void();"  onmouseover="document.circulopro.src='../images/men-produc-circulo.png'"
                                          onmouseout="document.circulopro.src='../images/help-circulo.png'">      
                        <img name="circulopro" src="../images/help-circulo.png"/>
                        <span>IR A TORTAS PREMIUNM</span></a>
             </div></li>   
             <li><div id="circulo">
                 <a href="producto.php"  onmouseover="document.circulopro2.src='../images/men-produc-circulo.png'"
                                          onmouseout="document.circulopro2.src='../images/help-circulo.png'">      
                        <img name="circulopro2" src="../images/help-circulo.png"/>
                        <span>IR A PRODUCTOS</span></a>
             </div> </li>  
             <li><div id="circulo">
                 <a href="javascript:void();"  onmouseover="document.circulopro3.src='../images/men-produc-circulo.png'"
                                          onmouseout="document.circulopro3.src='../images/help-circulo.png'">      
                        <img name="circulopro3" src="../images/help-circulo.png"/>
                        <span>VER MÁS TORTAS</span></a>
             </div> </li>
             </ul>    
        </div>
        
        <div id="content-produc">
          <?php
          for($j=0;$j<sizeof($verproid);$j++)
          {
          ?>
            <img width="596" height="478" src="../../upload-images/<?php echo $verproid[0]["imagen"] ;?>"/>
        
          <?php
           }
           ?>
        </div>
        
        <div id="back-produc">
            <a href="/"><img src="../images/back-produc.png"/></a>
        </div>
        <div id="footer">
            <span>FUEGOS ARTIFICIALES ESTELAR - CÓRDOBA - ARGENTINA - GÓNGORA  1010 - TEL 54 9 0351 4114259 - CEL  156 647700 / 155 299616 E-MAIL: fuegos_estelar@hotmail.com</span> 
        </div>

    </div>
        
  </body>
</html>
