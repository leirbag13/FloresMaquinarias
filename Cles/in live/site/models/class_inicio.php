<?php

require_once("settings/class.mysql.php");

class Inicio
{

    private $imagen1 = '';
    private $imagen2 = '';
    private $imagen3 = '';
    private $DB;
    private $errores = array();

    function Inicio()
    {
        $this->DB = new Mysql();
    }

    function insertInicio($imagen1, $imagen2, $imagen3)
    
    {
        $this->imagen1 = $imagen1;
        $this->imagen2 = $imagen2;
        $this->imagen3 = $imagen3;

        $query = "insert into inicio " .
                "values (null,'$this->imagen1','$this->imagen2','$this->imagen3')";

        $resultado = $this->DB->Command($query);

        if (!$resultado)
        {
            $this->errores['registro'] = "El usuario no puede ser registrado";
            return FALSE;
        }
    }

    function mostrarInicio()
    {
        $contactos = array();
        $query = "select * from inicio";
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

    function mostrarPoridInicio($id)
    {
        $contactos = array();
        $query = "select * from inicio where id =$id";
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

    function updateInicio($id, $imagen1, $imagen2, $imagen3)
    {
        $this->imagen1 = $imagen1;
        $this->imagen2 = $imagen2;
        $this->imagen3 = $imagen3;

        $sql = "select id from inicio where id = $id";
        $result = $this->DB->Query($sql);
        
        if (!$result)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos del usuario';
            return false;
        }
        else
        {
            $sql = "update inicio set " .
                    "image_1 ='$this->imagen1'," .
                    "image_2 ='$this->imagen2'," .
                    "image_3 ='$this->imagen3'" .
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

    function deleteInicio($id)
    {
        $sql = "delete from inicio  where id = $id";

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
