<?php 

include "conexion.php";

class Proyectos extends Conexion{

	public  $con;
	private $route = "../Photos/Proyectos/";

	public function __construct(){

	$this->con = $this->Conectar();

	}

	public function Listar(){

	$query = $this->con->prepare("SELECT * FROM proyectos");
	$query->execute();

	return $query;

	}

	public function GetId($Id){

	$query = $this->con->prepare("SELECT * FROM proyectos WHERE Id='$Id'");
	$query->execute();

	return $query;

	}

	public function ValidarIng($Nombre,$Texto,$Tmp,$Nom){

	$Nombre	= filter_var($Nombre, FILTER_SANITIZE_STRING);
	$Texto  = filter_var($Texto, FILTER_SANITIZE_STRING);

	$ext    = explode(".", $Nom);
	$ext 	= end($ext);

		if($ext=="jpg" || $ext=="png" || $ext=="jpeg"){
			$this->Ingresar($Nombre,$Texto,$Tmp,$Nom); 
		}else{
			echo "Archivo no valido.";
		}

	}

	public function ValidarAct($Id,$Nombre,$Texto,$Tmp,$Nom){

	$Id 	= filter_var($Id, FILTER_VALIDATE_INT);
	$Nombre	= filter_var($Nombre, FILTER_SANITIZE_STRING);
	$Texto  = filter_var($Texto, FILTER_SANITIZE_STRING);

	$this->Actualizar($Id,$Nombre,$Texto,$Tmp,$Nom); 

	}

	public function Ingresar($Nombre,$Texto,$Tmp,$Nom){

	$query = $this->con->prepare("INSERT INTO proyectos (Nombre,Texto) VALUES ('$Nombre','$Texto')");

		if($query->execute()){

		$query2 = $this->con->prepare("SELECT * FROM proyectos ORDER BY Id ASC");
		$query2->execute();

		foreach ($query2 as $JJ) {
		$Id = $JJ["Id"];
		}

		$this->GuardarImagen($Id,$Tmp,$Nom);
		?>
		<script type="text/javascript">
			alert("Proyecto registrado correctamente.");
			window.location.href="../#proyectos";
		</script>
		<?php
		}else{
		?>
		<script type="text/javascript">
			alert("Ha ocurrido un error, por favor vuelve a intentarlo en unos breves instantes.");
			window.location.href="../#proyectos";
		</script>
		<?php
		}

	}

	public function Actualizar($Id,$Nombre,$Texto,$Tmp,$Nom){

	$this->GuardarImagen($Id,$Tmp,$Nom);

	$query = $this->con->prepare("UPDATE proyectos SET Nombre='$Nombre', Texto='$Texto' WHERE Id='$Id'");

		if($query->execute()){
		?>
		<script type="text/javascript">
			alert("Proyecto actualizado correctamente.");
			window.location.href="../#proyectos";
		</script>
		<?php
		}else{
		?>
		<script type="text/javascript">
			alert("Ha ocurrido un error, por favor vuelve a intentarlo en unos breves instantes.");
			window.location.href="../#proyectos";
		</script>
		<?php
		}

	}

	public function GuardarImagen($Id,$Tmp,$Nom){

			$Nombre = $Id.".jpg";

			$query = $this->con->prepare("UPDATE proyectos SET Foto='$Nombre' WHERE Id='$Id'");
			$query->execute();

			copy($Tmp, $this->route.$Nombre);

	}

	public function Delete($Id){

		$query = $this->con->prepare("DELETE FROM proyectos WHERE Id='$Id'");
		$query->execute();

		$Nom = $Id.".jpg";

		unlink($this->route.$Nom);
	}

}

?>