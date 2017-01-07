<?php 

include "conexion.php";

class Fondos extends Conexion{

	public $con;
	public $route = "../Photos/Principal/";

	public function __construct(){

	$this->con = $this->Conectar();

	}

	public function Listar(){

		$query = $this->con->prepare("SELECT * FROM fotos");
		$query->execute();

		return $query;

	}

	public function Inicio($Nom1,$Tmp1,$Nom2,$Tmp2){

		$query = $this->con->prepare("UPDATE fotos SET Fondo1='banner.jpg', Boton='boton.jpg'");
		$query->execute();

		if(!empty($Tmp1)){	
			copy($Tmp1, $this->route."Inicio/Banner/"."banner.jpg");
		}
		if (!empty($Tmp2)) {
			copy($Tmp2, $this->route."Inicio/Boton/"."boton.jpg");
		}

	}

	public function Galeria($Nom1,$Tmp1){

		$query = $this->con->prepare("UPDATE fotos SET Fondo2='fondo.jpg'");
		$query->execute();

		copy($Tmp1, $this->route."Galeria/"."fondo.jpg");
	}


	public function Voluntarios($Nom1,$Tmp1){

		$query = $this->con->prepare("UPDATE fotos SET Fondo3='fondo.jpg'");
		$query->execute();

		copy($Tmp1, $this->route."Voluntarios/"."fondo.jpg");
	}

}


?>