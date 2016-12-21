<?php
require_once("settings/class.mysql.php");

class Users
{
   
 
    private $usuario ='';
    private $pass ='';
    private $DB;
    private $errores=array();
    
    function Users()
    {
        $this->DB= new Mysql();
    }
    
    
    function login($login, $password)
		{
			$pass	= md5($password);		
		        $query = "SELECT *  FROM users WHERE user = '$login' AND pass = '$pass'";
                        //echo $query;
			
			$resultado = $this->DB->Query($query);
			
			if(@mysql_num_rows($resultado) == 0)
			{
				$this->errores['log'] = "Ingrese correctamente el Login y Password";
                                return FALSE;
			}
				
		}
                


     function setUsuario($valor)
    {
       
        $this->usuario=$valor;
       
        if (empty($this->usuario))
        {
		$this->errores['usuario'] =  "Falta completar el usuario.";
                return false;
        }
	
    }
    
    function setPass($valor)
    {
       
        $this->pass=$valor;
 
        if (empty($this->pass))
        {
		$this->errores['pass'] =  "Falta completar el pass.";
                return false;
        }
	
    }
    
    
    function clearErrores()
		{
			$this->errores = array();
		}
    function hasErrores()
		{
			if (empty($this->errores))
				return FALSE;
			else
				return TRUE;
		}
    
   function getErrores()
    {
       $error = '';
		foreach($this->errores as $descripcion)
		{
			$error .= $descripcion.'<br>';
		}
		
                return $error;
       
    }
                
    
    
}
?>
