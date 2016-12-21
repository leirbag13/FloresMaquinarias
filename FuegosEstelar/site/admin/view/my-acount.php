<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Panel Control</title>

<link rel="stylesheet" href="../css/my-acount.css" media="all"/>
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
                    <!--<li><a href="../controller/mostrarSubCategoria.php">Sub Categorias</a></li>-->
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
                    <li><a href="../controller/mostrarPrecios.php">Precios</a></li>
                   
                </ul>
            </div>
        </div>
        <!-- end menu1 -->

        <div id="sidebar">

        </div>

        <div id="contenido">
            <div id="tutorial">
              <h1>Bienvenido al tutorial del sistema de administraci&oacute;n</h1>
               <p>Lo primero que veremos ser&aacute; el men&uacute; y las diferentes secciones que lo componen.</p>
                <p><b><i>INICIO</i></b></p>
               <p>se compone de los sub &iacute;tems  inicio y log out</p>
               <p>Desde inicio volveremos a esta misma p&aacute;gina donde tenemos el tutorial.</p>
                <p>Desde log out cerraremos la sesi&oacute;n para salir del administrador.</p>
                <p><b><i>MENU</i></b></p>
                <p> se compone de los &iacute;tems Categor&iacute;as y Sub Categor&iacute;as.</p>
                <p>Desde categor&iacute;a cargaremos las categor&iacute;as de productos.</p>
                <p>Desde Sub Categor&iacute;as cargaremos sub categor&iacute;as correspondientes a las categor&iacute;as.</p>
                <p><b><i>CONTENIDOS</i></b></p>
                 <p>se compone de Noticias Novedades y Videos.</p>
                <p>Aqu&iacute; cargaremos los contenidos de estas tres secciones</p>
                <p><b><i>PRODUCTOS</i></b></p>
                <p>se compone de la opci&oacute;n listar.</p>
               <p> Desde listar podemos ver los productos existentes e nuestra base de datos</p>

                <p>Como cargar editar y eliminar contenidos?</p>
                <p>Todas las secciones se componen de igual manera</p>
                <p><b><i><u>Cargar:</u></i></b></p>
                <p>Para cargar contenido todas las secciones tienen un signo m&aacute;s una vez que se presiona va a un formulario de inserci&oacute;n donde deben cargar los campos que necesiten para tener una nueva categor&iacute;a producto etc.</p>
                <p><b><i><u>Modificar:</u></i></b></p>
                <p>Donde se muestra los productos, categor&iacute;as, etc. cargados hay un icono de un l&aacute;piz y un papel si lo presionamos podemos modificar dicho producto, categor&iacute;a, etc.</p>
                <p><b><i><u>Eliminar:</u></i></b></p>
                <p>Para eliminar Donde se muestra los productos, categor&iacute;as, etc. hay un icono que es un tacho de basura si lo presionamos autom&aacute;ticamente se eliminara dicho producto, categor&iacute;a, ect</p>
                <p><b><i><u>Cargar video de youtube:</u></i></b></p>
                <p>Para ello sobre el video de youtube que estamos viendo hacemos click derecho y tocamos la opci&oacute;n que dice copiar c&oacute;digo de inserci&oacute;n</p>
                <p class="error"><b><i><u>Importante!</u></i></b></p>
                <p>Todos los campos marcados con (<span class="error">*</span>) son campos obligatorios </p>
            </div>
        </div>
    </div>

</body>
</html>
