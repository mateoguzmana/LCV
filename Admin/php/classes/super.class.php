<?php 

include "conexion.php";

class Super extends Conexion{

	public $con;
	private $route = "../Photos/Super/";

	public function __construct(){

		$this->con = $this->Conectar();

	}


	public function Listar(){

		$query = $this->con->prepare("SELECT * FROM super");
		$query->execute();

		return $query;

	}

	public function Validar($T1,$T2,$S1,$Tmp){

	$T1    	= filter_var($T1, FILTER_SANITIZE_STRING);
	$T2    	= filter_var($T2, FILTER_SANITIZE_STRING);
	$S1 	= filter_var($S1, FILTER_SANITIZE_STRING);

	$this->Actualizar($T1,$T2,$S1,$Tmp);

	}

	public function Actualizar($T1,$T2,$S1,$Tmp){

		if(!empty($Tmp)){
			$this->GuardarImagen($Tmp);	
		}

		$query = $this->con->prepare("UPDATE super SET T1='$T1', T2='$T2', S1='$S1'");

		if($query->execute()){
		?>
		<script type="text/javascript">
			alert("Información actualizada correctamente.");
			window.location.href="../#super_heroe";
		</script>
		<?php
		}else{
		?>
		<script type="text/javascript">
			alert("No se ha podido actualizar la información, por favor vuelve a intentarlo.");
			window.location.href="../#super_heroe";
		</script>
		<?php
		}

	}

	private function GuardarImagen($Tmp){

			copy($Tmp, $this->route."super.jpg");

	}

}

?>