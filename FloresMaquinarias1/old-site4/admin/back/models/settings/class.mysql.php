<?php

class Mysql
	{
		private $host = '';
		private $user = '';
		private $pass = '';
		private $database  = ''; //Base de Datos seleccionada

		private $linkDB; //Enlace a la base de datos o 'MySQL link identifier'

		private $error = array();

		public function Mysql($host = 'localhost', $user = 'root', $pass = '123456', $database='floresmaquinarias') //construct
		{
			$this->Connect($host, $user, $pass, $database);
		}

		private function Connect($host = '', $user = '', $pass = '', $database='')
		{
			$this->error = array();
			$this->host = $host;
			$this->user = $user;
			$this->pass = $pass;
			$this->database = $database;

			if (empty($host))
				$host = 'localhost';

			$this->linkDB = mysql_connect($host, $user, $pass);

			if (! $this->linkDB)
				$this->error['Connect'] = 'No pude conectarme a MySQL';

			if (! empty($database))
				$this->Select_DB($database);
		}

		private function Select_DB($database)
		{
			$this->database = '';
			if ($this->linkDB)
			{
				if (mysql_select_db($database, $this->linkDB))
					$this->database = $database;
				else
					$this->error['Select_DB'] = 'No pude seleccionar la BD';
			}
		}

		private function isConnected()
		{
			if (! $this->linkDB)
			{
				$this->error['Connect'] = 'No hay una conexi�n disponible';
				return FALSE;
			}

			if (empty($this->database))
			{
				$this->error['Select_DB'] = 'No hay una BD disponible';
				return FALSE;
			}

			return TRUE;
		}

		public function Query($consulta)
		{
			if (! $this->isConnected())
				return FALSE;

			$this->clearerror();

			$result = mysql_query($consulta, $this->linkDB);

			if (! $result)
			{
				$this->error['Query'] = 'No pude ejecutar la consulta.';
				return FALSE;
			}
			elseif (mysql_num_rows($result) == 0)
			{
				$this->error['Query'] = 'La consulta no devolvio registros.';
				return FALSE;
			}

			return $result;
		}

		public function Command($command)
		{
			if (! $this->isConnected())
				return FALSE;

			$this->clearerror();

			$result = mysql_query($command, $this->linkDB);

			if (! $result)
			{
				$this->error['Command'] = 'No pude ejecutar el comando.';
				return FALSE;
			}

			return $result;
		}


		public function Close()
		{
			if (! $this->isConnected())
				return TRUE;

			return mysql_close($this->linkDB);
		}


		private function clearerror()
		{
			$this->error = array();
		}

		public function Haserror()
		{
			if (empty($this->error))
				return FALSE;
			else
				return TRUE;
		}

		public function Geterror()
		{
			$error = '';
			foreach($this->error as $descripcion)
			{
				$error .= $descripcion.'<br>';
			}
			return $error;
		}

	}
?>