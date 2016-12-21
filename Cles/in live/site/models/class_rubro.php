<?php

require_once("settings/class.mysql.php");

class Rubro
{

    private $imagen1 = '';
    private $description = '';
    private $DB;
    private $errores = array();

    function Rubro()
    {
        $this->DB = new Mysql();
    }

    function insertRubro($imagen1,$description)
    
    {
        $this->imagen1 = $imagen1;
        $this->description = $description;
        
        $query = "insert into rubros " .
                "values (null,'$this->imagen1','$this->description')";

        $resultado = $this->DB->Command($query);

        if (!$resultado)
        {
            $this->errores['registro'] = "El usuario no puede ser registrado";
            return FALSE;
        }
    }

    function mostrarRubro()
    {
        $contactos = array();
        $query = "select * from rubros";
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

    function mostrarPoridRubro($id)
    {
        $contactos = array();
        $query = "select * from rubros where id =$id";
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

    function updateRubro($id, $text,$imagen1)
    {
        $this->imagen1 = $imagen1;
        $this->description = $text;

        $sql = "select id from rubros where id = $id";
        $result = $this->DB->Query($sql);
        
        if (!$result)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos del usuario';
            return false;
        }
        else
        {
            $sql = "update rubros set " .
                    "image_1 ='$this->imagen1'," .
                    "description ='$this->description'" .
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

    function deleteRubro($id)
    {
        $sql = "delete from rubros  where id = $id";

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
