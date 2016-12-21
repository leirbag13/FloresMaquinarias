<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Panel Control</title>

<link rel="stylesheet" href="css/login.css" media="all"/>
<!--[if IE ]>
<link rel="stylesheet" href="css/estilo_index_ie8.css" media="all"/>
<![endif]-->
</head>

<body>
    <div id="global">

        <div id="titlogin">
            <p class="titlogin">Sistema de administraci&oacute;n </p>
        </div>
        
        <div id="loguin">
            <p class="error"><?php echo @$error; ?></p>
            <div id="logform">
                
                <form action="" method="POST">
                    <p><b>USUARIO:</b></p>
                    <input class="input" type="text" name="login"/>
                    <br/>
                    <p><b>CONTRASE&Ntilde;A:</b></p>
                    <input class="input" type="password" name="pass"/>
                    <br/>
                    <br/>
                    <br/>
                    <input type="submit" value="INGRESAR"/>
                </form>
             </div>
        </div>
        
    </div>

</body>
</html>
