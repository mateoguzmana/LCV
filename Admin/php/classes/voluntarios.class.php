<?php 

include "conexion.php";

class Voluntarios extends Conexion{

	public $con;
	public $route  = "../Photos/Voluntarios/P/";
	public $route2 = "../Photos/Voluntarios/G/";

	public function __construct(){

		$this->con = $this->Conectar();

	}

	public function Listar(){

		$query = $this->con->prepare("SELECT * FROM voluntarios");
		$query->execute();

		return $query;

	}

	public function GetId($Id){

		$query = $this->con->prepare("SELECT * FROM voluntarios WHERE Id='$Id'");
		$query->execute();

		return $query;

	} 

	public function ValidarIng($Nombre,$Frase,$Tmp1,$Nom1,$Tmp2,$Nom2){

	$Nombre = filter_var($Nombre, FILTER_SANITIZE_STRING);
	$Frase  = filter_var($Frase, FILTER_SANITIZE_STRING);	

	$ext1   = explode(".", $Nom1);
	$ext2   = explode(".", $Nom2);
	$ext1   = end($ext1);
	$ext2   = end($ext2);

	$this->Ingresar($Nombre,$Frase,$Tmp1,$Nom1,$Tmp2,$Nom2);

	}

	public function ValidarAct($Id,$Nombre,$Frase,$Tmp1,$Nom1,$Tmp2,$Nom2){

	$Id 	= filter_var($Id, FILTER_VALIDATE_INT);
	$Nombre = filter_var($Nombre, FILTER_SANITIZE_STRING);
	$Frase  = filter_var($Frase, FILTER_SANITIZE_STRING);

	$ext1   = explode(".", $Nom1);
	$ext2   = explode(".", $Nom2);
	$ext1   = end($ext1);
	$ext2   = end($ext2);

	$this->Actualizar($Id,$Nombre,$Frase,$Tmp1,$Nom1,$Tmp2,$Nom2);

	}

	public function Ingresar($Nombre,$Frase,$Tmp1,$Nom1,$Tmp2,$Nom2){

		
		$query = $this->con->prepare("INSERT INTO voluntarios (Nombre, Frase, Foto, Foto2) VALUES ('$Nombre','$Frase','$Nom1','$Nom2')");

		if($query->execute()){

		$query2 = $this->con->prepare("SELECT * FROM voluntarios ORDER BY Id ASC LIMIT 1");
		$query2->execute();

		foreach ($query2 as $JJ) {
		$Id = $JJ["Id"];
		}

		$this->Upload($Id,$Tmp1,$Nom1,$Tmp2,$Nom2);

		?>
			<script type="text/javascript">
				alert("Voluntario registrado correctamente..");
				window.location.href="../#voluntarios";
			</script>
		<?php
		}else{
		?>
			<script type="text/javascript">
				alert("No se ha podido registrar el voluntario, por favor vuelve a intentarlo.");
				window.location.href="../#nuevo_voluntario";
			</script>
		<?php
		}

	}

	public function Actualizar($Id,$Nombre,$Frase,$Tmp1,$Nom1,$Tmp2,$Nom2){

		$this->Upload($Id,$Tmp1,$Nom1,$Tmp2,$Nom2);

		$query = $this->con->prepare("UPDATE voluntarios SET Nombre='$Nombre', Frase='$Frase' WHERE Id='$Id'");

		if($query->execute()){
		?>
			<script type="text/javascript">
				alert("Voluntario actualizado correctamente..");
				window.location.href="../#voluntarios";
			</script>
		<?php
		}else{
		?>
			<script type="text/javascript">
				alert("No se ha podido registrar el voluntario, por favor vuelve a intentarlo.");
				window.location.href="../#voluntarios";
			</script>
		<?php
		}

	}

	private function Upload($Id,$Tmp1,$Nom1,$Tmp2,$Nom2){

	$Nom1 = $Id.".jpg";

	$Nom2 = $Id.".jpg";

	if(!empty($Tmp1)){

		copy($Tmp1, $this->route.$Nom1);

		$query1 = $this->con->prepare("UPDATE voluntarios SET Foto='$Nom1' WHERE Id='$Id'");
		$query1->execute();
	}

	if(!empty($Tmp2)){
		
		copy($Tmp2, $this->route2.$Nom2);

		$query2 = $this->con->prepare("UPDATE voluntarios SET Foto2='$Nom2' WHERE Id='$Id'");
		$query2->execute();	
	}

	}

	public function Delete($Id){

		$query = $this->con->prepare("DELETE FROM voluntarios WHERE Id='$Id'");
		$query->execute();

		unlink($this->route.$Id.".jpg");
		unlink($this->route2.$Id.".jpg");
	}

}

?>