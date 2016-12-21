<?php

require_once("settings/class.mysql.php");

class Video
{
    private $colegio = '';
    private $video = '';
    private $DB;
    private $errores = array();

    function Video()
    {
        $this->DB = new Mysql();
    }

    function insertVideo($colegio, $video)
    
    {
        $this->colegio = $colegio;
        $this->video = $video;

        $query = "insert into videos " .
                "values (null,'$this->colegio','$this->video')";

        $resultado = $this->DB->Command($query);

        if (!$resultado)
        {
            $this->errores['registro'] = "El usuario no puede ser registrado";
            return FALSE;
        }
    }

    function mostrarVideo()
    {
        $contactos = array();
        $query = "select * from videos";
        $resultado = $this->DB->Query($query);
        if (!$resultado)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos';
            return false;
        }
        else
        {
            while ($reg = mysql_fetch_assoc($resultado))
            {
                $contactos[] = $reg;
            }
        }

        return $contactos;
    }

    function mostrarPoridVideo($id)
    {
        $contactos = array();
        $query = "select * from videos where id =$id";
        $resultado = $this->DB->Query($query);
        if (!$resultado)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos';
            return false;
        }
        else
        {
            while ($reg = mysql_fetch_assoc($resultado))
            {
                $contactos[] = $reg;
            }
        }

        return $contactos;
    }

    function updateVideo($id, $colegio, $video)
    {
        $this->colegio = $colegio;
        $this->video = $video;

        $sql = "select id from videos where id = $id";
        $result = $this->DB->Query($sql);
        
        if (!$result)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos del usuario';
            return false;
        }
        else
        {
            $sql = "update videos set " .
                    "colegio ='$this->colegio'," .
                    "video ='$this->video'" .
                    " where " .
                    "id = $id";
            //echo $sql;die;
            $result = $this->DB->Command($sql);

            if (!$result)
            {
                $this->errores['cargar'] = 'no es posible cargar los datos';
                return false;
            }
        }
        return true;
    }

    function deleteVideo($id)
    {
        $sql = "delete from videos where id = $id";

        $result = $this->DB->Command($sql);

        if (!$result)
        {
            $this->errores['cargar'] = 'no es posible borrar los datos';
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
        foreach ($this->errores as $descripcion)
        {
            $error .= $descripcion . '<br>';
        }

        return $error;
    }

}

?>
