<?php
require_once("settings/class.mysql.php");

class Novedades
{

    private $titulo='';
    private $cuerpo='';
    private $imagen1 ='';
    private $imagen2 ='';
    private $DB;
    private $errores=array();

    function setTitulo($titulo)
    {
        $this->titulo=$titulo;

        if (empty($this->titulo))
        {
		$this->errores['novedades'] =  "El campo titulo no debe estar vacio.";
                return false;
        }
    }

    function setCuerpo($cuerpo)
    {
        $this->cuerpo=$cuerpo;

        if (empty($this->cuerpo))
        {
		$this->errores['cuerpo'] =  "El campo cuerpo no debe estar vacio.";
                return false;
        }
    }



    function Novedades()
    {
        $this->DB= new Mysql();
    }


    function insertNovedades($imagen1,$imagen2)
    {
        $this->imagen1=$imagen1;
        $this->imagen2=$imagen2;

        $query="insert into novedades ".
                "values (null,'$this->titulo','$this->cuerpo','$this->imagen1','$this->imagen2')";

        $resultado=$this->DB->Command($query);

        if (! $resultado)
		{
			$this->errores['registro'] = "El usuario no puede ser registrado";
			return FALSE;
		}
    }


    function mostrarNovedades()
    {
        $contactos = array();
        $query="select * from novedades order by titulo asc";
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


    function mostrarPoridNovedades($id)
    {
        $contactos = array();
        $query="select * from novedades where id =$id";
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

    function updateNovedades($id,$imagen1,$imagen2)
    {
        $this->imagen1 = $imagen1;
        $this->imagen2 = $imagen2;

        $sql="select id from novedades where id = $id";
        $result=$this->DB->Query($sql);

        if(! $result)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos del usuario';
            return false;
        }

        else
        {
            $sql="update novedades set ".
                  "titulo = '$this->titulo',".
                    "cuerpo ='$this->cuerpo',".
                    "imagen1 ='$this->imagen1',".
                    "imagen2 ='$this->imagen2'".
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

    function deleteNovedades($id)
    {
        $sql="delete from novedades  where id = $id";

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