<?php
require_once("settings/class.mysql.php");

class Videos
{

    private $titulo='';
    private $subtitulo='';
    private $descripcion='';
    private $video='';
    private $DB;
    private $errores=array();

    function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;
    }

    function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    function setVideo($video)
    {
        $this->video = $video;
        
        if (empty($this->video))
        {
		$this->errores['vieos'] =  "El campo videos no debe estar vacio.";
                return false;
        }
    }

    function Videos()
    {
        $this->DB= new Mysql();
    }

    function insertVideos()
    {
        $query="insert into videos ".
                "values (null,'$this->titulo','$this->subtitulo','$this->descripcion','$this->video')";

        $resultado=$this->DB->Command($query);

        if (! $resultado)
		{
			$this->errores['menu'] = "La categoria no se inserto";
			return FALSE;
		}
    }

    
    function mostrar()
    {
        $categorias= array();
        $query="select * from videos ORDER BY titulo  ASC";
        $resultado=$this->DB->Query($query);
        if(! $resultado)
        {
            $this->errores['menu'] = 'no es posible mostrar los datos';
            return false;
        }
        else
        {
            while($reg = mysql_fetch_assoc($resultado))
            {
                $categorias[] = $reg;
            }
        }

        return $categorias;
    }

    

    function mostrarPoridVideos($id)
    {
        $contactos = array();
        $query="select * from videos where id =$id";
        $resultado=$this->DB->Query($query);
        if(! $resultado)
        {
            $this->errores['menu'] = 'no es posible mostrar los datos';
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


   
    function updateVideos($id)
    {
       
        $sql="select id from videos where id = $id";
        $result=$this->DB->Query($sql);

        if(! $result)
        {
            $this->errores['menu'] = 'no es posible mostrar los datos del usuario';
            return false;
        }

        else
        {
            $sql="update videos set ".
                  "titulo = '$this->titulo',".
                  "subtitulo = '$this->subtitulo',".
                  "descripcion = '$this->descripcion',".
                  "video = '$this->video'".
                    "where ".
                    "id = $id";

            $result = $this->DB->Command($sql);

            if(! $result)
            {
                $this->errores['menu'] = 'no s posible cargar los datos';
                return false;
            }
        }
        return true;
    }

   
    function delete($id)
    {
        $sql="delete from videos  where id = $id";

            $result = $this->DB->Command($sql);
            
            if(! $result)
            {
                $this->errores['menu'] = 'no s posible borrar los datos';
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
