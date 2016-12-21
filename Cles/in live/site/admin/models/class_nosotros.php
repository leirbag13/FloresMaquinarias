<?php

require_once("settings/class.mysql.php");

class Nosotros
{

    private $text = '';
    private $imagen = '';
    private $DB;
    private $errores = array();

    function Nosotros()
    {
        $this->DB = new Mysql();
    }

    function insertNosotros($text, $imagen)
    
    {
        $this->text = $text;
        $this->imagen = $imagen;

        $query = "insert into nosotros " .
                "values (null,'$this->text','$this->imagen')";

        $resultado = $this->DB->Command($query);

        if (!$resultado)
        {
            $this->errores['registro'] = "El usuario no puede ser registrado";
            return FALSE;
        }
    }

    function mostrarNosotros()
    {
        $contactos = array();
        $query = "select * from nosotros";
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

    function mostrarPoridNosotros($id)
    {
        $contactos = array();
        $query = "select * from nosotros where id =$id";
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

    function updateNosotros($id, $text, $imagen)
    {
        $this->text = $text;
        $this->imagen = $imagen;

        $sql = "select id from nosotros where id = $id";
        $result = $this->DB->Query($sql);
        
        if (!$result)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos del usuario';
            return false;
        }
        else
        {
            $sql = "update nosotros set " .
                    "text ='$this->text'," .
                    "image_1 ='$this->imagen'" .
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

    function deleteNosotros($id)
    {
        $sql = "delete from nosotros  where id = $id";

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
