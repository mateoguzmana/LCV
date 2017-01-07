<?php 

include "conexion.php";

class Upload extends Conexion{

	public $con;
	private $route = "../Photos/Upload/";

	function __construct(){

		$this->con = $this->Conectar();

	}

	function Inactivas(){

		$query = $this->con->prepare("SELECT * FROM uploads WHERE Activo=0");
		$query->execute();

		return $query;

	}

	function Aprobadas(){

		$query = $this->con->prepare("SELECT * FROM uploads WHERE Activo=1");
		$query->execute();

		return $query;

	}

	function ChangeStatus($Id,$S){

		if($S==2){

			$Nombre = $Id.".jpg";

			unlink($this->route.$Nombre);
		}

		$query = $this->con->prepare("UPDATE uploads SET Activo='$S' WHERE Id='$Id'");
		$query->execute();

	}

	function Carga($Nombre,$Email,$Personaje,$Tmp,$Nom){

		$query = $this->con->prepare("INSERT INTO uploads (Nombre,Email,Personaje) VALUES('$Nombre','$Email','$Personaje')");
		$query->execute();

		$query2 = $this->con->prepare("SELECT * FROM uploads ORDER BY Id ASC");
		$query2->execute();

		foreach ($query2 as $Results) {
			
			$Id = $Results["Id"]; 	
		
		}

		$this->Subir($Id,$Tmp,$Nom);

	}

	function Subir($Id,$Tmp,$Nom){

		$Nombre = $Id.".jpg";

		copy($Tmp, $this->route.$Nombre);

		$query3 = $this->con->prepare("UPDATE uploads SET Url='$Nombre' WHERE Id='$Id'");
		$query3->execute();
	}

}



?>