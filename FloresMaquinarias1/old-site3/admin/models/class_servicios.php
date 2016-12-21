<?php
require_once("settings/class.mysql.php");

class Servicios
{

    private $titulo='';
    private $subtitulo='';
    private $fecha='';
    private $autor='';
    private $fuente='';
    private $cuerpo='';
    private $imagen1 ='';
    private $imagen2 ='';
    private $imagen3 ='';
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

    function setSubtitulo($subtitulo)
    {
        $this->subtitulo=$subtitulo;

    }

    function setFecha($fecha)
    {
        $this->fecha=$fecha;

    }

    function setAutor($autor)
    {
        $this->autor=$autor;

    }

    function setFuente($fuente)
    {
        $this->fuente=$fuente;

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



    function Servicios()
    {
        $this->DB= new Mysql();
    }


    function insertNovedades($imagen1)
    {
        $this->imagen1=$imagen1;
        $this->imagen2=$imagen2;
        $this->imagen3=$imagen3;

        $query="insert into servicios ".
                "values (null,'$this->titulo','$this->subtitulo','$this->fecha','$this->autor','$this->fuente','$this->cuerpo','$this->imagen1','$this->imagen2','$this->imagen3')";

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
        $query="select * from servicios order by titulo asc";
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
        $query="select * from servicios where id =$id";
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

    function updateNovedades($id,$imagen1)
    {
        $this->imagen1 = $imagen1;
        $this->imagen2 = $imagen2;
        $this->imagen3 = $imagen3;

        $sql="select id from servicios where id = $id";
        $result=$this->DB->Query($sql);

        if(! $result)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos del usuario';
            return false;
        }

        else
        {
            $sql="update servicios set ".
                  "titulo = '$this->titulo',".
                   "subtitulo =  '$this->subtitulo',".
                    "fecha =  '$this->fecha',".
                    "autor ='$this->autor',".
                    "fuente ='$this->fuente',".
                    "cuerpo ='$this->cuerpo',".
                    "imagen1 ='$this->imagen1',".
                    "imagen2 ='$this->imagen2',".
                    "imagen3 ='$this->imagen3'".
                    "where ".
                    "id = $id";
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
        $sql="delete from servicios  where id = $id";

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
