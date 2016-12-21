<?php
require_once("settings/class.mysql.php");

class Colegio
{

    private $colegio ='';
    private $imagen1 ='';
    private $imagen2 ='';
    private $imagen3 ='';
    private $imagen4 ='';
    private $imagen5 ='';
    private $DB;
    private $errores=array();
   

    function Colegio()
    {
        $this->DB= new Mysql();
    }


    function insertColegio($colegio,$imagen1,$imagen2,$imagen3,$imagen4,$imagen5)
    {
        $this->colegio=$colegio;
        $this->imagen1=$imagen1;
        $this->imagen2=$imagen2;
        $this->imagen3=$imagen3;
        $this->imagen4=$imagen4;
        $this->imagen5=$imagen5;

        $query="insert into colegios ".
                "values (null,'$this->colegio','$this->imagen1','$this->imagen2','$this->imagen3','$this->imagen4','$this->imagen5')";

        $resultado=$this->DB->Command($query);

        if (! $resultado)
		{
			$this->errores['registro'] = "El usuario no puede ser registrado";
			return FALSE;
		}
    }


    function mostrarColegios()
    {
        $contactos = array();
        $query="select * from colegios order by colegio asc";
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


    function mostrarPoridColegios($id)
    {
        $contactos = array();
        $query="select * from colegios where id =$id";
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

    function updateColegios($id,$colegio,$imagen1,$imagen2,$imagen3,$imagen4,$imagen5)
    {
        $this->colegio=$colegio;
        $this->imagen1=$imagen1;
        $this->imagen2=$imagen2;
        $this->imagen3=$imagen3;
        $this->imagen4=$imagen4;
        $this->imagen5=$imagen5;

        $sql="select id from colegios where id = $id";
        $result=$this->DB->Query($sql);

        if(! $result)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos del usuario';
            return false;
        }

        else
        {
            $sql="update colegios set ".
                    "colegio ='$this->colegio',".
                    "image_1 ='$this->imagen1',".
                    "image_2 ='$this->imagen2',".
                    "image_3 ='$this->imagen3',".
                    "image_4 ='$this->imagen4',".
                    "image_5 ='$this->imagen5'".
                    " where ".
                    "id = $id";
             // echo $sql;die;
            $result = $this->DB->Command($sql);

            if(! $result)
            {
                $this->errores['cargar'] = 'no s posible cargar los datos';
                return false;
            }
        }
        return true;
    }

    function deleteColegios($id)
    {
        $sql="delete from colegios  where id = $id";

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
