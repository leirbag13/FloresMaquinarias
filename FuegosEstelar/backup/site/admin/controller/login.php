<?php
session_start();
require_once("models/class_users.php");

$login = @trim($_POST['login']);
$pass = @trim($_POST['pass']);
        
	if (isset($_POST['login']) && isset($_POST['pass']))
	{
          
		$User = new Users();
		$User->clearErrores();
		$User->login($login, $pass );
                
		if (! $User->hasErrores())
		{
 
			$_SESSION['user']   = $_POST['login'];
                        header ("location: controller/my-acount.php");
                        
			
		}
		else
		{
			 $error = $User->getErrores();
			
		}
	}
        


require_once("view/login.tpl");
?>
