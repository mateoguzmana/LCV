<?php 

include "conexion.php";

class Comparte extends Conexion{

	public $con;

	public function __construct(){

		$this->con = $this->Conectar();

	}


	public function Listar(){

		$query = $this->con->prepare("SELECT * FROM comparte");
		$query->execute();

		return $query;

	}

	public function Validar($T1,$T2,$S2,$T3,$S3){

	$T1    = filter_var($T1, FILTER_SANITIZE_STRING);
	$T2    = filter_var($T2, FILTER_SANITIZE_STRING);
	$S2    = filter_var($S2, FILTER_SANITIZE_STRING);
	$T3    = filter_var($T3, FILTER_SANITIZE_STRING);
	$S3    = filter_var($S3, FILTER_SANITIZE_STRING);
	$this->Actualizar($T1,$T2,$S2,$T3,$S3);

	}

	public function Actualizar($T1,$T2,$S2,$T3,$S3){

		$query = $this->con->prepare("UPDATE comparte SET T1='$T1', T2='$T2', S2='$S2', T3='$T3', S3='$S3'");

		if($query->execute()){
		?>
		<script type="text/javascript">
			alert("Información actualizada correctamente.");
			window.location.href="../#cont_comparte";
		</script>
		<?php
		}else{
		?>
		<script type="text/javascript">
			alert("No se ha podido actualizar la información, por favor vuelve a intentarlo.");
			window.location.href="../#cont_comparte";
		</script>
		<?php
		}

	}

}

?>