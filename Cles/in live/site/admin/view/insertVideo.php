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

          <h1>Ingreso de nuevo video</h1>

           <div id="categorias">
               <form action="" method="POST">
                  <table border="0">
                        <tr>
                            <td><p class="error"><?php echo @$error; ?></p></td>
                        </tr>
                        
                      <tr>
                            <td><b>colegio</b></td>
                            <td><textarea rows="10" cols="50" name="colegio"></textarea></td>
                        </tr>

                       <tr>
                            <td><h3>video</h3></td>
                             <td><textarea rows="10" cols="50" name="video">Inbrese aqui el codigo del video que saco de youtube. Si no recuerda c&oacute;mo hacerlo es simple:  Para ello sobre el video de youtube que estamos viendo hacemos click derecho y tocamos la opci&oacute;n que dice copiar c&oacute;digo de inserci&oacute;n
Antes de ingresar el video borre este mensaje!</textarea><span class="error">*</span></td>

                        </tr>
                      
                        <tr>
                            <td> <a href="javascript:history.back(1)">Volver Atr&aacute;s</a></td>
                           <td>
                               <input type="submit" value="Ingresar"/>
                                <input name="insert" type="hidden" value="insertvideo"/>
                           </td>
                        </tr>

                  </table>
               </form>
           </div>
        </div>
    </div>

</body>
</html>

