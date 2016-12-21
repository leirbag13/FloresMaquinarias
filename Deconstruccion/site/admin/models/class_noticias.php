<?php
require_once("settings/class.mysql.php");

class Noticias
{

    private $imagen1 ='';
    private $imagen2 ='';
    private $imagen3 ='';
    private $DB;
    private $errores=array();


    function Noticias()
    {
        $this->DB= new Mysql();
    }


    function insertNoticias($imagen1,$imagen2,$imagen3)
    {
        $this->imagen1=$imagen1;
        $this->imagen2=$imagen2;
        $this->imagen3=$imagen3;

        $query="insert into noticias ".
                "values (null,'$this->imagen1','$this->imagen2','$this->imagen3')";

        $resultado=$this->DB->Command($query);

        if (! $resultado)
		{
			$this->errores['registro'] = "El usuario no puede ser registrado";
			return FALSE;
		}
    }


    function mostrarNoticias()
    {
        $contactos = array();
        $query="select * from noticias";
        $resultado=$this->DB->Query($query);
        if(! $resultado)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos';
            return false;
        }
        else
        {
            while($reg = mysql_fetch_assoc($resultado))
            {
                $contactos[] = $reg;
            }
        }

        return $contactos;
    }


    function mostrarPoridNoticias($id)
    {
        $contactos = array();
        $query="select * from noticias where id =$id";
        $resultado=$this->DB->Query($query);
        if(! $resultado)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos';
            return false;
        }
        else
        {
            while($reg = mysql_fetch_assoc($resultado))
            {
                $contactos[] = $reg;
            }
        }

        return $contactos;
    }

    function updateNoticias($id,$imagen1,$imagen2,$imagen3)
    {
        $this->imagen1 = $imagen1;
        $this->imagen2 = $imagen2;
        $this->imagen3 = $imagen3;

        $sql="select id from noticias where id = $id";
        $result=$this->DB->Query($sql);

        if(! $result)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos del usuario';
            return false;
        }

        else
        {
            $sql="update noticias set ".                 
                    "imagen1 ='$this->imagen1',".
                    "imagen2 ='$this->imagen2',".
                    "imagen3 ='$this->imagen3'".
                    "where ".
                    "id = $id";
              echo $sql;
            $result = $this->DB->Command($sql);

            if(! $result)
            {
                $this->errores['cargar'] = 'no s posible cargar los datos';
                return false;
            }
        }
        return true;
    }

    function deleteNoticias($id)
    {
        $sql="delete from noticias  where id = $id";

            $result = $this->DB->Command($sql);

            if(! $result)
            {
                $this->errores['cargar'] = 'no s posible borrar los datos';
                return false;
            }
            return true;

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
