<?php
require_once("settings/class.mysql.php");

class Precio
{
    
    private $articulo='';
    private $descripcion='';
    private $precio_unitario='';
    private $cont_display='';
    private $precio_display='';
    private $cont_del_bulto='';
    private $precio_del_bulto='';
    private $sugerido_al_publico ='';
    private $DB;
    private $errores=array();

    function setArticulo($articulo)
    {
        $this->articulo=$articulo;

      
    }

    function setDescripcion($descripcion)
    {
        $this->descripcion=$descripcion;

       
    }

    function setPprecioUnitario($precio_unitario)
    {
        $this->precio_unitario=$precio_unitario;

        
    }

    function setContDisplay($cont_display)
    {
        $this->cont_display=$cont_display;

        
    }
    function setPrecioDisplay($precio_display)
    {
        $this->precio_display=$precio_display;

        
    }

    function setContDelBulto($cont_del_bulto)
    {
        $this->cont_del_bulto=$cont_del_bulto;

        
    }

    function setPrecioDelBulto($precio_del_bulto)
    {
        $this->precio_del_bulto=$precio_del_bulto;

       
    }

    function setSugeridoAlPublico($sugerido_al_publico)
    {
        $this->sugerido_al_publico=$sugerido_al_publico;

    }

 

    function Precio()
    {
        $this->DB= new Mysql();
    }

   
    function insertPecio()
    {      

        $query="insert into precios ".
                "values ('$this->articulo','$this->descripcion','$this->precio_unitario','$this->cont_display','$this->cont_del_bulto','$this->precio_del_bulto','$this->sugerido_al_publico',null,'$this->precio_display')";
        echo $query;
        $resultado=$this->DB->Command($query);

        if (! $resultado)
		{
			$this->errores['registro'] = "El usuario no puede ser registrado";
			return FALSE;
		}
    }

   
    function mostrarPecio()
    {
        $contactos = array();
        $query="select * from precios";
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


    function mostrarPoridPecio($id)
    {
        $contactos = array();
        $query="select * from precios where id =$id";
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

    function updatePecio($id)
    {
        
        $sql="select id from precios where id = $id";
        $result=$this->DB->Query($sql);

        if(! $result)
        {
            $this->errores['mostrar'] = 'no es posible mostrar los datos del usuario';
            return false;
        }

        else  
        { 
            $sql="update precios set ".
                  "articulo = '$this->articulo',".
                   "descripcion =  '$this->descripcion',".
                    "precio_unidad =  '$this->precio_unitario',".
                    "cont_display ='$this->cont_display ',".
                    "cont_del_bulto ='$this->cont_del_bulto',".
                    "precio_del_bulto ='$this->precio_del_bulto',".
                    "sugerido_al_publico ='$this->sugerido_al_publico',".
                    "precio_display ='$this->precio_display'".
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

    function deletePecio($id)
    {
        $sql="delete from precios  where id = $id";

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
