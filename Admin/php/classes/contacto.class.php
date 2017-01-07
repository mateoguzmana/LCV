<?php 

include "conexion.php";

class Contacto extends Conexion{

	public $con;

	public function __construct(){

		$this->con = $this->Conectar();

	}


	public function Listar(){

		$query = $this->con->prepare("SELECT * FROM contacto");
		$query->execute();

		return $query;

	}

	public function Validar($T1,$T2,$S1,$Email){

	$T1    	= filter_var($T1, FILTER_SANITIZE_STRING);
	$T2    	= filter_var($T2, FILTER_SANITIZE_STRING);
	$S1 	= filter_var($S1, FILTER_SANITIZE_STRING);
	$Email 	= filter_var($Email, FILTER_VALIDATE_EMAIL);

	$this->Actualizar($T1,$T2,$S1,$Email);

	}

	public function Actualizar($T1,$T2,$S1,$Email){

		$query = $this->con->prepare("UPDATE contacto SET T1='$T1', T2='$T2', S1='$S1', Email='$Email'");

		if($query->execute()){
		?>
		<script type="text/javascript">
			alert("Información actualizada correctamente.");
			window.location.href="../#cont_contacto";
		</script>
		<?php
		}else{
		?>
		<script type="text/javascript">
			alert("No se ha podido actualizar la información, por favor vuelve a intentarlo.");
			window.location.href="../#cont_contacto";
		</script>
		<?php
		}

	}

}

?>