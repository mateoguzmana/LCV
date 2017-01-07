<?php 

class Conexion{

	private $con;

	public function Conectar(){

		$this->con = new PDO("mysql:host=mysql.hostinger.co;dbname=u781448169_db","u781448169_db","12345678");

		return $this->con;

	}

}


class Master extends Conexion{

	public $con;

	function __construct(){

		$this->con = $this->Conectar();

	}

	function ContenidoPrincipal(){

		$query = $this->con->prepare("SELECT * FROM contenidoprincipal");
		$query->execute();

		return $query;

	}

	function Voluntarios(){

		$query = $this->con->prepare("SELECT * FROM voluntarios");
		$query->execute();

		return $query;

	}

	function Proyectos(){

		$query = $this->con->prepare("SELECT * FROM proyectos");
		$query->execute();

		return $query;

	}	

	function Super(){

		$query = $this->con->prepare("SELECT * FROM super");
		$query->execute();

		return $query;

	}

	function Comparte(){

		$query = $this->con->prepare("SELECT * FROM comparte");
		$query->execute();

		return $query;

	}

	function Contacto(){

		$query = $this->con->prepare("SELECT * FROM contacto");
		$query->execute();

		return $query;

	}


}



?>