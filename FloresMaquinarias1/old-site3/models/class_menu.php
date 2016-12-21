<?php
require_once("settings/class.mysql.php");

class Menu
{

    private $categoria='';
    private $item='';
    private $DB;
    private $errores=array();

    function setCategoria($categoria)
    {
        $this->categoria=$categoria;

        if (empty($this->categoria))
        {
		$this->errores['categoria'] =  "El campo sub categoria no debe estar vacio.";
                return false;
        }
    }

     function setItem($item)
    {
        $this->item=$item;

        if (empty($this->item))
        {
		$this->errores['item'] =  "El campo  categoria no debe estar vacio.";
                return false;
        }
    }

    function menu()
    {
        $this->DB= new Mysql();
    }

    function insertCategoria()
    {
        
        $query="insert into menu ".
                "values (null,'$this->categoria')";

        $resultado=$this->DB->Command($query);

        if (! $resultado)
		{
			$this->errores['menu'] = "La categoria no se inserto";
			return FALSE;
		}
    }

      function insertSubCategoria()
    {
 
        $query="insert into submenu ".
                "values (null,'$this->item','$this->categoria')";

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
        $query="select * from menu ORDER BY categoria  ASC";
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

     function mostrarSubCategoria($categoria)
    {
        $subcategorias= array();
        $query="select * from submenu where categoria = '$categoria' ORDER BY categoria  ASC ";
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
                $subcategorias[] = $reg;
            }
        }

        return $subcategorias;
    }


    function mostrarPorid($id)
    {
        $contactos = array();
        $query="select * from menu where id =$id";
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


    function mostrarPoridSubCategoria($id)
    {
        $subcategoria = array();
        $query="select * from submenu where id =$id";
        $resultado=$this->DB->Query($query);
        if(! $resultado)
        {
            //$this->errores['menu'] = 'no es posible mostrar los datos';
            return false;
        }
        else
        {
            while($reg = mysql_fetch_assoc($resultado))
            {
                $subcategoria[] = $reg;
            }
        }

        return $subcategoria;
    }

    function update($id)
    {
        $sql="select id from menu where id = $id";
        $result=$this->DB->Query($sql);

        if(! $result)
        {
            $this->errores['menu'] = 'no es posible mostrar los datos del usuario';
            return false;
        }

        else
        {
            $sql="update menu set ".
                  "categoria = '$this->categoria'".
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

    function updateSubCategoria($id)
    {
        $sql="select id from submenu where id = $id";
        $result=$this->DB->Query($sql);

        if(! $result)
        {
            $this->errores['menu'] = 'no es posible mostrar los datos del usuario';
            return false;
        }

        else
        {
            $sql="update submenu set ".
                  "item = '$this->item',".
                   "categoria = '$this->categoria'".
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

    //setiar la categoria en el llamado
    function delete($id)
    {
        $sql="delete from menu  where id = $id";

            $result = $this->DB->Command($sql);

            $sql="DELETE FROM submenu  WHERE categoria = '$this->categoria'";
            
             $result = $this->DB->Command($sql);

            if(! $result)
            {
                $this->errores['menu'] = 'no s posible borrar los datos';
                return false;
            }
            return true;

    }

     function deleteSub($id)
    {
        $sql="delete from submenu  where id = $id";

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
