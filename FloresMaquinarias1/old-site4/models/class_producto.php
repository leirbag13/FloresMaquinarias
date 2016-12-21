<?php
require_once("settings/class.mysql.php");

class Producto
{
    
    private $nombre='';
    private $descripcion='';
    private $categoria='';
    private $item='';
    private $marca='';
    private $precio=0;
    private $estado ='';
    private $imagen ='';
    private $pdf = '';
    private $imagen2 ='';
    private $imagen3 ='';
    private $DB;
    private $errores=array();

    function setNombre($nombre)
    {
        $this->nombre=$nombre;

        if (empty($this->nombre))
        {
		$this->errores['Producto'] =  "El campo nombre no debe estar vacio.";
                return false;
        }
    }

    function setDescripcion($descripcion)
    {
        $this->descripcion=$descripcion;

       
    }

    function setCategoria($categoria)
    {
        $this->categoria=$categoria;

        if (empty($this->categoria))
        {
		$this->errores['Producto'] =  "El campo categoria no debe estar vacio.";
                return false;
        }
    }

    function setItem($item)
    {
        $this->item=$item;

        
    }

    function setMarca($marca)
    {
        $this->marca=$marca;

        
    }

    function setPrecio($precio)
    {
        $this->precio=$precio;

       
    }

    function setEstado($estado)
    {
        $this->estado=$estado;

    }

 

    function Producto()
    {
        $this->DB= new Mysql();
    }

   
    function insertProducto($imagen,$pdf,$imagen2,$imagen3)
    {
        
        $this->imagen = $imagen;
        $this->pdf = $pdf;
        $this->imagen2 = $imagen2;
        $this->imagen3 = $imagen3;

        $query="insert into productos ".
                "values (null,'$this->nombre','$this->descripcion','$this->categoria','$this->item','$this->marca',$this->precio,'$this->estado','$this->imagen','$this->pdf','$this->imagen2','$this->imagen3')";
        
        $resultado=$this->DB->Command($query);

        if (! $resultado)
		{
			$this->errores['registro'] = "El usuario no puede ser registrado";
			return FALSE;
		}
    }

   
    function mostrarProducto()
    {
        $contactos = array();
        $query="select * from productos order by nombre asc";
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


    function mostrarPoridProducto($id)
    {
        $contactos = array();
        $query="select * from productos where id =$id";
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

    function updateProducto($id,$imagen,$pdf,$imagen2,$imagen3)
    {

        $this->imagen = $imagen;
        $this->pdf = $pdf;
        $this->imagen2 = $imagen2;
        $this->imagen3 = $imagen3;
        
        $sql="select id from productos where id = $id";
        $result=$this->DB->Query($sql);

        if(! $result)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos del usuario';
            return false;
        }

        else
        {
            $sql="update productos set ".
                  "nombre = '$this->nombre',".
                   "descripcion =  '$this->descripcion',".
                    "categoria =  '$this->categoria',".
                    "item ='$this->item ',".
                    "marca ='$this->marca',".
                    "precio =$this->precio,".
                    "activo ='$this->estado',".
                    "imagen ='$this->imagen',".
                    "pdf ='$this->pdf',".
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

    function deleteProducto($id)
    {
        $sql="delete from productos  where id = $id";

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
